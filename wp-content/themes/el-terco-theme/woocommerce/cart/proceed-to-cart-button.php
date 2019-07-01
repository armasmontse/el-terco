<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<a href="<?php echo esc_url( wc_get_page_permalink( 'cart' ) );?>" class="cart-button button alt wc-forward">
    <?php _e( 'View bag', 'woocommerce' ) ?>
</a>