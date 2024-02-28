<?php

require('creds.php');
require('EmailValidator.php');

$email = $_POST["email"];
//Create an object of EmailValidator class.
$Ev = new EmailValidator();
//Call the ValidateEmail function with the email and api key.
$Ev->ValidateEmail($email, $api_key);
?>
