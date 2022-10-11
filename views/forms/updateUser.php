<?php

include "../../database/Connection.php";
$conn = Connection::make();
$msg = '';

if (isset($_GET['update'])) {
    if (!empty($_POST)) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $id = isset($_POST['users_id']) ? $_POST['users_id'] : NULL;

        // Update the record
        $stmt = $conn->prepare('UPDATE users SET users_uid = ?, users_email = ? WHERE users_id = ?');
        $stmt->execute([$username, $email, $_GET['update']]);
        $msg = 'Gebruiker is succesvol bewerkt! U word terug gestuurd naar de gebruikerslijst.';

        echo "<script>
                setTimeout(function(){
                   window.location='../userlist.view.php';
                }, 3000);</script>";
    }
    // Get the user from the users table
    $stmt = $conn->prepare('SELECT * FROM users WHERE users_id = ?');
    $stmt->execute([$_GET['update']]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$user) {
        exit('Een gebruiker met dat ID bestaat niet!');
    }
} else {
    exit('Geen ID gevonden!');
}
?>
<link rel="stylesheet" href="../css/updateUser.view.css">
<div class="updateUserCard">
    <h1>Bewerk gebruiker #<?= $user['users_id'] ?></h1>
    <div class="updateUserContainer">
        <form action="updateUser.php?update=<?= $user['users_id'] ?>" method="post">
            <label for="name">Name</label>
            <input type="text" name="username" value="<?= $user['users_uid'] ?>" id="username"><br>
            <label for="email">Email</label>
            <input type="text" name="email" value="<?= $user['users_email'] ?>" id="email"><br>
            <input type="submit" value="Update">
        </form>
        <a href="../userlist.view.php">
            <button type="button" class="cancelbtn">Annuleer</button>
        </a>
        <?php if ($msg): ?>
            <p><?= $msg ?></p>
        <?php endif; ?>
    </div>
</div>
