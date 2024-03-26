<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <h2>Password Reset Form</h2>
  <form action="/UpdationCall.php" method="post">
    <div class="container">
      <label for="username"><b>User Email</b></label>
      <input type="email" placeholder="Enter your Email" name="username" required>
      <label for="password"><b>password</b></label>
      <input type="password" id='psw' placeholder="Enter Password" name="password" required>
      <button type="submit" class="button">Reset</button>
</form>
      <div class="container btn-container" style="background-color:#f1f1f1">
        <p>Don't have an account? <a href="registration.php">Signup</a>.</p>
      </div>
    </div>
    <div id="message">
      <h3>Password must contain the following:</h3>
      <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
      <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
      <p id="number" class="invalid">A <b>number</b></p>
      <p id="length" class="invalid">Minimum <b>8 characters</b></p>
    </div>
</body>
<script src="script/script.js"></script>
</body>

</html>
