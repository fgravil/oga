<?php  
require_once "PHPMailer/PHPMailerAutoload.php";

if(isset($_POST['submit'])){
	$mail = new PHPMailer();

	$mail->isSMTP();
	$mail->SMTPDebug = 1;
	$mail->Host = "smtp.gmail.com";
	$mail->SMTPAuth = true;
	$mail->Username = 'fgravil18@gmail.com';
	$mail->Password = 'Fg@123456';
	$mail->SMTPSecure = 'ssl';
	$mail->Port = 587;

	$mail->setFrom($_POST['email'], $_POST['name']);
	$mail->addAddress("flo.rida407@gmail.com");
	$mail->addReplyTo('fgravil18@gmail.com' , 'Information');


	$mail->Subject = "Building Fund";
	$mail->Body = $_POST['message'];

	if(!$mail->send()){
		echo "Message could not be sent. ";
		echo "Mail Error: " . $mail->ErrorInfo;
	}

	// $to = "fgravil18@gmail.com";
	// $subject = "Building Fund";
	// $message = "Name: {$_POST['name']}\n" . $_POST['message'];
	// $headers = "From: {$_POST['email']}";

	// echo $message . $headers;
	// mail($to, $subject, $message, $headers);
}