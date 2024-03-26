<?php
require 'Validation.php';
require 'creds.php';

session_start();

// Check that if the sessions variables are set or not.
if (!isset($_SESSION['username']) || !isset($_SESSION['password'])) {
  $notloggedin = urlencode("Can't access the page if you are not logged in.");
  header('location:login.php?notloggedin=' . $notloggedin);
}

// Creating an object of Validation class.
$login_check = new Validation($username, $password, $dbname);
$login_check->valid();
// Closing the Database.
$login_check->closeDB();
