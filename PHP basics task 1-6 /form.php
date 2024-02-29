<?php
if (isset($_POST['submit']) && isset($_FILES['image']) &&
$_FILES['image']['error'] == UPLOAD_ERR_OK) {
    $target_file = './images/' . $_FILES['image']['name'];
    // If image upload is successful display the image else display an error message.
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
?>
      <img src=<?= $target_file ?> alt='#'>
    <?php
    } else {
    ?>
      <p>Not uploaded successfully</p>
<?php
    }
  }

