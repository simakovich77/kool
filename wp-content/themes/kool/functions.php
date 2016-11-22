<?php

add_action( 'after_setup_theme', 'kool_setup' );

function kool_setup() {
    add_theme_support( 'post-thumbnails' );
}

function kool_get_block_part($slug, $name) {
    get_template_part('blocks' . DIRECTORY_SEPARATOR . $slug, $name);
}

