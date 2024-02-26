<?php
$target_file = "";
$img_upload = "";
if (isset($_POST["submit"])) {
  if (isset($_FILES["image"]) && $_FILES["image"]["error"] == UPLOAD_ERR_OK) {
    $target_file = "Uploads/" . ($_FILES["image"]["name"]);
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
      $img_upload = "successful";
    } else {
      $img_upload = "unsuccessful";
    }
  }
}
if ($img_upload === "successful") {
  echo "<img src='$target_file' alt='#' class='display-image'>";
  echo "<br>";
  echo "Uploaded succesfully";
} else if ($img_upload === "unsuccessful") {
  echo "<br>";
  echo "Uploaded not succesful";
}

