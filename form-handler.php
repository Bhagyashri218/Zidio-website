<?php

$name= $_POST ['name'];
$visitor_email= $_POST ['email'];
$Subject= $_POST ['subject'];
$Message= $_POST ['message'];

$email_form = 'support@zidio.in';
$email_subject = 'New Form Submission';
$email_body = "User Name : $name.\n".
           "User Email : $visitor_email.\n".
            "Subject : $subject.\n".
             "Message : $message.\n";

$t0 = 'bhagyashri.satao777@gmail.com';
$headers = "Form: $email_form \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>