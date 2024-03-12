<?php

require './vendor/autoload.php';
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
  $client = new \GuzzleHttp\Client();
  $response = $client->request('GET', $url);
  return $response->getBody();
}
