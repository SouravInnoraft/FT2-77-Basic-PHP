<?php

if (isset($_POST['submit'])) {
  $first_name = $_POST['First_Name'];
  $last_name = $_POST['Last_Name'];
  ?>
  <p>'Hello'<?="$first_name $last_name"?></p>;
<?php
}
