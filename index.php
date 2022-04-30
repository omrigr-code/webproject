
<?php
require_once('database.php');
require_once('products.php');
//Conncet to DB
$database = new Database();
if ($database->get_connection()) {
    echo "Connection is OK <br>";
} else {
    die("Connection fails");
}
if ($_POST['action'] == 'addContent') {
    /*if($_POST['Subject']<=0){
        echo "Subject cant be less than zero.";
        die();
    }
    if($_POST['Amount']<=0){
        echo "Amount cant be less than zero.";
        die();
    }
    if(strlen($_POST['Email'])!=6){
        echo "Email cant be less than six.";
        die();
    }
    if(strlen($_POST['FullName'])!=6){
        echo "FullName cant be less than six.";
        die();
    }*/
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
    else
        echo 'Content was added';
}
?>
