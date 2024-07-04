<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = "kelesaremo@gmail.com";
$subject = "Mail From Website";

$headers = "From: ".$name. "\r\n" .
"CC: khalifa.com"

$txt = "You have recived an e-mail from ".$name ."\r\nEmail: ".$email ."\r\n
Message: ". $message;

if($email!=NULL){
    mail($to, $subject, $txt, $headers);
}

header('location:thankyou.html');

?>