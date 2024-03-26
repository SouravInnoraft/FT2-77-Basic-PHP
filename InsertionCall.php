<?php
require 'Insertion.php';
require 'creds.php';

session_start();

$insert = new Insertion($username, $password, $dbname);
$insert->insertIntoDataBase();

if ($insert->message == 'Success') {
$Registered = urlencode("Successfully Registered");
header('location:login.php?Registered=' . $Registered);
}
else {
echo $message;
}

session_unset();
session_destroy();
// Closing the Database.
$insert->closeDB();
