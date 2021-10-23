<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$email_form = 'nafismahmud181@gmail.com';
$email_subject = 'New Form Submission';
$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Subjct: $subject.\n".
              "User Message: $message.\n";


 $to = 'nafismahmud181@gamil.com';

 $headers = "From: $email_from \r\n";
 $headers . = "Reply-TO: $visitor_email \r\n";


 mail($to,$email_subject,$email_body,$headers);

 headers("Location: contact.html")

?>