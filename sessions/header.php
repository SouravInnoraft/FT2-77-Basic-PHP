<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>
  <p>firstname <?=
                $_SESSION["fname"];
                ?></p>
  <p>Lastname
    <?=
    $_SESSION["lname"];
    ?>
  </p>
  <p>Email
    <?=
    $_SESSION["email"];
    ?>
  </p>
  <a href="logout.php"></a>
</body>

</html>
