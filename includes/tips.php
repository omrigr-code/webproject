<?php

session_start();

if (empty($_SESSION["email"])) {
    header("Location: /index.php", true, 302);
    die("Protected Page");
}

require_once "startup.php";
require_once "class/tip.php";

$tips = Tip::GetAllTips($database);

?>

<!DOCTYPE html>
<html lang="he">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>The Master's page</title>
    <link rel="stylesheet" href="/css/navbar.css" />
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="/css/tips.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/82bc52e7cb.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        function saveScore(id, score) {
            $("#score").val(score);
            $("#tip").val(id);
        }

        function saveReview() {
            event.preventDefault();

            const form = $("#TipsForm").serialize();

            $.ajax({
                url: "/includes/api/tip.php",
                method: "POST",
                cache: "false",
                data: form,
                complete: function(data) {
                    switch (data.status) {
                        case 200:
                            alert(data.responseText);
                            location.reload();
                            break;
                        case 400:
                            alert(data.responseText);
                            break;
                        case 500:
                            alert("Server side error");
                            break;
                    }
                }
            });
        }
    </script>
</head>

<body>
    <div class="container-fluid bottom">
        <div class="row">
            <nav class="navbar fixed-top">
                <div class="col-xl-2 col-md-2 logo">Master's</div>
                <div class="col-xl-4 iconbar">
                    <a href="www.facebook.com"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="www.instergram.com"><i class="fa-brands fa-instagram-square"></i></a>
                    <a href="mailto:tomer233@hotmail.com"><i class="fa-solid fa-envelope"></i></a>
                    <a href="www.youtube.com"><i class="fa-brands fa-youtube"></i></i></a>
                </div>
                <ul class="col-xl-6 col-md-8 nav-links">
                    <input type="checkbox" id="checkbox_toggle" />
                    <label for="checkbox_toggle" class="hamburger">&#9776;</label>
                    <div class="menu">
                        <li><a href="/includes/home.php">Home</a></li>
                        <li><a href="/includes/home.php#Idea">Idea</a></li>
                        <li><a href="/includes/home.php#About">About Us</a></li>
                        <li class="services">
                            <a>Recipes</a>
                            <ul class="dropdown1">
                                <li><a href="/includes/mexican.php">Mexican</a></li>
                                <li><a href="/includes/italy.php">Italian</a></li>
                                <li><a href="/includes/israel.php">Israeli</a></li>
                            </ul>
                        </li>
                        <li><a href="/includes/tips.php">Tips</a></li>
                        <li><a href="/includes/user.php">User Page</a></li>
                        <li><a href="/includes/api/logout.php">Logout</a></li>
                    </div>
                </ul>
            </nav>
        </div>
    </div>

    <div class="modal fade" id="commentModal" tabindex="-1" aria-labelledby="modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal">Thank you for your ranking, you can add a comment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" action="" id="TipsForm">
                    <input type="hidden" id="score" name="score">
                    <input type="hidden" id="tip" name="tip">
                    <div class="modal-body">
                        <input type="text" id="review" name="review" placeholder="Please enter your comment">
                    </div>
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" value="sendtip" onclick='saveReview();'>Save Comment</button>
                </div>
            </div>
        </div>
    </div>

    <section id="Tips">
        <div class="container-fluid">
        <?php $x = 0; ?>
        <?php if ($tips !== false) : ?>
            <?php foreach ($tips as $tip) : ?>
                <?php if ($x === 0) {
                    echo ("<div class=\"row\">");
                } ?>
                <div class="col-lg-4 col-md-12 column">
                    <img class="img-me" src="/images/tips/<?php echo ($tip->photo); ?>" alt="<?php echo ($tip->title); ?>" height="350">
                    <h1><?php echo ($tip->title); ?></h1>
                    <p><?php echo ($tip->description); ?></p><br>
                    <div class="Ranking_artical special">
                        <h3>Avg score: <?php echo ($tip->score); ?></h3>
                        <p>Rank this Tip</p>
                        <label> <i class="fa-solid fa-star">5</i><input type="radio" data-bs-toggle="modal" data-bs-target="#commentModal" onclick='saveScore(<?php echo ($tip->id); ?>, 5);' name="<?php echo ($tip->id); ?>" /> </label>
                        <label> <i class="fa-solid fa-star">4</i><input type="radio" data-bs-toggle="modal" data-bs-target="#commentModal" onclick='saveScore(<?php echo ($tip->id); ?>, 4);' name="<?php echo ($tip->id); ?>" /> </label>
                        <label> <i class="fa-solid fa-star">3</i><input type="radio" data-bs-toggle="modal" data-bs-target="#commentModal" onclick='saveScore(<?php echo ($tip->id); ?>, 3);' name="<?php echo ($tip->id); ?>" /> </label>
                        <label> <i class="fa-solid fa-star">2</i><input type="radio" data-bs-toggle="modal" data-bs-target="#commentModal" onclick='saveScore(<?php echo ($tip->id); ?>, 2);' name="<?php echo ($tip->id); ?>" /> </label>
                        <label> <i class="fa-solid fa-star">1</i><input type="radio" data-bs-toggle="modal" data-bs-target="#commentModal" onclick='saveScore(<?php echo ($tip->id); ?>, 1);' name="<?php echo ($tip->id); ?>" /> </label>
                    </div>
                </div>
                <?php $x++ ?>
                <?php if ($x === 3) {
                    echo ("</div>");
                    $x = 0;
                } ?>
            <?php endforeach; ?>
        <?php endif; ?>
        <?php if ($x !== 0) {
            echo ("</div>");
        } ?>
        </div>
    </section>

</body>

</html>