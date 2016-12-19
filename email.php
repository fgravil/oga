<<<<<<< HEAD
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
=======
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
>>>>>>> badeacbdfa9419191b4bf8a44a555c7d8d3be35e
}