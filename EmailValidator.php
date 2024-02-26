<?php
require("requests.php");
class EmailValidator{
  /**
   * Checks whether the email is valid or not
   *
   * @param string $email
   * @param mixed $api_key
   * @return void
   */
  public function ValidateEmail($email, $api_key){
    $url2 = "https://emailvalidation.abstractapi.com/v1/
    ?api_key=$api_key&email=$email";
    //Call the API and Decode the json file received
    $result = json_decode(request($url2), true);
    if (
      $result["is_valid_format"]["value"] &&
      $result["is_smtp_valid"]["value"]
    ) {
      echo "$email is valid";
    } else {
      echo "$email is invalid";
    }
  }
}
