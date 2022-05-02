<?php

require_once('database.php');

class Tips
{
    public $Rate;
    public $Content;
    public $Date;

    //Tostring

    //Get Property

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
    /*
    //Array to properties
    private function has_attribute($attribute)
    {
        $object_properties = get_object_vars($this);
        return array_key_exists($attribute, $object_properties);
    }
    private function instantation($tips_array)
    {
        foreach ($product_array as $attribute => $value) {
            if ($result = $this->has_attribute($attribute)) {
                $this->$attribute = $value;
            }
        }
    }

    //Fetch All Tips
    public static function fetch_tipss()
    {
        global $database;
        $sql = "select * from products";
        $result = $database->query($sql);
        $products =[];
        if ($result) {
            $i = 0;
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $product = new Content();
                    $product->instantation($row);
                    $products[$i] = $product;
                    $i += 1;
                }
            }
        }
        return $products;
    }*/
    //Add a new Tips
    public static function add_tip($Rate,$Content){ //$Date){
        global $database;
        $error=null;
        $sql="Insert into tips(Rate,Content) values ('".$Rate."','".$Content."')";
        $result=$database->query($sql);
         if (!$result)
            $error='Can not add tips.  Error is:'.$database->get_connection()->error;
        else{
            echo "Add Tip Success!";
        }
        return $error;          
 }
}


