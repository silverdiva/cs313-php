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
	//print_r for debugging
	print_r($ex);
}
  function __destruct() {
  // __destruct() : close connection when done
    if ($db->stmt !== null) { $db->stmt = null; }
    if ($db->pdo !== null) { $db->pdo = null; }
  }

  function start() {
  // start() : auto-commit off

    $db->pdo->beginTransaction();
  }

  function end($commit=1) {
  // end() : commit or roll back?

    if ($commit) { $db->pdo->commit(); }
    else { $db->pdo->rollBack(); }
  }
 
  function exec($sql, $data=null) {
  // exec() : run insert, replace, update, delete query
  // PARAM $sql : SQL query
  //       $data : array of data
 
    try {
      $db->stmt = $db->pdo->prepare($sql);
      $db->stmt->execute($data);
      $db->lastID = $db->pdo->lastInsertId();
    } catch (Exception $ex) {
      $db->error = $ex;
      return false;
    }
    $db->stmt = null;
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
      $db->stmt = $db->pdo->prepare($sql);
      $db->stmt->execute($cond);
      if (isset($key)) {
        $result = array();
        if (isset($value)) {
          while ($row = $db->stmt->fetch(PDO::FETCH_NAMED)) {
            $result[$row[$key]] = $row[$value];
          }
        } else {
          while ($row = $db->stmt->fetch(PDO::FETCH_NAMED)) {
            $result[$row[$key]] = $row;
          }
        }
      } else {
        $result = $db->stmt->fetchAll();
      }
    } catch (Exception $ex) {
      $db->error = $ex;
      return false;
    }
    $db->stmt = null;
    return $result;
  }
}
?>