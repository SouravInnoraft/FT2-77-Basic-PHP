<?php

require('creds.php');
require('EmailValidator.php');

$email = $_POST["email"];
// Create an object of EmailValidator class.
$email_validator = new EmailValidator();
// Call the ValidateEmail function with the email and api key.
// It will either return TRUE or false.
$result= $email_validator->validateEmail($email, $api_key);
// If the result is TRUE it prints that it is valid , else it prints not valid.
if($result){
  echo "$email is a valid email address";
}
else{
  echo "$email is a not valid email address";
}
