<?php


/**
	 * Sanitize filenames.
	 *
	 * @param string $filename Name of the file to sanitize
	 * @uses remove_accents() Converts all accent characters to ASCII characters
	 *
	 * @since Clean WordPress 1.2.0
	 */
	add_filter('sanitize_file_name', '_cw_sanitize_filename', 10);
	function _cw_sanitize_filename($filename)
	{
	    //Invalid characters
	    $invalid = array(
	        'Ã€'=>'A', 'Ã'=>'A', 'Ã‚'=>'A', 'Ãƒ'=>'A', 'Ä€'=>'A', 'Ä‚'=>'A', 'È¦'=>'A', 'Ã„'=>'A', 'áº¢'=>'A', 'Ã…'=>'A', 'Ç'=>'A', 'È€'=>'A', 'È‚'=>'A', 'Ä„'=>'A', 'áº '=>'A', 'á¸€'=>'A', 'áº¦'=>'A', 'áº¤'=>'A', 'áºª'=>'A', 'áº¨'=>'A', 'áº°'=>'A', 'áº®'=>'A', 'áº´'=>'A', 'áº²'=>'A', 'Ç '=>'A', 'Çž'=>'A', 'Çº'=>'A', 'áº¬'=>'A', 'áº¶'=>'A',
	        'Ã†'=>'AE', 'Ç¼'=>'AE', 'Ç¢'=>'AE',
	        'á¸‚'=>'B', 'Æ'=>'B', 'á¸„'=>'B', 'á¸†'=>'B', 'Æ‚'=>'B', 'Æ„'=>'B', 'Ãž'=>'B',
	        'Äˆ'=>'C', 'ÄŠ'=>'C', 'ÄŒ'=>'C', 'Æ‡'=>'C', 'Ã‡'=>'C', 'á¸ˆ'=>'C',
	        'á¸Š'=>'D', 'ÆŠ'=>'D', 'á¸Œ'=>'D', 'á¸Ž'=>'D', 'á¸'=>'D', 'á¸’'=>'D', 'ÄŽ'=>'D',
	        'Ä'=>'Dj', 'Æ‰'=>'Dj',
	        'Ãˆ'=>'E', 'Ã‰'=>'E', 'ÃŠ'=>'E', 'áº¼'=>'E', 'Ä’'=>'E', 'Ä”'=>'E', 'Ä–'=>'E', 'Ã‹'=>'E', 'áºº'=>'E', 'Äš'=>'E', 'È„'=>'E', 'È†'=>'E', 'áº¸'=>'E', 'È¨'=>'E', 'Ä˜'=>'E', 'á¸˜'=>'E', 'á¸š'=>'E', 'á»€'=>'E', 'áº¾'=>'E', 'á»„'=>'E', 'á»‚'=>'E', 'á¸”'=>'E', 'á¸–'=>'E', 'á»†'=>'E', 'á¸œ'=>'E', 'ÆŽ'=>'E', 'Æ'=>'E',
	        'á¸ž'=>'F', 'Æ‘'=>'F',
	        'Ç´'=>'G', 'Äœ'=>'G', 'á¸ '=>'G', 'Äž'=>'G', 'Ä '=>'G', 'Ç¦'=>'G', 'Æ“'=>'G', 'Ä¢'=>'G', 'Ç¤'=>'G',
	        'Ä¤'=>'H', 'á¸¦'=>'H', 'Èž'=>'H', 'Ç¶'=>'H', 'á¸¤'=>'H', 'á¸¨'=>'H', 'á¸ª'=>'H', 'Ä¦'=>'H',
	        'ÃŒ'=>'I', 'Ã'=>'I', 'ÃŽ'=>'I', 'Ä¨'=>'I', 'Äª'=>'I', 'Ä¬'=>'I', 'Ä°'=>'I', 'Ã'=>'I', 'á»ˆ'=>'I', 'Ç'=>'I', 'á»Š'=>'I', 'Ä®'=>'I', 'Èˆ'=>'I', 'ÈŠ'=>'I', 'á¸¬'=>'I', 'Æ—'=>'I', 'á¸®'=>'I',
	        'Ä²'=>'IJ',
	        'Ä´'=>'J',
	        'á¸°'=>'K', 'Ç¨'=>'K', 'á¸´'=>'K', 'Æ˜'=>'K', 'á¸²'=>'K', 'Ä¶'=>'K', 'Ä¹'=>'L', 'á¸º'=>'L', 'á¸¶'=>'L', 'Ä»'=>'L', 'á¸¼'=>'L', 'Ä½'=>'L', 'Ä¿'=>'L', 'Å'=>'L', 'á¸¸'=>'L',
	        'á¸¾'=>'M', 'á¹€'=>'M', 'á¹‚'=>'M', 'Æœ'=>'M', 'Ã‘'=>'N', 'Ç¸'=>'N', 'Åƒ'=>'N', 'Ã‘'=>'N', 'á¹„'=>'N', 'Å‡'=>'N', 'ÅŠ'=>'N', 'Æ'=>'N', 'á¹†'=>'N', 'Å…'=>'N', 'á¹Š'=>'N', 'á¹ˆ'=>'N', 'È '=>'N',
	        'Ã’'=>'O', 'Ã“'=>'O', 'Ã”'=>'O', 'Ã•'=>'O', 'ÅŒ'=>'O', 'ÅŽ'=>'O', 'È®'=>'O', 'Ã–'=>'O', 'á»Ž'=>'O', 'Å'=>'O', 'Ç‘'=>'O', 'ÈŒ'=>'O', 'ÈŽ'=>'O', 'Æ '=>'O', 'Çª'=>'O', 'á»Œ'=>'O', 'ÆŸ'=>'O', 'Ã˜'=>'O', 'á»’'=>'O', 'á»'=>'O', 'á»–'=>'O', 'á»”'=>'O', 'È°'=>'O', 'Èª'=>'O', 'È¬'=>'O', 'á¹Œ'=>'O', 'á¹'=>'O', 'á¹’'=>'O', 'á»œ'=>'O', 'á»š'=>'O', 'á» '=>'O', 'á»ž'=>'O', 'á»¢'=>'O', 'Ç¬'=>'O', 'á»˜'=>'O', 'Ç¾'=>'O', 'Æ†'=>'O', 'Å’'=>'OE',
	        'á¹”'=>'P', 'á¹–'=>'P', 'Æ¤'=>'P',
	        'Å”'=>'R', 'á¹˜'=>'R', 'Å˜'=>'R',   'È'=>'R', 'È’'=>'R', 'á¹š'=>'R', 'Å–'=>'R', 'á¹ž'=>'R', 'á¹œ'=>'R', 'Æ¦'=>'R',
	        'Åš'=>'S', 'Åœ'=>'S', 'á¹ '=>'S', 'Å '=>'S', 'á¹¢'=>'S', 'È˜'=>'S', 'Åž'=>'S', 'á¹¤'=>'S', 'á¹¦'=>'S', 'á¹¨'=>'S',
	        'á¹ª'=>'T', 'Å¤'=>'T', 'Æ¬'=>'T', 'Æ®'=>'T', 'á¹¬'=>'T', 'Èš'=>'T', 'Å¢'=>'T', 'á¹°'=>'T', 'á¹®'=>'T', 'Å¦'=>'T',
	        'Ã™'=>'U', 'Ãš'=>'U', 'Ã›'=>'U', 'Å¨'=>'U', 'Åª'=>'U', 'Å¬'=>'U', 'Ãœ'=>'U', 'á»¦'=>'U', 'Å®'=>'U', 'Å°'=>'U', 'Ç“'=>'U', 'È”'=>'U', 'È–'=>'U', 'Æ¯'=>'U', 'á»¤'=>'U', 'á¹²'=>'U', 'Å²'=>'U', 'á¹¶'=>'U', 'á¹´'=>'U',   'á¹¸'=>'U', 'á¹º'=>'U', 'Ç›'=>'U', 'Ç—'=>'U', 'Ç•'=>'U', 'Ç™'=>'U', 'á»ª'=>'U',     'á»¨'=>'U', 'á»®'=>'U', 'á»¬'=>'U', 'á»°'=>'U',
	        'á¹¼'=>'V', 'á¹¾'=>'V', 'Æ²'=>'V',
	        'áº€'=>'W', 'áº‚'=>'W', 'Å´'=>'W', 'áº†'=>'W', 'áº„'=>'W', 'áºˆ'=>'W',
	        'áºŠ'=>'X', 'áºŒ'=>'X',
	        'á»²'=>'Y', 'Ã'=>'Y', 'Å¶'=>'Y', 'á»¸'=>'Y', 'È²'=>'Y', 'áºŽ'=>'Y', 'Å¸'=>'Y', 'á»¶'=>'Y', 'Æ³'=>'Y', 'á»´'=>'Y',
	        'Å¹'=>'Z', 'áº'=>'Z', 'Å»'=>'Z', 'Å½'=>'Z', 'È¤'=>'Z', 'áº’'=>'Z', 'áº”'=>'Z', 'Æµ'=>'Z',
	        'Ã '=>'a', 'Ã¡'=>'a', 'Ã¢'=>'a', 'Ã£'=>'a', 'Ä'=>'a', 'Äƒ'=>'a', 'È§'=>'a', 'Ã¤'=>'a', 'áº£'=>'a', 'Ã¥'=>'a', 'ÇŽ'=>'a', 'È'=>'a', 'Ä…'=>'a', 'áº¡'=>'a', 'á¸'=>'a', 'áºš'=>'a', 'áº§'=>'a', 'áº¥'=>'a', 'áº«'=>'a', 'áº©'=>'a', 'áº±'=>'a', 'áº¯'=>'a', 'áºµ'=>'a', 'áº³'=>'a', 'Ç¡'=>'a', 'ÇŸ'=>'a', 'Ç»'=>'a', 'áº­'=>'a', 'áº·'=>'a',
	        'Ã¦'=>'ae', 'Ç½'=>'ae', 'Ç£'=>'ae',
	        'á¸ƒ'=>'b', 'É“'=>'b', 'á¸…'=>'b', 'á¸‡'=>'b', 'Æ€'=>'b', 'Æƒ'=>'b', 'Æ…'=>'b', 'Ã¾'=>'b',
	        'Ä‡'=>'c', 'Ä‰'=>'c', 'Ä‹'=>'c', 'Ä'=>'c', 'Æˆ'=>'c', 'Ã§'=>'c', 'á¸‰'=>'c',
	        'á¸‹'=>'d', 'É—'=>'d', 'á¸'=>'d', 'á¸'=>'d', 'á¸‘'=>'d', 'á¸“'=>'d', 'Ä'=>'d', 'Ä‘'=>'d', 'ÆŒ'=>'d', 'È¡'=>'d',
	        'Ä‘'=>'dj',
	        'Ã¨'=>'e', 'Ã©'=>'e', 'Ãª'=>'e', 'áº½'=>'e', 'Ä“'=>'e', 'Ä•'=>'e', 'Ä—'=>'e', 'Ã«'=>'e', 'áº»'=>'e', 'Ä›'=>'e', 'È…'=>'e', 'È‡'=>'e', 'áº¹'=>'e', 'È©'=>'e', 'Ä™'=>'e', 'á¸™'=>'e', 'á¸›'=>'e', 'á»'=>'e', 'áº¿'=>'e',             'á»…'=>'e', 'á»ƒ'=>'e', 'á¸•'=>'e', 'á¸—'=>'e', 'á»‡'=>'e', 'á¸'=>'e', 'Ç'=>'e', 'É›'=>'e',
	        'á¸Ÿ'=>'f', 'Æ’'=>'f',
	        'Çµ'=>'g', 'Ä'=>'g', 'á¸¡'=>'g', 'ÄŸ'=>'g', 'Ä¡'=>'g', 'Ç§'=>'g', 'É '=>'g', 'Ä£'=>'g', 'Ç¥'=>'g',
	        'Ä¥'=>'h', 'á¸£'=>'h', 'á¸§'=>'h', 'ÈŸ'=>'h', 'Æ•'=>'h', 'á¸¥'=>'h', 'á¸©'=>'h', 'á¸«'=>'h', 'áº–'=>'h', 'Ä§'=>'h',
	        'Ã¬'=>'i', 'Ã­'=>'i', 'Ã®'=>'i', 'Ä©'=>'i', 'Ä«'=>'i', 'Ä­'=>'i', 'Ä±'=>'i', 'Ã¯'=>'i', 'á»‰'=>'i', 'Ç'=>'i', 'á»‹'=>'i', 'Ä¯'=>'i', 'È‰'=>'i', 'È‹'=>'i', 'á¸­'=>'i',  'É¨'=>'i', 'á¸¯'=>'i',
	        'Ä³'=>'ij',
	        'Äµ'=>'j', 'Ç°'=>'j',
	        'á¸±'=>'k', 'Ç©'=>'k', 'á¸µ'=>'k', 'Æ™'=>'k', 'á¸³'=>'k', 'Ä·'=>'k',
	        'Äº'=>'l', 'á¸»'=>'l', 'á¸·'=>'l', 'Ä¼'=>'l', 'á¸½'=>'l', 'Ä¾'=>'l', 'Å€'=>'l', 'Å‚'=>'l', 'Æš'=>'l', 'á¸¹'=>'l', 'È´'=>'l',
	        'á¸¿'=>'m', 'á¹'=>'m', 'á¹ƒ'=>'m', 'É¯'=>'m',
	        'Ç¹'=>'n', 'Å„'=>'n', 'Ã±'=>'n', 'á¹…'=>'n', 'Åˆ'=>'n', 'Å‹'=>'n', 'É²'=>'n', 'á¹‡'=>'n', 'Å†'=>'n', 'á¹‹'=>'n', 'á¹‰'=>'n', 'Å‰'=>'n', 'Æž'=>'n', 'Èµ'=>'n',
	        'Ã²'=>'o', 'Ã³'=>'o', 'Ã´'=>'o', 'Ãµ'=>'o', 'Å'=>'o', 'Å'=>'o', 'È¯'=>'o', 'Ã¶'=>'o', 'á»'=>'o', 'Å‘'=>'o', 'Ç’'=>'o', 'È'=>'o', 'È'=>'o', 'Æ¡'=>'o', 'Ç«'=>'o', 'á»'=>'o', 'Éµ'=>'o', 'Ã¸'=>'o', 'á»“'=>'o', 'á»‘'=>'o', 'á»—'=>'o', 'á»•'=>'o', 'È±'=>'o', 'È«'=>'o', 'È­'=>'o', 'á¹'=>'o', 'á¹'=>'o', 'á¹‘'=>'o', 'á¹“'=>'o', 'á»'=>'o', 'á»›'=>'o', 'á»¡'=>'o', 'á»Ÿ'=>'o', 'á»£'=>'o', 'Ç­'=>'o', 'á»™'=>'o', 'Ç¿'=>'o', 'É”'=>'o',
	        'Å“'=>'oe',
	        'á¹•'=>'p', 'á¹—'=>'p', 'Æ¥'=>'p',
	        'Å•'=>'r', 'á¹™'=>'r', 'Å™'=>'r', 'È‘'=>'r', 'È“'=>'r', 'á¹›'=>'r', 'Å—'=>'r', 'á¹Ÿ'=>'r', 'á¹'=>'r',
	        'Å›'=>'s', 'Å'=>'s', 'á¹¡'=>'s', 'Å¡'=>'s', 'á¹£'=>'s', 'È™'=>'s', 'ÅŸ'=>'s', 'á¹¥'=>'s', 'á¹§'=>'s', 'á¹©'=>'s', 'Å¿'=>'s', 'áº›'=>'s',
	        'ÃŸ'=>'Ss',
	        'á¹«'=>'t', 'áº—'=>'t', 'Å¥'=>'t', 'Æ­'=>'t', 'Êˆ'=>'t', 'Æ«'=>'t', 'á¹­'=>'t', 'È›'=>'t', 'Å£'=>'t', 'á¹±'=>'t', 'á¹¯'=>'t', 'Å§'=>'t', 'È¶'=>'t',
	        'Ã¹'=>'u', 'Ãº'=>'u', 'Ã»'=>'u', 'Å©'=>'u', 'Å«'=>'u', 'Å­'=>'u', 'Ã¼'=>'u', 'á»§'=>'u', 'Å¯'=>'u', 'Å±'=>'u', 'Ç”'=>'u', 'È•'=>'u', 'È—'=>'u', 'Æ°'=>'u', 'á»¥'=>'u', 'á¹³'=>'u', 'Å³'=>'u', 'á¹·'=>'u', 'á¹µ'=>'u', 'á¹¹'=>'u', 'á¹»'=>'u', 'Çœ'=>'u', 'Ç˜'=>'u', 'Ç–'=>'u', 'Çš'=>'u', 'á»«'=>'u', 'á»©'=>'u', 'á»¯'=>'u', 'á»­'=>'u', 'á»±'=>'u',
	        'á¹½'=>'v', 'á¹¿'=>'v',
	        'áº'=>'w', 'áºƒ'=>'w', 'Åµ'=>'w', 'áº‡'=>'w', 'áº…'=>'w', 'áº˜'=>'w', 'áº‰'=>'w',
	        'áº‹'=>'x', 'áº'=>'x',
	        'Ã½'=>'y', 'Ã½'=>'y', 'á»³'=>'y', 'Ã½'=>'y', 'Å·'=>'y', 'È³'=>'y', 'áº'=>'y', 'Ã¿'=>'y', 'Ã¿'=>'y', 'á»·'=>'y', 'áº™'=>'y', 'Æ´'=>'y', 'á»µ'=>'y',
	        'Åº'=>'z', 'áº‘'=>'z', 'Å¼'=>'z', 'Å¾'=>'z', 'È¥'=>'z', 'áº“'=>'z', 'áº•'=>'z', 'Æ¶'=>'z',
	        'â„–'=>'No',
	        'Âº'=>'o',
	        'Âª'=>'a',
	        'â‚¬'=>'E',
	        'Â©'=>'C',
	        'â„—'=>'P',
	        'â„¢'=>'tm',
	        'â„ '=>'sm'
	    );
	    //Make the magic
	    $sanitized_filename = str_replace(array_keys($invalid), array_values($invalid), $filename);
	    $sanitized_filename = remove_accents($sanitized_filename);
	    $sanitized_filename = preg_replace('/[^a-zA-Z0-9-_\.]/', '', strtolower($sanitized_filename));
	    //Return the new name
	    return $sanitized_filename;
	}

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



