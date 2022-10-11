<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Adding CSS Stylesheet-->
    <link rel="stylesheet" href="css/shoppingCart.view.css">
    <!--Add brand logo to the website-->
    <link rel="icon" type="image/png" href="../images/Flevosap-logo.png">
    <!-- Include javascript file -->
    <script src="java/shoppingcart.js" async></script>
</head>

<body>
<!-- Navigation Header -->
    <header>
        <nav class="navbar">
            <div class="nav">
                <img src="../images/Flevosap-logo.png" class="brand-logo" alt="">
                <div class="nav-items">
                    <div class="search">
                        <input type="text" class="search-box" placeholder="Zoeken...">
                        <button class="search-btn">search</button>
                    </div>
                    <a href="/views/shoppingcart.view.php"><img src="../images/cart.png" alt=""></a>
                </div>
            </div>
            <!-- Require Navbar -->
           <?php require 'utils/navbar.php'; ?>
            <!-- End require -->
        </nav>
    </header>
<!--Navigation Header end-->

<!-- Shopping Cart Page -->
<main class="main-background">
    <!-- Product Containers & Positioning -->
    <div class="small-container cart-page">
        <div class="cart-items">
            <!--  Table template for listed products -->
            <table>
                <!-- Row Description -->
                <tr>
                    <th class="shoppingcart-title">Winkelwagen</th>
                    <th>Items</th>
                    <th>Sub-Totaal</th>
                </tr>
                <!-- Row template for listed products -->
                <tr class="cart-row">
                    <td>
                        <div class="cart-info">
                            <img src="../images/product1.png">
                            <div>
                                <p>Flevosap Appelsap</p>
                                <small>Prijs: €2.50</small>
                                <br>
                                <button class="btn btn-delete" type="button">Verwijderen</button>
                            </div>
                        </div>
                    </td>
                    <!-- Product Value & Quantity -->
                    <td><input class="item-quantity" type="number" value="1"></td>
                    <td><span class="item-price">€2.50</span></td>
                </tr>
                <!-- Copy & Paste -->
                <tr class="cart-row">
                    <td>
                        <div class="cart-info">
                            <img src="../images/product1.png">
                            <div>
                                <p>Flevosap Appelsap</p>
                                <small>Prijs: €2.50</small>
                                <br>
                                <button class="btn btn-delete" type="button">Verwijderen</button>
                            </div>
                        </div>
                    </td>
                    <td><input class="item-quantity" type="number" value="1"></td>
                    <td><span class="item-price">€2.50</span></td>
                </tr>
                <tr class="cart-row">
                    <td>
                        <div class="cart-info">
                            <img src="../images/product1.png">
                            <div>
                                <p>Flevosap Appelsap</p>
                                <small>Prijs: <span class="item-price">€2.50</span></small>
                                <br>
                                <button class="btn btn-delete" type="button">Verwijderen</button>
                            </div>
                        </div>
                    </td>
                    <td><input class="item-quantity" type="number" value="1"></td>
                    <td><span class="item-price">€2.50</span></td>
                </tr>
            </table>
        </div>
        <!-- Total Price Template -->
        <div class="total-price">
            <table>
                <!-- Vertical Row Description of Total Price -->
                <tr>
                    <td>Sub-Totaal</td>
                    <td class="cart-sub-total-price">€0</td>
                </tr>
                <tr>
                    <td>BTW: 19%</td>
                    <td class="cart-btw-total">€0</td>
                </tr>
                <tr>
                    <td>Totaal</td>
                    <td class="cart-total-price">€0</td>
                </tr>
                <!-- Purchase Button -->
                <tr>
                    <td><button class="purchase-btn" href="#">Betalen</button></td>
                </tr>
            </table>

        </div>
    </div>
</main>
</body>
</html>
