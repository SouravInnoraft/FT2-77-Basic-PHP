<?php

require 'creds.php';
require 'Updation.php';

session_start();

// Check that if the sessions variables are set or not.
if (!isset($_SESSION['username']) || !isset($_SESSION['password'])) {
  $notloggedin = urlencode("Can't access the page if you are not logged in.");
  header('location:login.php?notloggedin=' . $notloggedin);
}

// Creating an object of Updation class.
$update = new Updation($username, $password, $dbname);
$update->updateDataInDatabase();

// Closing the database.
if ($update->message == 'Success') {
  $Updated = urlencode("Successfully Updated");
  header('location:login.php?Updated=' . $Updated);
} else {
  echo $message;
}
// Closing the Database.
$update->closeDB();
