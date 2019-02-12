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

    <!DOCTYPE html>
    <html>

    <head>
        <?php include 'modules/head.php'; ?>
        <title>CS 313 | 05 Prove: Chiro Patient Search</title>
    </head>

    <body>
        <header>
            <div id="title">
                <title>CS 313 | 05 Prove: Chiropractic Patient Search</title>
                <h3>Kimberly Llanos</h3>
                <h1>CS 313:02 W05 Prove</h1>
                <?php echo date('l, F j, Y') ?>
            </div>

            <nav>
                <?php include 'modules/nav.php'; ?>
            </nav>
        </header>

        <div class="container">

            <form action="" method="post">

                Patient Name: <input type="text" name="name">
                <input type="submit" name="submit" value="Submit">
            </form>


            <?php
if($_POST['firstname'] != "")
{
    //create a variable above the foreach with the value of the query string and 
    //then do an alert on the query and then give the variable to the query command
    $queryString = 'SELECT * FROM patient_2 WHERE patient_firstname =\'' . $_POST['firstname'] . '\'';

    echo "<h1>" . $queryString . "/<h1>";
    
    foreach ($db->query($queryString) as $row)
    foreach ($db->query('SELECT * FROM patient_2 WHERE patient_firstname =\'' . $_POST['firstname'] . '\'') as $row)
    {
    echo "<strong>" . $row['patient_firstname'] . " " . $row['patient_lastname'] . ":" . $row['patient_email'] . " - </strong>";
    echo "<a href='05-prove2-patientDetails.php?id=". $row['patient_id'] . "'> 'Patient Details' </a>";
    echo '<br/>';
    print_r($row);
    }
}

?>

        </div>

        <?php include 'modules/footer.php';?>

    </body>

    </html>
