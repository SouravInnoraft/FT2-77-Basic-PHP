<?php

if (isset($_POST['submit'])) {
  $first_name = $_POST['First_Name'];
  $last_name = $_POST['Last_Name'];
?>
  <p>Hello<?= " $first_name $last_name" ?></p>
  <?php
}
if (isset($_POST['submit'])) {
  $input_value = $_POST['comment'];
  $input_data = explode("\n", $input_value);
  foreach ($input_data as $x) {
    $x = trim($x);
  }
  if (strlen($input_value) > 0) {
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
  }
  else {
    echo 'Invalid marks';
  }
}
if (
  isset($_POST['submit']) && isset($_FILES['image']) &&
  $_FILES['image']['error'] == UPLOAD_ERR_OK
) {
  $target_file = './images/' . $_FILES['image']['name'];
  // If image upload is successful display the image else display an error message.
  if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
  ?>
    <img src=<?= $target_file ?> alt='#'>
  <?php
  }
  else {
  ?>
    <p>Not uploaded successfully</p>
<?php
  }
}
if (isset($_POST['submit'])) {
  $number = $_POST['phone_number'];
  $message = '';
  $len = strlen($number);
  $check_91 = substr($number, 0, 3);
  if ($check_91 !== '+91' or $len !== 13) {
    $message = 'Invalid number';
  }
  else {
    $message = 'Number is submitted successfully ' . 'the number is ' .
      $number;
  }
}
?>
<p><?= $message ?></p>
