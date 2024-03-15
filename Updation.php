<?php

require 'Database.php';
require 'creds.php';

session_start();

// Check that if the sessions variables are set or not.
if (!isset($_SESSION['username']) || !isset($_SESSION['password'])) {
  $notloggedin = urlencode("Can't access the page if you are not logged in.");
  header('location:login.php?notloggedin=' . $notloggedin);
}

class Updation extends Database {

  // Varible for updating data in table.
  private $sql;
  private $sql1;
  public $message;

  /**
   * Contruction function for calling the parent class constructor.
   *  @param mixed $username
   *   User's name.
   * @param mixed $password
   *   User's password.
   * @param mixed $dbname
   *   User selected database.
   */

  public function __construct($username, $password, $dbname){
    parent::__construct($username, $password, $dbname);
  }

  /**
   * Function to update data in the database.
   */

  function updateDataInDatabase() {
    $this->sql1 = "SELECT * FROM logindata WHERE user_name='{$_POST['username']}'";
    $res = $this->conn->query($this->sql1);
    $user = mysqli_num_rows($res);
    if ($user >0) {
    $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $hash;
    $this->sql = "UPDATE
     logindata  SET password='{$hash}'
     WHERE user_name='{$_POST['username']}'";
    try {
      $this->conn->query($this->sql);
      $this->message = 'Success';
    } catch (Exception $e) {
      $this->message = 'An Error Occured';
    }
  }
  else{
      $UserDoesNotExists = urlencode("User does not exists");
      header('location:login.php?UserDoesNotExists=' . $UserDoesNotExists);
  }
}
}
// Creating an object of Updation class.
$update = new Updation($username, $password, $dbname);
$update->updateDataInDatabase();
// Closing the database.
$update->closeDB();
if ($update->message == 'Success') {
  $Updated = urlencode("Successfully Updated");
  header('location:login.php?Updated=' . $Updated);
} else {
  echo $message;
}
// Closing the Database.
$update->closeDB();
