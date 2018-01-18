<?php
//To test php files: run php -S localhost:8000
//Then go to localhost:8000
	ini_set('display_errors', 1);

	$con = "dbname=ddp4aldlbkqo6j host=ec2-54-235-73-241.compute-1.amazonaws.com
 user=ohtzgwtgrpmoiv password=559436baeb4efdf843f45b1c2dff7cdf1f764d6910cb62cb35d7cdc836595e50 sslmode=require";

 	if(!$con){
 		echo "Database connection failed";
 	}
 	else {
 		echo "Database connection success. You will be redircted back to the homepage in five seconds";
 	}
 	//ok till this line

 	
//This php file used to test
if(isset($_POST['submit'])){
	echo "Submission received";
    $to = "yash.parekh223@gmail.com"; // this is your Email address
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $message = $_POST['message'];
    $subject = "Form submission";
    /*ok till here*/
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    /*ok till line 25*/

    $headers = "Message from:" . $first_name;

    echo ($first_name);
    echo ($last_name);

    echo ("You will be redircted back to the homepage in five seconds");
    
    mail($to,$subject,$message,$headers);




    //echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";

    
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.


    }
?>