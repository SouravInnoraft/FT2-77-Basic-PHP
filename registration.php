<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <h2>Signup Form</h2>
  <form action="/Assignment2/Mail.php" method="post">
    <div class="container">
      <p>Please fill in your email to create an account.</p>
      <hr>
      <label for="username"><b>Enter your Email</b></label>
      <input type="email" placeholder="Enter your Email" name="email" required>
      <button type="submit" class="button" name="submit">sign up</button>
    </div>
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
    </div>
  </form>
</body>

</html>
