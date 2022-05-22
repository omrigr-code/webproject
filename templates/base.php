<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo ($title); ?></title>
    <link rel="stylesheet" href="/css/navbar.css">s
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/82bc52e7cb.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        const sendContactForm = () => {
            const form = $("#contentForm").serialize();
            $.ajax({
                url: "/api/contant.php",
                method: "POST",
                dataType: "text",
                data: form,
                success: (text, status, xhr) => {
                    alert(text);
                    location.reload();
                }
            });
        }
    </script>
    <?php if (isset($css)) {
        echo ($css);
    } ?>
    <?php if (isset($js)) {
        echo ($js);
    } ?>
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
                        <li><a href="index.html">Home</a></li>
                        <li><a href="index.html#Idea">Idea</a></li>
                        <li><a href="index.html#About">About Us</a></li>
                        <li class="services">
                            <a>Recipes</a>
                            <ul class="dropdown1">
                                <li><a href="/mexico.php">Mexican</a></li>
                                <li><a href="/italy.php">Italian</a></li>
                                <li><a href="/israel.php">Israeli</a></li>
                            </ul>
                        </li>
                        <li><a href="/tips.php">Tips</a></li>
                    </div>
                </ul>
            </nav>
        </div>
    </div>

    <section id="Idea">
        <div class="container-fluid">
            <?php echo ($html); ?>
        </div>
    </section>

    <section id="About">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 col-md-12">
                    <h1>Who Are We</h1> <br>
                    <p>Our company was founded in 1999 with the goal of training people to cook like the best chefs in the world. <br>
                        Together with our team of experts we have built a number of meals by categories and by difficulty levels. <br>
                        The company's vision is to produce a world - renowned Israeli cuisine. </p> <br>
                    <p>We Hope you enjoy our website and bring good food to the world.
                        Old guy said: "Bring man a fish, he want be hungry for a day. Teach him how to fish he won't be hungry for life </p>

                </div>
                <div class="col-xl-6 col-md-12">
                    <form class="newsForm" id="contentForm">
                        <h1 style="color: #CC4949; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Contact Us! <i class="fa-solid fa-paper-plane"></i></h1> <br>
                        <input name="FullName" type="text" class="feedback-input" placeholder="Full Name" />
                        <input name="Email" type="text" class="feedback-input" placeholder="Email" />
                        <textarea name="Subject" class="feedback-input" placeholder="Subject"></textarea>
                        <button type="button" class="btn btn-secondary" onclick='sendContactForm()'> Send </button>
                        <input type="hidden" name="action" value="addContent">
                    </form>
                </div>
            </div>
        </div>
    </section>

</body>

</html>