<?php

require 'creds.php';

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
}
