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
    <html lang="en">

    <head>
        <?php include 'modules/head.php'; ?>
        <title>CS 313 | 05 Teach: STYLED Scripture Querying</title>
    </head>

    <body>
        <header>
            <div id="title">
                <title>CS 313 | 05 Prove: Scripture DB & Form</title>
                <h3>Kimberly Llanos</h3>
                <h1>CS 313:02 W05 Teach</h1>
                <?php echo date('l, F j, Y') ?>
            </div>

            <nav>
                <?php include 'modules/nav.php'; ?>
            </nav>
        </header>

        <main>
            <div class="container">
                <div clas="container-text">
                    <h2>Scripture DB & Form</h2>
                    <h2>Core Requirements</h2>
                    <p>
                        *Create a new database table called "Scriptures."
                        <br>*Insert scriptures (along with the text of the verse as content) into your database.
                        <br>*Create a PHP page to query db. <br>*Add the following: "Scripture Resources" page heading. Bold ea. scripture verse and chapter separated by a hyphen, then list content of the scripture in quotes.<br>***For more core requirements details, <a href="docs\05-CS313-Teach-INSTRUCTIONS.pdf">click here</a>.
                        <br><br>
                    </p>
                    <h2>Stretch Challenge</h2>
                    <p>
                        *Create a PHP form to search for a book and display all the scriptures in your database that match that book.
                        <br>*Change your results page so that it only lists the book, chapter, and verse of the scripture (not the content), but make that text a link. Have the link lead to a "Scripture Details" page where the user can see the content for the selected scripture.
                        <br>*Build out the Scripture Details page. It should display the reference and the content for the scripture that was clicked.
                        <br>***For more stretch challenges details, <a href="docs\05-CS313-Teach-INSTRUCTIONS.pdf">click here</a>.
                    </p>
                </div>


                <form action="" method="post">
                    Book: <input type="text" name="book">
                    <input type="submit" name="submit" value="Submit">
                </form>


                <?php
            if($_POST['book'] != "")
            {
                foreach ($db->query('SELECT * FROM scriptures WHERE scriptures_book =\'' . $_POST['book'] . '\'') as $row)
                {
                echo "<strong>" . $row['scriptures_book'] . " " . $row['scriptures_chapter'] . ":" . $row['scriptures_verse'] . " - </strong>";
                echo "<a href='scriptureDetails.php?id=". $row['scriptures_id'] . "'> 'Scripture Details' </a>";
                echo '<br/>';
                }
            }

            ?>
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
