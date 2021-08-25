<?php
// Newsletter
add_action( 'wp_ajax_nopriv_ajax_newsform', 'ajax_newsletter_form' );
add_action( 'wp_ajax_ajax_newsform', 'ajax_newsletter_form' );

function ajax_newsletter_form () {

        $post = array(
            'post_title'    => ucfirst($_POST['news_name']),
            'post_status'   => 'publish',
            'post_type' 	=> 'ca_newsletter'
        );

        $thisid = wp_insert_post( $post, true );

        if ( is_wp_error( $thisid ) ) {
            // Error handling
            $response_array['status'] = 'error';
        } else {
						add_post_meta($thisid, 'ca_name', ucfirst($_POST['news_name']), true);
            add_post_meta($thisid, 'ca_email', strtolower($_POST['news_email']), true);
			$response_array['status'] = 'success';

		}

		header('Content-type: application/json');
		echo json_encode($response_array);

		wp_die();
		die();
}

?>
