<?php
if (isset($_POST['submit'])) {
  // Check for email pattern.
  $email = $_POST['email'];
  $msg = '';
  $email_pattern = "/^[a-zA-Z0-9._]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
  //if the pattern matches it is valid, else it is not valid.
  if (preg_match($email_pattern, $email)) {
    $msg = 'valid';
  } else {
    $msg = 'invalid';
  }
}
