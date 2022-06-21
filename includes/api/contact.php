<?php

require_once "../startup.php";
require_once "../class/contact.php";

if ($_POST) {
    if (strlen($_POST["full_name"]) > 255) {
        header("Content-Type: text/plain", true, 400);
        die("Name too long");
    }

    if ($_POST["full_name"] === "") {
        header("Content-Type: text/plain", true, 400);
        die("Name too short");
    }

    if (preg_match('~[0-9]+~', $_POST["full_name"])) {
        header("Content-Type: text/plain", true, 400);
        die("Name can't have numbers in it");
    }

    if (strlen($_POST["email"]) > 255) {
        header("Content-Type: text/plain", true, 400);
        die("Email too long");
    }

    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        header("Content-Type: text/plain", true, 400);
        die("Email is invalid");
    }

    $contact = new Contact($_POST["email"], $_POST["full_name"], $_POST["subject"]);

    $contact->save($database);

    echo "Form sent!";
}
