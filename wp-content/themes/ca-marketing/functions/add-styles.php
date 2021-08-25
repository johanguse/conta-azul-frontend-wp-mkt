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
		wp_register_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css', false, '4.6.0', false );
		wp_register_style( 'style', get_template_directory_uri() . '/assets/css/main.min.css', array(), filemtime( get_template_directory() . '/assets/css/main.min.css' ), false );

		wp_enqueue_style( array( 'bootstrap', 'style' ) );
	}
}

add_action( 'wp_enqueue_scripts', 'theme_styles' );

