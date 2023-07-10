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
        'supports'            => array( 'title', 'author' ),
        'menu_icon'           => 'dashicons-format-quote', // Use a dashicon as the menu icon (optional)
    );

    register_post_type( 'quotations', $args );
}
add_action( 'init', 'register_quotations_post_type' );
