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
    add_image_size( 'custom-size', 150, 150, true);
}

