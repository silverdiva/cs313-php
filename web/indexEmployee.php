<?php
//start session to store credentials
session_start();
try
{
  $dbUrl = getenv('DATABASE_URL');
  $dbOpts = parse_url($dbUrl);
  $dbHost = $dbOpts["host"];
  $dbPort = $dbOpts["port"];
  $dbUser = $dbOpts["user"];
  $dbPassword = $dbOpts["pass"];
  $dbName = ltrim($dbOpts["path"],'/');

  $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}
?>
  
   <?php
    include("responseForEmployee.php");
    $this->newObj = new Employee;
    $this->emps = $newObj->getEmployees();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <title>Simple table listing using Postgres database</title>
</head>
<body>
  <div class="container">
    <div class="col-sm-6" style="padding-top:50px;">
        <div class="well">
            <h2>Simple table listing using PHP and Postgres database</h2>
        </div>
        <table id="employee_grid" class="table" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Salary</th>
                    <th>Age</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($emps as $key => $emp) :?>
                <tr>
                    <td><?php echo $emp['employee_name'] ?></td>
                    <td><?php echo $emp['employee_salary'] ?></td>
                    <td><?php echo $emp['employee_age'] ?></td>
                    <td><div class="btn-group" data-toggle="buttons"><a href="#" target="_blank" class="btn btn-warning btn-xs">Edit</a><a href="#" target="_blank" class="btn btn-danger btn-xs">Delete</a><a href="#" target="_blank" class="btn btn-primary btn-xs">View</a></div></td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>
    </div>
  </div>
</div>
</body>
</html>
