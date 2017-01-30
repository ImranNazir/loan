<?php
/**
 * ThemeTim WooCommerce Hook
 */


/**
 * Themetim Product Columns
 */
add_filter('loop_shop_columns', 'loop_columns');
if (!function_exists('loop_columns')) {
    function loop_columns() {
        return 4; // 3 products per row
    }
}

/**
 * Themetim Ajax Cart
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );
function woocommerce_header_add_to_cart_fragment( $fragments ) {
    ob_start();
    ?>
    <a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><i class="fa fa-shopping-basket"></i> <?php echo WC()->cart->get_cart_total(); ?> <span class="badge"><?php echo sprintf (_n( '%d', '%d', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?></span></a>
    <?php

    $fragments['a.cart-contents'] = ob_get_clean();

    return $fragments;
}

/**
 * Breadcrumbs
 * Remove hook
 * Modify Breadcrumbs
 */
add_action( 'init', 'jk_remove_wc_breadcrumbs' );
function jk_remove_wc_breadcrumbs() {
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
}

/**
 * Shop Page
 *
 * Number of products displayed per page
 */
add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 9;' ), 20 );
