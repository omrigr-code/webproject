<?php ob_start(); ?>
Mexican recipes
<?php $title = ob_get_clean(); ?>

<?php ob_start(); ?>
<link rel="stylesheet" href="/css/tips.css">
<?php $css = ob_get_clean(); ?>

<?php ob_start(); ?>
<section id="Tips">
    <div class="container">
        <div class="row rowwidth">
            <div class="col-lg-4 col-md-12 column">
                <img class="img-me" src="/assets\Tips\workspace.jpg" alt="firstmeal" height="350">
                <h1>Workspace</h1>
                <p>Set up your workspace by gathering clean tools, bowls and utensils. And make sure to keep a trashcan within arm’s reach.</p><br>
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
                                    <h5 class="modal-title" id="exampleModalLabel">Thank you for your ranking, you can add a comment</h5>

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
                <img class="img-me" src="/assets\Tips\Egg Wash.jpg" alt="firstmeal" height="350">
                <h1>Egg Wash</h1>
                <p>To create an egg wash, whisk together a large egg with one tablespoon of water until smooth. Use as a glue to seal pastries, then brush on top for a glossy appearance</p><br>
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
                                    <h5 class="modal-title" id="exampleModalLabel">Thank you for your ranking, you can add a comment</h5>

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
                <img class="img-me" src="/assets\Tips\Peel Tomatoes1.jpg" alt="firstmeal" height="350">
                <h1>Peel Tomatoes</h1>
                <p>Peel tomatoes with ease! Cut an X in the top, and then simmer in a pot of hot water for 15 to 30 seconds. Cool down and the skin will fall right off.</p><br>
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
                                    <h5 class="modal-title" id="exampleModalLabel">Thank you for your ranking, you can add a comment</h5>

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
                <img class="img-me" src="/assets\Tips\Plan and Clean.jpg" alt="firstmeal" height="350">
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
                                    <h5 class="modal-title" id="exampleModalLabel">Thank you for your ranking, you can add a comment</h5>

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
                <img class="img-me" src="/assets\Tips\Butter.jpg" alt="firstmeal" height="350">
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
                                    <h5 class="modal-title" id="exampleModalLabel">Thank you for your ranking, you can add a comment</h5>

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
                <img class="img-me" src="/assets\Tips\SALT.jpg" alt="firstmeal" height="350">
                <h1>SALT</h1>
                <p>Embrace salt. Don’t be afraid to use salt; it pulls the flavors out of your dishes. Cook with kosher salt and season with sea salt.</p><br>
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
                                    <h5 class="modal-title" id="exampleModalLabel">Thank you for your ranking, you can add a comment</h5>

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
                <img class="img-me" src="/assets\Tips\Spices.jpg" alt="firstmeal" height="350">
                <h1>Spices</h1>
                <p>Keep your spices away from sources of heat like the stove or lights. Herbs and spices can lose their flavor when exposed to humidity and heat.</p><br>
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
                                    <h5 class="modal-title" id="exampleModalLabel">Thank you for your ranking, you can add a comment</h5>

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
                <img class="img-me" src="/assets\Tips\Onion.jpg" alt="firstmeal" height="350">
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
                                    <h5 class="modal-title" id="exampleModalLabel">Thank you for your ranking, you can add a comment</h5>

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
                <img class="img-me" src="/assets\Tips\Honey1.jpg" alt="firstmeal" height="350">
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
                                    <h5 class="modal-title" id="exampleModalLabel">Thank you for your ranking, you can add a comment</h5>

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
<?php $html = ob_get_clean(); ?>

<?php
require_once "../templates/base.php";
?>