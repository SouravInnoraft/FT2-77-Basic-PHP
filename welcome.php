<link rel="stylesheet" href="/php-tasks/css/style.css">
<?php
// The main page .
session_start();
?>
<h1>Hi,User welcome to the login page.</h1>
<?php
if(isset($_SESSION['username'])&& isset($_SESSION['password'])) {
?>
<p>Username: <?=$_SESSION['username']?></p>
<a href="logout.php">Logout</a>
<?php
// If session variables are set and login is successful display main content.
require 'php-tasks/index.php';
}
else {
  $notloggedin = urlencode("Can't access the page if you are not logged in.");
  header('location:login.php?notloggedin=' . $notloggedin);
}
