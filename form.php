<?php

$target_file = '';
$img_upload = '';
if (isset($_POST['submit'])) {
  if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
    $target_file = 'Uploads/' . ($_FILES['image']['name']);
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
      $img_upload = 'successful';
    } else {
      $img_upload = 'unsuccessful';
    }
  }
}
// If image upload is successful display the image else display an error message.
if ($img_upload === 'successful') {
  echo "<img src='$target_file' alt='#' class='display-image'>";

?>
<br>
<?php
  echo 'Uploaded succesfully';
} elseif ($img_upload === 'unsuccessful') {
  echo 'Uploaded not succesful';
}
?>
<br>
