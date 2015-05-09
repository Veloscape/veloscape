<?php
require_once( '../../../../wp-load.php' );

if( isset($_POST['submit'] ) ) {
	
	//Check to make sure that the name field is not empty
	if( trim( $_POST['name'] ) === '' ) {
		$name_error = 'You forgot to enter your name.';
		$error = true;
	} else {
		$name = trim( $_POST['name'] );
	}
	
	//Check to make sure sure that a valid email address is submitted
	if( trim( $_POST['email'] ) === '' )  {
		$email_error = 'You forgot to enter your email address.';
		$error = true;
	} else if ( !eregi( "^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim( $_POST['email'] ) ) ) {
		$email_error = 'You entered an invalid email address.';
		$error = true;
	} else {
		$email = trim( $_POST['email'] );
	}
	
	$subject = trim( $_POST['subject'] );

	//Check to make sure comments were entered	
	if( trim( $_POST['message'] ) === '' ) {
		$message_error = 'You forgot to enter your comments.';
		$error = true;
	} else {
		if( function_exists( 'stripslashes' ) ) {
			$message = stripslashes( trim( $_POST['message'] ) );
		} else {
			$message = trim( $_POST['message'] );
		}
	}
		
	//If there is no error, send the email
	if( !isset( $error ) ) {
		
		$to = get_option( 'admin_email' );
		$subject = 'Contact Form Submission from ' . $name;
		$body = "Name: $name \n\nEmail: $email \n\nComments: $message";
		$headers = 'From: My Site <' . $to . '>' . "\r\n" . 'Reply-To: ' . $email;
		
		mail( $to, $subject, $body, $headers );

		$sent = true;
	}
}