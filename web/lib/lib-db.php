<?php
class DB {
  private $pdo = null;
  private $stmt = null;
  public $error = "";
  public $lastID = null;

  function __construct() {
//start session to store credentials [Postgres db on Heroku app]
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

  $pdo = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
	//print_r for debugging
	print_r($ex);
}
  }
  function __destruct() {
  // __destruct() : close connection when done
    if ($stmt !== null) { $stmt = null; }
    if ($pdo !== null) { $pdo = null; }
  }

  function start() {
  // start() : auto-commit off

    $pdo->beginTransaction();
  }

  function end($commit=1) {
  // end() : commit or roll back?

    if ($commit) { $pdo->commit(); }
    else { $pdo->rollBack(); }
  }
 
  function exec($sql, $data=null) {
  // exec() : run insert, replace, update, delete query
  // PARAM $sql : SQL query
  //       $data : array of data
 
    try {
      $stmt = $pdo->prepare($sql);
      $stmt->execute($data);
      $lastID = $pdo->lastInsertId();
    } catch (Exception $ex) {
      $error = $ex;
      return false;
    }
    $stmt = null;
    return true;
  }

  function fetch($sql, $cond=null, $key=null, $value=null) {
  // fetch() : perform select query
  // PARAM $sql : SQL query
  //       $cond : array of conditions
  //       $key : sort in this $key=>data order, optional
  //       $value : $key must be provided, sort in $key=>$value order

    $result = false;
    try {
      $stmt = $pdo->prepare($sql);
      $stmt->execute($cond);
      if (isset($key)) {
        $result = array();
        if (isset($value)) {
          while ($row = $stmt->fetch(PDO::FETCH_NAMED)) {
            $result[$row[$key]] = $row[$value];
          }
        } else {
          while ($row = $stmt->fetch(PDO::FETCH_NAMED)) {
            $result[$row[$key]] = $row;
          }
        }
      } else {
        $result = $stmt->fetchAll();
      }
    } catch (Exception $ex) {
      $error = $ex;
      return false;
    }
    $stmt = null;
    return $result;
  }
}
?>