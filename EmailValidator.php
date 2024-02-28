<?php

require('requests.php');

class EmailValidator{
  /**
   * Checks whether the email is valid or not
   *
   * @param string $email
   * @param mixed $api_key
   *
   */
  public function ValidateEmail($email, $api_key){
    $url2 = 'https://emailvalidation.abstractapi.com/v1/
    ?api_key=$api_key&email=$email';
    //Calls the API and Decode the json file received.
    $result = json_decode(request($url2), true);
    //Validate the format and smtp.
    //If both condition satisfies it prints the email is valid , else it is not.
    if (
      $result['is_valid_format']['value'] &&
      $result['is_smtp_valid']['value']
    ) {
      echo "$email is valid";
    } else {
      echo "$email is invalid";
    }
  }
}
