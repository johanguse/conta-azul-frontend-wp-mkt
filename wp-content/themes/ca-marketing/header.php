<?php
/**
 * The header
 *
 * @package WordPress
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="<?php bloginfo( 'description' ); ?>">

	<title><?php bloginfo( 'name' ); ?></title>
	<?php wp_head(); ?>

	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo ASSETS_THEME_URI; ?>/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo ASSETS_THEME_URI; ?>/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo ASSETS_THEME_URI; ?>/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo ASSETS_THEME_URI; ?>/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo ASSETS_THEME_URI; ?>/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo ASSETS_THEME_URI; ?>/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo ASSETS_THEME_URI; ?>/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo ASSETS_THEME_URI; ?>/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo ASSETS_THEME_URI; ?>/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo ASSETS_THEME_URI; ?>/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo ASSETS_THEME_URI; ?>/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo ASSETS_THEME_URI; ?>/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo ASSETS_THEME_URI; ?>/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php echo ASSETS_THEME_URI; ?>/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#2b3a1a">
	<meta name="msapplication-TileImage" content="<?php echo ASSETS_THEME_URI; ?>/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#2b3a1a">
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
