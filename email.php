<?php
if (!isset($_POST[submit])) {
    // This page should not be accessed directly. Need  to submit the form.
    echo "error:You need to submit the form";
}
$name = $_POST['Name'];
$visitor_email = $_POST['Email'];
$message = $_POST['Message'];

$email_from = $visitor_email;
$email_subject = "New Form submission";
$email_body = "You have received a new message from the user $name.\n"."Here is the message:\n $message".

// To send the email
$to = "freedotun@gmail.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

?>