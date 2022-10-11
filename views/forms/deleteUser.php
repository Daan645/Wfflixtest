<?php

include "../../database/Connection.php";
$conn = Connection::make();

if (isset($_GET['delete'])){
    $id = $_GET['delete'];

    $deleteQuery = "DELETE FROM users WHERE users_id = '$id'";

    $conn->query($deleteQuery);

    header('../../views/userlist.view.php');
    echo "<script> alert ('Gebruiker is succesvol verwijderd!');window.location='../userlist.view.php' </script>";
}
?>
