<?php
/*
Template Name: Quotation Archive
*/
get_header()?>

<div id="controls-carousel" class="relative w-full" data-carousel="static">
    <!-- Carousel wrapper -->
        <div class="relative h-[80vh] overflow-hidden rounded-lg my-10 mx-[10%] bg-secondary drop-shadow-xl">
            <?php
                $indicator_offset = 0;
                if ( have_posts() ) : while ( have_posts() ) : the_post();
                $id = get_the_ID();
                $active = get_field('active', $id);
                ?>

                <?php
                if( !$active ) : $indicator_offset++; else: ?>
                    <div class="hidden duration-700 ease-in-out flex flex-row items-center" data-carousel-item>
                        <?php get_template_part('template-parts/quotation');?>
                    </div>
                            <!-- /.hidden duration-700 ease-in-out -->
            <?php
            endif;
            endwhile; ?>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">

                <?php
                $counter = 0;
                while($wp_query->post_count - $indicator_offset > $counter ): ?>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide <?= $counter ?>" data-carousel-slide-to="<?= $counter ?>"></button>
                <?php
                    $counter++;
                    endwhile; ?>
            </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
</div>
<?php    else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<?php get_footer()?>
