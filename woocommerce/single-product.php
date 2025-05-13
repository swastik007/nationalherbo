<?php
defined('ABSPATH') || exit;
get_header('shop');

if (have_posts()) :
    while (have_posts()) : the_post();

        global $product;
        if (!$product || !is_a($product, 'WC_Product')) {
            $product = wc_get_product(get_the_ID());
        }

        $product_id = get_the_ID();
        $title = get_the_title();
        $price_html = $product->get_price_html();
        $description = $product->get_description();
        $short_description = apply_filters('woocommerce_short_description', $post->post_excerpt);
        $sku = $product->get_sku();
        $stock_status = $product->get_stock_status();
        $image_id = $product->get_image_id();
        $image_url = wp_get_attachment_image_url($image_id, 'large');
        $gallery_image_ids = $product->get_gallery_image_ids();
        $categories = wc_get_product_category_list($product_id);
        $tags = wc_get_product_tag_list($product_id);
        ?>

        <div class="container py-5">
            <div class="row g-5">
                <!-- Product Images -->
                <div class="col-md-6">
                    <?php if ($image_url) : ?>
                        <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($title); ?>" class="img-fluid rounded mb-3" />
                    <?php endif; ?>
                    <?php if (!empty($gallery_image_ids)) : ?>
                        <div class="d-flex flex-wrap gap-2">
                            <?php foreach ($gallery_image_ids as $gallery_id) : ?>
                                <img src="<?php echo esc_url(wp_get_attachment_image_url($gallery_id, 'thumbnail')); ?>" class="img-thumbnail" style="width: 80px;" />
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Product Info -->
                <div class="col-md-6">
                    <h1 class="h3 mb-3"><?php echo esc_html($title); ?></h1>
                    <div class="fs-4 text-success mb-3"><?php echo $price_html; ?></div>
                    <?php if (!empty($short_description)) : ?>
                        <div class="mb-4">
                            <?php echo $short_description; ?>
                        </div>
                    <?php endif; ?>

                    <!-- Add to Cart -->
                    <form class="cart" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="add-to-cart" value="<?php echo esc_attr($product_id); ?>" />
                        <?php if ($product->is_type('simple') && $product->is_in_stock()) : ?>
                            <div class="input-group mb-3" style="width: 150px;">
                                <input type="number" name="quantity" value="1" min="1" class="form-control" />
                                <button type="submit" class="btn btn-primary">Add to Cart</button>
                            </div>
                        <?php elseif (!$product->is_in_stock()) : ?>
                            <p class="text-danger">Out of stock</p>
                        <?php else : ?>
                            <p class="text-warning">This product type is not yet supported here.</p>
                        <?php endif; ?>
                    </form>

                    <!-- Meta Info -->
                    <ul class="list-unstyled small text-muted mt-4">
                        <li><strong>SKU:</strong> <?php echo $sku ?: 'N/A'; ?></li>
                        <li><strong>Stock Status:</strong> <?php echo ucfirst($stock_status); ?></li>
                        <li><strong>Categories:</strong> <?php echo $categories; ?></li>
                        <li><strong>Tags:</strong> <?php echo $tags; ?></li>
                    </ul>
                </div>
            </div>

            <!-- Description -->
            <?php if ($description) : ?>
                <div class="row mt-5">
                    <div class="col-12">
                        <h4>Description</h4>
                        <div><?php echo $description; ?></div>
                    </div>
                </div>
            <?php endif; ?>
        </div>

    <?php
    endwhile;
endif;

get_footer('shop');
?>
