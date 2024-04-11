<?php
require './vendor/autoload.php';
/**
 * Class to validate Email and Password.
 */
class FieldValidation{

  /**
   * Function to validate
   *
   * @param string $email
   *   User provide email.
   *
   * @return bool
   *   True if email is valid.
   */
  public function emailValidation(string $email):bool{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      return FALSE;
    }
    else {
      return TRUE;
    }
  }

  /**
   * Function to validate password.
   *
   * @param string $password
   *   User entered password.
   * @return bool
   *   True if password is valid.
   */
  public function passwordValidation(string $password):bool{
    $pattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/';
    if (preg_match($pattern, $password)) {
        return TRUE;
    }
    else {
      return FALSE;
    }
  }
}
