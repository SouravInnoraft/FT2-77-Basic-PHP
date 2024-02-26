<?php
/**
 * Start the session
 */
session_start();
if (isset($_POST["submit"])) {
  $_SESSION["fname"] = $_POST["fname"];
  $_SESSION["lname"] = $_POST["lname"];
  $_SESSION["email"] = $_POST["email"];
}
if (
  isset($_SESSION["fname"]) && isset($_SESSION["lname"]) &&
  isset($_SESSION["email"])
) {
  include "header.php";
  parse_str($_SERVER['QUERY_STRING'], $parameters);

  if (isset($parameters['q'])) {
     //Valid parameter check
    if ($parameters['q'] > 0 && $parameters['q'] <= 7) {
      include "{$parameters['q']}.php";
    } else {
?>
      <h1>Invalid query</h1>
<?php
    }
  }
} else {
  //Nagivate to the Login page
  header("location:/sessions/login.php");
}
?>
