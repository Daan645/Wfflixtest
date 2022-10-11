<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Products Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../views/css/productPage.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!--Add favicon to the website-->
    <link rel="icon" type="image/png" href="../images/Flevosap-logo.png">
    <title>Flevosap Producten</title>
</head>
<body>
<div class="bg"></div>
<header>
    <!--Navbar logo & search box & cart-->
    <nav class="navbar-two">
        <div class="nav-two">
            <img src="../images/Flevosap-logo.png" class="brand-logo" alt="">
            <div class="nav-items-two">
                <div class="search-two">
                    <input type="text" class="search-box-two" placeholder="Zoeken...">
                    <button class="search-btn-two">search</button>
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
<main class="background-color">
    <nav class="product-navigation">

    </nav>
    <main>
        <!-- Breadcrumb Section -->
        <section class="breadcrumb-section">
            <div class="container mt-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.view.php">Thuis</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Alle Sappen</li>
                    </ol>
                </nav>
            </div>
        </section>
        <!-- End Breadcrumb Section -->
        <!-- Category Sidebar -->
        <section class="category">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div>
                            <aside class="side-area product-side side-shadow mt-5">
                                <div class="side-title">
                                    <h3>Categorieën</h3>
                                </div>
                                <div class="side-content">
                                    <ul class="list">
                                        <p>Boomgaard</p>
                                        <li>
                                            <a href="products.view.php" style="color: red">Alle Sappen</a>
                                        </li>
                                        <li>
                                            <a href="fruitproducts.view.php">Vruchten Sappen</a>
                                        </li>
                                        <li>
                                            <a href="vegtableproducts.view.php">Groente Sappen</a>
                                        </li>
                                    </ul>
                                </div>
                            </aside>
                        </div>
                    </div>

                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="product-top d-flex justify-content-left align-items-center">
                                    <div class="product-sec product-item">
                                        <h2 class="my-5">Alle Sappen</h2>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-sm-6">
                                <div class="product-cate">
                                    <div class="product-card">
                                        <table class="product-table">
                                            <tr class="cart-row">
                                                <td>
                                                    <div class="product-container">
                                                            <img src="../images/products/fruits/Flevosap-appel.jpg" alt="" class="img-detail">
                                                            <div class="buy-container">
                                                                <p class="product-title">Appel</p>
                                                                <button class="card-btn">In winkelwagen</button>
                                                                <a href="#"><img src="../images/info-icon.png" class="info-icon product-link" data-productid="1"></a>
                                                                <span class="price">€ 2.50</span>
                                                            </div>
                                                    </div>
                                                    <!-- product full -->
                                                    <div class="full-product transition" id="1">
                                                        <div class="info">
                                                            <div class="image">
                                                                <img src="../images/products/fruits/Flevosap-appel.jpg" alt="product">
                                                            </div>
                                                            <div class="image">
                                                                <img src="../images/products/fruits/suplements/Apple-vw.PNG" alt="product">
                                                            </div>
                                                            <img src="../images/close-icon.png" class="close-icon">
                                                            <div class="description">
                                                                <h3 class="subtitle">Vruchten Sap</h3>
                                                                <h2 class="title">Appel</h2>
                                                                <h4>Prijs: <span class="price-popup">€ 2.50</span></h4>
                                                                <div class="counter">
                                                                    <span class="down" onClick='decreaseCount(event, this)'>-</span>
                                                                    <input type="text" value="1">
                                                                    <span class="up" onClick='increaseCount(event, this)'>+</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="appreciation">
                                                            <div>
                                                                <i class="yellow fas fa-star"></i>
                                                                <i class="yellow fas fa-star"></i>
                                                                <i class="yellow fas fa-star"></i>
                                                                <i class="yellow fas fa-star"></i>
                                                                <i class="gray fas fa-star"></i>
                                                            </div>
                                                            <div class="review">
                                                                0 reviews <i class="fas fa-chevron-right"></i>
                                                            </div>
                                                        </div>
                                                        <div class="more-info">
                                                            <p>De meest gegeten appel van Nederland is de Elstar.
                                                                Uit de hand vinden wij die ook het lekkerst,
                                                                maar wij hebben gemerkt dat als je er ook Jonagold en nog een paar verrassende appelsoorten bij het sap doet,
                                                                het sap een frisse en nog lekkerdere smaak krijgt. Gelukkig groeien deze appels ook in de boomgaarden in de Flevopolder.</p>
                                                        </div>
                                                        <div class="cart">
                                                            <div class="to-cart">
                                                                <button class="card-btn-popup">In Winkelwagen</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-container">
                                                        <img src="../images/products/fruits/kleintje-appel.jpg" alt="" class="img-detail">
                                                        <div class="buy-container">
                                                            <p class="product-title">Kleintje Appel</p>
                                                            <button class="card-btn">In winkelwagen</button>
                                                            <a href="#"><img src="../images/info-icon.png" alt="" class="info-icon"></a>
                                                            <span class="price">€ 2.50</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-container">
                                                        <img src="../images/products/fruits/Flevosap-appel-aardbei.jpg" alt="" class="img-detail">
                                                        <div class="buy-container">
                                                            <p class="product-title">Appel-Aardbei</p>
                                                            <button class="card-btn">In winkelwagen</button>
                                                            <a href="#"><img src="../images/info-icon.png" alt="" class="info-icon"></a>
                                                            <span class="price">€ 2.50</span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="cart-row">
                                                <td>
                                                    <div class="product-container">
                                                        <img src="../images/products/fruits/Flevosap-Appel-Ananas-Perzikkopie.jpg" alt="" class="img-detail">
                                                        <div class="buy-container">
                                                            <p class="product-title-ln">Appel-Ananas-Perzik</p>
                                                            <button class="card-btn">In winkelwagen</button>
                                                            <a href="#"><img src="../images/info-icon.png" alt="" class="info-icon"></a>
                                                            <span class="price">€ 2.50</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-container">
                                                        <img src="../images/products/fruits/Flevosap-appel-cassis.jpg" alt="" class="img-detail">
                                                        <div class="buy-container">
                                                            <p class="product-title">Appel-Cassis</p>
                                                            <button class="card-btn">In winkelwagen</button>
                                                            <a href="#"><img src="../images/info-icon.png" alt="" class="info-icon"></a>
                                                            <span class="price">€ 2.50</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-container">
                                                        <img src="../images/products/fruits/Flevosap-appel-citroen.jpg" alt="" class="img-detail">
                                                        <div class="buy-container">
                                                            <p class="product-title">Appel-Citroen</p>
                                                            <button class="card-btn">In winkelwagen</button>
                                                            <a href="#"><img src="../images/info-icon.png" alt="" class="info-icon"></a>
                                                            <span class="price">€ 2.50</span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="cart-row">
                                                <td>
                                                    <div class="product-container">
                                                        <img src="../images/products/fruits/Appel_Cranberry.png" alt="" class="img-detail-id">
                                                        <div class="buy-container">
                                                            <p class="product-title">Appel-Cranberry</p>
                                                            <button class="card-btn">In winkelwagen</button>
                                                            <a href="#"><img src="../images/info-icon.png" alt="" class="info-icon"></a>
                                                            <span class="price">€ 2.50</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-container">
                                                        <img src="../images/products/fruits/Flevosap-appel-kers.jpg" alt="" class="img-detail">
                                                        <div class="buy-container">
                                                            <p class="product-title">Appel-Kers</p>
                                                            <button class="card-btn">In winkelwagen</button>
                                                            <a href="#"><img src="../images/info-icon.png" alt="" class="info-icon"></a>
                                                            <span class="price">€ 2.50</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-container">
                                                        <img src="../images/products/fruits/Flevosap-appel-peer.jpg" alt="" class="img-detail">
                                                        <div class="buy-container">
                                                            <p class="product-title">Appel-Peer</p>
                                                            <button class="card-btn">In winkelwagen</button>
                                                            <a href="#"><img src="../images/info-icon.png" alt="" class="info-icon"></a>
                                                            <span class="price">€ 2.50</span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="cart-row">
                                                <td>
                                                    <div class="product-container">
                                                        <img src="../images/products/fruits/Flevosap-appel-peer-zwartebes.jpg" alt="" class="img-detail">
                                                        <div class="buy-container">
                                                            <p class="product-title-lng">Appel-Peer-Zwarte Bes</p>
                                                            <button class="card-btn">In winkelwagen</button>
                                                            <a href="#"><img src="../images/info-icon.png" alt="" class="info-icon"></a>
                                                            <span class="price">€ 2.50</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-container">
                                                        <img src="../images/products/fruits/appel-rabarber.jpg" alt="" class="img-detail">
                                                        <div class="buy-container">
                                                            <p class="product-title">Appel-Rabarber</p>
                                                            <button class="card-btn">In winkelwagen</button>
                                                            <a href="#"><img src="../images/info-icon.png" alt="" class="info-icon"></a>
                                                            <span class="price">€ 2.50</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-container">
                                                        <img src="../images/products/fruits/Flevosap-appel-sinaasappel.jpg" alt="" class="img-detail">
                                                        <div class="buy-container">
                                                            <p class="product-title-ln">Appel-Sinaasappel</p>
                                                            <button class="card-btn">In winkelwagen</button>
                                                            <a href="#"><img src="../images/info-icon.png" alt="" class="info-icon"></a>
                                                            <span class="price">€ 2.50</span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="cart-row">
                                                <td>
                                                    <div class="product-container">
                                                        <img src="../images/products/fruits/Flevosap-peer.jpg" alt="" class="img-detail">
                                                        <div class="buy-container">
                                                            <p class="product-title">Peer</p>
                                                            <button class="card-btn">In winkelwagen</button>
                                                            <a href="#"><img src="../images/info-icon.png" alt="" class="info-icon"></a>
                                                            <span class="price">€ 2.50</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-container">
                                                        <img src="../images/products/fruits/Flevosap-peer-cranberry.jpg" alt="" class="img-detail">
                                                        <div class="buy-container">
                                                            <p class="product-title">Peer-Cranberry</p>
                                                            <button class="card-btn">In winkelwagen</button>
                                                            <a href="#"><img src="../images/info-icon.png" alt="" class="info-icon"></a>
                                                            <span class="price">€ 2.50</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-container">
                                                        <img src="../images/products/fruits/Flevosap-sinaasappel.jpg" alt="" class="img-detail">
                                                        <div class="buy-container">
                                                            <p class="product-title">Sinaasappel</p>
                                                            <button class="card-btn">In winkelwagen</button>
                                                            <a href="#"><img src="../images/info-icon.png" alt="" class="info-icon"></a>
                                                            <span class="price">€ 2.50</span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="cart-row">
                                                <td>
                                                    <div class="product-container">
                                                        <img src="../images/products/fruits/Flevosap-winteravond.jpg" alt="" class="img-detail">
                                                        <div class="buy-container">
                                                            <p class="product-title">Winteravond</p>
                                                            <button class="card-btn">In winkelwagen</button>
                                                            <a href="#"><img src="../images/info-icon.png" alt="" class="info-icon"></a>
                                                            <span class="price">€ 2.50</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-container">
                                                        <img src="../images/products/fruits/Drinkpakje_appelbraam.jpg" alt="" class="img-detail">
                                                        <div class="buy-container">
                                                            <p class="product-title">Appel-Braam</p>
                                                            <button class="card-btn">In winkelwagen</button>
                                                            <a href="#"><img src="../images/info-icon.png" alt="" class="info-icon"></a>
                                                            <span class="price">€ 2.50</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-container">
                                                        <img src="../images/products/fruits/Drinkpakje_appel.jpg" alt="" class="img-detail">
                                                        <div class="buy-container">
                                                            <p class="product-title">Appel</p>
                                                            <button class="card-btn">In winkelwagen</button>
                                                            <a href="#"><img src="../images/info-icon.png" alt="" class="info-icon"></a>
                                                            <span class="price">€ 2.50</span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="cart-row">
                                                <td>
                                                    <div class="product-container">
                                                        <img src="../images/products/fruits/Drinkpakje_aap.jpg" alt="" class="img-detail">
                                                        <div class="buy-container">
                                                            <p class="product-title-ln">Appel-Ananas-Perzik</p>
                                                            <button class="card-btn">In winkelwagen</button>
                                                            <a href="#"><img src="../images/info-icon.png" alt="" class="info-icon"></a>
                                                            <span class="price">€ 2.50</span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Category Sidebar -->
    </main>
    <footer>
        <?php require 'utils/footer.php'; ?>
    </footer>
    <script src="java/productpage.js" async></script>
</body>
</html>
