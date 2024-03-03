<?php

// Start the session.
session_start();

if (isset($_POST['submit'])) {
  if($_POST['name']==='Sourav Chandra' && $_POST['password']==='sourav123'){
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['password'] = $_POST['password'];
  }
}

require('./Valid.php');
// Checks if all the variable in the session are set or not.
if (
  isset($_SESSION['name']) && isset($_SESSION['password'])
) {
  include './header.php';
  parse_str($_SERVER['QUERY_STRING'], $parameters);

  if (isset($parameters['q'])) {
    // Checks if parameter value lies in range or not.
    if ($parameters['q'] > 0 && $parameters['q'] <= 7) {
      include "question{$parameters['q']}.php";
    }
    else {
?>
      <h1>Invalid query</h1>
<?php
    }
  }
}
else {
  // Nagivate to the Login page.
  header('location:login.php');
}
?>
