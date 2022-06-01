<?php

session_start();

if (empty($_SESSION["email"])) {
    die("Protected Page");
}

require_once "../php/startup.php";
require_once "../php/class/recipe.php";

$recipes = Recipe::GetAllRecipesByCategory($database, "mexican");

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/82bc52e7cb.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
                        <li><a href="/home.php">Home</a></li>
                        <li><a href="/home.php#Idea">Idea</a></li>
                        <li><a href="/home.php#About">About Us</a></li>
                        <li class="services">
                            <a>Recipes</a>
                            <ul class="dropdown1">
                                <li><a href="/mexican.php">Mexican</a></li>
                                <li><a href="/italy.php">Italian</a></li>
                                <li><a href="/israel.php">Israeli</a></li>
                            </ul>
                        </li>
                        <li><a href="/tips.php">Tips</a></li>
                        <li><a href="/user.php">User Page</a></li>
                        <li><a href="/api/logout.php">Logout</a></li>
                    </div>
                </ul>
            </nav>
        </div>
    </div>

    <h1>Mexican Recepies</h1>

    <?php if ($recipes !== false) : ?>
        <?php foreach ($recipes as $recipe) : ?>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?php echo ($recipe->title); ?></h5>
                    <p class="card-text"><?php echo ($recipe->getHtml()); ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</body>

</html>