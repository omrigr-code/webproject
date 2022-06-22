<?php

session_start();

require_once "startup.php";
require_once "class/user.php";

if (empty($_SESSION["email"])) {
    header("Location: /index.php", true, 302);
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/82bc52e7cb.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        function sendForm() {
            event.preventDefault();

            var form = $("#contactForm").serializeArray();

            $.ajax({
                url: "/includes/api/contact.php",
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

        document.addEventListener("DOMContentLoaded", function() {
            const settings = {
                "async": true,
                "crossDomain": true,
                "url": "https://cocktails3.p.rapidapi.com/random",
                "method": "GET",
                "headers": {
                    "X-RapidAPI-Key": "<?php echo ($env["api_key"]) ?>",
                    "X-RapidAPI-Host": "cocktails3.p.rapidapi.com"
                }
            };

            $.ajax(settings).done(function(response) {
                var cocktails = $("#cocktails");

                if (response.success == true) {
                    var header = $("<h3></h3>").appendTo(cocktails);

                    header.text(response.body[0].name);

                    var ol = $("<ol></ol>").appendTo(cocktails);

                    for (const ing of response.body[0].ingredients) {
                        var header = $("<li></li>").appendTo(ol);

                        header.text(ing)
                    }
                } else {
                    cocktails.text("Too many cocktails today! Get more tomorrow!");
                }
            });
        });
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

    <section>
        <div id="cocktails">

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
                    <form class="newsForm" id="contactForm">
                        <h1 style="color: #CC4949; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            Contact Us! <i class="fa-solid fa-paper-plane"></i></h1> <br>
                        <input name="full_name" type="text" class="feedback-input" placeholder="Full Name" value="<?php echo ($user->first_name . " " . $user->last_name); ?>" />
                        <input name="email" type="text" class="feedback-input" placeholder="Email" value="<?php echo ($user->email); ?>" />
                        <textarea name="subject" class="feedback-input" placeholder="Subject"></textarea>
                        <button type="button" class="btn btn-secondary" onclick='sendForm()'> Send </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>