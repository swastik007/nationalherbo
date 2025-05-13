<?php
/**
 * This is template file for homepage
 * @package National_herbo
 */

get_header();
?>

	<main id="primary" class="site-main">
        <?php get_template_part( 'template-parts/homebanner', 'none' ); ?>   
        <?php get_template_part( 'template-parts/category-section', 'none' ); ?> 
        <?php get_template_part( 'template-parts/product-section', 'none' ); ?>     
    <!-- banner section area -->
    <?php get_template_part( 'template-parts/video-section', 'none' ); ?>     
    <!-- banner section area -->
    <?php get_template_part( 'template-parts/banner-section', 'none' ); ?>
    <!-- about section area -->
    <?php get_template_part( 'template-parts/about-section', 'none' ); ?>

	</main><!-- #main -->

<?php

get_footer();