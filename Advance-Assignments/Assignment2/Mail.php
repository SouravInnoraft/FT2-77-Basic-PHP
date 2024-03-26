<?php

require 'Mailer.php';

if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $mail = new Mailer($email);
}
