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

  // Varibles for inserting data into tables.
  private $sql1;
  private $sql2;
  private $sql3;

  /**
   * Constructor function to initialize the database.
   * @param mixed $username
   *   User's name.
   * @param mixed $password
   *   User's password
   * @param mixed $dbname
   *   User selected database.
   */

  function __construct(mixed $username,mixed $password, mixed $dbname) {
    $this->username=$username;
    $this->password=$password;
    $this->dbname=$dbname;
    try {
      $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
    } catch (Exception $e) {
      die("Connection failed: " . $e);
    }
  }

  /**
   * A function to insert data into a particular table.
   */

  function insertIntoDataBase() {
    $this->sql1 = "INSERT INTO
    employee_code_table (employee_code, employee_code_name, employee_domain)
    VALUES
    ('" . $_POST['employee_code'] . "', '". $_POST['employee_code_name'] . "', '" . $_POST['employee_domain'] . "')";

    $this->sql2 = "INSERT INTO
    employee_salary_table (employee_id, employee_salary, employee_code)
    VALUES
    ('" . $_POST['employee_id'] . "', '". $_POST['employee_salary'] . "', '" . $_POST['employee_code'] . "')";

    $this->sql3 = "INSERT INTO
    employee_details_table (employee_id, employee_first_name, employee_last_name,Graduation_percentile)
    VALUES
     ('" . $_POST['employee_id'] . "', '". $_POST['employee_first_name'] . "', '" . $_POST['employee_last_name'] . "','" . $_POST['graduation_percentile'] . "')";

     if (
    $this->conn->query($this->sql1)===TRUE and
    $this->conn->query($this->sql2)===TRUE and
    $this->conn->query($this->sql3)===TRUE
    ) {
?>
      <p>New record created successfully and inserted into the database</p>
    <?php
    }
    else {
    ?>
      <p>An Error Occured</p>
<?php
    }
  }

  /**
   * A function to close database.
   */

  function closeDB() {
    $this->conn->close();
  }
}

// Creating an instance of Database class.
$myDb = new Database($username,$password,$dbname);

// Call the function to insert data into table.
$myDb->insertIntoDataBase();

// Close the DB.
$myDb->closeDB();

