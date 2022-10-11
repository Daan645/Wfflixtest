
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
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/userlist-view.css">
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
    <div class="usersCard">
        <h3>Lijst van gebruikers:</h3>
        <table>
            <tr>
                <th>ID</th>
                <th>Gebruikersnaam</th>
                <th>Email</th>
                <th>Rol</th>
                <th>Aanpassen</th>
            </tr>
            <?php
            // Verbinding maken met het database bestand
            require_once('../database/Connection.php');
            // Maakt de verbinding met de database
            $conn = Connection::make();

            // Query voor wat we nodig hebben
            $query = "SELECT * FROM users";
            $rows = $conn->query($query);

            while ($row = $rows->fetch()) {
                ?>
                <tr>
                    <td><?php echo $row['users_id']; ?></td>
                    <td><?php echo $row['users_uid']; ?></td>
                    <td><?php echo $row['users_email']; ?></td>
                    <td><?php echo $row['users_isAdmin']; ?></td>
                    <td>
                        <a class="updateButton" href="forms/updateUser.php?update=<?php echo $row['users_id']; ?>"
                           role="button">Bewerken</a>
                        <a class="deleteButton" href="forms/deleteUser.php?delete=<?php echo $row['users_id']; ?>"
                           role="button"
                           onclick="return confirm('Weet je zeker dat je de gebruiker <?php echo $row['users_uid']; ?> wilt verwijderen?')">Verwijder</a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>
