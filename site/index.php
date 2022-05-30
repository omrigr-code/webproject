<?php

session_start();

if (!empty($_SESSION["email"])) {
    header("Location: /home.php", true, 302);
    die();
}

?>

<!DOCTYPE html>
<html lang="he">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register Page</title>
    <link rel="stylesheet" href="/css/register.css" />
    <link rel="stylesheet" href="/css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/82bc52e7cb.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        function register(event) {
            event.preventDefault();

            let form = $("#registerForm").serialize();

            $.ajax({
                url: "/api/register.php",
                method: "POST",
                cache: "false",
                data: form,
                complete: function (data) {
                    console.log(data);
                    switch (data.status) {
                        case 200:
                            window.location.href = "/home.php";
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
        <form onsubmit="register(event);" id="registerForm">
            <h1 class="h3 mb-3 fw-normal">Please Register</h1>

            <div id="alerts">

            </div>

            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email"
                    maxlength="255">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password"
                    minlength="8" maxlength="64">
                <label for="floatingPassword">Password</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingFirstName" placeholder="First Name"
                    name="first_name" min="1" max="255">
                <label for="floatingFirstName">First Name</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingLastName" placeholder="Last Name" name="last_name"
                    min="1" max="255">
                <label for="floatingLastName">Last Name</label>
            </div>
            <select class="form-select" aria-label="Default select example" name="sex">
                <option selected>Open this select menu</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            <div class="form-floating">
                <input type="number" class="form-control" id="flaotingAge" placeholder="Age" name="age" min="1"
                    max="130">
                <label for="flaotingAge">Age</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>

            <a href="/login.php" class="mt-5 mb-3 text-muted">Login</a>
        </form>
    </div>
</body>

</html>