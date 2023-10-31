<?php 
header('Access-Control-Allow-Origin: *');

$contentType = $_SERVER['CONTENT_TYPE'];

if($contentType != 'application/json'){
  header($_SERVER['SERVER_PROTOCOL'], '500 Internal Server Error');
  exit();
}

//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/autoload.php';

# Get JSON as a string
$json_str = file_get_contents('php://input');
# Get as an object
$postData = json_decode($json_str);

if($postData->contact && $postData->fullname && $postData->message){
  //Create a new PHPMailer instance
  $mail = new PHPMailer();

  //Tell PHPMailer to use SMTP
  $mail->isSMTP();
  $mail->SMTPDebug = SMTP::DEBUG_OFF;
  $mail->Host = 'smtp.gmail.com';
  $mail->Port = 587;
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
  $mail->SMTPAuth = true;
  $mail->IsHTML(true);
  //Username to use for SMTP authentication - use full email address for gmail
  $mail->Username = 'clickseniorcare@gmail.com';

  //Password to use for SMTP authentication
  $mail->Password = 'ebatgljwydwgiqdu';

  //Set who the message is to be sent from
  $mail->setFrom('clickseniorcare@gmail.com', 'Click Health');

  //Set an alternative reply-to address
  $mail->addReplyTo("no-reply@clickhealth.services", $postData->fullname);

  //Set who the message is to be sent to
  $mail->addAddress("rasik@clickhealth.services", "Rasik");
  $mail->addAddress("hello@clickhealth.services", "Hello");

  //Set the subject line
  $mail->Subject = 'Click Health Contact Info';

  //Replace the plain text body with one created manually
  $mail->Body = "<ul><li>Name: <strong>".$postData->fullname."</strong></li><li>Contact: <strong>".$postData->contact."</strong></li></ul><p>".$postData->message."</p>";

  //send the message, check for errors
  if (!$mail->send()) {
     $returnData = ['status' => 205, 'error' => 1, 'errorMessage' => $mail->ErrorInfo];
  } else {
     $returnData = ['status' => 200, 'error' => 0];
  }
}else{
  $returnData = ['status' => 205, 'error' => 1, 'errorMessage' => "Please fill up 'Full Name', 'Contact', 'Message' fields with POST method"];
}

header('Content-Type: application/json');
echo json_encode($returnData);



