<?php
 include 'PHP/database.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style/main.css">
    <title>Title</title>
</head>
<body>
<header>
    <h2 class="logo"><a href="index.html">Logo.</a></h2>
    <button class="hamburger">☰</button>
    <nav class="nav">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="school.html">School</a></li>
            <li><a href="avo.html">AVO</a></li>
            <li><a href="rooster.html">Rooster</a></li>
            <li><a href="phpPage.php">PHP</a></li>
            <li><a href="jsVoorbeeld.html">JS</a></li>
            <li><a href="verschillen.html">PHP/JS</a></li>
        </ul>
    </nav>
</header>
<main>
    <div class="section-one">
        <div class="section-one-a">

            <form action="/learning/Sass/phpPage.php" method="get">
                <input type="radio" id="Groningen" name="location" value="groningen">
                <label for="male">Groningen</label><br>
                <input type="radio" id="Assen" name="location" value="Assen">
                <label for="female">Assen</label><br>
                <input type="radio" id="Leeuwarden" name="location" value="Leeuwarden">
                <label for="other">Leeuwarden</label><br>
                <input type="radio" id="Zwolle" name="location" value="Zwolle">
                <label for="other">Zwolle</label><br><br>
                <input type="submit" class="submitDB">
            </form>
            <br>
            <form id="submitIntoDb" action="/learning/Sass/phpPage.php" method="get">
                <label for="firstName">First name<br></label><input type="text" id="firstName" name="firstname"><br>
                <label for="lastName"></label>Last name<br><input type="text" id="lastName" name="lastname"><br>
                <label for="location"></label>Location<br><input type="text" id="location" name="location"><br><br>
                <input type="submit">
            </form>
        </div>
        <div class="section-one-b">
            <?php showLocation($dsn, $user, $password);

            ?>
        </div>
    </div>
    <div class="section-two">
        <div class="section-two-a">

        </div>
        <div class="section-two-b">

        </div>
    </div>
</main>
<footer>
    <ul class="footLogos">

        <li><a href="tel:06-38139603"><img class="footPic" src="img/phone-call.png" alt="phone"></a></li>
        <li><a href="https://www.gmail.com"><img class="footPic" src="img/gmail.png" alt="mail"></a></li>
    </ul>
</footer>

<script rel="script" src="JS/app.js"></script>
</body>

</html>
