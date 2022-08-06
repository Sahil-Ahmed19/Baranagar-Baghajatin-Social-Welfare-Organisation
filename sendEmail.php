<?php
extract($_POST);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'Give your email Id';                     //SMTP username
    $mail->Password   = 'password';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($email, $name);
    $mail->addAddress('Give email Id', 'BBSWO');     //Add a recipient
    $mail->addReplyTo($email);



    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Enquiry from BBSWO website';
    $mail->Body    = $message;



if($mail->send()) {
   $autoRespond = new PHPMailer();

   $autoRespond->isSMTP();
   $autoRespond->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
   $autoRespond->SMTPAuth   = true;                                   //Enable SMTP authentication
   $autoRespond->Username   = 'Give email Id';                     //SMTP username
   $autoRespond->Password   = 'password';                               //SMTP password
   $autoRespond->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
   $autoRespond->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`


   $autoRespond->setFrom('give email id', 'BBSWO');
   $autoRespond->addAddress($email);
   $autoRespond->Subject = "BBSWO: Thank You for enquiry"; 
   $autoRespond->Body = "We have received your message. We will contact you soon";

   $autoRespond->Send(); 
}
?>
