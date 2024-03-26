<link rel="stylesheet" href="/php-tasks/css/style.css">
<div class="output">
  <?php
  // The main page .
  session_start();
  ?>
  <h1>Hi,User welcome to the login page.</h1>
  <?php
  if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
  ?>
    <p>Username: <?= $_SESSION['username'] ?></p>
    <a href="logout.php">Logout</a>
    <?php
    // If session variables are set and login is successful navigate to form.
    ?>
    <a href="./php-tasks/index.php" class="button">Navigate to form</a>
  <?php
  }
  else {
    $notloggedin = urlencode("Can't access the page if you are not logged in.");
    header('location:login.php?notloggedin=' . $notloggedin);
  }
  ?>
</div>
