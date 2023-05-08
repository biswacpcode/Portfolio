<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$email_from = 'contact@routfolio.in';
$email_subject = 'New Message From Website';
$email_body = "User Name: $name.\n".
"User Email: $visitor_email.\n".
"Subject: $subject.\n".
"Message: $message.\n";
$to = 'biswajit.cp2026@gmail.com';

$headers = "From $email_from \r\n";
$headers .= "Reply To: $vistior_email \r\n";

mail($to, $email_subject, $email_body, $headers);
header("Location: index.html");
?>