<?php
/*
Template Name: Quotation Archive
*/
get_header()?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php $id = get_the_ID();
    $fields = get_fields($id);
    ?>
    <pre>
        <?php
            print_r($fields);
            print_r(get_post_datetime()->setTimezone(new DateTimeZone('America/New_York'))->format('Y-m-d H:i:s'). '<br>');
            print_r(get_the_author());
            ?>
    </pre>
<?php endwhile; else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<?php get_footer()?>
