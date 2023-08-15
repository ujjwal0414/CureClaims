<?php
require('PHPMailer.php');
require('SMTP.php');
require('Exception.php');
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
$tosend=$_POST['TPA_mail'];

$tmpFilePath = $_FILES["attached_files_checked"]["tmp_name"];
$message=$_POST['doctor_note'];
if($tosend!="" && $message!="" && $tmpFilePath!=""){
 
  //$attach_files=$_FILES['files'];
  //Create an instance; passing `true` enables exceptions
  $mail = new PHPMailer(true);
  
  try {
      //Server settings
    // $mail->SMTPDebug = 2;                      //Enable verbose debug output
      $mail->isSMTP();                                            //Send using SMTP
      $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
      $mail->Username   = 'ujjuguptu@gmail.com';                     //SMTP username
      $mail->Password   = 'dliassekyknfnlfx';                               //SMTP password
      $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
      $mail->Port       =465 ;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
  
      //Recipients
      $mail->setFrom('ujjuguptu@gmail.com', 'CureClaims');
      $mail->addAddress($tosend,'TPA officials');     //Add a recipient
      // $mail->addAddress('ellen@example.com');               //Name is optional
       $mail->addReplyTo('ujjuguptu@gmail.com', 'Information');
      // $mail->addCC('cc@example.com');
      // $mail->addBCC('bcc@example.com');
  
      
      $originalFileName = $_FILES["attached_files_checked"]["name"];
      $mail->addAttachment($tmpFilePath, $originalFileName);
      //Attachments
      // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
      // $mail->addAttachment('i1.jpg');    //Optional name
  
      //Content
      $mail->isHTML(true);                                  //Set email format to HTML
      $mail->Subject = 'Please Verify Attached signed Documents';
      $mail->Body    =$message;
    //  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
  
      $mail->send();
      echo 'Your mail has been sent please wait for further replies and confirmation we will contact you soon';
  } catch (Exception $e) {
      echo "Mail could not be sent. Mailer Error try contacting the provider of this website: {$mail->ErrorInfo}";
  }
}
else{
  echo "Sorry SOme fields are missing please fill it";
}