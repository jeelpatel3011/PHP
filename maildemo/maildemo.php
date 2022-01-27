<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function



$name = $_GET['txt1'];
$gender = $_GET['txt2'];
$age = $_GET['age'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'phpmailproject2022@gmail.com';                     //SMTP username
    $mail->Password   = 'phpproject';                               //SMTP password
   
    //Recipients
    $mail->setFrom('from@example.com', 'Mailer');
    $mail->addAddress('jeelp3011@gmail.com', 'Joe User');     //Add a recipient
    $mail->addAddress('ellen@example.com');               //Name is optional
   
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Your Form Details';
    $mail->Body    = "<table border='1'><tr><td>Name</td><td> $name </td></tr><tr><td>Gender</td><td>$gender</td></tr><tr><td>Age</td><td>$age</td></tr></table>";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}