<?php
// Get all product categories (only parent categories, you can remove 'parent' => 0 if you want all)
$product_categories = get_terms(array(
    'taxonomy'   => 'product_cat',
    'hide_empty' => false,
    'parent'     => 0, // set to 0 to get only top-level categories
));

if (!empty($product_categories) && !is_wp_error($product_categories)) : ?>
    <div class="container my-5">
        <div class="row">
            <?php foreach ($product_categories as $category) :
                // Get thumbnail ID for the category
                $thumbnail_id = get_term_meta($category->term_id, 'thumbnail_id', true);
                // Get the image URL
                $image_url = wp_get_attachment_url($thumbnail_id);
                // Fallback image if no thumbnail is set
                if (!$image_url) {
                    $image_url = 'https://via.placeholder.com/300x200?text=No+Image';
                }
                // Get category link
                $category_link = get_term_link($category);
                ?>
                <div class="col-md-4 col-sm-6 mb-4">
                    <a href="<?php echo esc_url($category_link); ?>" class="text-decoration-none text-dark">
                        <div class="card h-100 shadow-sm">
                            <img src="<?php echo esc_url($image_url); ?>" class="card-img-top" alt="<?php echo esc_attr($category->name); ?>">
                            <div class="card-body text-center">
                                <h5 class="card-title"><?php echo esc_html($category->name); ?></h5>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>
