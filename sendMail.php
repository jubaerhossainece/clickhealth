<?php
//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/autoload.php';

// Validate and sanitize user inputs
$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$fullname = htmlspecialchars($_POST['fullname']);
$message = htmlspecialchars($_POST['message']);

if ($email && $fullname && $message) {
	//Create a new PHPMailer instance
	$mail = new PHPMailer();

	//Tell PHPMailer to use SMTP
	$mail->isSMTP();

	//Enable SMTP debugging
//SMTP::DEBUG_OFF = off (for production use)
//SMTP::DEBUG_CLIENT = client messages
//SMTP::DEBUG_SERVER = client and server messages
	$mail->SMTPDebug = SMTP::DEBUG_OFF;

	//Set the hostname of the mail server
	$mail->Host = 'smtp.gmail.com';
	//Use `$mail->Host = gethostbyname('smtp.gmail.com');`
//if your network does not support SMTP over IPv6,
//though this may cause issues with TLS

	//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
	$mail->Port = 587;

	//Set the encryption mechanism to use - STARTTLS or SMTPS
	$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

	//Whether to use SMTP authentication
	$mail->SMTPAuth = true;

	//Username to use for SMTP authentication - use full email address for gmail
	$mail->Username = 'clickseniorcare@gmail.com';

	//Password to use for SMTP authentication
	$mail->Password = 'ebatgljwydwgiqdu';

	//Set who the message is to be sent from
	$mail->setFrom('clickseniorcare@gmail.com', 'Click Health');

	//Set an alternative reply-to address
	$mail->addReplyTo($_POST['email'], $_POST['fullname']);

	//Set who the message is to be sent to
	$mail->addAddress("rasik@clickhealth.services", "Rasik");
	$mail->addAddress("hello@clickhealth.services", "Hello");
	//Set the subject line
	if ($_POST['page'] == 'price') {
		$mail->Subject = 'Click Health Pricing Query';
	} else {
		$mail->Subject = 'Click Health Contact Info';
	}

	//Replace the plain text body with one created manually
	$senderInfo = "Name of Sender: " . $_POST['fullname'] . ", Email of Sender: " . $_POST['email'] . "\n";
	$mail->Body = $senderInfo . "\n" . $_POST['message'];


	//send the message, check for errors
	if (!$mail->send()) {
		echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
		header('Location: ./success.html');
	}

} else {
	echo 'Please provide valid information';
}