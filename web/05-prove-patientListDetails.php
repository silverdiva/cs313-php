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
    </head>

    <body>
        <header>
            <div id="title">
                <title>CS 313 | 05 Prove: Chiro Patient Details</title>
                <h3>Kimberly Llanos</h3>
                <h1>CS 313:02 W05 Prove: Patient Details</h1>
                <?php echo date('l, F j, Y') ?>
            </div>

            <nav>
                <?php include 'modules/nav.php'; ?>
            </nav>
        </header>
        
        
        <div class="container">
            <?php
if($_GET['id'] != "")
{
    foreach ($db->query('SELECT patient_firstname, patient_lastname, experience_treatment, experience_office, patient_id, experience_id
    FROM patient_2
    INNER JOIN patient_experience ON patient_2.patient_id = patient_experience.experience_id;') as $row)
    {
    echo "<strong>" . $row['patient_firstname'] . " " . $row['patient_lastname']  . " - </strong>";
    echo "\"" . $row['exerience_office'] . "\"" . $row['experience_treatment'] 
    echo '<br/>';
    }
}
?>
        </div>
        <?php include 'modules/footer.php';?>
    </body>

    </html>
