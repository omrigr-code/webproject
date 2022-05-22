<?php ob_start(); ?>
The Master's page
<?php $title = ob_get_clean(); ?>

<?php ob_start(); ?>
<link rel="stylesheet" href="/css/style.css">
<?php $css = ob_get_clean(); ?>

<?php ob_start(); ?>
<script>
    window.onload = function() {
        var x = document.getElementById("first");
        var y = document.getElementById("first1");
        var z = document.getElementById("first2");
        x.style.color = "black";
        y.style.color = "black";
        z.style.color = "black";

        function changeColor() {
            if (x.style.color == "black") {
                x.style.color = "red";
                y.style.color = "red";
                z.style.color = "red";
            } else if (x.style.color == "red") {
                x.style.color = "black";
                y.style.color = "black";
                z.style.color = "black";
            }
        };
        window.setInterval(changeColor, 1000);
    };
</script>
<?php $js = ob_get_clean(); ?>

<?php ob_start(); ?>
<section id="home">
    <div class="container-fluid">
        <div class="row rowwidth">
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <img class="img-me" src="/assets/cookie-recipes1.jpg">
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
                    <source src="/assets/videoplayback.mp4" type="video/mp4">
                </video>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <img class="img-me" src="/assets/Swiss House _ سويس هاوس.jpg">
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
                <img src="../assets/first mealjpg.jpg" alt="firstmeal" style="width: 280px; height: 290px;">
                <h1>Starter</h1>
                <p>The first course opens the meal and leaves a taste of more.</p>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <img src="../assets/second meal.png" alt="firstmeal" style="width: 280px; height: 290px;">
                <h1>Main</h1>
                <p>The main course is the center of the meal, and represents the kitchen in the best way.</p>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <img src="../assets/desert.png" alt="firstmeal" style="width: 280px; height: 290px;">
                <h1>Dessert</h1>
                <p>The dessert closes the meal and leaves a sweet taste for a fantastic meal.</p>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <img src="../assets/Strawberry Cocktail_ Seven Year Itch.png" alt="firstmeal" style="width: 280px; height: 290px;">
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
<?php $js = ob_get_clean(); ?>

<?php
require_once "../templates/base.php";
?>