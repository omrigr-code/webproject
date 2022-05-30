<?php

session_start();

if (empty($_SESSION["email"])) {
    die("Protected Page");
}

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
        <div class="container-fluid">
            <div class="row rowwidth">
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <img class="img-me" src="/images/cookie-recipes1.jpg">
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="img-me center">
                        <h1 id="first">The Master's</h1>
                        <h5 id="first1">Leading To Tastier World</h5>
                        <a href="#Idea"><button class="btn">Learn More </button></a>
                        <div class="arrow">
                            <span></span>
                            <span></span>
                            <span></span>

                        </div>
                    </div>
                    <h5 class="center" id="first2">See The Master's in action</h5>
                    <video width="500" height="340" autoplay loop class="centerAudio">
                        <source src="/images/videoplayback.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <img class="img-me" src="/images/Swiss House _ سويس هاوس.jpg">
                </div>
            </div>
        </div>
    </section>

    <div class="container-fluid">
        <div class="row">
            <div class="div">

            </div>
        </div>
    </div>

    <section id="Idea">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="Howheader">
                        <h1>How Does It Work</h1>
                        <p>Want to cook your own perfect meal ?!
                            On our site you can get different and varied recipes</p>
                    </div>
                </div>
            </div>

        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <img src="/images/first mealjpg.jpg" alt="firstmeal" style="width: 280px; height: 290px;">
                    <h1>Starter</h1>
                    <p>The first course opens the meal and leaves a taste of more.</p>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <img src="/images/second meal.png" alt="firstmeal" style="width: 280px; height: 290px;">
                    <h1>Main</h1>
                    <p>The main course is the center of the meal, and represents the kitchen in the best way.</p>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <img src="/images/desert.png" alt="firstmeal" style="width: 280px; height: 290px;">
                    <h1>Dessert</h1>
                    <p>The dessert closes the meal and leaves a sweet taste for a fantastic meal.</p>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <img src="/images/Strawberry Cocktail_ Seven Year Itch.png" alt="firstmeal" style="width: 280px; height: 290px;">
                    <h1>Cocktail</h1>
                    <p>The cocktail accompanies the meal throughout and balances all the dishes.</p>
                </div>
            </div>
        </div>

    </section>

    <div class="container-fluid">
        <div class="row">
            <div class="div">

            </div>
        </div>
    </div>

    <section id="About">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 col-md-12">
                    <h1>Who Are We</h1> <br>
                    <p>Our company was founded in 1999 with the goal of training people to cook like the best chefs in
                        the world. <br>
                        Together with our team of experts we have built a number of meals by categories and by
                        difficulty levels. <br>
                        The company's vision is to produce a world - renowned Israeli cuisine. </p> <br>
                    <p>We Hope you enjoy our website and bring good food to the world.
                        Old guy said: "Bring man a fish, he want be hungry for a day. Teach him how to fish he won't be
                        hungry for life </p>

                </div>
                <div class="col-xl-6 col-md-12">
                    <form class="newsForm" id="contentForm">
                        <h1 style="color: #CC4949; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            Contact Us! <i class="fa-solid fa-paper-plane"></i></h1> <br>
                        <input name="FullName" type="text" class="feedback-input" placeholder="Full Name" />
                        <input name="Email" type="text" class="feedback-input" placeholder="Email" />
                        <textarea name="Subject" class="feedback-input" placeholder="Subject"></textarea>
                        <button type="button" class="btn btn-secondary" onclick='sendform()'> Send </button>
                        <input type="hidden" name="action" value="addContent">
                    </form>
                </div>
            </div>
        </div>
    </section>

</body>

</html>