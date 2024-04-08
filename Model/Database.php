<?php
/**
 * A class to create and initialise the database.
 */
class Database {
  private $servername = 'localhost';
  private $conn;

  /**
   * Constructor function for creating sql connection.
   *
   * @param string $username
   * @param string $password
   * @param string $dbname
   */
  function __construct(string $username, string $password, string $dbname) {
    $db_name="mysql:host=$this->servername;dbname=$dbname";
    try {

      // Creating a new PDO connection.
      $this->conn = new PDO($db_name,$username, $password);
    }
    catch (Exception $e) {
      throw new Exception($e);
    }
  }

  /**
   * Function to get connection.
   */
  public function getConnection(){
    return $this->conn;
  }

  /**
   * Function to close database.
   */
  public function databaseClose(){
    $this->conn=null;
  }
}


