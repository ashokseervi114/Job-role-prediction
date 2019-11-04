<?php

require_once("new_config.php");

class Database {
    
    public $dbconnect;
    
    function __construct(){
        $this->open_db_connection();
    }
 
    public function open_db_connection(){
        
           //$this->dbconnect = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
           $this->dbconnect = new mysqli(DB_HOSTNAME,DB_USERNAME,DB_PASSWORD,DB_NAME);

            if($this->dbconnect->connect_errno){
                die("Database Connection Failed!!!!!!" . $this->dbconnect->connect_errno);
            } 
        
    }
    
    // Submit Query // 
    public function query($sql) {
        $result = $this->dbconnect->query($sql);
        $this->confirm_query($result);
        return $result;
    }
    
    // Confirm Query //
    private function confirm_query($result){
        if(!$result){
            die("Query Failedd!!" . $this->dbconnect->errno);
        }
    }
    
    // Escape String //
    public function escape_string($string){
       $escaped_string =  $this->dbconnect->real_escape_string($string);
        return $escaped_string;
    }
    
    public function the_insert_id(){
        
        return mysqli_insert_id($this->dbconnect);
    }
    
    // Fetch Array //  //Check Whether this is working or not!!!!!!//
    public function fetch_array($result){
        return $this->dbconnect->fetch_assoc($result);
    }
 
}

// new database //
$database = new Database();



?>