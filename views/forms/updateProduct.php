<?php

include "../../database/Connection.php";
$conn = Connection::make();
$msg = '';

if (isset($_GET['update'])) {
    if (!empty($_POST)) {
        $productName = $_POST['productName'];
        $productDescription = $_POST['productDescription'];
        $productStock = $_POST['productStock'];
        $productPrice = $_POST['productPrice'];
        $categoryID = $_POST['categoryID'];
        $id = isset($_POST['products_productID']) ? $_POST['products_productID'] : NULL;

        // Validation rules
        if (is_numeric($productStock) && is_numeric($productPrice)) {
            // Update the record
            $stmt = $conn->prepare('UPDATE products SET products_productName = ?, products_desc = ?, products_stockQTY = ?, products_price = ?, categories_categories_categoryID = ? WHERE products_productID = ?');
            $stmt->execute([$productName, $productDescription, $productStock, $productPrice, $categoryID, $_GET['update']]);
            $msg = 'Het product is succesvol bewerkt! U word terug gestuurd naar de productenlijst.';

            echo "<script>
                setTimeout(function(){
                   window.location='../../views/productlist.view.php';
                }, 3000);</script>";
        } elseif (!is_numeric($productStock)){
            $msg =  '<b>Je mag bij de voorraad alleen nummers invoeren.</b>';
        } elseif (!is_numeric($productPrice)){
            $msg =  '<b>Je mag bij de prijs alleen nummers invoeren.</b>';
        }
    }

    // Get the products from the users table
    $stmt = $conn->prepare('SELECT * FROM products INNER JOIN categories WHERE products_productID = ?');
    $stmt->execute([$_GET['update']]);
    $categories = $conn->query('SELECT * FROM categories');
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$product) {
        exit('Een product met dit ID bestaat niet!');
    }
} else {
    exit('Geen product gevonden!');
}
?>
<link rel="stylesheet" href="../css/updateProduct.view.css">
<div class="updateProductCard">
    <h1>Bewerk product #<?= $product['products_productID'] ?></h1>
    <div class="updateProductContainer">
        <form action="updateProduct.php?update=<?= $product['products_productID'] ?>" method="post">
            <label for="productName">Naam</label>
            <input type="text" name="productName" value="<?= $product['products_productName'] ?>" id="productName"><br>
            <label for="productDescription">Beschrijving</label>
            <input type="text" name="productDescription" value="<?= $product['products_desc'] ?>" id="productDescription"><br>
            <label for="productName">Voorraad</label>
            <input type="text" name="productStock" value="<?= $product['products_stockQTY'] ?>" id="productStock"><br>
            <label for="productName">Prijs in €</label>
            <input type="text" name="productPrice" value="<?= $product['products_price'] ?>" id="productPrice"><br>
            <label for="productName">Categorie</label>
            <?php
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
