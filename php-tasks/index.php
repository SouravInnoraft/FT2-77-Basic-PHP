<html lang='en'>

<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <title>All Assignments</title>
  <link rel='stylesheet' href='css/style.css'>
</head>

<body>
  <div class="container">
    <form action='/php-tasks/form_submit.php' method='post' enctype='multipart/form-data'>
      <h1>My Form</h1>
      <label for='first_name'>Last Name</label>
      <input type='text' name='first_name' id='t1'
      pattern='[A-Za-z]+' placeholder='Enter Your First Name' required>
      </span>
      <label for='last_name'>Last Name</label>
      <input type=' text' name='last_name' id='t2'
      pattern='[A-Za-z]+' placeholder='Enter Your Last Name' required>
      <label for='full_Name'>Full Name</label>
      <input type='text' name='full_Name' value='' disabled id='t3'>
      <textarea rows='10' cols='40'
      name='comment'placeholder='Enter Marks Subject|Marks pattern format'></textarea>
      <input type='text' name='phone_number' minlength='13' pattern="[+0-9]+"
      maxlength='13' value='+91' placeholder='Enter mobile number'>
      <input type='text' name='email' placeholder='submit-email'
       pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$">
      <input type='file' name='image'>
      <input type='submit' name='submit' class='submit'>
    </form>
  </div>
  <script src='Script/script.js'></script>
  <div class="display">
  </div>
</body>

</html>
