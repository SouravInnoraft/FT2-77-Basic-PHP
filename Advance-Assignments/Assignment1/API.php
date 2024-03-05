<?php
require 'ApiCall.php';

/**
 * A class used for calling fetching API data.
 */

class API {

  // URL of the domain.
  private static string $domain = 'https://www.innoraft.com';

  // For storing data titles.
  public $title = [];

  // For storing service section images.
  public $service_image_val = [];

  // For storing all text related data.
  public $text = [];

  // For storing section image.
  public $section_image = [];

  /**
   * Function to fetch and Set requested data.
   */

  public function setData() {
    $url = 'https://www.innoraft.com/jsonapi/node/services';
    $response = json_decode(request($url), true);
    $data = $response['data'];
    for ($i = 12; $i < 16; $i++) {

      // Appending all the titles.
      array_push($this->title, $data[$i]['attributes']['field_secondary_title']['value']);
      $field_data = json_decode(
        request($data[$i]['relationships']['field_service_icon']['links']['related']['href']),
        true
      );
      $service_images = [];
      foreach ($field_data['data'] as $service_data) {
        $service_image =  json_decode(
          request($service_data['relationships']['field_media_image']['links']['related']['href']),
          true
        );
        array_push(
          $service_images,
          API::$domain . $service_image['data']['attributes']['uri']['url']
        );
      }

      // Appending all the service section images.
      array_push($this->service_image_val, $service_images);
      $image_data = json_decode(
        request($data[$i]['relationships']['field_image']['links']['related']['href']),
        true
      );

      // Appending all the section images.
      array_push(
        $this->section_image,
        API::$domain . $image_data['data']['attributes']['uri']['url']
      );

      // Appending all the texts.
      array_push(
        $this->text,
        $data[$i]['attributes']['field_services']['value']
      );
    }
  }
}
