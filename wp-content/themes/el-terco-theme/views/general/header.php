<?php 

global $contacto;

$social = [
    'youtube',
    'facebook',
    'twitter',
    'instagram',
];

$languages = [];

if (function_exists('icl_get_languages')){
    $languages = icl_get_languages('skip_missing=0');
}

?>
<header class="header <?php if (is_page('eres-mayor-de-edad')): ?>header__hidden<?php endif ?>">
    <div class="header__container">
        <div class="header__social">
            <ul class="flex-row-between">
                <?php foreach($social as $network): ?>
                    <?php if($contacto->social_net[$network]['url']): ?>
                        <li><a href="<?php echo $contacto->social_net[$network]['url']; ?>" target="_blank"><i class="fab fa-<?php echo $network; ?>"></i></a> </li>
                    <?php endif; ?>
                <?php endforeach; ?>
                <li><a href="mailto:<?php echo $contacto->social_net['mail']; ?>" target="_blank"><i class="fa fa-envelope"></i></a> </li>
            </ul>
        </div>

        <?php if ($languages): ?>
            <div class="header__lenguaje <?php if (is_page('home')): ?>header__visible<?php endif ?>">
                <ul class="flex-row-center">
                    <?php foreach($languages as $language): ?>
                        <li class="" style="<?php echo $language['active'] ? 'text-decoration: underline;' : ''; ?>"><a href="<?php echo $language['url']; ?>"><?php echo substr($language['native_name'], 0, 3); ?></a> </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <a href="<?php echo BLOGURL ?>" class="header__logo <?php if (!is_page('home')): ?>header__visible<?php endif ?>">
            <img class="header__logo-image" src="<?php echo THEMEURL ?>/images/general/logo.svg" alt="">
        </a>

        <?php if (!is_post_type_archive('product')): ?>
            <a class="header__link <?php if (is_page('home')): ?>pink<?php endif ?><?php if (is_page('carrito') || is_checkout()): ?>black<?php endif ?>" href="<?php echo specialPagePermalink('tienda'); ?>"><?php _e('Buy', TRANSDOMAIN); ?></a>
        <?php else: ?>
            <?php if (function_exists('wc')): ?>
            <a id="bolsa" class="header__link" href="#"><?php _e('Bag'); ?> (<?php echo wc()->cart->get_cart_contents_count(); ?>)</a>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</header>

<?php if (is_post_type_archive('product')): ?>
    <!-- Cart sidebar -->
    <?php $cart = wc()->cart; ?>
    <div class="sidebar">
        <?php if(!$cart->is_empty()): ?>

            <?php do_action( 'woocommerce_before_cart_table' ); ?>
            
            <?php do_action( 'woocommerce_before_cart_contents' ); ?>

            <?php
            foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
                $_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
                $product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

                if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
                    ?>
                    <div class="woocommerce-cart-form__cart-item <?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">

                        <div class="sidebar__container">
                                
                            <div class="product-thumbnail">
                                <?php
                                    $thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );
                                    echo wp_kses_post( $thumbnail );
                                ?>
                            </div>

                            <div class="product__content-sidebar">
                            
                                <div class="product-name" data-title="<?php esc_attr_e( 'Product', 'woocommerce' ); ?>">
                                    <?php
                                        echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;' );
                                    
                                        do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key );

                                        // Meta data.
                                        echo wc_get_formatted_cart_item_data( $cart_item ); // PHPCS: XSS ok.

                                        // Backorder notification.
                                        if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
                                            echo wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>' ) );
                                        }
                                    ?>
                                </div>

                                <div class="product-price" data-title="<?php esc_attr_e( 'Price', 'woocommerce' ); ?>">
                                    <?php
                                        echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
                                    ?>
                                </div>

                                <div class="product-quantity" data-title="<?php esc_attr_e( 'Quantity', 'woocommerce' ); ?>">
                                    <?php
                                        echo $cart_item['quantity']; // PHPCS: XSS ok.
                                    ?>
                                </div>

                                <div class="product-subtotal" data-title="<?php esc_attr_e( 'Total', 'woocommerce' ); ?>">
                                    <?php
                                        echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
                                    ?>
                                </div>


                            </div>

                        </div>

                        
                    </div>
                    <?php
                }
            }
            ?>

            <?php do_action( 'woocommerce_cart_contents' ); ?>

            <?php do_action( 'woocommerce_after_cart_contents' ); ?>

            <?php do_action( 'woocommerce_after_cart_table' ); ?>

            <?php wc_get_template( 'cart/cart-totals.php' ); ?>

            <div class="wc-proceed-to-cart">
                <?php wc_get_template( 'cart/proceed-to-cart-button.php' ); ?>
            </div>

        <?php else: ?>
            <div class="product__empty">
                <p>No hay productos en el carrito.</p>
            </div>
        <?php endif; ?>
    </div>
<?php endif; ?>