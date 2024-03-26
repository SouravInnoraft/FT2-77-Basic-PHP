<?php

require 'Validator.php';
require 'Database.php';

// Creating an instance of Validator class
$validate_input = new Validator();

if ($validate_input->isValid() && $validate_input->isValidPattern()) {
  // Creating an instance of Database class.
  $myDb = new Database($username, $password, $dbname);

  // Call the function to insert data into table.
  $myDb->insertIntoDataBase();

  // Close the DB.
  if($myDb->closeDB()){
    $message= urlencode('Successfully inserted');
    header('Location:index.php?message=".$message');
  }

}
else {
  $message = urlencode('Insertion not sucessful');
  header('Location:index.php?message=".$message');
}
