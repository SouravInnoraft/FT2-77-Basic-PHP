<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Six</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="container">
    <?php
    include "number.php";
    include "email.php";
    ?>
    <h1>My Form</h1>
    <form action="six.php" method="post" enctype="multipart/form-data">
        <label for="First_Name">Last Name</label>
        <input type="text" name="First_Name" id="t1" pattern="[A-Za-z]+" placeholder="Sourav" required>
        </span>
        <label for="Last_Name">Last Name</label>
        <input type=" text" name="Last_Name" id="t2" pattern="[A-Za-z]+" placeholder="Chandra" required>
        <label for="Full_Name">Full Name</label>
        <input type="text" name="Full_Name" value="" disabled id="t3">
        <textarea rows="10" cols="40" name="comment" placeholder="Enter Marks of students here"></textarea>
        <input type="text" name="phone_number" minlength="13" maxlength="13" value="+91" placeholder="Enter mobile number">
        <input type="text" name="email" placeholder="submit-email">
        <input type="file" name="image">
        <input type="submit" name="submit" class="submit">
    </form>
    <table>
        <?php
        include "input.php";
        ?>
    </table>
    <?php
    include "form.php";
    ?>
    <script src="script.js"></script>
    <?php
    if ($message !== "Invalid number") {
        include "pdf.php";
    }
    ?>
</body>

</html>