/*
* Add columns to newsletter post list
*/
function add_acf_columns ( $columns ) {
  return array_merge ( $columns, array (
    'ca_name' => __ ( 'Name' ),
    'ca_email'   => __ ( 'E-mail' )
  ) );
}
add_filter ( 'manage_ca_newsletter_posts_columns', 'add_acf_columns' );

 /*
 * Add Sortable columns
 */

function my_column_register_sortable( $columns ) {
	$columns['ca_name'] = 'name';
	$columns['ca_email'] = 'email';
	return $columns;
}
add_filter('manage_edit-ca_newsletter_sortable_columns', 'my_column_register_sortable' );

/*
* Add columns to newsletter post list
*/
function ca_newsletter_custom_column ( $column, $post_id ) {
  switch ( $column ) {
    case 'ca_name':
      echo get_post_meta ( $post_id, 'ca_name', true );
      break;
    case 'ca_email':
      echo get_post_meta ( $post_id, 'ca_email', true );
      break;
  }
}
add_action ( 'manage_ca_newsletter_posts_custom_column', 'ca_newsletter_custom_column', 10, 2 );

/*
* Export to csv
*/
add_action('admin_footer', 'ca_export_newsletter');

function ca_export_newsletter() {
    $screen = get_current_screen();
    if($screen->post_type !="ca_newsletter")   // Only add to ca_newsletter post_type
        return;
    ?>
    <script type="text/javascript">
        jQuery(document).ready( function($)
        {
            $('.tablenav.top .clear, .tablenav.bottom .clear').before('<form action="#" method="POST"><input type="hidden" id="mytheme_export_csv" name="mytheme_export_csv" value="1" /><input class="button button-primary user_export_button" style="margin-top:3px;" type="submit" value="<?php esc_attr_e('Exportar todos para CSV', 'contaazul');?>" /></form>');
        });
    </script>
    <?php
}

