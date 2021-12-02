<?php
	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$message = trim($_POST['message']);

	$emailTo = 'info@markus-lachat.com'; //Put your own email address here
	if (empty($subject)) {
	    $subject = 'Contact request';
	}
	$body = "Name: $name \n\nEmail: $email \n\nMessage:\n$message";
	$headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/plain;charset=UTF-8"  . "\r\n";
    $headers .= "Content-Transfer-Encoding: quoted-printable"  . "\r\n";
	$headers .= 'From: '.$email . "\r\n";
    $headers .= 'Reply-To: ' .$email . "\r\n";

    if($name !== '' && $message !== '' ) {
	    mail($emailTo, $subject, $body, implode("\r\n",$headers));
	    $emailSent = true;
	    echo ('SEND');
	}
?>
