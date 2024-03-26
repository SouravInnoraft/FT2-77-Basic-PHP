<?php

require 'Database.php';
require 'creds.php';

/**
 * A class to insert data for the first time in database.
 */
class Insertion extends Database {

  // Varible for inserting data into tables.
  private $sql_insert;
  private $sql_select;

  // Variable for storing message.
  public $message;

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

  public function __construct($username, $password, $dbname){
    parent::__construct($username, $password, $dbname);
  }

  /**
   * A function to insert data into a particular table.
   */

  function insertIntoDataBase() {
    // Fetch data to check if it already exists in the Database.
    $this->sql_select = "SELECT * FROM logindata WHERE user_name='{$_SESSION['username']}'";
    $res = $this->conn->query($this->sql_select);
    $user=mysqli_num_rows($res);
    if ($user==0) {
      if ((isset($_POST['password'])
        && !empty($_POST['password'])
        && $_POST['password'] == $_POST['re-password'])) {

        // convert the password into hash.
        $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $this->sql_insert = "INSERT INTO
        logindata (user_name, password)
        VALUES('{$_SESSION['username']}','{$hash}');";
        try {
          $this->conn->query($this->sql_insert);
          $this->message = 'Success';
        }
        catch (Exception $e) {
          $this->message = 'An Error Occured';
        }
      }
      else {
        $passwordError = urlencode("password not matched");
        header('location:password.php?passwordError=' . $passwordError);
      }
    }
    else {
      $UserExists = urlencode("User Exists");
      header('location:login.php?UserExists=' . $UserExists);
    }
  }
}
