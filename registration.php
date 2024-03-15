<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <h2>Signup Form</h2>
  <form action="/Insertion.php" method="post">
    <div class="container">
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="username"><b>Create Username</b></label>
      <input type="text" placeholder="Enter a new Username" name="username" required>
      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter a new Password" name="password" required>
      <label for="psw"><b>Confirm Password</b></label>
      <input type="password" placeholder="Re Enter the Password" name="psw" required>
      <div class="btn-container">
        <button type="submit" class="button">sign up</button>
      </div>
      <p>Already have an account? <a href="login.php">Sign in</a>.</p>
    </div>
  </form>
</body>
</html>
