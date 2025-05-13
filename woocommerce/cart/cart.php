<div class="container mx-auto py-6">
    <h1 class="text-3xl font-bold mb-4"><?php esc_html_e( 'Your Cart', 'woocommerce' ); ?></h1>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Cart Products Section -->
        <div class="col-span-2 rounded-lg shadow-lg p-3 lg:p-6 border border-gray-100">
            
            <form action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
                <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents">
                    <thead>
                        <tr>
                            <th class="product-name"><?php esc_html_e( 'Product', 'woocommerce' ); ?></th>
                            <th class="product-price"><?php esc_html_e( 'Price', 'woocommerce' ); ?></th>
                            <th class="product-quantity"><?php esc_html_e( 'Quantity', 'woocommerce' ); ?></th>
                            <th class="product-subtotal"><?php esc_html_e( 'Subtotal', 'woocommerce' ); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                                <?php
                                do_action( 'woocommerce_before_cart_contents' );

                                foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
                                    $_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
                                    $product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

                                    if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
                                        $product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
                                        ?>
                                        <tr class="woocommerce-cart-form__cart-item">
                                            <td class="product-name">
                                                <?php
                                                if ( ! $product_permalink ) {
                                                    echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;' );
                                                } else {
                                                    echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) );
                                                }

                                                echo wc_get_formatted_cart_item_data( $cart_item ); // Product meta data
                                                ?>
                                            </td>
                                            <td class="product-quantity">
                                                <?php
                                                if ( $_product->is_sold_individually() ) {
                                                    $product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
                                                } else {
                                                    $product_quantity = woocommerce_quantity_input(
                                                        array(
                                                            'input_name'  => "cart[{$cart_item_key}][qty]",
                                                            'input_value' => $cart_item['quantity'],
                                                            'max_value'   => $_product->get_max_purchase_quantity(),
                                                            'min_value'   => '0',
                                                        ),
                                                        $_product,
                                                        false
                                                    );
                                                }

                                                echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item );
                                                ?>
                                            </td>
                                            <td class="product-subtotal">
                                                <?php
                                                echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key );
                                                ?>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                }

                                do_action( 'woocommerce_after_cart_contents' );
                                ?>
                            </tbody>
                </table>

                <div class="actions">
                    <?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>

                    <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded-sm block text-center" name="update_cart" value="<?php esc_attr_e( 'Update cart', 'woocommerce' ); ?>">
                        <?php esc_html_e( 'Update cart', 'woocommerce' ); ?>
                    </button>

                    <?php do_action( 'woocommerce_cart_actions' ); ?>
                </div>
            </form>
        </div>

        <!-- Cart Summary Section -->
        <div class="bg-white p-3 lg:p-6 rounded-lg shadow-lg border-red-100">
            <h2 class="text-2xl font-bold mb-4">Cart Summary</h2>
            <div class="mb-4">
                <?php wc_cart_totals_subtotal_html(); ?>
            </div>
            <a href="<?php echo esc_url( wc_get_checkout_url() ); ?>" class="bg-primary text-white px-4 py-2 rounded-sm block text-center max-w-60 hover:bg-red-800 hover:text-white visited:text-white">Proceed to Checkout</a>
        </div>
    </div>
</div>
