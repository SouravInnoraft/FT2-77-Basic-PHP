<?php

/**
 * Function to request an Url using curl.
 *
 * @param mixed $url
 *   User provided url.
 *
 * @return mixed
 *   Returns data fetched by Api.
 */

function request(mixed $url): mixed {
  $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($ch);
  if ($error = curl_error($ch)) {
    echo $error;
  }
  curl_close($ch);
  return $response;
}
