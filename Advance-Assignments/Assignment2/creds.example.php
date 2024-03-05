<?php

/**
 * Function to set user data.
 *
 * @param mixed $mail
 *   An instance of PHPMailer is passed to set all user related data.
 *
 */
function setUserData(mixed $mail){
  // Set the SMTP server to send through.
  $mail->Host = 'smtp.xyz.com';

  // Enable SMTP authentication.
  $mail->SMTPAuth = true;

  // SMTP username
  $mail->Username = 'user email id';

  // SMTP password.
  $mail->Password = 'user password';

  $mail->SMTPSecure = 'type of connection';

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
  $mail->setFrom('sender\'s email id');

  // Recipient.
  $mail->addAddress('reciever\'s email id');
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
  $mail->Subject = 'Email Subject';
  $mail->Body    = 'Email Body';
}
