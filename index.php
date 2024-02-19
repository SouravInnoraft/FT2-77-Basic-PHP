<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Two</title>
</head>
<style>
    .error{
        color:red;
    }
</style>




<body>  
    <?php
    include "./form.php"
    ?>
    <h1>My Form</h1>
    <form action="/" method="post" enctype="multipart/form-data">
    <label for="First_Name">First Name</label><br>
    <input type="text" name="First_Name"  id="t1" pattern="[A-Za-z]+"><span class="error">*<?php echo "$fnameErr";?>
</span><br>
    <label for="Last_Name" pattern="[A-Za-z]+">Last Name</label><br>
    <input type="text" name="Last_Name" required id="t2"><br>
    <label for="Full_Name">Full Name</label><br>
    <input type="text" name="Full_Name" value="<?php echo isset($_POST['Last_Name'])? $_POST['First_Name'] .' '.$_POST['Last_Name']:'' ?>" disabled  id="t3"><br>
    <input type="file" name="image"><br>
    <input type="submit" name='submit'>
    </form>


 
 
</body>

 <?php
if($img_upload==="successful"){
    echo "<img src='$target_file' alt='#'>";
    echo "<br>";
    echo "Uploaded succesfully";

}else if($img_upload==="unsuccessful"){
    echo "<br>";
    echo "Uploaded not succesful";
}
 ?>


</html>
