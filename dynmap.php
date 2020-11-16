<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Journey - Leaderboard</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alfa+Slab+One">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean.css">
</head>

<body>
<nav class="navbar navbar-light navbar-expand bg-light navigation-clean">
    <div class="container"><a class="navbar-brand" href="index.php" style="font-family: Audiowide, cursive;">Journey Minecraft&nbsp;Community&nbsp;</a>
        <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"></button>
        <div class="collapse navbar-collapse" id="navcol-1"></div>
        <a class="btn btn-primary" role="button" style="background: rgb(23,128,40);font-family: Audiowide, cursive;margin: 4px;" href="leaderboard.php">Leaderboard</a>
        <a class="btn btn-primary" type="button" style="background: rgb(23,128,40);font-family: Audiowide, cursive;margin: 4px;" href="dynmap.php">Dynmap</a>
        <a class="btn btn-primary" type="button" style="background: rgb(23,128,40);font-family: Audiowide, cursive;margin: 4px;" href="https://closed-journey-mc.buycraft.net">Donate</a>
        <?php
        include ("server.php");
        echo "<b>  play.mc.gg | " . GetOnlinePlayers('play.mc.gg') . "/50 </b>";
        ?>
    </div>
</nav>
<header class="masthead text-white text-center"
        style="background: url(&quot;assets/img/logoJourney720p_preview.png&quot;) center / contain no-repeat, url(&quot;assets/img/37444.jpg&quot;) center / cover no-repeat;height: 600px;">
    <div></div>
</header>

<section class="features-icons bg-light text-center">
    <h1 style="font-family: Audiowide, cursive;">Live Server Map</h1>
    <div></div>
    <div class="container">
        <div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="http://131.153.145.170:44293"></iframe></div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</section>
<section class="showcase"></section>
<div class="footer-clean">
    <footer>
        <div class="copyright">
        <p style="text-align:center;">Journey-mc © 2020</p>
        </div>
    </footer>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>