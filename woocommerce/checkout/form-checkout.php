    <div class="container mx-auto py-6">
    <h1 class="text-3xl font-bold mb-4"><?php esc_html_e( 'Checkout', 'woocommerce' ); ?></h1>

    <form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <!-- Billing Details Section -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-bold mb-4"><?php esc_html_e( 'Billing Details', 'woocommerce' ); ?></h2>
                <?php do_action( 'woocommerce_checkout_billing' ); ?>
            </div>

            <!-- Order Summary Section -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-bold mb-4"><?php esc_html_e( 'Your Order', 'woocommerce' ); ?></h2>
                <?php do_action( 'woocommerce_checkout_order_review' ); ?>
            </div>
        </div>
    </form>
</div>
