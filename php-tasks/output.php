<div class="output">

  <!-- php code starts -->

  <?php
  $error_array = array();
  $name_regex = '/^[A-Za-z]+$/i';
  if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];

    // Pattern matching for both first and last name.
    if (!preg_match($name_regex, $first_name) || !preg_match($name_regex, $last_name)) {
      array_push($error_array, 'not a valid name');
    }
    $input_value = $_POST['comment'];
    $input_data = explode("\n", $input_value);
    $regex_marks = '/^[A-Za-z0-9]+\|(?:[1-9][0-9]?|100)$/';
    for ($i = 0; $i < count($input_data); $i++) {
      // Trimming any whitespaces at the beginning and end of the string.
      $input_data[$i] = trim($input_data[$i]);
      // Cleaning up spaces in the string.
      $input_data[$i] = preg_replace('/[ ]/', '', $input_data[$i]);
      if (!preg_match($regex_marks, $input_data[$i])) {
        array_push($error_array, 'not a valid marks input');
      }
    }
    // Checking for valid image upload.
    if (
      !isset($_FILES['image']) ||
      !$_FILES['image']['error'] == UPLOAD_ERR_OK
    ) {
      array_push($error_array, 'not a sucessful upload');
    }
    // Check for valid Pattern.
    $number = $_POST['phone_number'];
    $len = strlen($number);
    $check_91 = substr($number, 0, 3);
    if ($check_91 !== '+91' or $len !== 13) {
      array_push($error_array, 'Invalid number');
    }
  }

  if (!count($error_array)) {
    // Displays the Full name.
  ?>
    <p>Hello <?= "$first_name $last_name" ?></p>
    <?php

    // Displays the Marks in tabular manner.
    ?>
    <table>
      <tr>
        <th>Subject</th>
        <th>Marks</th>
      </tr>
      <?php
      for ($x = 0; $x < count($input_data); $x++) {
        $sub = explode('|', $input_data[$x]);
      ?>
        <tr>
          <td><?= $sub[0] ?></td>
          <td><?= $sub[1] ?></td>
        </tr>
      <?php } ?>
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
    <p>Number is submitted successfully the number is <?= $number ?></p>
  <?php
    // require 'emailCall.php';
    // For storing pdf.
    require 'pdf.php';
  } else {
  ?>
    <ul>
      <?php
      // Displays errors.
      for ($i = 0; $i < count($error_array); $i++) {
      ?>
        <li><?= $error_array[$i] ?></li>
      <?php
      }
      ?>
    </ul>
  <?php
  }
  ?>
</div>
