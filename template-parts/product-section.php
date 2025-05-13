<?php
// WP_Query to get 10 recent WooCommerce products
$args = array(
    'post_type'      => 'product',
    'posts_per_page' => 10,
    'post_status'    => 'publish',
);

$recent_products = new WP_Query($args);

if ($recent_products->have_posts()) : ?>
    <div class="container my-5">
        <h3 class="mb-4 text-center">Latest Products Section</h3>
        <div class="owl-carousel owl-theme">
            <?php while ($recent_products->have_posts()) : $recent_products->the_post();
                global $product;
                ?>
                <div class="item">
                    <div class="card h-100 shadow-sm">
                        <a href="<?php the_permalink(); ?>" class="text-decoration-none">
                            <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" class="card-img-top" alt="<?php the_title_attribute(); ?>">
                            <?php else : ?>
                                <img src="https://via.placeholder.com/300x300?text=No+Image" class="card-img-top" alt="No image">
                            <?php endif; ?>
                            <div class="card-body text-center">
                                <h6 class="card-title mb-1"><?php the_title(); ?></h6>
                                <strong class="text-primary"><?php echo $product->get_price_html(); ?></strong>
                            </div>
                        </a>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
    <?php wp_reset_postdata(); ?>
<?php endif; ?>
