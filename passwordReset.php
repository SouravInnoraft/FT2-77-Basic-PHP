<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <h2>Password Reset Form</h2>
  <form action="/Updation.php" method="post">
    <div class="container">
      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter your Username" name="username" required>
      <label for="password"><b>Enter a new Password</b></label>
      <input type="password" placeholder="Enter a new Password" name="password" required>
      <div class="container btn-container" style="background-color:#f1f1f1">
        <button type="submit" class="button">Reset</button>
      </div>
      <p>Don't have an account? <a href="registration.php">Signup</a>.</p>
    </div>
  </form>
</body>
</html>
