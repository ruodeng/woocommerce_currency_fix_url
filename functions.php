<?php

/***
Put this into the theme functions.php
***/

add_action( 'woocommerce_init', 'fixed_url_currency' );
function fixed_url_currency(  ) {
    global $woocommerce; 
    $currency = isset( $_GET['currency'] ) ? esc_attr( $_GET['currency']) : get_option('woocommerce_currency');
    $currency = strtoupper( $currency );
    $woocommerce->session->set('client_currency', $currency);
}
