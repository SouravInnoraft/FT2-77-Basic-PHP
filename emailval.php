<?php
require('creds.php');
require('EmailValidator.php');
$email = $_POST["email"];

$Ev=new EmailValidator();
$Ev->ValidateEmail($email,$api_key);


