<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'abhigoyal7262189@gmail.com';
$email_subject = 'New Form Submission';
$email_body = "User Name: $name.\n" .
    "User Email : $visitor_email.\n" .
    "Subject Message: $message .\n" .
    "User Message: $message .\n";
$to = 'Abhigoyal72621289@gmail.com';

$headers = "From: $email_from\r\n";
$headers = "Reply-to: $visitor_email\r\n";

mail($to, $email_subject, $email_body, $headers);
header("Location : contact.php");
?>