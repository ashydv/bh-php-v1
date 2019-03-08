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
                        <li><a href="#form">Contact US</a></li>
                        <li><a href="#dummy">Join US</a></li>
                    </ul>
                    <a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a>
                </div>
            </nav>
            <div class="bike-text-box">
                <h1>Come glide with us!</h1>
		<h3>the best brotherhood in town for bike lovers</h3>
                <a class="btn btn-full" href="loop.php" target="_blank">Check Max Speed</a>
                <a class="btn btn-ghost" href="break.php" target="_blank">Emergency Break</a>
            </div>

        </header>

		<section class="section-form js--section-form" id="form">
            <div class="row">
                <h2>Join us in our next adventure!</h2>
            </div>
            <div class="row">
                <form method="post" action="#" class="contact-form">
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="name">Name</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="name" id="name" placeholder="Your name" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="email">Email</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="email" name="email" id="email" placeholder="Your email" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="find-us">How did you find us?</label>
                        </div>
                        <div class="col span-2-of-3">
                            <select name="find-us" id="find-us">
                                <option value="friends" selected>Friends</option>
                                <option value="search">Search engine</option>
                                <option value="ad">Advertisement</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>Newsletter?</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="checkbox" name="news" id="news" checked> Yes, please
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>Drop us a line</label>
                        </div>
                        <div class="col span-2-of-3">
                            <textarea name="message" placeholder="Your message"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>&nbsp;</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="submit" value="Send it!">
                        </div>
                    </div>

                </form>

            </div>
        </section>

        <footer>
            <p class="secondlastline"> This page is being served by the <?php
            $url = "http://169.254.169.254/latest/meta-data/instance-id";
            $instance_id = file_get_contents($url);
            echo "Instance ID: " . $instance_id . "<br/>";
            ?>
            Running in the Availability <?php
            $url = "http://169.254.169.254/latest/meta-data/placement/availability-zone";
            $zone = file_get_contents($url);
            echo "Zone: " . $zone . "<br/>";
            ?>
            The current <?php
            echo "CPU load is ";
  	        include 'getcpuload.php';
  	        echo "";
            ?>
        </p>
        <p class="lastline">
          Thank you for visiting. Happy thumping!!!
        </p>
        <p class="lastlinee">
        </p>

        </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
    <script src="//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.jsdelivr.net/selectivizr/1.0.3b/selectivizr.min.js"></script>
    <script src="vendors/js/jquery.waypoints.min.js"></script>
    <script src="resources/js/script.js"></script>

    </body>

</html>
