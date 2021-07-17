<?php 

$fName = $_POST['fName'];
$lName = $_POST['lName'];
$pNumber = $_POST['pNumber'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'herbie@clement-associates.com';
$subject = $_POST['subject'];
$email_body = "User First Name: $fName.\n".
                "User Last Name: $lName.\n".
                    "User Email: $visitor_email.\n".
                        "User Phone: $pNumber.\n".
                        "User Message: $message.\n";

$to = "herbie@clement-associates.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$subject,$email_body,$headers);
header("Location: contact-us.html");

?>