<?php

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
<?php } else {
    echo 'Invalid marks';
  }
}
