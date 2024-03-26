<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<?php
if(isset($_POST['submit'])){
session_start();
if($_SESSION['otp']==$_POST['otp']){
  header('location:password.php');
}
else{
  header('location:registration.php');
}
}
?>
<body>
  <form action="otpValidation.php" method="post">
    <label for="otp">Enter Otp</label>
    <input type="number" name="otp" minlength="4" maxlength="4" required>
    <input type="submit" value="submit" name="submit" class="button">
  </form>
</body>
</html>
