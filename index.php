<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Two</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <h1>My Form</h1>
  <form action="/" method="post" enctype="multipart/form-data">
    <label for="First_Name">First Name</label><br>
    <input type="text" name="First_Name" id="t1" pattern="[A-Za-z]+"
    placeholder="Sourav" required><span class="error">*<?php echo "$fnameErr"; ?>
    </span><br>
    <label for="Last_Name"">Last Name</label><br>
        <input type=" text" name="Last_Name" id="t2" pattern="[A-Za-z]+"
       placeholder="Chandra" required><br>
      <label for="Full_Name">Full Name</label><br>
      <input type="text" name="Full_Name" value="" disabled id="t3"><br>
      <input type="file" name="image"><br>
      <input type="submit" name='submit'>
  </form>
</body>
<?php
include "form.php";
?>
<script src="script.js"></script>

</html>
