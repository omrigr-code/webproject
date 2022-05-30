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

    <h1>Italian Recepies</h1>
    <H1>Starter</H1>
    <section id="head">
        <div class="container-fluid">
            <div class="row rowwidth">
                <div class="col-lg-6 col-md-12">
                    <h1>Gazpacho</h1>
                    <p>Gazpacho is a cold soup made of raw fresh veggies, stale bread, vinegar, garlic, and olive oil.
                    </p>
                </div>
                <div class="col-lg-6 col-md-12">
                    <img class="img-me" src="images/recipes/Gazpacho.jpeg" alt="main picture" height="700">
                </div>
            </div>
        </div>
    </section>

    <section id="info">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-xl-4 col-lg-12 col-md-12 box">
                    <img class="img-me" src="images/Ingridients.jpeg" alt="main picture">
                    <h6>Ingredients</h6>
                    <p>14</p>
                </div>
                <div class="col-xl-4 col-lg-12 col-md-12 box">
                    <img class="img-me" src="images/Time.jpeg" alt="main picture">
                    <h6>Total time</h6>
                    <p>1 hour</p>
                </div>
                <div class="col-xl-4 col-lg-12 col-md-12 box">
                    <img class="img-me" src="images/Difficulty.jpeg" alt="main picture">
                    <h6>Difficulty</h6>
                    <p>Difficult</p>
                </div>

            </div>
        </div>

    </section>

    <div class="accordion" id="Description">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    Ingredients
                </button>
            </h2>
            <div id="collapseOne" class=" collapse " aria-labelledby="headingOne" data-bs-parent="#Description">
                <div class="accordion-body">
                    4 cucumbers <br>
                    6 medium tomatoes<br>
                    Half red bell pepper<br>
                    1 garlic clove<br>
                    5-8 basil leaves <br>
                    2 tablespoons olive oil <br>
                    1 tablespoon vinegar (I used sherry vinegar)<br>
                    Salt<br>
                    Black pepper<br>
                    1-2 slices of stale bread (depends how thick you like it)<br>
                    <br>
                    For the garnish-<br>
                    Croutons<br>
                    Finely chopped cucumber<br>
                    Basil<br>
                    Olive oil<br>

                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    preparation method
                </button>
            </h2>
            <div id="collapseTwo" class=" collapse" aria-labelledby="headingTwo" data-bs-parent="#Description">
                <div class="accordion-body">
                    - Peel the cucumbers and cut them into small pieces (doesn’t matter how you cut them, it just makes
                    it easier to blend). <br>
                    - Slice the bread and tear it into pieces.<br>
                    - In a stand blender add all the ingredients besides the bread and blend until smooth.<br>
                    - Add the bread and keep blending until homogeneous.<br>
                    - Serve in a bowl with ice cubes. Finish with bread croutons, chopped cucumber, basil, and olive
                    oil.<br>

                </div>
            </div>
        </div>
    </div>

    <h1>Main</h1>
    <section id="head">
        <div class="container-fluid">
            <div class="row rowwidth">
                <div class="col-lg-6 col-md-12">
                    <img class="img-me" src="images/recipes/Squid Ink Ravioli (stuffed with egg-yolk).jpeg" alt="main picture" height="700">
                </div>
                <div class="col-lg-6 col-md-12">
                    <h1>Squid Ink Ravioli (stuffed with egg-yolk)</h1>
                    <p>an egg-yolk stuffed ravioli - the dough with squid ink This pasta is so gorgeous in color! And
                        with a runny egg yolk inside? Mamma Mia! There is no reason to make a sauce- it's all in the
                        ravioli. If you want to surprise your lovers with a super special pasta dish- this is your
                        go-to! </p>
                </div>
            </div>
        </div>
    </section>

    <section id="info">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-xl-4 col-lg-12 col-md-12 box">
                    <img class="img-me" src="images/Ingridients.jpeg" alt="main picture">
                    <h6>Ingredients</h6>
                    <p>10</p>
                </div>
                <div class="col-xl-4 col-lg-12 col-md-12 box">
                    <img class="img-me" src="images/Time.jpeg" alt="main picture">
                    <h6>Total time</h6>
                    <p>1 hour</p>
                </div>
                <div class="col-xl-4 col-lg-12 col-md-12 box">
                    <img class="img-me" src="images/Difficulty.jpeg" alt="main picture">
                    <h6>Difficulty</h6>
                    <p>Difficult</p>
                </div>

            </div>
        </div>

    </section>

    <div class="accordion" id="Description">
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading3">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                    Ingredients
                </button>
            </h2>
            <div id="collapse3" class=" collapse " aria-labelledby="heading3" data-bs-parent="#Description">
                <div class="accordion-body">
                    For the pasta- <br>
                    300 gr white flour<br>
                    3 free-range eggs<br>
                    12 gr squid ink<br>
                    10 gr olive oil<br>
                    <br>
                    For the filling-<br>
                    350 gr homemade ricotta <br>
                    Lemon zest from one lemon<br>
                    1/4 bunch of parsley <br>
                    7 gr salt<br>
                    <br>
                    To serve-<br>
                    Parmigiano Reggiano<br>
                    Olive oil<br>

                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading4">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                    preparation method
                </button>
            </h2>
            <div id="collapse4" class=" collapse " aria-labelledby="heading4" data-bs-parent="#Description">
                <div class="accordion-body">
                    - In a bowl add the flour, then eggs, squid ink, and olive oil. <br>
                    - Whisk the eggs, ink, and oil with a fork. Slowly add in the flour from the sides of the bowl. <br>
                    - Once the flour is incorporated with the liquids into crumbs start to knead the dough by hand.
                    Knead the dough for about 10 minutes until you get a beautiful smooth ball. <br>
                    - Cover the dough with plastic wrap and let it rest for an hour. You can prepare the dough a day in
                    advance and place it in the fridge.<br>
                    - Prepare the filling: chop the parsley finely, add the homemade ricotta, lemon zest, and salt.<br>
                    Mix well until you get a homogenous spread.<br>
                    - Fill a piping bag with the filling and set it aside.<br>
                    - Cut the pasta dough in half.<br>
                    - Using a pasta machine- open the pasta dough into a thin pasta sheet (the thinnest notch).<br>
                    - Place one sheet on the working surface. Start piping the filling on the sheet. Pipe it is leaving
                    a space in the ricotta for the egg yolk.<br>
                    - Add the egg yolk to the ricotta and cover with the second pasta sheet.<br>
                    - Tight the pasta sheets to each other, trying to remove all the air that remained in between the
                    sheets. We want to avoid any air pockets in the ravioli.<br>
                    - Cook the ravioli on a spotted ladle for 2-3 min.<br>
                    - Serve on a plate, grate a lot of Parmigiano Reggiano, and sprinkle olive oil.<br>
                    - That's such a cool pasta! and delicious.<br>

                </div>
            </div>
        </div>
    </div>

    <h1>Dessert</h1>
    <section id="head">
        <div class="container-fluid">
            <div class="row rowwidth">
                <div class="col-lg-6 col-md-12">
                    <h1>Tiramisù</h1>
                    <p>a classic tiramisù can be transcendent. A creamy dessert of espresso-soaked ladyfingers
                        surrounded by lightly sweetened whipped cream and a rich mascarpone, tiramisù relies heavily on
                        the quality of its ingredients.</p>
                </div>
                <div class="col-lg-6 col-md-12">
                    <img class="img-me" src="images/recipes/Tiramisù.jpeg" alt="main picture" height="700">
                </div>
            </div>
        </div>
    </section>

    <section id="info">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-xl-4 col-lg-12 col-md-12 box">
                    <img class="img-me" src="images/Ingridients.jpeg" alt="main picture">
                    <h6>Ingredients</h6>
                    <p>9</p>
                </div>
                <div class="col-xl-4 col-lg-12 col-md-12 box">
                    <img class="img-me" src="images/Time.jpeg" alt="main picture">
                    <h6>Total time</h6>
                    <p>1 hour</p>
                </div>
                <div class="col-xl-4 col-lg-12 col-md-12 box">
                    <img class="img-me" src="images/Difficulty.jpeg" alt="main picture">
                    <h6>Difficulty</h6>
                    <p>Medium</p>
                </div>

            </div>
        </div>

    </section>

    <div class="accordion" id="Description">
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading5">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                    Ingredients
                </button>
            </h2>
            <div id="collapse5" class=" collapse" aria-labelledby="heading5" data-bs-parent="#Description">
                <div class="accordion-body">
                    FOR THE CREAM- <br>
                    4 large egg yolks<br>
                    ½ cup/100 grams granulated sugar, divided<br>
                    ¾ cup heavy cream<br>
                    1 cup/227 grams mascarpone (8 ounces)<br>
                    <br>
                    FOR THE ASSEMBLY:<br>
                    1 ¾ cups good espresso or very strong coffee<br>
                    2 tablespoons rum or cognac<br>
                    2 tablespoons unsweetened cocoa powder<br>
                    About 24 ladyfingers (from one 7-ounce/200-gram package)<br>
                    1 to 2 ounces bittersweet chocolate, for shaving (optional)<br>

                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading6">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                    preparation method
                </button>
            </h2>
            <div id="collapse6" class=" collapse " aria-labelledby="heading6" data-bs-parent="#Description">
                <div class="accordion-body">
                    - Using an electric mixer in a medium bowl, whip together egg yolks and 1/4 cup/50 grams sugar until
                    very pale yellow and about tripled in volume. A slight ribbon should fall from the beaters (or whisk
                    attachment) when lifted from the bowl. Transfer mixture to a large bowl, wiping out the medium bowl
                    used to whip the yolks and set aside. <br>
                    - In the medium bowl, whip cream and remaining 1/4 cup/50 grams sugar until it creates soft-medium
                    peaks. Add mascarpone and continue to whip until it creates a soft, spreadable mixture with medium
                    peaks. Gently fold the mascarpone mixture into the sweetened egg yolks until combined.<br>
                    - Combine espresso and rum in a shallow bowl and set aside.<br>
                    - Using a sifter, dust the bottom of a 2-quart baking dish (an 8x8-inch dish, or a 9-inch round cake
                    pan would also work here) with 1 tablespoon cocoa powder.<br>
                    - Working one at a time, quickly dip each ladyfinger into the espresso mixture -- they are quite
                    porous and will fall apart if left in the liquid too long -- and place them rounded side up at the
                    bottom of the baking dish. Repeat, using half the ladyfingers, until you’ve got an even layer,
                    breaking the ladyfingers in half as needed to fill in any obvious gaps (a little space in between is
                    O.K.). Spread half the mascarpone mixture onto the ladyfingers in one even layer. Repeat with
                    remaining espresso-dipped ladyfingers and mascarpone mixture.<br>
                    - Dust top layer with remaining tablespoon of cocoa powder. Top with shaved or finely grated
                    chocolate, if desired.<br>
                    - Cover with plastic wrap and let chill in the refrigerator for at least 4 hours (if you can wait 24
                    hours, all the better) before slicing or scooping to serve.<br>

                </div>
            </div>
        </div>
    </div>
    <h1>Cocktail</h1>
    <section id="head">
        <div class="container-fluid">
            <div class="row rowwidth">
                <div class="col-lg-6 col-md-12">
                    <img class="img-me" src="images/recipes/Negroni sbagliato.jpeg" alt="main picture" height="700">
                </div>
                <div class="col-lg-6 col-md-12">
                    <h1>Negroni sbagliato</h1>
                    <p></p>
                </div>
            </div>
        </div>
    </section>

    <section id="info">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-xl-4 col-lg-12 col-md-12 box">
                    <img class="img-me" src="images/Ingridients.jpeg" alt="main picture">
                    <h6>Ingredients</h6>
                    <p>5</p>
                </div>
                <div class="col-xl-4 col-lg-12 col-md-12 box">
                    <img class="img-me" src="images/Time.jpeg" alt="main picture">
                    <h6>Total time</h6>
                    <p>5 min</p>
                </div>
                <div class="col-xl-4 col-lg-12 col-md-12 box">
                    <img class="img-me" src="images/Difficulty.jpeg" alt="main picture">
                    <h6>Difficulty</h6>
                    <p>Easy</p>
                </div>

            </div>
        </div>

    </section>

    <div class="accordion" id="Description">
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading7">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                    Ingredients
                </button>
            </h2>
            <div id="collapse7" class=" collapse " aria-labelledby="heading7" data-bs-parent="#Description">
                <div class="accordion-body">
                    25ml Campari <br>
                    25ml sweet vermouth<br>
                    prosecco to top up<br>
                    ice<br>
                    For the garnish<br>
                    1 orange slice<br>

                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading8">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                    preparation method
                </button>
            </h2>
            <div id="collapse8" class=" collapse " aria-labelledby="heading8" data-bs-parent="#Description">
                <div class="accordion-body">
                    In a highball glass pour the Campari and sweet vermouth, add cubed ice and gently add in the
                    prosecco - pouring it down a bar or long spoon that's been placed in the glass will stop the bubbles
                    roaming over the edge of the glass. Stir contents of the glass together, top up further and garnish
                    with the orange slice.
                </div>
            </div>
        </div>
    </div>

</body>

</html>