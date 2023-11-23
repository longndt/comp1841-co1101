<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer();
try {
//Sender
$mail->SMTPDebug = 2;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'longndt@fpt.edu.vn';
$mail->Password = 'xxxxxxxxxxxxxxxxxx';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
//Recipient
$mail->addAddress('longndt@fpt.edu.vn');
//Content
$mail->isHTML(true);
$mail->Subject = $title;
$mail->Body = $content;
//Send mail
$mail->send();
//redirect to success page
header('Location: success.php');
} catch (Exception $e) {
echo "Message could not be sent. Mailer Error: { $mail->ErrorInfo}";
}