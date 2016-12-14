<?php  

if(isset($_POST['submit'])){
	$to = "flo.rida407@gmail.com";
	$subject = "Building Fund";
	$message = "Name: {$_POST['name']}\n" . $_POST['message'];
	$headers = "From: {$_POST['email']}" . "\r\n";

	mail($to, $subject, $message, $headers);
}