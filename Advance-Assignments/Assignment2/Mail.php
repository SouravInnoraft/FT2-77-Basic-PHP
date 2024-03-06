<?php

// Load Composer's autoloader.
require './vendor/autoload.php';

// Import PHPMailer classes into the global namespace.
// These must be at the top of your script, not inside a function.
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['submit'])) {
  $email = $_POST['email'];

  // Create an instance.
  $mail = new PHPMailer(true);
  $mail->isSMTP();
  require 'creds.php';
  setUserData($mail);
  try {
    sendMail($mail,$email);

    // Content.
    sendMailData($mail);

    // If mail is send display a success Message.
    $mail->send();
    echo 'Message has been sent';
  }
  catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
}
