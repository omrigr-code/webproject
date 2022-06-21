<?php

session_start();

if (!empty($_SESSION["email"])) {
    header("Location: /index.php", true, 302);
    die();
}

?>

<!DOCTYPE html>
<html lang="he">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <link rel="stylesheet" href="/css/register.css" />
    <link rel="stylesheet" href="/css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/82bc52e7cb.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        function login(event) {
            event.preventDefault();

            const form = $("#loginForm").serialize();

            $.ajax({
                url: "/includes/api/login.php",
                method: "POST",
                cache: "false",
                data: form,
                complete: function(data) {
                    switch (data.status) {
                        case 200:
                            window.location.href = "/includes/home.php";
                            break;
                        case 400:
                            var alerts = $("<div></div>").appendTo("#alerts");

                            alerts.attr("class", "alert alert-warning alert-dismissible fade show");
                            alerts.attr("role", "alert");

                            alerts.text(data.responseText);
                            break;
                        case 500:
                            var alerts = $("<div></div>").appendTo("#alerts");

                            alerts.attr("class", "alert alert-danger alert-dismissible fade show");
                            alerts.attr("role", "alert");

                            alerts.text("Server side error");
                            break;
                    }
                }
            });
        }
    </script>
</head>

<body>
    <div class="form-signin w-100 m-auto text-center">
        <form onsubmit="login(event);" id="loginForm">
            <h1 class="h3 mb-3 fw-normal">Please Login</h1>

            <div id="alerts">

            </div>

            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" maxlength="255">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" minlength="8" maxlength="64">
                <label for="floatingPassword">Password</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>

            <a href="/index.php" class="mt-5 mb-3 text-muted">Register</a>
        </form>
    </div>
</body>

</html>