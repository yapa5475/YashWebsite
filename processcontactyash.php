<!DOCTYPE html>
<!--mysql application password for phpmyadmin: default-->
<html>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	

	<head>
		<title>Yash Parekh</title>

		<link rel="Stylesheet" type="text/css" href="main.css">
	</head>



<?php
	session_start();

	define('YASH_DB', 'Yash');
	define('DB_USER', 'root');
	define('DB_PASSWORD', 'default');
	define('DB_HOST', 'localhost');

	$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

	if(!$link) {
		die('Could not connect to database ' . YASH_DB . ': ' . mysql_error());
	}

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	if (!empty($firstname) and !empty(lastname) and !empty(email) and !empty(message)){

		$sql = "INSERT INTO YashWebsiteContact(firstname,lastname,email,message) VALUES ('$firstname','$lastname','$email','$message')";
	}
	
	if (!mysql_query($sql)) {
		die('Error: ' . mysql_error());
		}
	
	mysql_close();

?>




</html>