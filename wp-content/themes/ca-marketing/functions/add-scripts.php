<?php
/**
 * Scripts
 *
 * @package WordPress
 */

/**
 * Add frontend scripts
 */
function theme_scripts() {
	if ( ! is_admin() ) {
		wp_deregister_script( 'jquery' ); // Unregister WordPress built-in jquery.

		wp_register_script('jquery-3.3.1', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js', false, '3.3.1', true);
		wp_enqueue_script('jquery-3.3.1');
		wp_register_script('nprogress-3.3.1', 'https://unpkg.com/nprogress@0.2.0/nprogress.js', false, '3.3.1', true);
		wp_enqueue_script('nprogress-3.3.1');

		//wp_enqueue_script( 'vendorjs', get_template_directory_uri() . '/assets/js/vendor.min.js', array( 'jquery' ), filemtime( get_template_directory() . '/assets/js/vendor.min.js' ), true );
		wp_enqueue_script( 'customjs', get_template_directory_uri() . '/assets/js/main.min.js');

		wp_localize_script( 'jquery-3.3.1', 'ajax_url', array(
			'ajaxurl'       => admin_url( 'admin-ajax.php' )
		));

	}
}

add_action( 'wp_footer', 'theme_scripts' );
