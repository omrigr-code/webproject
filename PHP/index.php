<?php
require_once('database.php');
require_once('products.php');
require_once('Tips.php');

//Conncet to DB
$database = new Database();
if ($database->get_connection()) {
    
} else {
    die("Connection fails");
}

if ($_POST['action'] == 'addContent') {
    if(empty($_POST['FullName'])){
        echo "FullName cant be empty";
        die();
    }
    if(!filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL)){
        echo "Please fill in valid email";
        die();
    }
    if((empty($_POST['Subject'])) || (is_numeric($_POST['Subject'])) ){
        echo 'Please fill in Subject, Subject cant be with Numbers';
        die();
    }

    $FullName = $_POST['FullName'];
    $Email = $_POST['Email'];
    $Subject = $_POST['Subject'];
    try {
        $error = Content::add_content($FullName, $Email, $Subject);
    } catch (\Throwable $th) {
        $error = 'Content already exsists.';
    }
    if ($error)
        echo $error;
}
else {
    $Rate = $_POST['Rate'];
    $TipName = $_POST['TipName'];
    $Content = $_POST['Content'];
    $Format = "Y-m-d H:i:s";  
    $Date=date( $Format);
    try {
        $error = Tips::add_tip($TipName,$Rate,$Content,$Date);
    } 
    catch (\Throwable $th) {
        $error = 'Tip already exsists.';
    }
    if ($error)
        echo $error;
}

?>















