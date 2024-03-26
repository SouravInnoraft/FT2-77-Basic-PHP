<?php

/**
 * A Class to establish database connetion and insert data into it.
 */

class Database {

  // Instance Variable to store servername.
  public $servername = 'localhost';

  // Instance Variable to store username.
  private $username;

  // Instance Variable to store password.
  private $password;

  // Instance Variable to store dbname.
  private $dbname;

  // Variable for establishing connection.
  public $conn;

  /**
   * Constructor function to initialize the database.
   *
   * @param mixed $username
   *   User's name.
   * @param mixed $password
   *   User's password.
   * @param mixed $dbname
   *   User selected database.
   */

  function __construct(mixed $username, mixed $password, mixed $dbname){
    $this->username = $username;
    $this->password = $password;
    $this->dbname = $dbname;
    try {
      $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
    }
    catch (Exception $e) {
      die("Connection failed: " . $e);
    }
  }

  /**
   * Function to close Database.
   */

  function closeDB() {
    $this->conn->close();
  }

  /**
   * Function to check an user id exists in database or not.
   *
   * @param string $email
   *   User email.
   *
   * @return bool
   *   TRUE if user id exists in database.
   */
  function isExistingUser($email): bool {
    // Find data that matches with the id.
    $query = "select * from logindata where user_name = '$email'";
    $result = $this->conn->query($query);
    $no_of_rows = mysqli_num_rows($result);
    if ($no_of_rows == 0) {
      // No data found, means user id doesn't exist.
      return FALSE;
    }
    return TRUE;
  }
}
