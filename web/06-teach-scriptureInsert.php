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
        <title>CS 313 | 06 TEACH: Scripture Insert</title>
    </head>

    <body>
        <header>
            <div id="title">
                <title>CS 313 | 06 TEACH: Scripture Insert</title>
                <h3>Kimberly Llanos</h3>
                <h1>CS 313:02 W06 TEACH Scripture Insert</h1>
                <?php echo date('l, F j, Y') ?>
            </div>

            <nav>
                <?php include 'modules/nav.php'; ?>
            </nav>
        </header>

        <div class="container">
            <h3>Insert a Scripture</h3>
            <form action="" method="post">
                Book: <input type="text" id="book_i" name="book">
                Chapter: <input type="text" id="chapter_i" name="chapter">
                Verse: <input type="text" id="verse_i" name="verse">
                Content: <input type="text" id="content_i" name="content">
                </form>
                <!--
                <input type="submit" name="submit" value="Submit">
                -->
            
               <!-- 
                <input type="text" id="book_i" placeholder="Book">
                <input type="number" id="chapter_i" placeholder="Chapter">
                <input type="number" id="verse_i" placeholder="Verse">
                <input type="text" id="content_i" placeholder="Content">
                -->
        
        <?php  ?>
        <input type="checkbox" name="faith" value="Faith" id="faith">Faith
        <br>
        <input type="checkbox" name="hope" value="Hope" id="hope">Hope
        <br>
        <input type="checkbox" name="charity" value="Charity" id="charity">Charity
        <br>
        <button id="btn_i">Go</button>

        <div id="output"></div>
    </div>
            

       <footer>
        <?php include 'modules/footer.php';?>
        </footer>
        
        <!-- JavaScript using jQuery library -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

    </body>

    </html>
