<?php
/**
 * Functions file for the theme
 *
 * @package WordPress
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// -------------------------------------------------------------------------------
// Define URL global ROOT folders
// -------------------------------------------------------------------------------

if ( ! defined( 'ASSETS_URI' ) ) {
	define( 'ASSETS_URI', get_theme_root_uri() );
}
if ( ! defined( 'ASSETS_THEME_URI' ) ) {
	define( 'ASSETS_THEME_URI', ASSETS_URI . '/' . get_stylesheet() . '/assets/img' );
}

/**
 * Little function to include partials for functions
 *
 * @param string $filename .
 */
function include_function( $filename ) {
	return require_once dirname( __FILE__ ) . '/functions/' . $filename . '.php';
}

/* phpcs:disable */
include_function( 'remove-gutenberg-editor' );
include_function( 'custom-admin-layout' );
include_function( 'custom-fields');
include_function( 'custom-post-types');
include_function( 'add-google-fonts' );
include_function( 'add-scripts' );
include_function( 'add-styles' );
include_function( 'add-sanitize-filenames' );
include_function( 'add-svg-upload-support' );
// include_function( 'remove-autoformatting' );
// include_function( 'remove-default-image-sizes' );
include_function( 'remove-head-junk' );
include_function( 'remove-wpversion-nag' );
include_function( 'ajax-save-data' );
include_function( 'edit-editor-role' );
/* phpcs:enable */
