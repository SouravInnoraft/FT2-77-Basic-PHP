<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .error{
        color:red;
    }
    table, th, td {
  border: 1px solid black;
  
  
}
th,td{
    padding: 15px;
}

</style>
<body>  
    <?php
    include "./input.php"
    ?>
    <h1>My Form</h1>
    <form action="/Three.php" method="post" enctype="multipart/form-data">
    <label for="First_Name">First Name</label><br>
    <input type="text" name="First_Name"  id="t1" pattern="[A-Za-z]+"><span class="error">*<?php echo "$fnameErr";?>
</span><br>
    <label for="Last_Name" pattern="[A-Za-z]+">Last Name</label><br>
    <input type="text" name="Last_Name" required id="t2"><br>
    <label for="Full_Name">Full Name</label><br>
    <input type="text" name="Full_Name" value="<?php echo isset($_POST['Last_Name'])? $_POST['First_Name'] .' '.$_POST['Last_Name']:'' ?>" disabled  id="t3"><br>
    <!-- <input type="file" name="image"><br> -->
    <textarea rows="10" cols="30" name="comment"></textarea><br><br>
    <input type="submit" name='submit'>
    </form>
    <table>
        <?php
         for ($x = 0; $x <count($myArray); $x++) {
            $sub=explode("|", $myArray[$x]);
            echo "
              <tr><th>Subject   </th>
              <th> Marks</th></tr>
              <tr>
              <td>$sub[0]  </td>
              <td>$sub[1]  </td>
            </tr>";
          }
        ?>
    </table>
</body>




</html>
