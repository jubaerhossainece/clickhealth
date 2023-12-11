<?php
header('Access-Control-Allow-Origin: *');

$contentType = $_SERVER['CONTENT_TYPE'];

// if($contentType != 'application/json'){
//   header($_SERVER['SERVER_PROTOCOL'], '500 Internal Server Error');
//   exit();
// }

//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/autoload.php';


function generateTableRows($care_recievers)
{
  $rows = '';
  foreach ($care_recievers as $key => $care_reciever) {
    $rows .= '<tr>';
    $rows .= '<td>' . $care_reciever->firstname . '</td>';
    $rows .= '<td>' . $care_reciever->lastname . '</td>';
    $rows .= '<td>' . $care_reciever->address . '</td>';
    $rows .= '<td>' . $care_reciever->age . '</td>';
    $rows .= '<td>' . $care_reciever->phone . '</td>';
    $rows .= '<td>' . $care_reciever->relationship . '</td>';
    // $rows .= '<td>'.$care_reciever->comment.'</td>';
    // if($care_reciever->care == "Yes" || $care_reciever->care == "Different CareGiver"){
    //   $rows .= '<td><ul><li>First Name: '.$care_reciever->care_giver->firstname.'</li><li>Last Name: '.$care_reciever->care_giver->lastname.'</li><li>Relationship: '.$care_reciever->care_giver->relationship.'</li><li>Tel: '.$care_reciever->care_giver->tel.'</li><li>Email: '.$care_reciever->care_giver->email.'</li></ul></td>';
    // }elseif($care_reciever->care == "Same as above"){
    //   $rows .= '<td><ul><li>First Name: '.$care_recievers[$key-1]->care_giver->firstname.'</li><li>Last Name: '.$care_recievers[$key-1]->care_giver->lastname.'</li><li>Relationship: '.$care_recievers[$key-1]->care_giver->relationship.'</li><li>Tel: '.$care_recievers[$key-1]->care_giver->tel.'</li><li>Email: '.$care_recievers[$key-1]->care_giver->email.'</li></ul></td>';
    // }else{
    //   $rows .= '<td>'.$care_reciever->care.'</td>';
    // }
    $rows .= '</tr>';
  }
  return $rows;
}

$formData = json_decode(json_encode($_POST));

if ($formData->email && $formData->firstname && $formData->lastname) {
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
  $fullName = $formData->firstname . ' ' . $formData->lastname;
  $mail->addReplyTo($formData->email, $fullName);

  //Set who the message is to be sent to
  // $mail->addAddress("proshanto@mpower-social.com", "Proshanto Kumar");
  // $mail->addAddress("rasik@clickhealth.services", "Rasik");
  $mail->addAddress("jubaer.hossain@mpower-social.com", "Jubaer");
  // $mail->addAddress("hello@clickhealth.services", "Hello");

  //Set the subject line
  $mail->Subject = 'Click Health Parents Care';

  //Replace the plain text body with one created manually
  $mail->Body = "<ul><li>First Name: <strong>" . $formData->firstname . "</strong></li><li>Last Name: <strong>" . $formData->lastname . "</strong></li><li>Email: <strong>" . $formData->email . "</strong></li><li>Tel: <strong>" . $formData->phone . "</strong></li><li>Communication: <strong>" . $formData->pref_com . "</strong></li><li>City: <strong>" . $formData->city . "</strong></li><li>State: <strong>" . $formData->state . "</strong></li><li>ZIP: <strong>" . $formData->zip . "</strong></li><li>Country: <strong>" . $formData->country . "</strong></li><li>Additional Care Overseers: <strong>" . $formData->additional_careOverseers . "</strong></li><li>Other: <strong>gjksdfh</strong></li><li>Overseer: <strong>" . $formData->overseer . "</strong></li></ul><h3>Care Recievers</h3><table border='1'><thead><tr><th>First Name</th><th>Last Name</th><th>Address</th><th>Age</th><th>Tel</th><th>Relationship</th><th>Care Giver</th></tr></thead><tbody>" . generateTableRows($formData->cr) . "</tbody></table>";

  //send the message, check for errors  
  if (!$mail->send()) {
    $returnData = ['status' => 205, 'error' => 1, 'errorMessage' => $mail->ErrorInfo];
  } else {
    $returnData = ['status' => 200, 'error' => 0];
  }
} else {
  $returnData = ['status' => 205, 'error' => 1, 'errorMessage' => "Please fill up 'First Name', 'Last name', 'Email' fields with POST method"];
}

header('Content-Type: application/json');
echo json_encode(array('data' => $formData, 'response' => $returnData));



