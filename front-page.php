<?php
/**
 * This is template file for homepage
 * @package National_herbo
 */


?>

	<main id="primary" class="site-main">
        

        <!-- header section here -->
         <?php get_header(); ?>
       
         <?php get_template_part( 'template-parts/homebanner', 'none' ); ?>   
         <?php get_template_part( 'template-parts/promo-banner', 'none' ); ?>   
         <?php get_template_part( 'template-parts/category-section', 'none' ); ?> 
         <?php get_template_part( 'template-parts/product-section', 'none' ); ?>     
    <!-- banner section area -->
    <?php get_template_part( 'template-parts/banner-section', 'none' ); ?>
        <!-- top-banner section area -->
        <?php get_template_part( 'template-parts/top-banner', 'none' ); ?>
        <!-- top-banner section area --> 
    <!-- about section area -->
    <?php get_template_part( 'template-parts/about-section', 'none' ); ?>
    <!-- about section area -->
    
    <!-- why us section area -->
    <?php get_template_part( 'template-parts/whyus', 'none' ); ?>
    <!-- why us section area -->

    <!-- customer section area -->
    <?php get_template_part( 'template-parts/customer', 'none' ); ?>
    <!-- customer section area -->
 <!-- header section here -->
    <!-- banner section area -->
    <?php get_template_part( 'template-parts/video-section', 'none' ); ?>     
	</main><!-- #main -->

<?php

get_footer();
?>