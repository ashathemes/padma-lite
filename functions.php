<?php
/**
 * Padma Lite functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Padma Lite
 */

if ( ! defined( 'PADMA_LITE_VERSION' ) ) {
	$padma_lite_theme = wp_get_theme();
	define( 'PADMA_LITE_VERSION', $padma_lite_theme->get( 'Version' ) );
}


/**
 * Enqueue scripts and styles.
 */
function padma_lite_scripts() {
    wp_enqueue_style( 'padma-lite-parent-style', get_template_directory_uri() . '/style.css',array('bootstrap','slicknav','padma-default-block','padma-style'), '', 'all');
    wp_enqueue_style( 'padma-lite-main-style',get_stylesheet_directory_uri() . '/assets/css/main-style.css',array(), PADMA_LITE_VERSION, 'all');
}
add_action( 'wp_enqueue_scripts', 'padma_lite_scripts' );

/**
 * Custom excerpt length.
 */
function padma_lite_excerpt_length( $length ) {
    return 24;
}
add_filter( 'excerpt_length', 'padma_lite_excerpt_length', 999 );

/**
 * Custom excerpt More.
 */
function padma_lite_excerpt_more( $more ) {
    return '.';
}
add_filter( 'excerpt_more', 'padma_lite_excerpt_more' );