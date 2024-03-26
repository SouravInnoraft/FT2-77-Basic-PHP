<?php
require 'Database.php';
require 'creds.php';

/**
 * A class to Validate the user.
 */

class Validation extends Database {

  /**
   * Constructor function for calling the parent class constructor.
   * 
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
      $user_name = $_POST['email'];

      // Checking for the existance of user.
      $sql_select = "SELECT * FROM logindata WHERE user_name = '$user_name'";
      $result = $this->conn->query($sql_select);
      $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
      if ($user) {
        // Check for matching user id and password.
        if ($user_name == $user['user_name'] &&
        password_verify($_POST['password'],$user['password'])) {
          $_SESSION['username']=$user['user_name'];
          $_SESSION['password']=$user['password'];
          // If all set redirect to the main page.
          header('location:welcome.php');
        }
        elseif(!password_verify($_POST['password'],$user['password'])){
          $incorrectPassword = urlencode("Incorrect Password.");
          header('location:login.php?incorrectPassword =' . $incorrectPassword);
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
