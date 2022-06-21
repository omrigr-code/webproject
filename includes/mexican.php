<?php

session_start();

if (empty($_SESSION["email"])) {
    header("Location: /index.php", true, 302);
    die("Protected Page");
}

require_once "startup.php";
require_once "class/recipe.php";

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
    <link rel="stylesheet" href="/css/recipes.css" />
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

    <h1>Mexican Recepies</h1>

    <?php if ($recipes !== false) : ?>
        <?php foreach ($recipes as $recipe) : ?>
            <div class="recipe-card">
                <section id="head">
                    <div class="container-fluid">
                        <div class="row rowwidth">
                            <div class="col-lg-6 col-md-12">
                                <h1><?php echo ($recipe->title); ?></h1>
                                <p><?php echo ($recipe->description); ?></p>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <img class="img-me" src="/images/recipes/mexican/<?php echo ($recipe->id . ".png"); ?>" alt="main picture" height="700">
                            </div>
                        </div>
                    </div>
                </section>
                <section id="info">
                    <div class="container-fluid">
                        <div class="row ">
                            <div class="col-xl-4 col-lg-12 col-md-12 box">
                                <img class="img-me" src="/images\Ingridients.jpeg" alt="main picture">
                                <h6>Ingredients</h6>
                                <p><?php echo ($recipe->ingredients_count); ?></p>
                            </div>
                            <div class="col-xl-4 col-lg-12 col-md-12 box">
                                <img class="img-me" src="/images\Time.jpeg" alt="main picture">
                                <h6>Total time</h6>
                                <p><?php echo ($recipe->total_time); ?></p>
                            </div>
                            <div class="col-xl-4 col-lg-12 col-md-12 box">
                                <img class="img-me" src="/images\Difficulty.jpeg" alt="main picture">
                                <h6>Difficulty</h6>
                                <p><?php echo ($recipe->difficulty); ?></p>
                            </div>

                        </div>
                    </div>

                </section>
                <div class="accordion" id="Description">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                Ingredients
                            </button>
                        </h2>
                        <div id="collapseOne" class=" collapse " aria-labelledby="headingOne" data-bs-parent="#Description">
                            <div class="accordion-body">
                                <?php echo ($recipe->getHtmlIngredients()); ?>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                preparation method
                            </button>
                        </h2>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#Description">
                            <div class="accordion-body">
                                <?php echo ($recipe->getHtmlPreparationMethod()); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</body>

</html>