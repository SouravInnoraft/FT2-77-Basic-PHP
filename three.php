<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Three</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container">
    <h1>My Form</h1>
    <form action="three.php" method="post" enctype="multipart/form-data">
      <label for="First_Name">First Name</label>
      <input type="text" name="First_Name" id="t1" pattern="[A-Za-z]+"
      placeholder="Sourav" required>
      </span>
      <label for="Last_Name">Last Name</label>
      <input type=" text" name="Last_Name" id="t2" pattern="[A-Za-z]+"
      placeholder="Chandra" required>
      <label for="Full_Name">Full Name</label>
      <input type="text" name="Full_Name" value="" disabled id="t3">
      <textarea rows="10" cols="42" name="comment"
      placeholder="Enter Marks of students here"></textarea>
      <input type="file" name="image">
      <input type="submit" name="submit" class="submit">
    </form>
    <table>
      <?php
      include "./input.php";
      ?>
    </table>
    <?php
    include "form.php";
    ?>
  </div>
  <script src="script.js"></script>
</body>

</html>
