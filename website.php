<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="website.css">
    <title>Starmonks</title>
</head>
<body>
    <section>
        <div class="circle"></div>
        <header>
            <a href="#"><img src="logo.png" class="logo"></a>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="menu.php">Menu</a></li>
                <li><a href="whatnew.html">What's New</a></li>
                <li><a href="contact.php">Contact</a></li>
                <?php
                session_start(); // Start the session
                if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']) {
                    echo '<li><a href="logout.php">Logout</a></li>';
                } else {
                    echo '<li><a href="login.php">Login</a></li>';
                }
                ?>
            </ul>
        </header>
        <div class="container">
            <div class="text-box">
                <h2>Its not just a Coffee <br>Its  <span>Starmonks</span></h2>
                <p>The company itself is a very successful company. There is no pain in the way, he runs away, he hates the things he is looking for! He wants nothing at the time you owe him. There is no escape from pains, as if they were perceived, to obtain the necessities.
                <a href="3">learn More</a>
            </div>
            <div class="img-box">
                <img src="img1.png" class="starmonks" alt="">
            </div>
        </div>
        <ul class="thumb">
            <li><img src="thumb1.png" onclick="imgSlider('img1.png');changeCircleColor('#017143')"></li>
            <li><img src="thumb2.png" onclick="imgSlider('img2.png');changeCircleColor('#0eb7495')"></li>
            <li><img src="thumb3.png" onclick="imgSlider('img3.png');changeCircleColor('#d752b1')"></li>
        </ul>
        <ul class="social">
            <li><a href="#"><img src="facebook.png"></a></li>
            <li><a href="#"><img src="instagram.png"></a></li>
            <li><a href="#"><img src="twitter.png"></a></li>
        </ul>
    </section>
</body>
</html>