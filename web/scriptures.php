<?php
/**********************************************************
* File: dbConnect.php
* Author: Br. Burton
* 
* Description: Shows how to connect using either local
* OR Heroku credentials, depending on whether the code
* is executing at heroku.
***********************************************************/
function get_db() {
	$db = NULL;
	try {
		// default Heroku Postgres configuration URL
		$dbUrl = getenv('DATABASE_URL');
		if (!isset($dbUrl) || empty($dbUrl)) {
			// example localhost configuration URL with user: "ta_user", password: "ta_pass"
			// and a database called "scripture_ta"
			$dbUrl = "postgres://postgres:postgres@localhost:5432/postgres";
			// NOTE: It is not great to put this sensitive information right
			// here in a file that gets committed to version control. It's not
			// as bad as putting your Heroku user and password here, but still
			// not ideal.
			
			// It would be better to put your local connection information
			// into an environment variable on your local computer. That way
			// it would work consistently regardless of whether the application
			// were running locally or at heroku.
		}
		// Get the various parts of the DB Connection from the URL
		$dbopts = parse_url($dbUrl);
		$dbHost = $dbopts["host"];
		$dbPort = $dbopts["port"];
		$dbUser = $dbopts["user"];
		$dbPassword = $dbopts["pass"];
		$dbName = ltrim($dbopts["path"],'/');
		// Create the PDO connection
		$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
		// this line makes PDO give us an exception when there are problems, and can be very helpful in debugging!
		$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	}
	catch (PDOException $ex) {
		// If this were in production, you would not want to echo
		// the details of the exception.
		echo "Error connecting to DB. Details: $ex";
		die();
	}
	return $db;
}

    <!DOCTYPE html>
    <html>

    <head>
        <?php include 'modules/head.php'; ?>
        <title>CS 313 | 05 Teach: RAW Scripture Querying</title>
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

        <div class="container">

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

        <?php include 'modules/footer.php';?>

    </body>

    </html>
