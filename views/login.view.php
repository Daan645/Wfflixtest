<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link href="css/banner.css" rel="stylesheet">
    <link href="css/index-view.css" rel="stylesheet">
    <!--Add favicon to the website-->
    <link rel="icon" type="image/png" href="../images/Flevosap-logo.png">
    <title>Flevosap Inloggen</title>
</head>
<body>
<header>
    <!--Navbar logo & search box & cart-->
    <nav class="navbar">
        <div class="nav">
            <img src="../images/Flevosap-logo.png" class="brand-logo" alt="">
            <div class="nav-items">
                <div class="search">
                    <input type="text" class="search-box" placeholder="Zoeken...">
                    <button class="search-btn">search</button>
                </div>
                <a href="shoppingcart.view.php"><img src="../images/cart.png" alt=""></a>
            </div>
        </div>
        <!--Navbar links-->
        <?php require 'utils/navbar.php'; ?>
    </nav>
</header>
<main>
<form action="../includes/login.inc.php" method="post">
    <div class="logincard">
        <h1>Login</h1>
        <div class="logincontainer">
            <label for="uid"><b>Gebruikersnaam</b></label>
            <input type="text" placeholder="Voer je gebruikersnaam in" name="uid" required>

            <label for="pwd"><b>Wachtwoord</b></label>
            <input type="password" placeholder="Voer je wachtwoord in" name="pwd" required>

            <button type="submit" name="submitLogin">Login</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Onthoud gegevens
            </label>
        </div>
        <div class="logincontainer" style="background-color:#f1f1f1">
            <a href="../views/index.view.php">
                <button type="button" class="cancelbtn">Annuleer</button>
            </a>
            <a href="forgotPsw.view.php"><span class="psw">Wachtwoord vergeten?</span></a>
        </div>
    </div>
</form>
</main>
</body>