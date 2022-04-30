<?php

require_once('database.php');

class Content
{
    public $FullName;
    public $Email;
    public $Subject;

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
    private function instantation($product_array)
    {
        foreach ($product_array as $attribute => $value) {
            if ($result = $this->has_attribute($attribute)) {
                $this->$attribute = $value;
            }
        }
    }

    //Fetch All Users
    public static function fetch_products()
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
    //Add a new Product
    public static function add_content($FullName,$Email,$Subject){
        global $database;
        $error=null;
        $sql="Insert into content(FullName,Email,Subject) values ('".$FullName."','".$Email."', '".$Subject. "')";
        $result=$database->query($sql);
         if (!$result)
            $error='Can not add product.  Error is:'.$database->get_connection()->error;
        else{
            echo "Add Content Success!";
        }
        return $error;          
 }
}