add_action('admin_init', 'export_csv'); //you can use admin_init as well



function export_csv() {
    if (!empty($_POST['mytheme_export_csv'])) {

        $csv_output = '';


        if (current_user_can('manage_options')) {
            header('Content-Encoding: UTF-8');
            header('Content-type: text/csv; charset=UTF-8');
            header('Content-Disposition: attachment; filename="assinantes_ca_'.date('YmdH').'.csv"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
            header('Pragma: no-cache');
            echo "\xEF\xBB\xBF"; // UTF-8 BOM

            // WP_User_Query arguments
            $args = array(
                'post_type' => 'ca_newsletter',
                'posts_per_page'	=> -1,
            );

            $the_query = new WP_Query( $args );

            if( $the_query->have_posts() ):

                // Array of WP_User objects.
                while( $the_query->have_posts() ) : $the_query->the_post();

                    $quebra_linha="\n";
                    $name = get_field('ca_name');
                    $email = get_field('ca_email');

                    $csv_output = '"'.$name.'", "'.$email.'"'.$quebra_linha;

                    echo $csv_output;

                endwhile;

            wp_reset_postdata();

            endif;

            exit();
        }

    }

}

//https://wordpress.stackexchange.com/questions/57070/change-the-page-slug-in-pagination
function re_rewrite_rules() {
	global $wp_rewrite;
	$wp_rewrite->author_base        = 'autor';
	$wp_rewrite->search_base        = 'buscar';
	$wp_rewrite->comments_base      = 'comentarios';
	$wp_rewrite->pagination_base    = 'pagina';
	$wp_rewrite->flush_rules();
}
add_action('init', 're_rewrite_rules');


?>
