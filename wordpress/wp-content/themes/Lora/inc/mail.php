<?php
require_once( '../../../../wp-load.php' );
if( isset($_GET['submit'] ) ) {

    $name = trim($_GET['name']);
    $email = trim($_GET['email']);

    if( function_exists( 'stripslashes' ) ) {
        $message = stripslashes( trim( $_GET['message'] ) );
    } else {
        $message = trim( $_GET['message'] );
    }
		
    $to = get_option( 'admin_email' );
    $subject = 'Contact Form Submission from ' . $name;
    $body = "Name: $name \n\nEmail: $email \n\nComments: $message";
    $headers = 'From: My Site <' . $to . '>' . "\r\n" . 'Reply-To: ' . $email;

    mail( $to, $subject, $body, $headers );
}
