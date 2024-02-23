<?php
require("requests.php");
class EmailValidator
{
  public function ValidateEmail($email, $api_key)
  {
    $url2 = "https://emailvalidation.abstractapi.com/v1/?api_key=$api_key&email=$email";
    $result = json_decode(request($url2), true);
    if ($result["is_valid_format"]["value"] && $result["is_smtp_valid"]["value"]) {
      echo "$email is valid";
    } else {
      echo "$email is invalid";
    }
  }
}
