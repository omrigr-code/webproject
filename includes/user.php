<?php

require_once "startup.php";
require_once "class/user.php";

session_start();

if (empty($_SESSION["email"])) {
    header("Location: /index.php", true, 302);
    die("Protected Page");
}

$user = User::findByEmail($database, $_SESSION["email"]);

$females = User::countAllBySex($database, "Female");

$males = User::countAllBySex($database, "Male");

$age = User::AvgAge($database);

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
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.8.0/dist/chart.min.js" integrity="sha256-cHVO4dqZfamRhWD7s4iXyaXWVK10odD+qp4xidFzqTI=" crossorigin="anonymous"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const ctx = document.getElementById('chart').getContext('2d');
            const myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Female', 'Male'],
                    datasets: [{
                        label: 'Users by sex',
                        data: [<?php echo ($females); ?>, <?php echo ($males); ?>],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });
        document.addEventListener("DOMContentLoaded", function() {
            const ctx = document.getElementById('chart2').getContext('2d');
            const myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Avg age'],
                    datasets: [{
                        label: 'Users avg age',
                        data: [<?php echo ($age); ?>],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
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
        <ul class="list-group">
            <li class="list-group-item">
                User ID: <?php echo ($user->id); ?>
            </li>
            <li class="list-group-item">
                User Email: <?php echo ($user->email); ?>
            </li>
            <li class="list-group-item">
                User First Name: <?php echo ($user->first_name); ?>
            </li>
            <li class="list-group-item">
                User Last Name: <?php echo ($user->last_name); ?>
            </li>
            <li class="list-group-item">
                User Sex: <?php echo ($user->sex); ?>
            </li>
            <li class="list-group-item">
                User Age: <?php echo ($user->age); ?>
            </li>
        </ul>
    </section>
    <div class="row">
        <div class="col">
            <canvas id="chart"></canvas>
        </div>
        <div class="col">
            <canvas id="chart2"></canvas>
        </div>
    </div>
</body>

</html>