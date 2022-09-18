<?php
$mail_to_send_to = "tomas.fleiderman@gmail.com";
$from_email = "from@yourdomain.tld";
$name=$_REQUEST["name"];
$subject= "Message subject";
$email = $_REQUEST["email"] ;
$message= "\r\n" . "Name: $name" . "\r\n"; 
$message = $message.$_REQUEST["message"] . "\r\n" ;
$headers = "From: $from_email" . "\r\n" . "Reply-To: $email"  ;
ini_set('display_errors', 1);
error_reporting(E_ALL);
$res = mail( $mail_to_send_to, $subject, $message, $headers );
//var_dump($res);
?>