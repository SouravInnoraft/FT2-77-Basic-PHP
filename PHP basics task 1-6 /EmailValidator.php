<?php

require('requests.php');

/**
 * Class to check if email is valid or not.
 */

class EmailValidator {

  /**
   * Checks whether the email is valid or not.
   *
   * @param string $email
   *   User's email address.
   * @param mixed $api_key
   *   User's api key.
   *
   * @return bool
   *   Returns TRUE if email address is valid else returns FALSE.
   */

  public function validateEmail(string $email, mixed $api_key):bool {
   $url2 = "https://emailvalidation.abstractapi.com/v1/
    ?api_key =$api_key&email=$email";
    // Calls the API and Decode the json file received.
    $result = json_decode(request($url2), TRUE);
    // Validate the format and smtp.
    // If both condition satisfies it prints the email is valid , else it is not.
    if ($result['is_valid_format']['value'] &&
    $result['is_smtp_valid']['value']) {
      return TRUE;
    }
    else {
      return FALSE;
    }
  }
}
