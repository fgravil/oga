<?php  require 'PHPMailer/PHPMailerAutoload.php';

if(isset($_POST['submit'])){
	

	$mail = new PHPMailer;

	//$mail->SMTPDebug = 3;                               // Enable verbose debug output

	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.comcast.net';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'fgravil18@comcast.net';                 // SMTP username
	$mail->Password = 'Fg@123456';                           // SMTP password
	$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 465;                                    // TCP port to connect to

	$mail->setFrom($_POST['email'], $_POST['name']);
	$mail->addAddress('fgravil18@comcast.net', 'OGA');     // Add a recipient
	$mail->addReplyTo($_POST['email'], $_POST['name']);


	$mail->isHTML(true);                                  // Set email format to HTML

	$mail->Subject = "OGA Building Fund";
	$mail->Body    = $_POST['message'];

	if(!$mail->send()) {
	    echo 'Message could not be sent.';
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	}
} 

