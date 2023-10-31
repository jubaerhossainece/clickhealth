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


function generateTableRows($care_recievers){
  $rows = '';
   foreach ($care_recievers as $key => $value) {
      $rows .= '<tr>';
      $rows .= '<td>'.$value->firstname.'</td>';
      $rows .= '<td>'.$value->lastname.'</td>';
      $rows .= '<td>'.$value->address.'</td>';
      $rows .= '<td>'.$value->age.'</td>';
      $rows .= '<td>'.$value->tel.'</td>';
      $rows .= '<td>'.$value->relationship.'</td>';
      $rows .= '<td>'.$value->comment.'</td>';
      if($value->care == "Yes" || $value->care == "Different CareGiver"){
        $rows .= '<td><ul><li>First Name: '.$value->care_giver->firstname.'</li><li>Last Name: '.$value->care_giver->lastname.'</li><li>Relationship: '.$value->care_giver->relationship.'</li><li>Tel: '.$value->care_giver->tel.'</li><li>Email: '.$value->care_giver->email.'</li></ul></td>';
      }elseif($value->care == "Same as above"){
        $rows .= '<td><ul><li>First Name: '.$care_recievers[$key-1]->care_giver->firstname.'</li><li>Last Name: '.$care_recievers[$key-1]->care_giver->lastname.'</li><li>Relationship: '.$care_recievers[$key-1]->care_giver->relationship.'</li><li>Tel: '.$care_recievers[$key-1]->care_giver->tel.'</li><li>Email: '.$care_recievers[$key-1]->care_giver->email.'</li></ul></td>';
      }else{
        $rows .= '<td>'.$value->care.'</td>';
      }
      $rows .= '</tr>';
  }
  return $rows;
}


# Get JSON as a string
$json_str = file_get_contents('php://input');
# Get as an object
$postData = json_decode($json_str);

if($postData->email && $postData->firstname && $postData->lastname){
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
  $fullName = $postData->firstname.' '.$postData->lastname;
  $mail->addReplyTo($postData->email, $fullName);

  //Set who the message is to be sent to
  // $mail->addAddress("proshanto@mpower-social.com", "Proshanto Kumar");
  $mail->addAddress("rasik@clickhealth.services", "Rasik");
  $mail->addAddress("hello@clickhealth.services", "Hello");

  //Set the subject line
  $mail->Subject = 'Click Health Parents Care';

  //Replace the plain text body with one created manually
  $mail->Body = "<ul><li>First Name: <strong>".$postData->firstname."</strong></li><li>Last Name: <strong>".$postData->lastname."</strong></li><li>Email: <strong>".$postData->email."</strong></li><li>Tel: <strong>".$postData->tel."</strong></li><li>Communication: <strong>".$postData->communication."</strong></li><li>City: <strong>".$postData->city."</strong></li><li>State: <strong>".$postData->state."</strong></li><li>ZIP: <strong>".$postData->zip."</strong></li><li>Country: <strong>".$postData->country."</strong></li><li>Additional Care Overseers: <strong>".$postData->additional_careOverseers."</strong></li><li>Other: <strong>".$postData->other."</strong></li><li>Overseer: <strong>".$postData->overseer."</strong></li></ul><h3>Care Recievers</h3><table border='1'><thead><tr><th>First Name</th><th>Last Name</th><th>Address</th><th>Age</th><th>Tel</th><th>Relationship</th><th>Comment</th><th>Care Giver</th></tr></thead><tbody>".generateTableRows($postData->care_recievers)."</tbody></table>";

  //send the message, check for errors  
  if (!$mail->send()) {
     $returnData = ['status' => 205, 'error' => 1, 'errorMessage' => $mail->ErrorInfo];
  } else {
     $returnData = ['status' => 200, 'error' => 0];
  }
}else{
  $returnData = ['status' => 205, 'error' => 1, 'errorMessage' => "Please fill up 'First Name', 'Last name', 'Email' fields with POST method"];
}

header('Content-Type: application/json');
echo json_encode($returnData);



