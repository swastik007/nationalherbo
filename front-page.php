<?php
/**
 * This is template file for homepage
 * @package National_herbo
 */


?>

	<main id="primary" class="site-main">
    <!-- banner section area -->
    <?php get_template_part( 'template-parts/top-banner', 'none' ); ?>
    <!-- banner section area -->

    <?php get_header(); ?>

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
    <?php get_template_part( 'template-parts/products', 'none' ); ?>
    <!-- products display section area -->

	</main><!-- #main -->

<?php

get_footer();
?>