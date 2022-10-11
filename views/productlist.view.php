
<!--Beginning code to check if the user is an admin-->

<?php
//require adminCheck.inc.php to check if someone is an admin
require '../includes/adminCheck.inc.php';
?>

<!--Ending code to check if the user is an admin-->


<!DOCTYPE html>
<html lang="nl">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="description" content="Contact pagina voor Flevosap">
    <meta name="keywords" content="Flevosap">
    <!--Link stylesheets-->
    <link rel="stylesheet" href="../views/css/navbar.css">
    <link rel="stylesheet" href="../views/css/productlist-view.css">
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
                <a href="#"><img src="../images/cart.png" alt=""></a>
            </div>
        </div>
        <!--Navbar links-->
        <?php require 'utils/navbar.php'; ?>
    </nav>
</header>
<main>
    <a class="createButton" href="forms/createProduct.php">Nieuw Product</a>
    <div class="productsCard">
        <h3>Lijst van producten:</h3>
        <table>
            <tr>
                <th>ID</th>
                <th>Productnaam</th>
                <th>Categorie</th>
                <th>Prijs</th>
                <th>Voorraad</th>
                <th>Aanpassen</th>
            </tr>
            <?php
            // Verbinding maken met het database bestand
            require_once('../database/Connection.php');
            // Maakt de verbinding met de database
            $conn = Connection::make();

            // Query voor wat we nodig hebben
            $query = "SELECT * FROM products INNER JOIN categories ON categories_categories_categoryID = categories_categoryID";

            $rows = $conn->query($query);

            while ($row = $rows->fetch()) {
                ?>
                <tr>
                    <td><?php echo $row['products_productID']; ?></td>
                    <td><?php echo $row['products_productName']; ?></td>
                    <td><?php echo $row['categories_categoryName']; ?></td>
                    <td>€ <?php echo $row['products_price']; ?></td>
                    <td><?php echo $row['products_stockQTY']; ?></td>
                    <td>
                        <a class="updateButton"
                           href="forms/updateProduct.php?update=<?php echo $row['products_productID']; ?>">Bewerken</a>
                        <a class="deleteButton"
                           href="forms/deleteProduct.php?delete=<?php echo $row['products_productID']; ?>"
                           onclick="return confirm('Weet je zeker dat je het product <?php echo $row['products_productName']; ?> wilt verwijderen?')">Verwijder</a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>
