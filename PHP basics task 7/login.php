<?php
session_start();
if (isset($_SESSION['name']) && isset($_SESSION['password'])) {
  header('location:session_validations.php');
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
          <label for="name">Name</label>
        </div>
        <div class="col-75">
          <input type="text" id="name" name="name" placeholder="Your name..">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="password">Password</label>
        </div>
        <div class="col-75">
          <input type="password" id="password" name="password" placeholder="Your password">
        </div>
      </div>
      <div class="row">
        <input type="submit" value="Submit" name="submit">
      </div>
    </form>
  </div>
</body>
</html>
