<?php
// Disable Gutenberg

add_filter('use_block_editor_for_post', '__return_false', 10);

if (version_compare($GLOBALS['wp_version'], '5.0-beta', '>')) {
	// WP > 5 beta
	add_filter('use_block_editor_for_post_type', '__return_false', 10);
} else {
	// WP < 5 beta
	add_filter('gutenberg_can_edit_post_type', '__return_false', 10);
}

//Disable gutenberg style in Front
function wps_deregister_styles() {
	wp_dequeue_style( 'wp-block-library' );
}
add_action( 'wp_print_styles', 'wps_deregister_styles', 100 );
