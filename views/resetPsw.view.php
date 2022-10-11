<?php
require '../database/Connection.php';
session_start();

//Check if an email and a code is obtained
if (isset($_GET['email']) && isset($_GET['code'])) {
    $_SESSION['email'] = $_GET['email'];
    $code = $_GET['code'];

    //Check credentials against reset table
    $query = Connection::make()->prepare("SELECT * FROM reset WHERE users_email = ?");
    $query->execute([$_SESSION['email']]);
    $from_reset = $query->fetch();

    //Check if the code is valid
    if ($code != $from_reset['code']) {
        $expired = 'Sorry, uw link is ongeldig of verlopen.';
    }
}

//Reset password
if(isset($_POST['resetPwd'])) {
    $pwd1Reset = $_POST['pwd1Reset'];
    $pwd2Reset = $_POST['pwd2Reset'];

    //Compare the two fields to equal and hash if they match
    if($pwd1Reset == $pwd2Reset) {
        $hashed_pwd = password_hash($pwd1Reset, PASSWORD_DEFAULT);
    } else {
        //Throw this error if the passwords don't match
        $error = "Wachtwoorden komen niet overeen!";
    }

    //Update password in db
    if(empty($error)) {
        $query = Connection::make()->prepare("UPDATE users SET users_pwd = ? WHERE users_email = ?");
        $query->execute([$hashed_pwd, $_SESSION['email']]);

        $msg = "Uw wachtwoord is succesvol veranderd!";

        session_destroy();
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Flevosap wachtwoord veranderen</title>
    <!--Add CSS-->
    <link href="css/banner.css" rel="stylesheet">
    <link href="css/navbar.css" rel="stylesheet">
    <link href="css/forgotPsw.css" rel="stylesheet">
<!--    <link href="css/footer.css" rel="stylesheet">-->
    <!--Add favicon to the website-->
    <link rel="icon" type="image/png" href="../images/Flevosap-logo.png">
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
</header>
<main>
    <section>
        <h1>Verander uw wachtwoord:</h1>

        <?php
            //Message and error
            if(isset($msg)) {echo $msg;}
            if(isset($error)) {echo $error;}

            //Show the password change form
            if(!isset($expired) && isset($_GET['code'])) {
                echo '
                <form action="resetPsw.view.php" method="post">
                    <h4>Voer uw nieuwe wachtwoord in:</h4>
                    <input type="password" name="pwd1Reset" placeholder="Nieuw wachtwoord" required>
                    <input type="password" name="pwd2Reset" placeholder="Herhaal nieuw wachtwoord" required>
                    <input type="submit" name="resetPwd" value="Verander wachtwoord">
                </form>';
            }
        ?>
    </section>
</main>
<footer>

</footer>
</body>
</html>

