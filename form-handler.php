<?php
$name=$_POST['name'];
$visitors_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_from='info@teamsankalp.tech';
$email_subject='New Form Submission';
$email_body="User Name:$name.\n".
            "User Email:$visitors_email.\n".
            "subject:$subject.\n".
            "User Message:$message.\n";
$to ='praneetharai736@gmail.com';
$headers="From:$email_from\r\n";
$headers="Reply-To:$visitor_email \r\n";
mail($to, $email_subject, $email_body, $headers);
header("location:contact.html");
?>
