<?php 

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<div style="display: flex; min-height: calc(100vh - 70px);">
    <div class="comprar__tienda">
        <?php

        wc_print_notices();

        if ( woocommerce_product_loop() ) {

            woocommerce_product_loop_start();

            if ( wc_get_loop_prop( 'total' ) ) {
                while ( have_posts() ) {
                    the_post();

                    do_action( 'woocommerce_shop_loop' );

                    wc_get_template_part( 'content', 'product' );
                }
            }

            woocommerce_product_loop_end();

            woocommerce_pagination();

        } else {

            do_action( 'woocommerce_no_products_found' );

        }

        ?>
    </div>
    <div class="comprar__sidebar">
        
        <?php $shop = get_option( 'woocommerce_shop_page_id' ); ?>

        <img src="<?php echo get_the_post_thumbnail( $shop ); ?>" alt="">
    </div>
</div>

<?php
get_footer();