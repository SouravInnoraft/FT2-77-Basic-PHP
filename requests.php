<?php

/**
 * Requests for Email data
 *
 * @param mixed $url
 *
 * @return string
 *  Returns the user data.
 */
function request($url): string{
  $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $data = curl_exec($ch);
  curl_close($ch);
  return $data;
}
