<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>My Form</h1>
    <form action="/Three.php" method="post" enctype="multipart/form-data">
        <label for="First_Name">First Name</label><br>
        <input type="text" name="First_Name" id="t1" pattern="[A-Za-z]+" placeholder="Sourav"><span class="error">*
        </span><br>
        <label for="Last_Name">Last Name</label><br>
        <input type="text" name="Last_Name" pattern="[A-Za-z]+" required id="t2" placeholder="Chandra"><br>
        <label for="Full_Name">Full Name</label><br>
        <input type="text" name="Full_Name" disabled id="t3"><br>
        <input type="file" name="image"><br>
        <textarea rows="10" cols="30" name="comment"></textarea><br><br>
        <input type="submit" name='submit'>
    </form>
    <table>
        <?php
        include "./input.php";
        ?>
    </table>
    <script src="script.js"></script>
</body>
</html>
