<?php


	$protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,strpos( $_SERVER["SERVER_PROTOCOL"],'/'))).'://';
	$site = $protocol.$_SERVER['HTTP_HOST'];

	require_once($_SERVER['DOCUMENT_ROOT'].'/wp-config.php');

	if ( empty($_POST) || !wp_verify_nonce($_POST['name_of_nonce_field'],'name_of_my_action') )
	{
		print 'Извините, проверочные данные не соответствуют.';
		exit;
	}
	$post = htmlspecialchars(  $_GET['names']  );
	$email = htmlspecialchars( $_GET['email'] );
	$name = htmlspecialchars( $_GET['phone'] );

	$to = "sorey14@gmail.com";
	$subject = "Interest on " . $post->post_title . " by " . $email;
	$content =
		"Name: <b>{$name}<b>" .
		"Email: <b>{$email}<b>" .
		"Product: <b>{$post->post_title}<b>" .
		"Product link: <b>" . get_permalink( $post ) . "<b>";

	$headers = array(
		'Reply-To' => $name . '<' . $email . '>',
	);

	add_filter( 'wp_mail_content_type', 'set_html_content_type' );

	$status = wp_mail( $to, $subject, $content );

// Reset content-type to avoid conflicts -- http://core.trac.wordpress.org/ticket/23578
	remove_filter( 'wp_mail_content_type', 'set_html_content_type' );

	function set_html_content_type() {
		return 'text/html';
	}

// If status correct then redirect the user to the product page again
	if ( $status ){
		wp_redirect( get_home_url()  );
	} else {
		// if the status of the email is false do something
	}


?>