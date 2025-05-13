<?php
defined( 'ABSPATH' ) || exit;

global $product;

if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>

<div <?php wc_product_class( '', $product ); ?>>
    <div class="w-full px-4 mb-8">
        <div class="bg-white p-3 rounded-lg shadow-lg relative">
            
            <!-- Product Thumbnail -->
            <a href="<?php the_permalink(); ?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                <?php if ( has_post_thumbnail() ) : ?>
                    <img src="<?php echo get_the_post_thumbnail_url( $product->get_id(), 'full' ); ?>" alt="<?php the_title(); ?>" class="w-full object-cover mb-4 rounded-lg">
                <?php else : ?>
                    <img src="<?php echo esc_url( wc_placeholder_img_src() ); ?>" alt="<?php the_title(); ?>" class="w-full object-cover mb-4 rounded-lg">
                <?php endif; ?>
            </a>

            <!-- Product Title -->
            <a href="<?php the_permalink(); ?>" class="text-base font-normal mb-2 "><p class="line-clamp-2"> <?php the_title(); ?></p></a>

            <!-- Product Price -->
            <div class="flex items-center mb-4">
                <?php if ( $price_html = $product->get_price_html() ) : ?>
                    <span class="text-lg font-bold text-gray-900"><?php echo $price_html; ?></span>
                <?php endif; ?>
            </div>

            <!-- Add to Cart Button -->
            <form class="cart" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data'>
                <?php woocommerce_quantity_input(); ?>
                <button type="submit" class="bg-primary border border-transparent hover:bg-transparent hover:border-primary text-white hover:text-primary font-semibold py-2 px-4 rounded-full w-full">
                    <?php echo esc_html( $product->add_to_cart_text() ); ?>
                </button>
            </form>
        </div>
    </div>
				</div>


