<?php

session_start();

if (isset($_SESSION['fname']) && isset($_SESSION['lname']) &&
isset($_SESSION['email'])) {
  header('location:/sessions/session_validations.php');
}

?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
  <div class="container">
    <form action="session_validations.php" method="post">
      <div class="row">
        <div class="col-25">
          <label for="fname">First Name</label>
        </div>
        <div class="col-75">
          <input type="text" id="fname" name="fname" placeholder="Your name..">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="lname">Last Name</label>
        </div>
        <div class="col-75">
          <input type="text" id="lname" name="lname" placeholder="Your last name..">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="email">Email</label>
        </div>
        <div class="col-75">
          <input type="text" id="email" name="email" placeholder="Your email address">
        </div>
      </div>
      <div class="row">
        <input type="submit" value="Submit" name="submit">
      </div>
    </form>
  </div>
</body>
</html>
