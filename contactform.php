<?php

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$subject = $_POST['ubject'];
	$mailFrom = $_POST['email'];
	$message = $_POST['message'];
	
	$mailto = "tkkota29@gmail.com";
	$headers = "From: ".$mailFrom;
	$txt = "You have recieved an e-mail from ".$name.".\n\n".$message;
	
	mail($mailto, $subject, $txt, $headers);
	header("Location: https://www.nhhs.org/contact.html/?mailsend");
 }