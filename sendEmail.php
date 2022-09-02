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
    // $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.hostinger.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'info@bbswo.org.in';                     //SMTP username
    $mail->Password   = 'Bengal@100';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($email, $name);
    $mail->addAddress('info@bbswo.org.in', 'BBSWO');     //Add a recipient
    $mail->addReplyTo($email);



    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Enquiry from BBSWO website';
    $mail->Body    = $message;



if($mail->send()) {
   $autoRespond = new PHPMailer();

//   $autoRespond->isSMTP();
   $autoRespond->Host       = 'smtp.hostinger.com';                     //Set the SMTP server to send through
   $autoRespond->SMTPAuth   = true;                                   //Enable SMTP authentication
   $autoRespond->Username   = 'info@bbswo.org.in';                     //SMTP username
   $autoRespond->Password   = 'Bengal@100';                               //SMTP password
   $autoRespond->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
   $autoRespond->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`


   $autoRespond->setFrom('info@bbswo.org.in', 'BBSWO');
   $autoRespond->addAddress($email);
   $autoRespond->Subject = "BBSWO: Thank You for enquiry"; 
   $autoRespond->Body = "We have received your enquiry. We will contact you soon regarding the same.";

   $autoRespond->Send(); 
}
?>
