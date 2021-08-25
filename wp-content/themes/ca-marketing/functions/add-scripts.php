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
		wp_register_script('nprogress', 'https://unpkg.com/nprogress@0.2.0/nprogress.js', false, '3.3.1', true);
		wp_enqueue_script('nprogress');
		wp_register_script('jvalidate', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js', false, '1.19.3', true);
		wp_enqueue_script('jvalidate');

		wp_enqueue_script( 'customjs', get_template_directory_uri() . '/assets/js/main.min.js');

		wp_localize_script( 'jquery-3.3.1', 'ajax_url', array(
			'ajaxurl'       => admin_url( 'admin-ajax.php' )
		));

	}
}

add_action( 'wp_footer', 'theme_scripts' );
