<?php
	ini_set('display_errors', 1);

	$con = "dbname=ddp4aldlbkqo6j host=ec2-54-235-73-241.compute-1.amazonaws.com
 user=ohtzgwtgrpmoiv password=559436baeb4efdf843f45b1c2dff7cdf1f764d6910cb62cb35d7cdc836595e50 sslmode=require";

 	if(!$con){
 		echo "Database connection failed";
 	}
 	else {
 		echo "Database connection success";
 	}

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$message = $_POST['message'];

	echo $firstname;
	echo $lastname;
	echo $message;

	$formcontent = "From: $firstname $lastname \n Message: $message";
	$recipient = "yash.parekh223@gmail.com";
	$subject = "Yash Website: $firstname wants to contact you!";
	#$mailheader = "From: $email \r\n";
	$mailheader = "From $email \r\n";

	$mail = mail($recipient, $subject, $formcontent, $mailheader);
	# or die("Error");
	if($mail) {
		echo "Thank you for reaching out";
	} else {
		"Mail sending failed";
	}
	
?>