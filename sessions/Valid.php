<?php

if (!isset($_SESSION['fname']) || !isset($_SESSION['lname'])
  || !isset($_SESSION['email'])
) {
  header('location:/sessions/login.php');
}
?>
