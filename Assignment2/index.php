<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./Css/style.css">
</head>
<body>
  <div class="container">
    <form action="Database.php" method="post">
      <div class="row">
        <div class="col-25">
          <label for="employee_code">Employee code</label>
        </div>
        <div class="col-75">
          <input type="text" id="employee_code" name="employee_code" placeholder="Enter Employee code...">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="employee_code_name">Employee code name</label>
        </div>
        <div class=" col-75">
          <input type="text" id="employee_code_name" name="employee_code_name" placeholder="Enter Employee code name...">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="employee_domain">Employee domain</label>
        </div>
        <div class="col-75">
          <input type="text" id="employee_domain" name="employee_domain" placeholder="Enter Employee domain...">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="employee_id">Employee Id</label>
        </div>
        <div class="col-75">
          <input type="text" id="employee_id" name="employee_id" placeholder="Enter Employee Id...">
        </div>
      </div>
       <div class="row">
        <div class="col-25">
          <label for="employee_salary">Employee salary</label>
        </div>
        <div class="col-75">
          <input type="text" id="employee_salary" name="employee_salary" placeholder="Enter Employee salary...">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="employee_first_name">Employee first name</label>
        </div>
        <div class="col-75">
          <input type="text" id="employee_first_name" name="employee_first_name" placeholder="Enter Employee first name...">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="employee_last_name">Employee last name</label>
        </div>
        <div class="col-75">
          <input type="text" id="employee_last_name" name="employee_last_name" placeholder="Enter Employee last name...">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="graduation_percentile">Graduation Percentile</label>
        </div>
        <div class="col-75">
          <input type="text" id="graduation_percentile" name="graduation_percentile" placeholder="Enter graduation_percentile...">
        </div>
      </div>
      <div class="row">
        <input type="submit" value="Submit" name="submit">
      </div>
    </form>
  </div>
</body>
</html>
