<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../views/css/index-view.css">
    <link rel="stylesheet" href="../views/css/register-view.css">
    <!--Add favicon to the website-->
    <link rel="icon" type="image/png" href="../images/Flevosap-logo.png">
    <title>Flevosap Registreren</title>
</head>
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
    <form action="../includes/register.inc.php" method="post">
        <div class="registercard">
            <h1>Registreer</h1>
            <div class="registercontainer">
                <label for="uid"><b>Gebruikersnaam</b></label>
                <input type="text" placeholder="Stel hier je gebruikersnaam in" name="uid" required>

                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Stel hier je email in" name="email" required>

                <label for="pwd"><b>Wachtwoord</b></label>
                <input type="password" placeholder="Stel hier je wachtwoord in" name="pwd" required>

                <button type="submit" name="submitRegister">Registreer</button>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Onthoud gegevens
                </label>
            </div>
            <div class="registercontainer" style="background-color:#f1f1f1">
                <a href="../views/index.view.php">
                    <button type="button" class="cancelbtn">Annuleer</button>
                </a>
                <a href="../views/login.view.php"><span class="acc">Al een account?</span></a>
            </div>
        </div>
    </form>
</main>
<footer>

</footer>
</body>
</html>