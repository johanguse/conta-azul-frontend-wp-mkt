<?php
//Registering Custom Post Type Themes
add_action( 'init', 'register_themepost', 20 );
function register_themepost() {
	//Newsletter
	register_post_type( 'ca_newsletter',
			array(
					'labels' 			=> array(
					'name' 				=> __( 'Newsletter' ),
					'singular_name' 	=> __( 'Newsletter' )
			),
					'public' 			=> true,
					'rewrite'           => false,
					'query_var'         => false,
					'publicly_queryable'=> false,
          "can_export"        => true,
					'has_archive' 		=> true,
					'supports' 			=> array( 'title' ),
					'menu_icon'   		=> 'dashicons-groups',
			)
	);
	//Destaques
	register_post_type( 'ca_highlight',
			array(
					'labels' 			=> array(
					'name' 				=> __( 'Destaques' ),
					'singular_name' 	=> __( 'Destaque' )
			),
					'public' 			=> true,
					'rewrite'           => false,
					'query_var'         => false,
					'publicly_queryable'=> false,
          "can_export"        => true,
					'has_archive' 		=> true,
					'supports' 			=> array( 'title', 'page-attributes' ),
					'menu_icon'   		=> 'dashicons-open-folder',
			)
	);
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


        if( current_user_can('editor') || current_user_can('administrator') ) {
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
