<?php

require 'Database.php';
require 'creds.php';


class Updation extends Database {

  // Varible for updating data in table.
  private $sql_update;
  private $sql_select;
  public $message;

  /**
   * Constructor function for calling the parent class constructor.
   * 
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
    $this->sql_select = "SELECT * FROM logindata WHERE user_name='{$_POST['username']}'";
    $res = $this->conn->query($this->sql_select);
    $user = mysqli_num_rows($res);
    if ($user >0) {
    $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $hash;
    $this->sql_update = "UPDATE
     logindata  SET password='{$hash}'
     WHERE user_name='{$_POST['username']}'";
    try {
      $this->conn->query($this->sql_update);
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

