<?php
header('Access-Control-Allow-Origin: *');

$contentType = $_SERVER['CONTENT_TYPE'];

//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/autoload.php';

function generateTableRows($care_recievers)
{
  $rows = '';
  foreach ($care_recievers as $key => $care_reciever) {
    $rows .= '<tr>';
    $rows .= '<td>' . htmlspecialchars($care_reciever->firstname) . '</td>';
    $rows .= '<td>' . htmlspecialchars($care_reciever->lastname) . '</td>';
    $rows .= '<td>' . htmlspecialchars($care_reciever->address) . '</td>';
    $rows .= '<td>' . htmlspecialchars($care_reciever->age) . '</td>';
    $rows .= '<td>' . htmlspecialchars($care_reciever->phone) . '</td>';
    $rows .= '<td>' . htmlspecialchars($care_reciever->relationship) . '</td>';
    $rows .= '<td>' . htmlspecialchars($care_reciever->caregiver) . '</td>';
    $rows .= '</tr>';
  }
  return $rows;
}

$formData = json_decode(json_encode($_POST));
// sanitise form inputs
$firstname = htmlspecialchars($formData->firstname);
$lastname = htmlspecialchars($formData->lastname);
$phone = htmlspecialchars($formData->phone);
$pref_com = htmlspecialchars($formData->pref_com);
$pref_com_other = htmlspecialchars($formData->pref_com_other);
$city = htmlspecialchars($formData->city);
$state = htmlspecialchars($formData->state);
$zip = htmlspecialchars($formData->zip);
$additional_careOverseers = htmlspecialchars($formData->additional_careOverseers);
$overseer = htmlspecialchars($formData->overseer);
$country = htmlspecialchars($formData->country);
$email = filter_var($formData->email, FILTER_VALIDATE_EMAIL);

if ($email && $firstname && $lastname) {
  $mail = new PHPMailer();

  $mail->isSMTP();
  $mail->SMTPDebug = SMTP::DEBUG_OFF;
  $mail->Host = 'smtp.gmail.com';
  $mail->Port = 587;
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
  $mail->SMTPAuth = true;
  $mail->IsHTML(true);
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
  $fullName = $firstname . ' ' . $lastname;
  $mail->addReplyTo($email, $fullName);

  //Set who the message is to be sent to
  $mail->addAddress("hello@clickhealth.services", "Hello");
  // $mail->addAddress("jubaer.hossain@mpower-social.com", "Jubaer");


  //Set the subject line
  $mail->Subject = 'Click Health Parents Care';

  $communication = $pref_com == 'Other' ? $pref_com_other : $pref_com;

  //Replace the plain text body with one created manually
  $mail->Body = "<ul><li>First Name: <strong>" . $firstname . "</strong></li><li>Last Name: <strong>" . $lastname . "</strong></li><li>Email: <strong>" . $email . "</strong></li><li>Tel: <strong>" . $phone . "</strong></li><li>Communication: <strong>" . $communication . "</strong></li><li>City: <strong>" . $city . "</strong></li><li>State: <strong>" . $state . "</strong></li><li>ZIP: <strong>" . $zip . "</strong></li><li>Country: <strong>" . $country . "</strong></li><li>Additional Care Overseers: <strong>" . $additional_careOverseers . "<li>Overseer: <strong>" . $overseer . "</strong></li></ul><h3>Care Recievers</h3><table border='1'><thead><tr><th>First Name</th><th>Last Name</th><th>Address</th><th>Age</th><th>Tel</th><th>Relationship</th><th>Care Giver</th></tr></thead><tbody>" . generateTableRows($formData->cr) . "</tbody></table>";

  //send the message, check for errors  
  if (!$mail->send()) {
    $returnData = ['status' => 205, 'error' => 1, 'errorMessage' => $mail->ErrorInfo];
  } else {
    $returnData = ['status' => 200, 'error' => 0];
  }
} else {
  $returnData = ['status' => 205, 'error' => 1, 'errorMessage' => "Please fill up 'First Name', 'Last name', 'Email' fields"];
}

header('Content-Type: application/json');
echo json_encode($returnData);



