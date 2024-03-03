<div class="output">

  <!-- php code starts -->

  <?php

  // Displays the Full name.
  $name_regex = '/^[a-z]+$/i';
  $name_error = 0;
  if (isset($_POST['submit'])) {
    $first_name = $_POST['first_Name'];
    $last_name = $_POST['last_Name'];
    // Pattern matching for both first and last name.
    if (preg_match($name_regex, $first_name) && preg_match($name_regex, $last_name)) {
  ?>
      <p>Hello<?= " $first_name $last_name" ?></p>
    <?php
    } else {
    ?>
      <p>Hello An Error occured</p>
      <?php
      $name_error = 1;
    }
  }
  if (!$name_error) {
    // Displays the Marks in tabular manner.
    $regex_marks = '/^[a-z]+[ ]*\|[ ]*[0-9]{1,3}$/i';
    $marks_error = 0;
    if (isset($_POST['submit'])) {
      $input_value = $_POST['comment'];
      $input_data = explode("\n", $input_value);
      for ($i = 0; $i < count($input_data); $i++) {
        // Trimming any whitespaces at the beginning and end of the string.
        $input_data[$i] = trim($input_data[$i]);

        // Cleaning up spaces in the string.
        $input_data[$i] = preg_replace('/[ ]/', '', $input_data[$i]);
        if (!preg_match($regex_marks, $input_data[$i])) {
          $marks_error = 1;
      ?>
          <p>Incorrect Marks Format at input line number <?= $i + 1 ?></p>
        <?php
        }
      }
      if (!$marks_error) {
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
      } else {
        echo 'Invalid marks or subject type';
      }
    }
    if (!$marks_error) {
      // Uploads and displays image.
      $image_error = 0;
      if (
        isset($_POST['submit']) && isset($_FILES['image']) &&
        $_FILES['image']['error'] == UPLOAD_ERR_OK
      ) {
        $target_file = './images/' . $_FILES['image']['name'];
        // If image upload is successful display the image.
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
        ?>
          <img src=<?= $target_file ?> alt='#'>
        <?php
        } else {
        ?>
          <p>load not successfully</p>
      <?php
          $image_error = 1;
        }
      }
      if (!$image_error) {
        // Validates a phone number.
        if (isset($_POST['submit'])) {
          $number = $_POST['phone_number'];
          $message = '';
          $len = strlen($number);
          $check_91 = substr($number, 0, 3);
          if ($check_91 !== '+91' or $len !== 13) {
            $message = 'Invalid number';
          } else {
            $message = 'Number is submitted successfully ' . 'the number is ' . $number;
          }
        }
      }
      ?>
      <p><?= $message ?></p>
  <?php
    }
  }
  ?>
</div>
