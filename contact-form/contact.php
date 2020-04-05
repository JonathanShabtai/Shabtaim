<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];

	$email_from = 'Shabtai Website';
	$email_subject = 'New message from a user';
	$email_body = "Message: $message.\n"

	$to = "jonyj3@gmail.com";
	$headers = "From: $email_from /r/n";

	mail($to, $email_subject, $email_body, $headers);

	header("location: contact.html")
?>