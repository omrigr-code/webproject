<?php

require_once "../startup.php";
require_once "../class/review.php";

if ($_POST) {
    if ($_POST["score"] > 5 ||  1 > $_POST["score"]) {
        header("Content-Type: text/plain", true, 400);
        die("Score invalid range");
    }

    if ($_POST["review"] == "") {
        header("Content-Type: text/plain", true, 400);
        die("Review is too short");
    }

    if (strlen($_POST["review"]) > 255) {
        header("Content-Type: text/plain", true, 400);
        die("Review too long");
    }

    $review = new Review($_POST["tip"], $_POST["score"], $_POST["review"]);

    $reviewOk = $review->save($database);

    if (!$reviewOk) {
        header("Content-Type: text/plain", true, 400);
        die("Review not created");
    }

    echo ("Review created");
}
