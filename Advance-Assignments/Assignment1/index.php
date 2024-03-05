<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>innoraft site</title>
  <link rel="stylesheet" href="./css/style.css">
</head>

<body>
  <?php

  require 'ApiCall.php';

  /**
   * A class used for calling fetching API data.
   */

  class API
  {

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

    public function setData()
    {
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

        // Appending all the service session images.
        array_push($this->service_image_val, $service_images);
        $image_data = json_decode(
          request($data[$i]['relationships']['field_image']['links']['related']['href']),
          true
        );

        // Appending all the images.
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

  // Creating an Instance of API.
  $services_request = new API();

  // Calling the Function to set data.
  $services_request->setData();
  ?>
  <section class="header">
    <img src="./images/innoraft-logo.png" alt="#" class="logo">
    <div class="image-container">
      <div class="container">
        <div class="content banner-content">
          <div class="left">
            <h1>SERVICES</h1>
            <p>SERVICES
              What matters to us is the quality of our services and the way
              we provide it. We always want to be partners to our clients.</p>
          </div>
          <div class="right banner">
            <img src="../Assignment1/images/service-banner.png" alt="#">
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="container">
    <div class="text-content">
      Innoraft has been successfully delivering web and mobile solutions to
      esteemed global clientele. Our key solutions include website design and
      development, Drupal development and maintenance, mobile app design and
      development, and E-Commerce solutions. The quality-driven processes for
      all these services is our USP and we live by them every single day.
      We love to work with startups, small, medium, and large scale enterprises
      in the same way i.e. as partners.
    </div>
    <?php
    for ($i = 0; $i < 4; $i++) {
      if ($i % 2 == 0) {
    ?>
        <div class="content">
          <div class="left">
            <img class="bgimage" src=<?= $services_request->section_image[$i]?> alt="#">
          </div>
          <div class="right">
            <div class="title">
              <?= $services_request->$title[$i] ?>
            </div>
            <?php
            for ($x = 0; $x < count($services_request->service_image_val[$i]); $x++) {
            ?>
              <img class="dpimage" src=<?= $services_request->service_image_val[$i][$x] ?> alt="#">
            <?php
            }
            ?>
            <div class="text">
              <?= $services_request->text[$i] ?>
            </div>
            <a href="https://www.innoraft.com" class="btn">Explore More</a>
          </div>
        </div>
      <?php
      } else {
      ?>
        <div class="content">
          <div class="left">
            <div class="title">
              <?= $services_request->title[$i] ?>
            </div>
            <?php
            for ($x = 0; $x < count($services_request->service_image_val[$i]); $x++) {
            ?>
              <img class="dpimage" src=<?= $services_request->service_image_val[$i][$x] ?> alt="#">
            <?php
            }
            ?>
            <div class="text">
              <?= $services_request->text[$i] ?>
            </div>
            <a href="https://www.innoraft.com" class="btn">Explore More</a>
          </div>
          <div class="right">
            <img class="bgimage" src=<?= $services_request->section_image[$i] ?> alt="#">
          </div>
        </div>
    <?php
      }
    }
    ?>
  </div>
</body>

</html>
