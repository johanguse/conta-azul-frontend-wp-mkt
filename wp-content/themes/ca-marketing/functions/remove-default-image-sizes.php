<?php
/**
 * Cleanup
 *
 * @package WordPress
 */

/**
 * Remove the default image sizes.
 */
function remove_default_image_sizes( $sizes ) {

	/* Default WordPress */
	unset( $sizes['thumbnail'] );
	unset( $sizes['medium'] );
	unset( $sizes['medium_large'] );
	unset( $sizes['large'] );

	/* With WooCommerce */
	unset( $sizes['shop_thumbnail'] );
	unset( $sizes['shop_catalog'] );
	unset( $sizes['shop_single'] );

	return $sizes;
}

add_filter( 'intermediate_image_sizes_advanced', 'remove_default_image_sizes' );
