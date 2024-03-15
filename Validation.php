<?php
require 'Database.php';
require 'creds.php';

session_start();

// Check that if the sessions variables are set or not.
if(!isset($_SESSION['username']) || !isset($_SESSION['password'])) {
  $notloggedin = urlencode("Can't access the page if you are not logged in.");
  header('location:login.php?notloggedin=' . $notloggedin);
}

/**
 * A class to Validate the user.
 */

class Validation extends Database {

  /**
   * Contruction function for calling the parent class constructor.
   * @param mixed $username
   *   User's name.
   * @param mixed $password
   *   User's password.
   * @param mixed $dbname
   *   User selected database.
   */

  public function __construct($username, $password, $dbname) {
    parent::__construct($username, $password, $dbname);
  }

  /**
   * Function to validate the user and login into main page.
   */

  function valid() {
    if (isset($_POST['submit'])) {
      $usr = $_POST['username'];

      // Checking for the existance of user.
      $sql = "SELECT * FROM logindata WHERE user_name = '$usr'";
      $result = $this->conn->query($sql);
      $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
      if ($user) {
        // Check for matching user id and password.
        if ($usr == $user['user_name'] &&
        password_verify($_POST['password'],$user['password'])) {
          $_SESSION['username']=$user['user_name'];
          $_SESSION['password']=$user['password'];
          // If all set redirect to the main page.
          header('location:welcome.php');
        }
        else {
          header('location:login.php');
        }
      }
      else {
        $UserDoesNotExists = urlencode("User does not exists please sign up");
        header('location:login.php?UserDoesNotExists=' . $UserDoesNotExists);
      }
    }
  }
}
// Creating an object of Validation class.
$login_check = new Validation($username, $password, $dbname);
$login_check->valid();

// Closing the Database.
$login_check->closeDB();
