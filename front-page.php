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

        <!-- header section here -->
         <?php get_header(); ?>
        <!-- header section here -->
        
    <!-- about section area -->
    <?php get_template_part( 'template-parts/about-section', 'none' ); ?>

	</main><!-- #main -->

<?php

get_footer();
?>