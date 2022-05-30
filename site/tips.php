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
    <link rel="stylesheet" href="/css/tips.css" />
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

    <section id="Tips">
        <div class="container">
            <div class="row rowwidth">
                <div class="col-lg-4 col-md-12 column">
                    <img class="img-me" src="/images/Tips/workspace.jpg" alt="firstmeal" height="350">
                    <h1>Workspace</h1>
                    <p>Set up your workspace by gathering clean tools, bowls and utensils. And make sure to keep a
                        trashcan within arm’s reach.</p><br>
                    <div class="Ranking_artical special">
                        <p> Rank this Tip</p>
                        <label> <i class="fa-solid fa-star">5</i> <input type="radio" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick='saveTip("tip1", 5)' name="5" /> </label>
                        <label> <i class="fa-solid fa-star">4</i><input type="radio" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick='saveTip("tip1", 4)' name="4" /> </label>
                        <label> <i class="fa-solid fa-star">3</i><input type="radio" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick='saveTip("tip1", 3)' name="3" /> </label>
                        <label> <i class="fa-solid fa-star">2</i><input type="radio" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick='saveTip("tip1", 2)' name="2" /> </label>
                        <label> <i class="fa-solid fa-star">1</i><input type="radio" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick='saveTip("tip1", 1)' name="1" /> </label>
                    </div>
                    <!-- Modal -->
                    <form method="post" action="" id="TipsForm">
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Thank you for your ranking, you
                                            can add a comment</h5>

                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="text" id="Content" name="Content" placeholder="Please enter your comment">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary" name="submit" value="sendtip" onclick='sendform()'>Save Comment</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4 col-md-12 column">
                    <img class="img-me" src="/images/Tips/Egg Wash.jpg" alt="firstmeal" height="350">
                    <h1>Egg Wash</h1>
                    <p>To create an egg wash, whisk together a large egg with one tablespoon of water until smooth. Use
                        as a glue to seal pastries, then brush on top for a glossy appearance</p><br>
                    <div class="Ranking_artical">
                        <p> Rank this Tip</p>
                        <label> <i class="fa-solid fa-star">5</i> <input type="radio" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick='saveTip("tip2", 5)' name="5" /> </label>
                        <label> <i class="fa-solid fa-star">4</i><input type="radio" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick='saveTip("tip2", 4)' name="4" /> </label>
                        <label> <i class="fa-solid fa-star">3</i><input type="radio" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick='saveTip("tip2", 3)' name="3" /> </label>
                        <label> <i class="fa-solid fa-star">2</i><input type="radio" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick='saveTip("tip2", 2)' name="2" /> </label>
                        <label> <i class="fa-solid fa-star">1</i><input type="radio" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick='saveTip("tip2", 1)' name="1" /> </label>
                    </div>
                    <!-- Modal -->
                    <form method="post" action="" id="TipsForm">
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Thank you for your ranking, you
                                            can add a comment</h5>

                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="text" id="Content" name="Content" placeholder="Please enter your comment">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary" name="submit" value="sendtip" onclick='sendform()'>Save Comment</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4 col-md-12 column">
                    <img class="img-me" src="/images/Tips/Peel Tomatoes1.jpg" alt="firstmeal" height="350">
                    <h1>Peel Tomatoes</h1>
                    <p>Peel tomatoes with ease! Cut an X in the top, and then simmer in a pot of hot water for 15 to 30
                        seconds. Cool down and the skin will fall right off.</p><br>
                    <div class="Ranking_artical">
                        <p> Rank this Tip</p>
                        <label> <i class="fa-solid fa-star">5</i> <input type="radio" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick='saveTip("tip3", 5)' name="5" /> </label>
                        <label> <i class="fa-solid fa-star">4</i><input type="radio" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick='saveTip("tip3", 4)' name="4" /> </label>
                        <label> <i class="fa-solid fa-star">3</i><input type="radio" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick='saveTip("tip3", 3)' name="3" /> </label>
                        <label> <i class="fa-solid fa-star">2</i><input type="radio" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick='saveTip("tip3", 2)' name="2" /> </label>
                        <label> <i class="fa-solid fa-star">1</i><input type="radio" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick='saveTip("tip3", 1)' name="1" /> </label>
                    </div>
                    <!-- Modal -->
                    <form method="post" action="" id="TipsForm">
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Thank you for your ranking, you
                                            can add a comment</h5>

                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="text" id="Content" name="Content" placeholder="Please enter your comment">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary" name="submit" value="sendtip" onclick='sendform()'>Save Comment</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row rowwidth">
                <div class="col-lg-4 col-md-12 column">
                    <img class="img-me" src="/images/Tips/Plan and Clean.jpg" alt="firstmeal" height="350">
                    <h1>Plan and Clean</h1>
                    <p>Always read and re-read your recipes before you start cooking. Clean as you go.</p><br>
                    <div class="Ranking_artical special">
                        <p> Rank this Tip</p>
                        <label> <i class="fa-solid fa-star">5</i> <input type="radio" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick='saveTip("tip4", 5)' name="5" /> </label>
                        <label> <i class="fa-solid fa-star">4</i><input type="radio" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick='saveTip("tip4", 4)' name="4" /> </label>
                        <label> <i class="fa-solid fa-star">3</i><input type="radio" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick='saveTip("tip4", 3)' name="3" /> </label>
                        <label> <i class="fa-solid fa-star">2</i><input type="radio" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick='saveTip("tip4", 2)' name="2" /> </label>
                        <label> <i class="fa-solid fa-star">1</i><input type="radio" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick='saveTip("tip4", 1)' name="1" /> </label>
                    </div>
                    <!-- Modal -->
                    <form method="post" action="" id="TipsForm">
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Thank you for your ranking, you
                                            can add a comment</h5>

                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="text" id="Content" name="Content" placeholder="Please enter your comment">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary" name="submit" value="sendtip" onclick='sendform()'>Save Comment</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4 col-md-12 column">
                    <img class="img-me" src="/images/Tips/Butter.jpg" alt="firstmeal" height="350">
                    <h1>Butter</h1>
                    <p>To prevent butter from over-browning in your pan, add a little bit of lemon juice.</p><br>
                    <div class="Ranking_artical special">
                        <p> Rank this Tip</p>
                        <label> <i class="fa-solid fa-star">5</i> <input type="radio" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick='saveTip("tip5", 5)' name="5" /> </label>
                        <label> <i class="fa-solid fa-star">4</i><input type="radio" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick='saveTip("tip5", 4)' name="4" /> </label>
                        <label> <i class="fa-solid fa-star">3</i><input type="radio" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick='saveTip("tip5", 3)' name="3" /> </label>
                        <label> <i class="fa-solid fa-star">2</i><input type="radio" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick='saveTip("tip5", 2)' name="2" /> </label>
                        <label> <i class="fa-solid fa-star">1</i><input type="radio" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick='saveTip("tip5", 1)' name="1" /> </label>
                    </div>
                    <!-- Modal -->
                    <form method="post" action="" id="TipsForm">
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Thank you for your ranking, you
                                            can add a comment</h5>

                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="text" id="Content" name="Content" placeholder="Please enter your comment">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary" name="submit" value="sendtip" onclick='sendform()'>Save Comment</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4 col-md-12 column">
                    <img class="img-me" src="/images/Tips/SALT.jpg" alt="firstmeal" height="350">
                    <h1>SALT</h1>
                    <p>Embrace salt. Don’t be afraid to use salt; it pulls the flavors out of your dishes. Cook with
                        kosher salt and season with sea salt.</p><br>
                    <div class="Ranking_artical">
                        <p> Rank this Tip</p>
                        <label> <i class="fa-solid fa-star">5</i> <input type="radio" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick='saveTip("tip6", 5)' name="5" /> </label>
                        <label> <i class="fa-solid fa-star">4</i><input type="radio" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick='saveTip("tip6", 4)' name="4" /> </label>
                        <label> <i class="fa-solid fa-star">3</i><input type="radio" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick='saveTip("tip6", 3)' name="3" /> </label>
                        <label> <i class="fa-solid fa-star">2</i><input type="radio" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick='saveTip("tip6", 2)' name="2" /> </label>
                        <label> <i class="fa-solid fa-star">1</i><input type="radio" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick='saveTip("tip6", 1)' name="1" /> </label>
                    </div>
                    <!-- Modal -->
                    <form method="post" action="" id="TipsForm">
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Thank you for your ranking, you
                                            can add a comment</h5>

                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="text" id="Content" name="Content" placeholder="Please enter your comment">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary" name="submit" value="sendtip" onclick='sendform()'>Save Comment</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row rowwidth last">
                <div class="col-lg-4 col-md-12 column">
                    <img class="img-me" src="/images/Tips/Spices.jpg" alt="firstmeal" height="350">
                    <h1>Spices</h1>
                    <p>Keep your spices away from sources of heat like the stove or lights. Herbs and spices can lose
                        their flavor when exposed to humidity and heat.</p><br>
                    <div class="Ranking_artical">
                        <p> Rank this Tip</p>
                        <label> <i class="fa-solid fa-star">5</i> <input type="radio" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick='saveTip("tip7", 5)' name="5" /> </label>
                        <label> <i class="fa-solid fa-star">4</i><input type="radio" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick='saveTip("tip7", 4)' name="4" /> </label>
                        <label> <i class="fa-solid fa-star">3</i><input type="radio" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick='saveTip("tip7", 3)' name="3" /> </label>
                        <label> <i class="fa-solid fa-star">2</i><input type="radio" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick='saveTip("tip7", 2)' name="2" /> </label>
                        <label> <i class="fa-solid fa-star">1</i><input type="radio" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick='saveTip("tip7", 1)' name="1" /> </label>
                    </div>
                    <!-- Modal -->
                    <form method="post" action="" id="TipsForm">
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Thank you for your ranking, you
                                            can add a comment</h5>

                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="text" id="Content" name="Content" placeholder="Please enter your comment">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary" name="submit" value="sendtip" onclick='sendform()'>Save Comment</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4 col-md-12 column">
                    <img class="img-me" src="/images/Tips/Onion.jpg" alt="firstmeal" height="350">
                    <h1>Onion</h1>
                    <p>To prevent tears, cut off the root of the onion before you slice.</p><br>
                    <div class="Ranking_artical special">
                        <p> Rank this Tip</p>
                        <label> <i class="fa-solid fa-star">5</i> <input type="radio" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick='saveTip("tip8", 5)' name="5" /> </label>
                        <label> <i class="fa-solid fa-star">4</i><input type="radio" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick='saveTip("tip8", 4)' name="4" /> </label>
                        <label> <i class="fa-solid fa-star">3</i><input type="radio" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick='saveTip("tip8", 3)' name="3" /> </label>
                        <label> <i class="fa-solid fa-star">2</i><input type="radio" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick='saveTip("tip8", 2)' name="2" /> </label>
                        <label> <i class="fa-solid fa-star">1</i><input type="radio" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick='saveTip("tip8", 1)' name="1" /> </label>
                    </div>
                    <!-- Modal -->
                    <form method="post" action="" id="TipsForm">
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Thank you for your ranking, you
                                            can add a comment</h5>

                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="text" id="Content" name="Content" placeholder="Please enter your comment">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary" name="submit" value="sendtip" onclick='sendform()'>Save Comment</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4 col-md-12 column">
                    <img class="img-me" src="/images/Tips/Honey1.jpg" alt="firstmeal" height="350">
                    <h1>Honey</h1>
                    <p>Honey is a natural preservative and will never spoil.</p><br>
                    <div class="Ranking_artical special">
                        <p> Rank this Tip</p>
                        <label> <i class="fa-solid fa-star">5</i> <input type="radio" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick='saveTip("tip9", 5)' name="5" /> </label>
                        <label> <i class="fa-solid fa-star">4</i><input type="radio" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick='saveTip("tip9", 4)' name="4" /> </label>
                        <label> <i class="fa-solid fa-star">3</i><input type="radio" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick='saveTip("tip9", 3)' name="3" /> </label>
                        <label> <i class="fa-solid fa-star">2</i><input type="radio" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick='saveTip("tip9", 2)' name="2" /> </label>
                        <label> <i class="fa-solid fa-star">1</i><input type="radio" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick='saveTip("tip9", 1)' name="1" /> </label>
                    </div>
                    <!-- Modal -->
                    <form method="post" action="" id="TipsForm">
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Thank you for your ranking, you
                                            can add a comment</h5>

                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="text" id="Content" name="Content" placeholder="Please enter your comment">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary" name="submit" value="sendtip" onclick='sendform()'>Save Comment</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


</body>


</body>

</html>