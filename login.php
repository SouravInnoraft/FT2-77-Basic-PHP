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
  <form action="/Validation.php" method="post">
    <div class="container">
      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>
      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
      <button type="submit" name='submit'>Login</button>
    </div>
    <div class="container btn-container" style="background-color:#f1f1f1">
      <a href="registration.php" class="button">signup</a>
      <a href="Assignment2/index.php" class="button">Reset Password</a>
    </div>
  </form>
</body>
</html>
