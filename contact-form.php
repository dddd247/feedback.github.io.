<?php
   $name = $_POST['name'];
   $visitor_email = $_POST['eamil'];
   $message = $_POST['message'];

   $email_form = 'east@gmail.com';

   $email_subject = "new new submission";
   
   $email_body = "User Name: $name.\n".
                   "User Email: $visitor_email.\n".
                      "User Message: $message.\n".


    $to = "asd24372025@gmail.com";
    $headers = "From: $email_form \r\n";
    $headers = "Reply-to: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);
    
    header("Location: index.html");

?>