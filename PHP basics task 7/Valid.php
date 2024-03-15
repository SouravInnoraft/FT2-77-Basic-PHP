<?php

if (!isset($_SESSION['password'])) {
  header('location:login.php');
}
