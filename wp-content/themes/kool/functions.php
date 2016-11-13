<?php
function my_nav_wrap() {
    // default value of 'items_wrap' is <ul id="%1$s" class="%2$s">%3$s</ul>'

    // open the <ul>, set 'menu_class' and 'menu_id' values
    $wrap  = '<ul id="%1$s" class="%2$s">';

    // get nav items as configured in /wp-admin/
    $wrap .= '%3$s';

    // the static link
    $wrap .= '<li class="my-static-link"><a href="#">My Static Link</a></li>';

    // close the <ul>
    $wrap .= '</ul>';
    // return the result
    return $wrap;

}


register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'kool' ),
    'social'  => __( 'Social Links Menu', 'kool' ),
) );