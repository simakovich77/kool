<?php
/**
 * Dynimic Styles
 * 
 * @package Mugu
*/

function mugu_dynamic_styles(){
    
    $color_scheme = get_theme_mod( 'mugu_theme_color', '#0fb4d2' );
    
    echo "<style type='text/css' media='all'>"; ?>
        a{
            color: <?php echo mugu_sanitize_hex_color( $color_scheme ); ?>;
        }
        
        a:hover,
        a:focus{
        	color: <?php echo mugu_sanitize_hex_color( $color_scheme ); ?>;
        	text-decoration: underline;
        }
        
        .featured-post .post .text-holder a:hover,
        .featured-post .post .text-holder a:focus,
        .post-section .post .entry-title a:hover,
        .post-section .post .entry-title a:focus,
        .search .post-section .page .entry-title a:hover,
        .search .post-section .page .entry-title a:focus,
        .post-section .post .entry-meta a:hover,
        .post-section .post .entry-meta a:focus,
        .widget.widget_viral_magazine_recent_post ul li .text-holder .entry-title a:hover,
        .widget.widget_viral_magazine_recent_post ul li .text-holder .entry-title a:focus,
        .widget.widget_viral_magazine_popular_post ul li .text-holder .entry-title a:hover,
        .widget.widget_viral_magazine_popular_post ul li .text-holder .entry-title a:focus,
        .widget.widget_viral_magazine_recent_post ul li .text-holder .posted-on a:hover,
        .widget.widget_viral_magazine_recent_post ul li .text-holder .posted-on a:focus,
        .widget.widget_viral_magazine_popular_post ul li .text-holder .posted-on a:hover,
        .widget.widget_viral_magazine_popular_post ul li .text-holder .posted-on a:focus,
        .widget.widget_mugu_recent_post ul li .text-holder .entry-title a:hover,
        .widget.widget_mugu_recent_post ul li .text-holder .entry-title a:focus,
        .widget.widget_mugu_popular_post ul li .text-holder .entry-title a:hover,
        .widget.widget_mugu_popular_post ul li .text-holder .entry-title a:focus,
        .widget.widget_mugu_recent_post ul li .text-holder .posted-on a:hover,
        .widget.widget_mugu_recent_post ul li .text-holder .posted-on a:focus,
        .widget.widget_mugu_popular_post ul li .text-holder .posted-on a:hover,
        .widget.widget_mugu_popular_post ul li .text-holder .posted-on a:focus,
        .widget ul li a:hover,
        .widget ul li a:focus,
        .comments-area .comment-body .comment-metadata a:hover,
        .comments-area .comment-body .comment-metadata a:focus{
        	color: <?php echo mugu_sanitize_hex_color( $color_scheme ); ?>
        }

        button,
        input[type="button"],
        input[type="reset"],
        input[type="submit"],
        .main-navigation ul ul :hover > a,
        .main-navigation ul ul .focus > a,
        .main-navigation ul ul li a:hover,
        .main-navigation ul ul  li a:focus,
        .main-navigation ul ul .current-menu-item > a,
        .main-navigation ul ul .current_page_item > a{
            background: <?php echo mugu_sanitize_hex_color( $color_scheme ); ?>
        }
    <?php echo "</style>"; 
}

/**
 * Function for sanitizing Hex color 
 */
function mugu_sanitize_hex_color( $color ){
	if ( '' === $color )
		return '';

    // 3 or 6 hex digits, or the empty string.
	if ( preg_match('|^#([A-Fa-f0-9]{3}){1,2}$|', $color ) )
		return $color;
}