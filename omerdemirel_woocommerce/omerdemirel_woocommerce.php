
<?php
/*
Plugin Name: OmerDemirel Woocommerce Ödeme Sayfası
Plugin URI:  https://omerdemirel.com.tr/woocommerce-sepet-sayfasini-atlayip-direkt-odeme-yapma/
Description: WooCommerce Sepet Sayfasını Atlayıp Direkt Ödeme Yapma
Version:     1.0
Author:      Ömer Faruk Demirel
Author URI:  omerdemirel.com.tr
License:     GNU
License URI: https://www.gnu.org/licenses/gpl-3.0.tr.html
*/

add_filter('add_to_cart_redirect', 'cw_redirect_add_to_cart');
function cw_redirect_add_to_cart() {
    global $woocommerce;
    $cw_redirect_url_checkout = $woocommerce->cart->get_checkout_url();
    return $cw_redirect_url_checkout;
}

add_filter( 'woocommerce_product_single_add_to_cart_text', 'cw_btntext_cart' );
add_filter( 'woocommerce_product_add_to_cart_text', 'cw_btntext_cart' );
function cw_btntext_cart() {
    return __( 'Satın Al', 'woocommerce' );
}
add_action('woocommerce_add_to_cart', 'custome_add_to_cart',10,6);
function custome_add_to_cart() {
    return false;
}