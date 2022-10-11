<?php
session_start();
//    var_dump($_SESSION);
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--Adding CSS Stylesheet-->
    <link rel="stylesheet" href="../views/css/index-view.css">
    <link rel="stylesheet" href="../views/css/footer.css">
    <!--Add favicon to the website-->
    <link rel="icon" type="image/png" href="../images/Flevosap-logo.png">

    <title>Flevosap Thuis</title>

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
    <section class="background-color">
        <!-- Populaire Products -->
        <section class="producten">
            <h2 class="product-category">Populaire Sappen</h2>
            <button class="pre-btn"><img src="../images/arrow.png"></button>
            <button class="nxt-btn"><img src="../images/arrow.png"></button>
            <div class="product-container">
                <div class="product-card">
                    <div class="product-image">
                        <span class="price">2,50$</span>
                        <img src="../images/product1.png" class="product-thumb" alt="">
                        <button class="card-btn">In winkelwagen</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <span class="price">2,50$</span>
                        <img src="../images/product2.png" class="product-thumb" alt="">
                        <button class="card-btn">In winkelwagen</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <span class="price">2,50$</span>
                        <img src="../images/product1.png" class="product-thumb" alt="">
                        <button class="card-btn">In winkelwagen</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <span class="price">2,50$</span>
                        <img src="../images/product2.png" class="product-thumb" alt="">
                        <button class="card-btn">In winkelwagen</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <span class="price">2,50$</span>
                        <img src="../images/product1.png" class="product-thumb" alt="">
                        <button class="card-btn">In winkelwagen</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <span class="price">2,50$</span>
                        <img src="../images/product2.png" class="product-thumb" alt="">
                        <button class="card-btn">In winkelwagen</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <span class="price">2,50$</span>
                        <img src="../images/product1.png" class="product-thumb" alt="">
                        <button class="card-btn">In winkelwagen</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Product Category Selection --->

        <section class="product-category-container">
            <h2 class="product-category-title">Onze Categorieën</h2>
            <div class="category-collection">
                <a href="#" class="collection">
                    <img src="../images/fruitproducten-intro.png" alt="">
                    <p class="collection-title">Fruit Sapjes</p>
                </a>
                <a href="#" class="collection">
                    <img src="../images/allproducts1.png" alt="">
                </a>
                <a href="#" class="collection">
                    <img src="../images/groentenproducten-intro.png" class="all-products-image" alt="">
                    <p class="collection-title">Groente Sapjes</p>
                </a>
            </div>
        </section>

        <?php require 'utils/footer.php'; ?>
    </section>
</main>
</body>
</html>
