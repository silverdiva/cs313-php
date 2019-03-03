<?php
class Patient {
    protected $conn;
    protected $data = array();
    function __construct() {

                    $db = new DB;
                    $db =  $db->get_db();
                    $db->conn = $db;
    }
   
    public function getPatient() {
                    $sql = "SELECT * FROM patient_2";
                    $queryRecords = pg_query($db->conn, $sql) or die("error to fetch patient data");
                    $data = pg_fetch_all($queryRecords);
                    return $data;
    }
}
?>