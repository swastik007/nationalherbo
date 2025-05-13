<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $category;
$thumbnail_id = get_term_meta( $category->term_id, 'thumbnail_id', true );
$thumbnail_url = wp_get_attachment_url( $thumbnail_id );
?>

<div class="w-full px-4 mb-8">
	<div class="bg-white p-3 rounded-lg shadow-lg relative">
		<!-- Category Thumbnail -->
		<a href="<?php echo esc_url( get_term_link( $category ) ); ?>" class="woocommerce-LoopCategory-link woocommerce-loop-category__link">
			<?php if ( $thumbnail_url ) : ?>
				<img src="<?php echo esc_url( $thumbnail_url ); ?>" alt="<?php echo esc_attr( $category->name ); ?>" class="w-full object-cover mb-4 rounded-lg">
			<?php else : ?>
				<img src="<?php echo esc_url( wc_placeholder_img_src() ); ?>" alt="<?php echo esc_attr( $category->name ); ?>" class="w-full object-cover mb-4 rounded-lg">
			<?php endif; ?>
		</a>

		<!-- Category Title -->
		<a href="<?php echo esc_url( get_term_link( $category ) ); ?>" class="text-base font-normal mb-2"><?php echo esc_html( $category->name ); ?></a>

		<!-- Category Description -->
		<?php if ( ! empty( $category->description ) ) : ?>
			<p class="text-sm text-gray-700"><?php echo esc_html( wp_trim_words( $category->description, 20 ) ); ?></p>
		<?php endif; ?>
	</div>
</li>
