<?php

if($_SERVER['REQUEST_METHOD']==='POST')
{	
	
	$name =  $_POST["name"];
	$phone =  $_POST["phone"];
	$email =  $_POST["email"];
	$subject =  $_POST["subject"];
	$message =  "Sender Name:-".$name."\n"."Sender Email:- ".$email."\n"."Phone number :-".$phone."\n".$_POST["message"];
	
 

$to = "arvindanand89@gmail.com";
$headers =  'MIME-Version: 1.0' . "\r\n"; 
/* $headers .= 'From: Your name <info@address.com>' . "\r\n"; 
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; */
$headers .= 'Content-type: text/plain; charset=iso-8859-1' . "\r\n"; 

// Sending email
try {
	if(mail($to, $subject, $message,$headers))
		echo "sent";
	else
		echo "not sent";

   
}catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
}
?>