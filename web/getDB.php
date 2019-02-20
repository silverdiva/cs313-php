<?php
function get_db() {
	try {
	$db = NULL;
	$db = parse_url(getenv("DATABASE_URL"));
	$db["path"] = ltrim($db["path"], "/");
	$pdo = new PDO("pgsql:" . sprintf(
		"host=%s;port=%s;user=%s;password=%s;dbname=%s",
		$db["host"],
		$db["port"],
		$db["user"],
		$db["pass"],
		ltrim($db["path"], "/")
	));
	}
	catch (PDOException $ex)
    {
        echo 'Error!: ' . $ex->getMessage();
        die();
    }
	return $pdo;
}
?>