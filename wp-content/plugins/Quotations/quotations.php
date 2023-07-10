<?php
/*
Plugin Name: Quotations Custom Post Type
Description: Registers a custom post type called "Quotations".
Version: 1.0
Author: Brian Aderer
*/

// Register the "quotations" custom post type
function register_quotations_post_type() {
    $labels = array(
        'name'               => 'Quotations',
        'singular_name'      => 'Quotation',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Quotation',
        'edit_item'          => 'Edit Quotation',
        'new_item'           => 'New Quotation',
        'view_item'          => 'View Quotation',
        'search_items'       => 'Search Quotations',
        'not_found'          => 'No quotations found',
        'not_found_in_trash' => 'No quotations found in trash',
        'parent_item_colon'  => 'Parent Quotation:',
        'menu_name'          => 'Quotations',
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'query_var'           => true,
        'rewrite'             => array( 'slug' => 'quotation' ),
        'capability_type'     => 'post',
        'has_archive'         => true,
        'hierarchical'        => false,
        'menu_position'       => null,
        'supports'            => array( 'author', 'title' ),
        'menu_icon'           => 'dashicons-format-quote', // Use a dashicon as the menu icon (optional)
    );

    register_post_type( 'quotations', $args );
}
add_action( 'init', 'register_quotations_post_type' );

//filter the 'save post' function for quotations, and edit the title programmatically so that it can be differentiated on the quotations list page

function add_custom_title( $data, $postarr ) {
    if( $data['post_type'] == 'quotations' ) {
        if(empty($data['post_title']) || $data['post_title'] == 'Auto Draft') {

            if(array_key_exists('acf', $postarr)){
                $newArray = [];
                $keys = array_keys($postarr['acf']);
                foreach ($keys as $key){
                    $newArray[get_field_object($key)['name']] = $postarr['acf'][$key];
                }
                $quote_pieces = explode(" ", $newArray['quotation']);
                $first_part = implode(" ", array_splice($quote_pieces, 0, 3));
                $author_pieces = explode(" ", $newArray['author']);
                $second_part = array_pop($author_pieces);
                $newTitle = $first_part . '... ' . $second_part;
                $newName = $second_part . '-' . implode('-', (explode(' ' ,$first_part)));

            }
            if( isset( $newTitle ) ){
                $data['post_title'] = $newTitle;
                $data['post_name'] = $newName;
            }

        }
    }
    return $data;
}
add_filter( 'wp_insert_post_data', 'add_custom_title', 10, 2 );