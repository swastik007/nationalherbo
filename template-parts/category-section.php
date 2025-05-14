<?php
$product_categories = get_terms(array(
    'taxonomy'   => 'product_cat',
    'hide_empty' => false,
    'parent'     => 0,
));

if (!empty($product_categories) && !is_wp_error($product_categories)) : ?>
    <section class="category-icons-section py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title fw-bold">Shop Popular Categories</h2>
                <p class="section-subtitle text-muted">Browse our most loved product categories</p>
            </div>
            <div class="row justify-content-center g-4">
                <?php foreach ($product_categories as $category) :
                    $thumbnail_id = get_term_meta($category->term_id, 'thumbnail_id', true);
                    $image_url = wp_get_attachment_url($thumbnail_id);
                    if (!$image_url) {
                        $image_url = 'https://via.placeholder.com/150x150?text=No+Image';
                    }
                    $category_link = get_term_link($category);
                    ?>
                    <div class="col-6 col-sm-4 col-md-2 text-center">
                        <a href="<?php echo esc_url($category_link); ?>" class="text-decoration-none text-dark category-icon-card d-block">
                            <div class="category-image-wrapper mx-auto mb-2">
                                <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($category->name); ?>">
                            </div>
                            <div class="category-title fw-semibold"><?php echo esc_html($category->name); ?></div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
