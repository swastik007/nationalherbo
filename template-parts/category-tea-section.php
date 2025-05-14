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
            'terms'    => 'tea', // Ensure the slug is correct
        ),
    ),
));

if ($tea_products->have_posts()) : ?>
    <section class="product-carousel-section py-5">
        <div class="container">
            <div class="section-header text-center mb-4">
                <h2 class="section-title">Tea Collection</h2>
                <p class="section-subtitle">Discover our finest selection of teas</p>
            </div>
            <div class="owl-carousel owl-theme">
                <?php while ($tea_products->have_posts()) : $tea_products->the_post();
                    global $product;
                    ?>
                    <div class="item">
                        <div class="product-card text-center p-3">
                            <a href="<?php the_permalink(); ?>" class="text-decoration-none">
                                <?php if (has_post_thumbnail()) : ?>
                                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" class="product-image mb-3" alt="<?php the_title_attribute(); ?>">
                                <?php else : ?>
                                    <img src="https://via.placeholder.com/300x200?text=No+Image" class="product-image mb-3" alt="No image">
                                <?php endif; ?>
                            </a>
                            <div class="product-info-box shadow-sm p-3 rounded bg-white">
                                <h4 class="product-title mb-1"><?php the_title(); ?></h4>
                                <p class="product-price"><?php echo $product->get_price_html(); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>

    <script>
        jQuery(document).ready(function($) {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 20,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                nav: true,
                dots: false,
                navText: [
                    '<span class="custom-prev-arrow">&#10094;</span>', // ❮
                    '<span class="custom-next-arrow">&#10095;</span>'  // ❯
                ],
                responsive: {
                    0: { items: 1 },
                    576: { items: 2 },
                    768: { items: 3 },
                    992: { items: 4 },
                    1200: { items: 5 }
                }
            });
        });
    </script>

    <?php wp_reset_postdata(); ?>
<?php endif; ?>
