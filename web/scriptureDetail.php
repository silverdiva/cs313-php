<?php
//start session to store credentials
session_start();
try
{
  $dbUrl = getenv('DATABASE');

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
    <html lang="en">

    <head>
        <?php include 'modules/head.php';?>
        <title>CS 313 | 05 Teach: Scripture DB & Form (Details Page)</title>
    </head>

    <body>
        <header>
            <div id="title">
                <title>CS 313 | 05 Teach: Scripture DB & Form </title>
                <h3>Kimberly Llanos</h3>
                <h1>CS 313:02 Week 5 Teach</h1>
                <?php echo date('l, F j, Y') ?>
            </div>
            <nav>
                <?php include 'modules/nav.php';?>
            </nav>
        </header>

        <main>
            <div id="container">
                <div clas="container-text">
                    <h2>Stretch Challenge: Scripture Details</h2>
                    <p>
                      *Change your results page so that it only lists the book, chapter, and verse of the scripture (not the content), but make that text a link. Have the link lead to a "Scripture Details" page where the user can see the content for the selected scripture.
                        <br>*Build out the Scripture Details page. It should display the reference and the content for the scripture that was clicked.
                        <br>***For more stretch challenges details, <a href="docs\05-CS313-Teach-INSTRUCTIONS.pdf">click here</a>.
                    </p>
                    
                    
                    <h2>Scripture Details</h2>
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
            </div>
        </main>
        <footer>
            <?php include 'modules/footer.php';?>
        </footer>
        <!-- JavaScript using jQuery library -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
        <script src="scripts/currentDate.js">
        </script>
    </body>
</html>
