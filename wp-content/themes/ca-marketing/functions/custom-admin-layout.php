<?php
// Remove your dashboard widgets
function remove_dashboard_meta() {
	remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_primary', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
	remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
}
add_action( 'admin_init', 'remove_dashboard_meta' );

// Remove help tab filter
function remove_help_tabs() {
	$screen = get_current_screen();
	$screen->remove_help_tabs();
}
add_action('admin_head', 'remove_help_tabs');

// Remove Screen filter
//add_filter('screen_options_show_screen', '__return_false');

// Remove the dashboard welcome panel
remove_action( 'welcome_panel', 'wp_welcome_panel' );

// Customize footer admin wordpress
function my_footer_admin() {
	echo '© '.date('Y').' <a href="http://www.contaazul.com.br/">Conta Azul</a>';
}
add_filter( 'admin_footer_text', 'my_footer_admin' );

// Customize admin logo
function my_admin_logo() {
	echo '
		<style type="text/css">
			#wpadminbar #wp-admin-bar-wp-logo {
				display: none;
			}
			#wpadminbar #wp-admin-bar-wp-logo.hover > .ab-item .ab-icon {
				background-position: 0 0;
			}
		</style>
	';
}
add_action( 'wp_before_admin_bar_render', 'my_admin_logo' );

// Customize logo login
function my_login_logo() {
	echo '
			<style type="text/css">
					#login h1 a, .login h1 a {
							background-image: url("https://res.cloudinary.com/dvcywi3uf/image/upload/v1629750570/outros/ca_logo-login.jpg");
							background-size: 100%;
					width: 200px;
					height: 180px;
					}
			</style>
		';
}
add_action( 'login_enqueue_scripts', 'my_login_logo' );

// Customize url logo login
function my_login_logo_url() {
		return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

// Customize title logo login
function my_login_logo_url_title() {
		return 'Conta Azul - Marketing Teste';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

// no WP version nag in admin
if (!current_user_can('edit_users')) {
	add_action('init', create_function('$a', "remove_action('init', 'wp_version_check');"), 2);
	add_filter('pre_option_update_core', create_function('$a', "return null;"));
}
