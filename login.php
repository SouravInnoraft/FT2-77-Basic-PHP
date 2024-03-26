<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <?php
  require 'Messages.php';

  session_start();
  if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
    header('location:welcome.php');
  }

  ?>
  <h2>Login Form</h2>
  <form action="/ValidationCall.php" method="post">
    <div class="container">
      <label for="username"><b>Email id</b></label>
      <input type="email" placeholder="Enter Email" name="email" required>
      <label for="password"><b>Password</b></label>
      <input type="password" id='psw' placeholder="Enter Password" name="password" required>
      <button type="submit" name='submit'>Login</button>
    </div>
    <div class="container btn-container" style="background-color:#f1f1f1">
      <a href="registration.php" class="button">signup</a>
      <a href="passwordReset.php" class="button">Reset Password</a>
    </div>
  </form>
  <div id="message">
    <h3>Password must contain the following:</h3>
    <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
    <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
    <p id="number" class="invalid">A <b>number</b></p>
    <p id="length" class="invalid">Minimum <b>8 characters</b></p>
  </div>
</body>
<script src="script/script.js"></script>
</html>
