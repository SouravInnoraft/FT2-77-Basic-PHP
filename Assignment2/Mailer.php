<?php

// Load Composer's autoloader.
require './vendor/autoload.php';
require './credentials.php';

// Import PHPMailer classes into the global namespace.
// These must be at the top of your script, not inside a function.
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

  // Create an instance.
  class Mailer {
    function __construct($email,$otp) {
      $mail = new PHPMailer(true);
      $mail->isSMTP();
      setUserData($mail);
      try {
        sendMail($mail, $email);
        // Content.
        sendMailData($mail,$otp);
        // If mail is send display a success Message.
        $mail->send();
        // $path='./otp'
        header('location: ../otpValidation.php');
      } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
      }
    }
  }
