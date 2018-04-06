<?php

// specify your email here

$to = 'mohan900080460l@gmail.com';
ini_set('display_errors', 1);
var_dump($_POST);
$mail->SMTPDebug = 4;
// Assigning data from $_POST array to variables
// if (isset($_POST['inquiry'])) {
//     $inquiry = $_POST['inquiry'];
// }
// if (isset($_POST['fName'])) {
//     $fname = $_POST['fName'];
// }
// if (isset($_POST['lName'])) {
//     $lname = $_POST['lName'];
// }
if (isset($_POST['subscribeEmail'])) {
    $email = $_POST['subscribeEmail'];
}
// if (isset($_POST['company'])) {
//     $company = $_POST['company'];
// }
// if (isset($_POST['title'])) {
//     $title  = $_POST['title'];
// }
// if (isset($_POST['phone'])) {
//     $phone = $_POST['phone'];
// }
// if (isset($_POST['comment'])) {
//     $comment = $_POST['comment'];
// }

// Construct subject of the email
$subject = 'Subscription Mail';

$message = '<html><body>';
// Construct email body
// $message .= '<p style="margin:5px 0"><b style="min-width:150px;display:inline-block;">Area Of Inquiry: </b>' . $inquiry . "</p>\r\n\n";
// $message .= '<p style="margin:5px 0"><b style="min-width:150px;display:inline-block;">Name: </b>' . $fname .' '. $lname . "</p>\r\n\n";
// $message .= '<p style="margin:5px 0"><b style="min-width:150px;display:inline-block;">Phone No.: </b>' . $phone . "</p>\r\n\n";
$message .= '<p style="margin:5px 0">Thanks for Subscribing us! Our team will contact you soon.</p>';
// $message .= '<p style="margin:5px 0"><b style="min-width:150px;display:inline-block;">Company: </b>' . $company . "</p>\r\n\n";
// $message .= '<p style="margin:5px 0"><b style="min-width:150px;display:inline-block;">Job Title: </b>' . $title . "</p>\r\n\n";
// $message .= '<p style="margin:5px 0"><b style="min-width:150px;display:inline-block;">Comment: </b>' . $comment . "</p>\r\n\n";
$message .= '</body></html>';

$message1 = '<html><body>';
$message1 .= '<p style="margin:5px 0"><b style="min-width:150px;display:inline-block;">This peerson wants to subscribe </b>' . $email . '</p>';
$message1 .= '</body></html>';

// Construct headers of the message
$headers = 'From: ' . $email . "\r\n";
$headers .= 'Reply-To: ' . $email . "\r\n";
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$headers1 = 'MIME-Version: 1.0' . "\r\n";
$headers1 .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";


// Construct headers of the message
//$headers = 'From: ' ;

//$headers .= 'Reply-To: ' . $email . "\r\n";
//$headers = 'MIME-Version: 1.0' . "\r\n";
//$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$mail_sent = mail($email, $subject,  $message, $headers);
$mail_sent = mail($to, $subject,  $message1, $headers1);
var_dump($mail_sent);

if ($mail_sent == true) {
    echo 200;
} else {
    echo 500;
} // End else

