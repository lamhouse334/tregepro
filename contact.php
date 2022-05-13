<?php
if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$msg = $_POST['msg'];
	
	$to = 'info@dredgingsolutions.net';
	$subject = 'From Contact Form';
	$message = "Name: ".$name."\n"."Phone: ".$phone."\n". "Message: "."\n\n".$msg;
	$headers = "From: ".$email;
	
	if(mail($to, $subject, $message, $headers)){		
		echo "<h1>Sent Succesfully! Thank You"." ".$name.", We will Contact you shortly!</h1>";
		echo '<a href="index.html">Click here</a>';
		}
			else{
				echo "Went wrong!";				
			}	
}

?>