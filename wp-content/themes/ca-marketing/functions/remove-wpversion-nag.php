<?php
/**
 * Cleanup
 *
 * @package WordPress
 */

/**
 * No WP version nag in admin
 */
if ( ! current_user_can( 'edit_users' ) ) {
	add_action(
		'init',
		function () {
			remove_action( 'init', 'wp_version_check' );
		},
		2
	);

	add_filter(
		'pre_option_update_core',
		function ( $a ) {
			return null;
		}
	);
}

