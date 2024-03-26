<?php

// Load Composer's autoloader.
require './vendor/autoload.php';
require './creds.php';

// Import PHPMailer classes into the global namespace.
// These must be at the top of your script, not inside a function.
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

/**
 * A class to Send mail to a user.
 */
class Mailer {
  /**
   * Undocumented function
   *
   * @param string $email
   *   User provided email.
   */
  function __construct($email) {
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    setUserData($mail);
    try {
      sendMail($mail, $email);
      // Content.
      sendMailData($mail);
      // If mail is send display a success Message.
      $mail->send();
      echo "Message Send Succefully";
    }
    catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
  }
}
