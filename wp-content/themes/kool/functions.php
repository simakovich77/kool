<?php

add_action( 'after_setup_theme', 'kool_setup' );

function kool_setup() {
    add_theme_support( 'post-thumbnails' );
}

function kool_get_block_part($slug, $name) {
    get_template_part('blocks' . DIRECTORY_SEPARATOR . $slug, $name);
}

if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'custom-size', 320, 240, true);
}

//Добавление корзиныыы
//* Активируем поддержку шрифта Font Awesome
add_action( 'wp_enqueue_scripts', 'enqueue_font_awesome' );
function enqueue_font_awesome() {

    wp_enqueue_style( 'font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css' );

}

/**
12
 * Помещаем иконку корзины с количеством товаров и общей стоимостью в меню навигации.
13
 *
14
 * Источник: http://wordpress.org/plugins/woocommerce-menu-bar-cart/
15
 */

add_filter('wp_nav_menu_items','sk_wcmenucart', 10, 2);

function sk_wcmenucart($menu, $args) {
    // Проверяем, установлен ли и активирован плагин WooCommerce и добавляем новый элемент в меню, назначенному основным меню навигации
    if ( !in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) || 'primary' !== $args->theme_location )
        return $menu;
    ob_start();
        global $woocommerce;
        $viewing_cart = __('View your shopping cart', 'your-theme-slug');
        $start_shopping = __('Start shopping', 'your-theme-slug');
        $cart_url = $woocommerce->cart->get_cart_url();
        $shop_page_url = get_permalink( woocommerce_get_page_id( 'shop' ) );
        $cart_contents_count = $woocommerce->cart->cart_contents_count;
        $cart_contents = sprintf(_n('%d item', '%d items', $cart_contents_count, 'your-theme-slug'), $cart_contents_count);
        $cart_total = $woocommerce->cart->get_cart_total();
        // Раскомментируйте строку ниже для того, чтобы скрыть иконку корзины в меню, когда нет добавленных товаров в корзине.
        // if ( $cart_contents_count > 0 ) {
            if ($cart_contents_count == 0) {
                $menu_item = '<li class="right"><a class="wcmenucart-contents" href="'. $shop_page_url .'" title="'. $start_shopping .'">';
            } else {
                $menu_item = '<li class="right"><a class="wcmenucart-contents" href="'. $cart_url .'" title="'. $viewing_cart .'">';
            }
            $menu_item .= '<i class="fa fa-shopping-cart"></i> ';
            $menu_item .= $cart_contents.' - '. $cart_total;
            $menu_item .= '</a></li>';
        // Раскомментируйте строку ниже для того, чтобы скрыть иконку корзины в меню, когда нет добавленных товаров в корзине.
        // }
        echo $menu_item;
    $social = ob_get_clean();
    return $menu . $social;
}





