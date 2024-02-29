<?php

if (!isset($_SESSION['email'])) {
  header('location:/sessions/login.php');
}
