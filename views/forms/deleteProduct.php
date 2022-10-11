<?php

include "../../database/Connection.php";
$conn = Connection::make();

if (isset($_GET['delete'])){
    $id = $_GET['delete'];

    $deleteQuery = "DELETE FROM products WHERE products_productID = '$id'";

    $conn->query($deleteQuery);

    header('../../views/productlist.view.php');
    echo "<script> alert ('Product is succesvol verwijderd!');window.location='../../views/productlist.view.php' </script>";
}
?>
