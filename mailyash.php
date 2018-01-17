<?php 
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$message = $_POST['message'];

$formcontent = "From: $firstname $lastname \n Message: $message";
$recipient = "yash.parekh223@gmail.com";
$subject = "Yash Website: $firstname wants to contact you!";
$mailheader = "From: $email \r\n";

mail($recipient, $subject, $formcontent, $mailheader) or die("Error");
echo "Thank you";
?>