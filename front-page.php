<?php
/**
 * This is template file for homepage
 * @package National_herbo
 */


?>

	<main id="primary" class="site-main">
        <!-- top-banner section area -->
        <?php get_template_part( 'template-parts/top-banner', 'none' ); ?>
        <!-- top-banner section area --> 
    <?php get_header(); ?>
       
    <!-- banner section area -->
    <?php get_template_part( 'template-parts/homebanner', 'none' ); ?>
    <!-- banner section area -->

    <!-- about section area -->
    <?php get_template_part( 'template-parts/about-section', 'none' ); ?>
    <!-- about section area -->
    
    <!-- why us section area -->
    <?php get_template_part( 'template-parts/whyus', 'none' ); ?>
    <!-- why us section area -->

    <!-- customer section area -->
    <?php get_template_part( 'template-parts/customer', 'none' ); ?>
    <!-- customer section area -->

    <!-- products display section area -->
    <?php get_template_part( 'template-parts/category-section', 'none' ); ?> 
    <?php get_template_part( 'template-parts/product-section', 'none' ); ?>     
    <?php get_template_part( 'template-parts/category-tea-section', 'none' ); ?> 
    <!-- products display section area --> 

	</main><!-- #main -->

<?php

get_footer();
?>