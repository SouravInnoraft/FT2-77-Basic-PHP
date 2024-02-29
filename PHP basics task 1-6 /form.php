<?php
if (isset($_POST['submit'])) {
  if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
    $target_file = './images/' . $_FILES['image']['name'];
    // If image upload is successful display the image else display an error message.
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
      echo"<img src='$target_file' alt='#'>";
    }
    else {
      echo "not successful";
    }
  }
}
