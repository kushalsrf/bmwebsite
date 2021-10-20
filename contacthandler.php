<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];
$phone = $_POST['mobile'];


$email_from = 'vinitsanna@gmail.com';
$email_subject = "Enquiry";
$email_body = "User's Name: $name.\n". "User's Email: $visitor_email.\n". "User's Contact Number: $phone.\n". "User's Message: $message.\n";


$to = 'sales.builtron@gmail.com';
$headers = "From: $email_from \r\n";
$headers .= "Reply -To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");
        

?>
