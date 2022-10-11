<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Adding CSS Stylesheet-->
    <link href="css/aboutUs-view.css" rel="stylesheet">
    <link href="css/banner.css" rel="stylesheet">
    <link href="css/index-view.css" rel="stylesheet">
    <!--Add favicon to the website-->
    <link rel="icon" type="image/png" href="../images/Flevosap-logo.png">


    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Page Title-->
    <title>Flevosap Over Ons</title>
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
    <section>
        <img class="banner" src="../images/flevosapbanner.png">
    </section>
</header>
<main>

    <!--container for the first text and image-->
    <div class="container" id="containerFruitTextAndImage">
        <div class="aboutUsSecondText">
            <img src="../images/VruchtenB.png" alt="Vruchten">
        </div>
        <section class="aboutUsText">
            <h1 id="aboutUsHeader">Fruit is het mooiste cadeautje van de natuur</h1>
            <section class="aboutUsFruitTextParagraph">
                <p id="aboutUsParagraph">Familie Vermeulen maakt samen met een team van enthousiaste medewerkers
                    Flevosap.Ze zijn bijna
                    iedere
                    dag te
                    vinden in de boomgaarden rondom hun boerderij en bij collega-kwekers die ook hun bijdrage
                    leveren
                    aan
                    Flevosap.
                    Het fruit, dat is hun passie. Ze zijn er met hart en ziel aan verknocht. Het maakt niet uit of
                    je
                    hen iets
                    vraagt over appels, sinaasappels, aardbeien, citroenen, kersen, zwarte bessen, peren of
                    cranberry’s:
                    zij
                    weten
                    welk fruit in Flevosap mag, en welke niet. Bij de appels zijn bijvoorbeeld de Elstar, Goudrenet
                    en
                    Jonagold
                    favoriet.</p>
            </section>
        </section>
    </div>
</main>

<?php require 'utils/footer.php'; ?>


</body>

</html>