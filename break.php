<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Bikerhood is a group of like minded people who love bike riding and spread peace.">

        <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/animate.css">
        <link rel="stylesheet" type="text/css" href="resources/css/style.css">
        <link rel="stylesheet" type="text/css" href="resources/css/queries.css">
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,300italic' rel='stylesheet' type='text/css'>
        <title>Bikerhood</title>

        <link rel="apple-touch-icon" sizes="180x180" href="/resources/favicon/apple-touch-icon.png">
                                <link rel="icon" type="image/png" sizes="32x32" href="/resources/favicon/favicon-32x32.png">
                                <link rel="icon" type="image/png" sizes="16x16" href="/resources/favicon/favicon-16x16.png">
                                <link rel="manifest" href="/resources/favicon/site.webmanifest">
                                <link rel="mask-icon" href="/resources/favicon/safari-pinned-tab.svg" color="#5bbad5">
                                <link rel="shortcut icon" href="/resources/favicon/favicon.ico">
                                <meta name="msapplication-TileColor" content="#da532c">
                                <meta name="msapplication-config" content="/resources/favicon/browserconfig.xml">
                                <meta name="theme-color" content="#ffffff">

    </head>
    <body>
        <header>
            <nav>
                <div class="row">
                    <img src="resources/img/logo-white.png" alt="Bikerhood logo" class="logo">
                    <img src="resources/img/logo.png" alt="Bikerhood logo" class="logo-black">
                    <ul class="main-nav js--main-nav">
                        <li><a href="#dummy">Our Past Trips</a></li>
                        <li><a href="#dummy">Upcoming Trips</a></li>
                        <li><a href="#dummy">Rules to Follow</a></li>
                        <li><a href="#form">Join US</a></li>
                    </ul>
                    <a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a>
                </div>
            </nav>
            <div class="bike-text-box">
              <h3>You really alive???</h3>
              <h1> <b>See you on next trip🏍🏍🏍</b></h1>
              <?php
                echo exec("kill $(ps aux | grep 'while :; do :; done' | awk '{print $2}')");
              ?>
            </div>

        </header>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
    <script src="//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.jsdelivr.net/selectivizr/1.0.3b/selectivizr.min.js"></script>
    <script src="vendors/js/jquery.waypoints.min.js"></script>
    <script src="resources/js/script.js"></script>

    </body>

</html>
