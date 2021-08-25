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

		wp_register_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js', false, '3.5.1', true );
		wp_register_script( 'bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js', false, '4.6.0', true );

		//wp_enqueue_script( 'vendorjs', get_template_directory_uri() . '/assets/js/vendor.min.js', array( 'jquery' ), filemtime( get_template_directory() . '/assets/js/vendor.min.js' ), true );
		wp_enqueue_script( 'customjs', get_template_directory_uri() . '/assets/js/main.min.js', array( 'jquery' ), filemtime( get_template_directory() . '/assets/js/main.min.js' ), true );
		wp_enqueue_script( array( 'jquery', 'bootstrap', 'vendorjs', 'customjs' ) );

		wp_localize_script(
			'jquery',
			'ajax_url',
			array(
				'ajaxurl' => admin_url( 'admin-ajax.php' ),
			)
		);

	}
}

add_action( 'wp_footer', 'theme_scripts' );
