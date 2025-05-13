<?php
/**
 * The template for displaying product content in the single-product.php template
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
    echo get_the_password_form(); // WPCS: XSS ok.
    return;
}
?>
<div class="container max-w-screen-xl mx-auto">
    <div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
        <div class="grid lg:grid-cols-2 lg:gap-x-8">
            <div class="">
                <?php
                /**
                 * Hook: woocommerce_before_single_product_summary.
                 *
                 * @hooked woocommerce_show_product_sale_flash - 10
                 * @hooked woocommerce_show_product_images - 20
                 */
                do_action( 'woocommerce_before_single_product_summary' );
                ?>
            </div>
            <div class="">
                <div class="summary entry-summary ml-2">
                    <div class="pb-8 border-b border-gray-line">
                        <!-- Product Title -->
                        <h1 class="text-3xl font-bold mb-4"><?php the_title(); ?></h1>

                        <!-- Brand Info -->
                        <p class="mb-2">Brand: 
							<span class="border border-red-700 text-primary font-semibold py-2 px-5 ml-2">
								<?php
								$brand = wc_get_product_terms( $product->get_id(), 'pwb-brand', array( 'fields' => 'names' ) );
								echo !empty( $brand ) ? esc_html( $brand[0] ) : 'N/A';
								?>
							</span>
						</p>

                        <!-- Product Attributes -->
                        <div class="mb-4">
                            <?php if ( $product->has_attributes() ) : ?>
                                <div class="product-attributes">
                                    <h4 class="font-bold">Product Attributes:</h4>
                                    <?php wc_display_product_attributes( $product ); ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <!-- Product Price Section -->
                        <div class="product-price mb-4 text-2xl font-semibold">
                            <?php if ( $product->is_on_sale() ) : ?>
                                <span class="text-gray-500 line-through mr-2"><?php echo wc_price( $product->get_regular_price() ); ?></span>
                                <span class="text-red-600"><?php echo wc_price( $product->get_sale_price() ); ?></span>
                            <?php else : ?>
                                <span class="text-green-600"><?php echo wc_price( $product->get_regular_price() ); ?></span>
                            <?php endif; ?>
                        </div>

                        <!-- Product Variations -->
                        <div class="mb-4 pb-4 border-b border-gray-line">
                            <?php
                            if ( $product->is_type( 'variable' ) ) {
                                woocommerce_template_single_variation(); // Display product variations
                            }
                            ?>

                            <!-- SKU and Stock Info -->
                            <p class="mb-2">Product code: <strong><?php echo $product->get_sku(); ?></strong></p>
                            <p class="mb-2">Availability: <strong class="text-green-700"><?php echo $product->is_in_stock() ? 'In Stock' : 'Out of Stock'; ?></strong></p>
                        </div>

                        <!-- Add to Cart -->
                        <div class="mb-8">
                            <?php woocommerce_template_single_add_to_cart(); ?>
                        </div>

                        <!-- Product Description -->
                        <div class="product-description mt-8 text-gray-700">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

		<?php 
		$additional_description = trim( get_the_excerpt() ); // Fetch and trim the additional description
		if ( !empty( $additional_description ) ) : ?>
			<!-- Additional Description Section (Replacing Tabs) -->
			<div class="row mt-8">
				<div class="col">
					<div class="product-info">
						<h2 class="text-2xl font-bold mb-4">Additional Description</h2>
						<?php woocommerce_template_single_excerpt(); ?>
					</div>
				</div>
			</div>
		<?php endif; ?>

    </div> 
</div>
