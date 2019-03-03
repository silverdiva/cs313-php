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
		<title>CS 313 | 05 Prove: Chiro Patient List</title>
	</head>

	<body>
		<header>
			<div id="title">
				<title>CS 313 | 05 Prove: Chiropractic Patient List</title>
				<h3>Kimberly Llanos</h3>
				<h1>CS 313:02 W05 Prove</h1>
				<?php echo date('l, F j, Y') ?>
			</div>

			<nav>
				<?php include 'modules/nav.php'; ?>
			</nav>
		</header>

		<div class="container">
			<h3>Employee Test:</h3>
			<li><a href="employee.php">Return Data as a Table</a></li>

			<h3>Stock Test:</h3>
			<li><a href="stock.php">Return Data as a Table</a></li>

			<h3>Contact Test:</h3>
			<li><a href="contact.php">Return Data as a Table</a></li>


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
