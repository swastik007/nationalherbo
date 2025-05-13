<?php
// Query products from the 'tea' category
$tea_products = new WP_Query(array(
    'post_type'      => 'product',
    'posts_per_page' => 10,
    'post_status'    => 'publish',
    'tax_query'      => array(
        array(
            'taxonomy' => 'product_cat',
            'field'    => 'slug',
            'terms'    => 'tea', // Make sure the slug is correct
        ),
    ),
));

if ($tea_products->have_posts()) : ?>
    <div class="container my-5">
        <h3 class="mb-4 text-center">Tea Collection</h3>
        <div class="owl-carousel owl-theme">
            <?php while ($tea_products->have_posts()) : $tea_products->the_post();
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
