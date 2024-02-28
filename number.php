<?php
if (isset($_POST['submit'])) {
  $number = $_POST['phone_number'];
  $message = '';
  $len = strlen($number);
  $check_91 = substr($number, 0, 3);
  if ($check_91 !== '+91' or $len !== 13) {
    $message = 'Invalid number';
  } else {
    $message = 'Number is submitted successfully ' . 'the number is ' .
      $number;
  }
}
echo "$message";
