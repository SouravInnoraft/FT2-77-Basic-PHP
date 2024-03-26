<?php
  /**
   * Class for storing and displaying output.
   */

  class Output{

  // Array to store errors.
  private $error_array = [];

  // For storing user entered first name.
  private $first_name;

  // For storing user entered last name.
  private $last_name;

  // For storing Marks entered.
  private $input_data;

  // For storing user entered number.
  private $number;


  function CheckErrors(){
  if (isset($_POST['submit'])) {
    $name_regex = '/^[A-Za-z]+$/i';
    $this->first_name = $_POST['first_name'];
    $this->last_name = $_POST['last_name'];

    // Pattern matching for both first and last name.
    if (!preg_match($name_regex, $this->first_name) ||
     !preg_match($name_regex, $this->last_name)) {
      array_push($this->error_array, 'not a valid name');
    }

    // Processing Marks data.
    $input_value = $_POST['comment'];
    $this->input_data = explode("\n", $input_value);
    $regex_marks = '/^[A-Za-z0-9]+\|(?:[1-9][0-9]?|100)$/';
    for ($i = 0; $i < count($this->input_data); $i++) {
      // Trimming any whitespaces at the beginning and end of the string.
      $input_data[$i] = trim($this->input_data[$i]);

      // Cleaning up spaces in the string.
      $input_data[$i] = preg_replace('/[ ]/', '', $input_data[$i]);
      if (!preg_match($regex_marks, $input_data[$i])) {
        array_push($this->error_array, 'not a valid marks input');
      }
    }

    // Checking for valid image upload.
    if (
      !isset($_FILES['image']) ||
      !$_FILES['image']['error'] == UPLOAD_ERR_OK
    ) {
      array_push($this->error_array, 'not a sucessful upload');
    }

    // Check for valid number Pattern.
    $this->number = $_POST['phone_number'];
    $len = strlen($this->number);
    $check_91 = substr($this->number, 0, 3);
    if ($check_91 !== '+91' or $len !== 13) {
      array_push($this->error_array, 'Invalid number');
    }
  }
}

  function DisplayOutput(){
  if (!count($this->error_array)) {
    // Displays the Full name.
  ?>
    <p>Hello <?= "$this->first_name $this->last_name" ?></p>
    <?php

    // Displays the Marks in tabular manner.
    ?>
    <table>
      <tr>
        <th>Subject</th>
        <th>Marks</th>
      </tr>
      <?php
      for ($x = 0; $x < count($this->input_data); $x++) {
        $sub = explode('|', $this->input_data[$x]);
      ?>
        <tr>
          <td><?= $sub[0] ?></td>
          <td><?= $sub[1] ?></td>
        </tr>
      <?php
    } ?>
    </table>
    <?php

    // Uploads and displays image.

    $target_file = __DIR__ . '/images/' . $_FILES['image']['name'];

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
      $t = './images/' . $_FILES['image']['name'];
    ?>
      <img src=<?= $t?> alt='#'>
    <?php
    }
    // Validates a phone number.
    ?>
    <p>Number is submitted successfully the number is <?= $this->number ?></p>
  <?php
    // require 'emailCall.php';
    // For storing pdf.
    require 'pdf.php';
  } else {
  ?>
    <ul>
      <?php
      // Displays errors.
      for ($i = 0; $i < count($this->error_array); $i++) {
      ?>
        <li><?= $this->error_array[$i] ?></li>
      <?php
      }
      ?>
    </ul>
  <?php
  }
 }
}
  ?>
