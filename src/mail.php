<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$mobile= $_POST['mobile'];
$subject= $_POST['subject'];
$message= $_POST['message'];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

$mail->getSentMIMEMEssage();
$mail->SMTPAuth = true;

$mail->Host = "smtp-relay.sendinblue.com";
$mail->SMTPSecure =  PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "ameliagenova@gmail.com"
$mail->Password = "CIVAFzsHZpL24GPd";

$mail->setFrom($email, $name);
$mail->addAddress("ameliagenova12@gmail.com", "Amelia");

$mail->Subject = $subject;
$mail->Body = $message;

$mail->send();

header("Location: thankyou.html");

?>