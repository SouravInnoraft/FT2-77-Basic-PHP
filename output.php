<?php

if (isset($_POST['submit'])) {
  $fname = $_POST['First_Name'];
  $lname = $_POST['Last_Name'];
  echo 'Hello' . $fname . ' ' . $lname;
}
