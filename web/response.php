<?php
include("dbConnect.php");
class Employee {
    protected $conn;
    protected $data = array();
    function __construct() {

                    $db = new dbObj();
                    $connString =  $db->getConnstring();
                    $db->conn = $connString;
    }
   
    public function getEmployees() {
                    $sql = "SELECT * FROM employee";
                    $queryRecords = pg_query($db->conn, $sql) or die("error to fetch employees data");
                    $data = pg_fetch_all($queryRecords);
                    return $data;
    }
}
?>