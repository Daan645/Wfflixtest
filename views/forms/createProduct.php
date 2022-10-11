<?php

include "../../database/Connection.php";
$conn = Connection::make();
$msg = '';


if (!empty($_POST)) {
    $productName = $_POST['productName'];
    $productDescription = $_POST['productDescription'];
    $productStock = $_POST['productStock'];
    $productPrice = $_POST['productPrice'];
    $categoryID = $_POST['categoryID'];

    // Validation rules
    if (is_numeric($productStock) && is_numeric($productPrice)) {
        // Update the record
        $stmt = $conn->prepare('INSERT INTO products (products_productName, products_desc, products_stockQTY, products_price, categories_categories_categoryID, categories_products_products_productID) VALUES (?, ?, ?, ?, ?, 1)');
        $stmt->execute([$productName, $productDescription, $productStock, $productPrice, $categoryID]);
        $msg = 'Een nieuwe product is succesvol aangemaakt! U word terug gestuurd naar de productenlijst.';

        echo "<script>
                setTimeout(function(){
                   window.location='../../views/productlist.view.php';
                }, 3000);</script>";
    } elseif (!is_numeric($productStock)) {
        $msg = '<b>Je mag bij de voorraad alleen nummers invoeren.</b>';
    } elseif (!is_numeric($productPrice)) {
        $msg = '<b>Je mag bij de prijs alleen nummers invoeren.</b>';
    }
}

?>
<link rel="stylesheet" href="../css/createProduct-view.css">
<div class="createProductCard">
    <h1>Nieuw product aanmaken</h1>
    <div class="createProductContainer">
        <form action="" method="post">
            <label for="productName">Naam</label>
            <input type="text" name="productName" id="productName"><br>
            <label for="productDescription">Beschrijving</label>
            <input type="text" name="productDescription" id="productDescription"><br>
            <label for="productName">Voorraad</label>
            <input type="text" name="productStock" id="productStock"><br>
            <label for="productName">Prijs in €</label>
            <input type="text" name="productPrice" id="productPrice"><br>
            <label for="productName">Categorie</label>
            <?php
            $categories = $conn->query('SELECT * FROM categories');

            echo "<select name='categoryID'>";
            while ($row = $categories->fetch(PDO::FETCH_ASSOC)) {
                $categoryID = $row['categories_categoryID'];
                $categoryName = $row['categories_categoryName'];

                echo "<option value=$categoryID>$categoryName</option>";
            }
            echo "</select>";
            ?>
            <input type="submit" value="Update">
        </form>
        <a href="../../views/productlist.view.php">
            <button type="button" class="cancelbtn">Annuleer</button>
        </a>
        <?php if ($msg): ?>
            <p><?= $msg ?></p>
        <?php endif; ?>
    </div>
</div>
