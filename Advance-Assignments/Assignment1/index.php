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

  require 'API.php';

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
            <div class="bg-image">
              <img src=<?= $services_request->section_image[$i] ?> alt="#">
            </div>
          </div>
          <div class="right">
            <div class="title">
              <?= $services_request->title[$i] ?>
            </div>
            <?php
            for ($x = 0; $x < count($services_request->service_image_val[$i]); $x++) {
            ?>

              <img class="dp-image" src=<?= $services_request->service_image_val[$i][$x] ?> alt="#">

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
              <img class="dp-image" src=<?= $services_request->service_image_val[$i][$x] ?> alt="#">
            <?php
            }
            ?>
            <div class="text">
              <?= $services_request->text[$i] ?>
            </div>
            <a href="https://www.innoraft.com" class="btn">Explore More</a>
          </div>
          <div class="right">
            <div class="bg-image">
              <img src=<?= $services_request->section_image[$i] ?> alt="#">
            </div>
          </div>
        </div>
    <?php
      }
    }
    ?>
  </div>
</body>
</html>
