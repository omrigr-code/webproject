<?php

if ($_POST) {
    $error = NULL;
    //check if sent data is not empty    
    if (!$_POST['name']) {
        $error .= "Error:  The name is required.<br>";
    }
    if (empty($_POST['email'])) {
        $error .= "Error: The email is required.<br>";
    }
    if (!$_POST['subject']) {
        $error .= "Error: The subject is required.<br>";
    }

    //check if email is valid
    if ($_POST['email'] && !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $error .= "Error: Invalid email format";
    }

    //print information
    if (isset($error)) {
        echo $error;
    } else {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject   = $_POST['subject'];
        echo 'Hello ' . $name . '.  <p>Your email is:' . $email . '.</p>  
                        <p>Your subject is:' . $subject . '</p>';
    }
}
