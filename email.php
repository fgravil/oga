<?php  

if(isset($_POST['submit'])){
	$to = "flo.rida407@gmail.com";
	$subject = "Building Fund";
	$message = "Name: {$_POST['inputName']}\n" . $_POST['inputMessage'];
	$headers = "From: {$_POST['inputEmail']}" . "\r\n";

	mail($to, $subject, $message, $headers);
}