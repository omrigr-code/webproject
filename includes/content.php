<?php

require_once('database.php');

class Content
{
    public $FullName;
    public $Email;
    public $Subject;

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

    //Add a new Content
    public static function add_content($FullName,$Email,$Subject){
        global $database;
        $error=null;
        $sql="Insert into content(FullName,Email,Subject) values ('".$FullName."','".$Email."', '".$Subject. "')";
        $result=$database->query($sql);
         if (!$result)
            $error='Can not add content.';
        else{
            echo "Add Content Success! Thank you";
        }
        return $error;          
 }
}


