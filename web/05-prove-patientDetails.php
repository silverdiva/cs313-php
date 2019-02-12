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
                <title>CS 313 | 05 Prove: Patient Details Page </title>
                <h3>Kimberly Llanos</h3>
                <h1>CS 313:02 W05 Prove (Patient Details)</h1>
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
    foreach ($db->query('SELECT * FROM scriptures WHERE scriptures_id =\'' . $_GET['id'] . '\'') as $row)
    {
    echo "<strong>" . $row['scriptures_book'] . " " . $row['scriptures_chapter'] . ":" . $row['scriptures_verse'] . " - </strong>";
    echo "\"" . $row['scriptures_content'] . "\"";
    echo '<br/>';
    }
}
?>
        </div>
        <?php include 'modules/footer.php';?>
    </body>

    </html>