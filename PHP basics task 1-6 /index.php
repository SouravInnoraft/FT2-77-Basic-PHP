<html lang='en'>

<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <title>All Assignments</title>
  <link rel='stylesheet' href='./css/style.css'>
</head>

<body>
  <div class="container">
    <form action='form_submit.php' method='post' enctype='multipart/form-data'>
      <h1>My Form</h1>
      <label for='first_Name'>Last Name</label>
      <input type='text' name='first_Name' id='t1' pattern='[A-Za-z]+'
       placeholder='Enter Your First Name' required>
      </span>
      <label for='last_Name'>Last Name</label>
      <input type=' text' name='last_Name' id='t2' pattern='[A-Za-z]+'
      placeholder='Enter Your Last Name' required>
      <label for='full_Name'>Full Name</label>
      <input type='text' name='full_Name' value='' disabled id='t3'>
      <textarea rows='10' cols='40' name='comment'
      placeholder='Enter Marks of students here in Subject|Marks pattern format'></textarea>
      <input type='text' name='phone_number' minlength='13'
      maxlength='13' value='+91' placeholder='Enter mobile number'>
      <input type='text' name='email' placeholder='submit-email'>
      <input type='file' name='image'>
      <input type='submit' name='submit' class='submit'>
      </form>
  </div>
  <script src='./Script/script.js'></script>
  <div class="display">
  </div>
</body>

</html>
