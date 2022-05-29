<?php

require_once('database.php');

class Tips
{
    public $TipName;
    public $Rate;
    public $Content;
    public $Date;

    // //Setter
    public function set($property, $value)
    {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    }
    //Getter
    public function get($property, $value)
    {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }
 
    //Add a new Tips
    public static function add_tip($TipName,$Rate,$Content,$Date){
        global $database;
        $error=null;
        $sql="Insert into tips(TipName,Rate,Content,Date) values ('".$TipName."','".$Rate."','".$Content."','".$Date."')";
        $result=$database->query($sql);
         if (!$result)
            $error='Can not add tips.';
        else{
            echo "Add Tip Success!";
        }
        return $error;          
 }
}


