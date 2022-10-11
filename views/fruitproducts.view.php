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
    <!--Add favicon to the website-->
    <link rel="icon" type="image/png" href="../images/Flevosap-logo.png">
    <title>Flevosap Producten</title>
</head>
<body>
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
                <a href="#"><img src="../images/cart.png" alt=""></a>
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
    <!-- Breadcrumb Section -->
    <section class="breadcrumb-section">
        <div class="container mt-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.view.php">Thuis</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Vruchten Sappen</li>
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
                                        <input type="radio"aria-label="radio button">
                                        <a href="products.view.php">Alle Sappen</a>
                                    </li>
                                    <li>
                                        <input type="radio"aria-label="radio button">
                                        <a href="fruitproducts.view.php" style="color: red">Vruchten Sappen</a>
                                    </li>
                                    <li>
                                        <input type="radio"aria-label="radio button">
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
                                    <h2 class="my-5">Vruchten Sappen</h2>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-sm-6">
                            <div class="product-cate">
                                <div class="parent">
                                    <div class="product-container">
                                        <img src="../images/products/fruits/Flevosap-appel.jpg" alt="">
                                        <div class="buy-container">
                                            <p class="product-title">
                                                Appel
                                            </p>
                                            <button class="card-btn">In winkelwagen</button>
                                        </div>
                                    </div>
                                    <div class="product-container">
                                        <img src="../images/products/fruits/Drinkpakje_appel.jpg" alt="">
                                        <div class="buy-container">
                                            <p class="product-title">
                                                Kleintje Appel
                                            </p>
                                            <button class="card-btn">In winkelwagen</button>
                                        </div>
                                    </div>
                                    <div class="product-container">
                                        <img src="../images/products/fruits/Flevosap-appel-aardbei.jpg" alt="">
                                        <div class="buy-container">
                                            <p class="product-title">
                                                Appel Aardbei
                                            </p>
                                            <button class="card-btn">In winkelwagen</button>
                                        </div>
                                    </div>
                                    <div class="product-container">
                                        <img src="../images/products/fruits/Flevosap-Appel-Ananas-Perzikkopie.jpg" alt="">
                                        <div class="buy-container">
                                            <p class="product-title">
                                                Appel Ananas Perzik
                                            </p>
                                            <button class="card-btn">In winkelwagen</button>
                                        </div>
                                    </div>
                                    <div class="product-container">
                                        <img src="../images/products/fruits/Flevosap-appel-cassis.jpg" alt="">
                                        <div class="buy-container">
                                            <p class="product-title">
                                                Appel Cassis
                                            </p>
                                            <button class="card-btn">In winkelwagen</button>
                                        </div>
                                    </div>
                                    <div class="product-container">
                                        <img src="../images/products/fruits/Flevosap-appel-citroen.jpg" alt="">
                                        <div class="buy-container">
                                            <p class="product-title">
                                                Appel Citroen<
                                            </p>
                                            <button class="card-btn">In winkelwagen</button>
                                        </div>
                                    </div>
                                    <div class="product-container">
                                        <img src="../images/products/fruits/Appel_Cranberry.png" alt="">
                                        <div class="buy-container">
                                            <p class="product-title">
                                                Appel Cranberry
                                            </p>
                                            <button class="card-btn">In winkelwagen</button>
                                        </div>
                                    </div>
                                    <div class="product-container">
                                        <img src="../images/products/fruits/Flevosap-appel-kers.jpg" alt="">
                                        <div class="buy-container">
                                            <p class="product-title">
                                                Appel Kers
                                            </p>
                                            <button class="card-btn">In winkelwagen</button>
                                        </div>
                                        <div class="product-container">
                                            <img src="../images/products/fruits/Flevosap-appel-peer.jpg" alt="">
                                            <div class="buy-container">
                                                <p class="product-title">
                                                    Appel Peer
                                                </p>
                                                <button class="card-btn">In winkelwagen</button>
                                            </div>
                                        </div>
                                        <div class="product-container">
                                            <img src="../images/products/fruits/Flevosap-appel-peer-zwartebes.jpg" alt="">
                                            <div class="buy-container">
                                                <p class="product-title">
                                                    Appel Peer Zwarte Bes
                                                </p>
                                                <button class="card-btn">In winkelwagen</button>
                                            </div>
                                        </div>
                                        <div class="product-container">
                                            <img src="../images/product1.png" alt="">
                                            <div class="buy-container">
                                                <p class="product-title">
                                                    Appelsap
                                                </p>
                                                <button class="card-btn">In winkelwagen</button>
                                            </div>
                                        </div>
                                        <div class="product-container">
                                            <img src="../images/product1.png" alt="">
                                            <div class="buy-container">
                                                <p class="product-title">
                                                    Appelsap<span class="price">€2.50</span>
                                                </p>
                                                <button class="card-btn">In winkelwagen</button>
                                            </div>
                                        </div>
                                        <div class="product-container">
                                            <img src="../images/product1.png" alt="">
                                            <div class="buy-container">
                                                <p class="product-title">
                                                    Appelsap<span class="price">€2.50</span>
                                                </p>
                                                <button class="card-btn">In winkelwagen</button>
                                            </div>
                                        </div>
                                        <div class="product-container">
                                            <img src="../images/product1.png" alt="">
                                            <div class="buy-container">
                                                <p class="product-title">
                                                    Appelsap<span class="price">€2.50</span>
                                                </p>
                                                <button class="card-btn">In winkelwagen</button>
                                            </div>
                                        </div>
                                        <div class="product-container">
                                            <img src="../images/product1.png" alt="">
                                            <div class="buy-container">
                                                <p class="product-title">
                                                    Appelsap<span class="price">€2.50</span>
                                                </p>
                                                <button class="card-btn">In winkelwagen</button>
                                            </div>
                                        </div>
                                        <div class="product-container">
                                            <img src="../images/product1.png" alt="">
                                            <div class="buy-container">
                                                <p class="product-title">
                                                    Appelsap<span class="price">€2.50</span>
                                                </p>
                                                <button class="card-btn">In winkelwagen</button>
                                            </div>
                                        </div>
                                        <div class="product-container">
                                            <img src="../images/product1.png" alt="">
                                            <div class="buy-container">
                                                <p class="product-title">
                                                    Appelsap<span class="price">€2.50</span>
                                                </p>
                                                <button class="card-btn">In winkelwagen</button>
                                            </div>
                                        </div>
                                    </div>
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

</footer>
</body>
</html>
