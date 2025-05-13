<?php
/**
 * The Template for displaying product archives.
 *
 * @package WooCommerce\Templates
 * @version 8.6.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' ); 

// Open the main content wrapper
echo '<div class="woocommerce-main-content">';

// Display breadcrumb
echo '<div class="woocommerce-breadcrumb container max-w-screen-lg mx-auto flex justify-center text-3xl text-center my-8 pb-5 border-b border-gray-100">';
woocommerce_breadcrumb();
echo '</div>';

// Check if there are products in the archive
if ( woocommerce_product_loop() ) {

    // Start the product loop using the default WooCommerce query
    echo '<div class="container max-w-screen-xl mx-auto mt-5">';

    echo '<div class="products grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-3">';

    if ( wc_get_loop_prop( 'total' ) ) {
        while ( have_posts() ) {
            the_post();

            // Get the current product object
            $product = wc_get_product( get_the_ID() );

            // Wrap each product in a div
            echo '<div class="w-full mb-8">';
            echo '<div class="bg-white p-3 rounded-lg shadow-lg relative">';
            
            // Display product image
            if ( has_post_thumbnail() ) {
                echo '<img src="' . get_the_post_thumbnail_url( get_the_ID(), 'full' ) . '" alt="' . get_the_title() . '" class="w-full object-cover mb-4 rounded-lg">';
            } else {
                echo '<img src="' . esc_url( get_template_directory_uri() . '/assets/images/placeholder.jpg' ) . '" alt="Placeholder Image" class="w-full object-cover mb-4 rounded-lg">';
            }

            // Sale Badge
            if ( $product->is_on_sale() ) {
                echo '<span class="absolute top-3 right-3 bg-green-700 text-white text-xs font-bold p-2 rounded-full tracking-wide">Sale</span>';
            }

            // Product Title
            echo '<a href="' . get_permalink() . '" class="text-base font-normal mb-2">';
            echo '<p class="line-clamp-2 leading-tight text-gray-700">' . get_the_title() . '</p>';
            echo '</a>';

            // Product Price
            echo '<div class="flex items-center my-2">';
            if ( $regular_price = $product->get_regular_price() ) {
                echo '<span class="text-lg font-semibold text-gray-800">' . wc_price( $product->get_price() ) . '</span>';
                echo '<span class="text-sm line-through ml-2 text-primary">' . wc_price( $regular_price ) . '</span>';
            } else {
                echo '<span class="text-lg font-bold text-gray-900">' . wc_price( $product->get_price() ) . '</span>';
            }
            echo '</div>';

            // Add to Cart Button
            echo '<div class="flex justify-between items-center">';
            woocommerce_template_loop_add_to_cart();
            echo '</div>';

            echo '</div>'; // Close product card
            echo '</div>';
        }
    }

    echo '</div>'; // Close product grid

    echo '</div>'; // Close container

    // Display pagination
    echo '<div class="woocommerce-pagination">';
    woocommerce_pagination();
    echo '</div>';

} else {
    // If no products found
    echo '<p>No products found in this archive.</p>';
}

// Close the main content wrapper
echo '</div>'; // .woocommerce-main-content

get_footer( 'shop' );
?>
