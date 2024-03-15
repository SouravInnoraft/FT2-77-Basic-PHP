  <link rel="stylesheet" href="css/style.css">

  <?php

  // File for show warning , error and success messages.
  
  if (isset($_GET['Registered'])) {
  ?>
    <p class="success"><?= $_GET['Registered'] ?></p>
  <?php
  }

  else if (isset($_GET['Updated'])) {
  ?>
    <p class="success"><?= $_GET['Updated'] ?></p>
  <?php
  }

  else if (isset($_GET['UserExists'])) {
  ?>
    <p class="success"><?= $_GET['UserExists'] ?></p>
  <?php
  }

  else if (isset($_GET['UserDoesNotExists'])) {
  ?>
    <p class="Notsuccess"><?= $_GET['UserDoesNotExists'] ?></p>
  <?php
  }

  else if (isset($_GET['notloggedin'])) {
  ?>
    <p class="Notsuccess"><?= $_GET['notloggedin'] ?></p>
  <?Php
  }
