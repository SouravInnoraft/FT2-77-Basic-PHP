<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <?php
  require 'Messages.php';
  ?>
  <h2>Signup Form</h2>
  <form action="/InsertionCall.php" method="post">
    <div class="container">
      <p>Please fill in your password to create an account.</p>
      <hr>
      <label for="password"><b>password</b></label>
      <input type="password" id='psw' placeholder="Enter Password" name="password" required>
      <label for="re-password"><b>Re-enter your password</b></label>
      <input type="password" id='psw' placeholder="Enter Password" name="re-password" required>
      <button type="submit" class="button" name="submit">sign up</button>
    </div>
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
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
