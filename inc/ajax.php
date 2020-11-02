<?php
/*
    AJAX FUNCTIONS
	----------------------------------
*/

add_action( 'wp_ajax_nopriv_yes_user_save_user_contact_form', 'yes_user_save_user_contact_form' );    // If The User Not Logged In
add_action( 'wp_ajax_yes_user_save_user_contact_form', 'yes_user_save_user_contact_form' );           // If The User Logged In


function yes_user_save_user_contact_form() {

	$name = wp_strip_all_tags($_POST["name"]);
	$email = wp_strip_all_tags($_POST["email"]);
	$message = wp_strip_all_tags($_POST["message"]);

	$args = array(
		'post_title' => $name,
		'post_content' => $message,
		'post_author' => 1,
		'post_status' => 'publish',
		'post_type'   => 'yes-user-contact',
		'meta_input' => array(
			'_contact_email_value_key' => $email
		)
	);

	$postID = wp_insert_post( $args );

	if ( $postID != 0 ) {

		$to = get_bloginfo('admin_email');
		$subject = 'Sunset Contact Form - ' . $name;

		$headers[] = 'From: ' . get_bloginfo('name') . ' <' . $to .'>'; // 'From: Alex <me@alecaddd.com>'
		$headers[] = 'Reply-To: '.$name.' <'.$email.'>';
		$headers[] = 'Content-Type: text/html: charset=UTF-8';

		wp_mail( $to, $subject, $message, $headers );

	}

	echo $postID;

	die();

}

