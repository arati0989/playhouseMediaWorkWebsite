<?php
//$subject = 'Website Change Reqest';

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$to = 'kumare.arati@gmail.com';
$headers = "From: " . strip_tags($_POST['req-email']) . "\r\n";
$headers .= "Reply-To: ". strip_tags($_POST['req-email']) . "\r\n";
$headers .= "CC: susan@example.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

//$message = '<p><strong>This is strong text</strong> while this is not.</p>';

$message_new = "From : "+$email + "\n"+ "Message : " + $message;

if(mail($to, $subject, $message, $headers)){
	
}else{
	
}
?>