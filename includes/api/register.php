<?php

require_once "../startup.php";
require_once "../class/user.php";

if ($_POST) {
    $data = [];

    if (strlen($_POST["email"]) > 255) {
        header("Content-Type: text/plain", true, 400);
        die("Email too long");
    }

    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        header("Content-Type: text/plain", true, 400);
        die("Email is invalid");
    }

    $data[] = $_POST["email"];

    if (strlen($_POST["password"]) < 8) {
        header("Content-Type: text/plain", true, 400);
        die("Password is too short");
    }

    $data[] = $_POST["password"];

    if (strlen($_POST["first_name"]) > 255) {
        header("Content-Type: text/plain", true, 400);
        die("First name too long");
    }

    if ($_POST["first_name"] == "") {
        header("Content-Type: text/plain", true, 400);
        die("First name can't be empty");
    }

    if (preg_match('~[0-9]+~', $_POST["first_name"])) {
        header("Content-Type: text/plain", true, 400);
        die("First name can't have numbers in it");
    }

    $data[] = $_POST["first_name"];

    if (strlen($_POST["last_name"]) > 255) {
        header("Content-Type: text/plain", true, 400);
        die("Last name too long");
    }

    if ($_POST["last_name"] == "") {
        header("Content-Type: text/plain", true, 400);
        die("Last name can't be empty");
    }

    if (preg_match('~[0-9]+~', $_POST["last_name"])) {
        header("Content-Type: text/plain", true, 400);
        die("Last name can't have numbers in it");
    }

    $data[] = $_POST["last_name"];

    if ($_POST["sex"] === "Male") {
        $data[] = "Male";
    } elseif ($_POST["sex"] === "Female") {
        $data[] = "Female";
    } else {
        header("Content-Type: text/plain", true, 400);
        die("Invalid sex");
    }

    if (strlen($_POST["age"]) > 130) {
        header("Content-Type: text/plain", true, 400);
        die("Age too large");
    }

    if (strlen($_POST["age"]) <= 0) {
        header("Content-Type: text/plain", true, 400);
        die("Age too small");
    }

    $data[] = $_POST["age"];

    $user = new User($data[0], $data[1], $data[2], $data[3], $data[4], $data[5]);

    $userCreated = $user->save($database);

    if (!$userCreated) {
        header("Content-Type: text/plain", true, 400);
        die("Email is taken");
    }

    session_start();

    $_SESSION["email"] = $_POST["email"];

    session_write_close();

    echo "Registerd";
}
