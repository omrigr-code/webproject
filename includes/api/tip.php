<?php

require_once "../startup.php";
require_once "../class/review.php";

if ($_POST) {
    if ($_POST["score"] > 5 ||  1 > $_POST["score"]) {
        header("Content-Type: text/plain", true, 400);
        die("Score invalid range");
    }

    $review = new Review($_POST["tip"], $_POST["score"], $_POST["review"]);

    $reviewOk = $review->save($database);

    if (!$reviewOk) {
        header("Content-Type: text/plain", true, 400);
        die("Review not created");
    }

    echo ("Review created");
}
