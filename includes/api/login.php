<?php

require_once "../startup.php";
require_once "../class/user.php";

if ($_POST) {
    if (strlen($_POST["email"]) > 255) {
        header("Content-Type: text/plain", true, 400);
        die("Email too long");
    }

    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        header("Content-Type: text/plain", true, 400);
        die("Email is invalid");
    }

    if (strlen($_POST["password"]) < 8) {
        header("Content-Type: text/plain", true, 400);
        die("Password is too short");
    }

    $passwordOk = User::findByEmail($database, $_POST["email"])->verifyPassowrd($_POST["password"]);

    if (!$passwordOk) {
        header("Content-Type: text/plain", true, 400);
        die("Password is invalid");
    }

    session_start();

    $_SESSION["email"] = $_POST["email"];

    session_write_close();

    echo "Logged in";
}
