<?php get_header() ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php $id = get_the_ID(); ?>
    <?php
    print_r( get_fields( $id ) );
    foreach ( get_fields( $id ) as $key => $field ) {
        ?>
            <pre>
                <?php echo( $key. ' : ' . $field ) ?>
            </pre>
            <?php
    }
    ?>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
