<?php

/**
 * Function to set user data.
 *
 * @param mixed $mail
 *   An instance of PHPMailer is passed as a parameter to set all user
 *   related data.
 *
 */

function setUserData(mixed $mail){
  
  // Set the SMTP server to send through.
  $mail->Host = 'smtp.gmail.com';

  // Enable SMTP authentication.
  $mail->SMTPAuth = true;

  // SMTP username
  $mail->Username = 'sourav.tests1234@gmail.com';

  // SMTP password.
  $mail->Password = 'omau pvhm yizc xvkg';

  // Enable implicit TLS encryption.
  $mail->SMTPSecure = 'ssl';

  // TCP port to connect to; use 587 if you have set
  // `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`.
  $mail->Port = 465;
}

/**
 * Function to send email.
 *
 * @param mixed $mail
 *   An instance of PHPMailer is passed as a parameter to set all user
 *   related data.
 * @param mixed $email
 *   User's email id.
 *
 */

function sendMail(mixed $mail, mixed $email){
  // Sender.
  $mail->setFrom('sourav.tests1234@gmail.com');

  // Recipient.
  $mail->addAddress($email);
}

/**
 * Function to send Email data
 *
 * @param mixed $mail
 *   An instance of PHPMailer is passed as a parameter to set all user
 *   related data.
 *
 */

function sendMailData(mixed $mail){
  // Set email format to HTML.
  $mail->isHTML(true);

  // Set Subject and Email body.
  $mail->Subject = 'Advance Assignment 2';
  $mail->Body    = 'Thank you for your submission';
}
