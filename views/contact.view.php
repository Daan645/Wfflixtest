<?php
session_start();
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="description" content="Contact pagina voor Flevosap">
    <meta name="keywords" content="Flevosap">
    <!--Link stylesheets-->
    <link rel="stylesheet" href="../views/css/index-view.css">
    <link rel="stylesheet" href="../views/css/contact-view.css">
    <link rel="stylesheet" href="../views/css/banner.css">
    <!--Add favicon to the website-->
    <link rel="icon" type="image/png" href="../images/Flevosap-logo.png">

    <title>Flevosap Contact</title>
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
    <!--Banner-->
    <section>
        <img class="banner" alt="Flevosap Banner" src="../images/flevosapbanner.png">
    </section>
</header>

<main>

    <!--Fill out a form to contact the company-->
    <section class="container">
        <form action="forms/contactFormPost.php" method="post" class="contactForm">
            <section class="contactFormSection">
                <h1 class="h1Contact">Zoek contact met ons</h1>
                <label for="fullname">Volledige naam</label><br>
                <input type="text" id="fullname" name="fullname" placeholder="Wat is uw naam?"><br>

                <label for="email">E-mail adres</label><br>
                <input type="email" id="email" name="email" placeholder="Jij@voorbeeld.nl"><br>

                <label for="subject">Onderwerp</label><br>
                <input type="text" id="subject" name="subject" placeholder="Uw onderwerp"><br>

                <label for="messageBox">Bericht</label><br>
                <textarea name="messageBox" id="messageBox" placeholder="Type hier uw bericht aan ons"></textarea><br>

                <button type="submit" id="contactFormSubmit" name="contactFormSubmit">Versturen</button>
            </section>
        </form>
    </section>
</main>
<?php require 'utils/footer.php'; ?>
</body>
</html>