<?php
/**
 * Styles
 *
 * @package WordPress
 */

/**
 * Add frontend styles
 */
function theme_styles() {
	if ( ! is_admin() ) {
		wp_register_style( 'style', get_template_directory_uri() . '/assets/css/main.min.css', array(), filemtime( get_template_directory() . '/assets/css/main.min.css' ), false );
		wp_register_style( 'nprogress', 'https://unpkg.com/nprogress@0.2.0/nprogress.css', false, '2.3.4', false );
		wp_enqueue_style( array( 'style', 'nprogress' ) );
	}
}

add_action( 'wp_enqueue_scripts', 'theme_styles' );

