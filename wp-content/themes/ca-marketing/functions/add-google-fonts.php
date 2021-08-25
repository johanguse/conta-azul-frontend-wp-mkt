<?php
/**
 * Fonts
 *
 * @package WordPress
 */

/**
 * Add google fonts
 */
function wpb_add_google_fonts() {
	wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap', false, true );
}

add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );
