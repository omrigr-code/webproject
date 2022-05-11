<?php
 
require_once('PHP\config.php');

class Database{
    
    private $connection;
    
    public function __construct(){
        $this->open_db_connection();
    }
    private function open_db_connection(){
        error_reporting(E_ERROR);
        $this->connection=new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
        if ($this->connection->connect_error){
            $this->connection=null;
        }
    }
    public function get_connection(){
        return $this->connection;
    }

    //Query from Database
    public function query($sql){
        $result=$this->connection->query($sql);
        if (!$result){
                return null;
        }
        else{
            return $result;
        }
    }
}

?>