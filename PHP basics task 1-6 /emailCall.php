<?php

require('creds.php');
require('EmailValidator.php');

$emailError = 0;
$email = $_POST["email"];
$regex_email = '/^[\w._]+@[\w]+(\.[a-z]{2,}){0,2}$/i';
$email = strtolower($email);
// Check for Email pattern.
if (!preg_match($regex_email, $email)) {
  $emailError = 1;
  $emailErrorMessage = "Invalid email address format!";
}
if (!$emailError) {
  // Create an object of EmailValidator class.
  $email_validator = new EmailValidator();
  // Call the ValidateEmail function with the email and api key.
  // It will either return TRUE or false.
  $result = $email_validator->validateEmail($email, $api_key);
  // If the result is TRUE it prints that it is valid , else it prints not valid.
  if ($result) {
    echo "$email is a valid email address";
  } else {
    echo "$email is a not valid email address";
  }
}
