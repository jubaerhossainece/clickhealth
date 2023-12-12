<?php 
//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/autoload.php';

header('Access-Control-Allow-Origin: *');

$contentType = $_SERVER['CONTENT_TYPE'];

$postData = json_decode(json_encode($_POST));

// Validate and sanitize user inputs
$email = filter_var($postData->email, FILTER_VALIDATE_EMAIL);
$fullname = htmlspecialchars($postData->fullname);
$message = htmlspecialchars($postData->message);

echo json_encode(array('email' => $email,'fname'=> $fullname,'message'=> $message));

if ($email && $fullname && $message) {
	$mail = new PHPMailer();

	//Tell PHPMailer to use SMTP
	$mail->isSMTP();

	$mail->SMTPDebug = SMTP::DEBUG_OFF;

	//Set the hostname of the mail server
	$mail->Host = 'smtp.gmail.com';
  
	$mail->Port = 587;

	//Set the encryption mechanism to use - STARTTLS or SMTPS
	$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

	//Whether to use SMTP authentication
	$mail->SMTPAuth = true;

  // set this for unicode input
	$mail->CharSet = 'UTF-8';
	$mail->Encoding = 'base64';
	
	//Username to use for SMTP authentication - use full email address for gmail
	$mail->Username = 'clickseniorcare@gmail.com';

	//Password to use for SMTP authentication
	$mail->Password = 'ebatgljwydwgiqdu';

	//Set who the message is to be sent from
	$mail->setFrom('clickseniorcare@gmail.com', 'Click Health');

	//Set an alternative reply-to address
	$mail->addReplyTo($email, $fullname);

	//Set who the message is to be sent to
	$mail->addAddress("hello@clickhealth.services", "Hello");
	// $mail->addAddress("jubaer.hossain@mpower-social.com", "Hello");

  //Set the subject line
	if ($_POST['page'] == 'price') {
		$mail->Subject = 'Click Health Pricing Query';
	} else {
		$mail->Subject = 'Click Health Contact Info';
	}

	$senderInfo = "Name of Sender: " . $fullname . ", Email of Sender: " . $email . "\n";
	$mail->Body = $senderInfo . "\n" . $message;

	// /send the message, check for errors
  if (!$mail->send()) {
    $returnData = ['status' => 205, 'error' => 1, 'errorMessage' => $mail->ErrorInfo];
  } else {
		header('Location: ./../success.html');
    $returnData = ['status' => 200, 'error' => 0];
  }

} else {
  $returnData = ['status' => 205, 'error' => 1, 'errorMessage' => "Please fill up 'First Name', 'Last name', 'Email' fields"];
}

header('Content-Type: application/json');
echo json_encode($returnData);