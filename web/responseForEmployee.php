<?php
include("dbConnect.php");
class Employee {
    protected $conn;
    protected $data = array();
    function __construct() {

                    $db = new DB;
                    $db =  $db->get_db();
                    $db->conn = $db;
    }
   
    public function getEmployees() {
                    $sql = "SELECT * FROM employee";
                    $queryRecords = pg_query($db->conn, $sql) or die("error to fetch employees data");
                    $data = pg_fetch_all($queryRecords);
                    return $data;
    }
}
?>