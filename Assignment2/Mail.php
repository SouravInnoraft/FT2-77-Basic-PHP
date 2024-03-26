<?php

require 'Mailer.php';
require '../creds.php';
require '../Database.php';

session_start();

if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $database=new Database($username,$password, $dbname);
  $isExist=$database->isExistingUser($email);
  if(!$isExist) {
    $_SESSION['username']=$email;
    $otp=rand(1000,9999);
    $_SESSION['otp']=$otp;
    $mail = new Mailer($email,$otp);
  }
  else {
    $UserExists = urlencode("User Exists");
    header('location:../login.php?UserExists=' . $UserExists);
  }
}
