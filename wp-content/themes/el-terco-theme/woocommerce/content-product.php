<?php 

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<div <?php wc_product_class(); ?>>
    <div class="product__content" style="display: flex;">
        <div class="product__info">
            <?php 
    
            the_title();

            woocommerce_template_loop_price();

            the_content();

            woocommerce_template_loop_add_to_cart();

            ?>
        </div>
        <div  class="product__image" style="min-width: 300px;">
            <?php woocommerce_template_loop_product_thumbnail(); ?>
        </div>
    </div>
</div>