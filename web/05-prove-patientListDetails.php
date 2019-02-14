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
                <h1>CS 313:02 W05 Prove: Patient List Details</h1>
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

        <footer>
            <?php include 'modules/footer.php'; ?>
        </footer>
        <!-- JavaScript using jQuery library -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
        <script src="scripts/scripts.js"></script>
    </body>

    </html>
