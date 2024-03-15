<?php

require 'Database.php';
require 'creds.php';
session_start();
if (!isset($_SESSION['username']) || !isset($_SESSION['password'])) {
  $notloggedin = urlencode("Can't access the page if you are not logged in.");
  header('location:login.php?notloggedin=' . $notloggedin);
}

class Insertion extends Database {

  // Varible for inserting data into tables.
  private $sql;
  private $sql1;

  // Variable for storing message.
  public $message;

  /**
   * Contruction function for calling the parent class constructor.
   * @param mixed $username
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
   * A function to insert data into a particular table.
   */

  function insertIntoDataBase() {
    $this->sql1 = "SELECT * FROM logindata WHERE user_name='{$_POST['username']}'";
    $res = $this->conn->query($this->sql1);
    $user=mysqli_num_rows($res);
    if ($user==0) {
      if ((isset($_POST['password'])
        && !empty($_POST['password'])
        && $_POST['password'] == $_POST['psw'])) {
          
        // convert the password into hash.
        $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $_SESSION['username']= $_POST['username'];
        $_SESSION['password']= $hash;
        $this->sql = "INSERT INTO
        logindata (user_name, password)
        VALUES('{$_POST['username']}','{$hash}');";
        try {
          $this->conn->query($this->sql);
          $this->message = 'Success';
        }
        catch (Exception $e) {
          $this->message = 'An Error Occured';
        }
      }
      else {
        $this->message = 'Password not valid';
      }
    }
    else {
      $UserExists = urlencode("User Exists");
      header('location:login.php?UserExists=' . $UserExists);
    }
  }
}
// Creating an object of Insertion class.
$insert = new Insertion($username, $password, $dbname);
$insert->insertIntoDataBase();
if ($insert->message == 'Success') {
  $Registered = urlencode("Successfully Registered");
  header('location:login.php?Registered=' . $Registered);
} else {
  echo $message;
}
// Closing the Database.
$insert->closeDB();
