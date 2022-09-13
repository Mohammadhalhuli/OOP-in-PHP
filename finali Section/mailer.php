<?php 
//link server-->https://mailtrap.io/inboxes/1871048/messages/2969755660/analysis 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'mailer/Exception.php';
require 'mailer/SMTP.php';
require 'mailer/PHPMailer.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;//Enable verbose debug output
    $mail = new PHPMailer();
    $mail->isSMTP();//Send using SMTP
    $mail->Host = 'smtp.mailtrap.io';//Set the SMTP server to send through
    $mail->SMTPAuth = true;//Enable SMTP authentication
    $mail->Port = 2525;//TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->Username = '36a6b36d8984e4';//SMTP username
    $mail->Password = 'fabd8074a37800';//SMTP password
    //Recipients
    $mail->setFrom('hlhwlymhmd@gmail.com', 'Mailer');
    $mail->addAddress('hlhwly@gmail.com', 'Joe User');     //Add a recipient
    //Content
    //$mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Hi';
    $mail->Body    = 'hiiii';
   // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
 ?>