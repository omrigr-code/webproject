<?php

require_once "../php/startup.php";
require_once "../php/class/user.php";

session_start();

if (empty($_SESSION["email"])) {
    die("Protected Page");
}

$user = User::findByEmail($database, $_SESSION["email"]);

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
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

    <section id="home">
        <ul>
            <li>
                User ID: <?php echo ($user->id); ?>
            </li>
            <li>
                User Email: <?php echo ($user->email); ?>
            </li>
            <li>
                User First Name: <?php echo ($user->first_name); ?>
            </li>
            <li>
                User Last Name: <?php echo ($user->last_name); ?>
            </li>
            <li>
                User Sex: <?php echo ($user->sex); ?>
            </li>
            <li>
                User Age: <?php echo ($user->age); ?>
            </li>
        </ul>
    </section>
</body>

</html>