<?php

// var_dump($_POST);
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
$email_body = "";
$email_body = $email_body . "Name: " . $name . "\n";
$email_body = $email_body . "Email: " . $email . "\n";
$email_body = $email_body . "Message: " . $message;

// TODO: Send Email

// redirect after the email is sent
// php command for this is header
// this is part of http, defines how server and browser communicate before any html gets passed
// header field defines location to look for a different page (redirect)
header("Location: contact-thanks.php")

?>