<?php
//Create database connection
require '../database/Connection.php';
include 'forms/randomCodeFunction.php';

//Check if the email address is set
if(isset($_POST['sendLink'])) {
    //Retrieve email that's been put in the field.
    $email = $_POST['email'];

    //Check if email exists in the database
    $query = Connection::make()->prepare('SELECT * FROM users WHERE users_email = ?');
    $query->execute([$email]);
    $row = $query->rowCount();

    if($row == 1) {
        //Generate code from function
        $code = generateRandomString();

        //Formulate link
        $link = 'href="http://localhost:8000/views/resetPsw.view.php?email='.$email.'&code='.$code.'"';
        //Create link that gets send in the email
        $linkTwo = "<span style='width: 100%;'><a style='padding: 10px 100px; border-radius: 30px; background: #02c47d;'". $link .">Wachtwoord veranderen</a></span>";

        //Retrieve data from the reset table
        $query_reset = Connection::make()->prepare("SELECT * FROM reset WHERE reset_email = ?");
        $query_reset->execute([$email]);
        $from_reset = $query_reset->fetch();

        //Check for first time use and create values
        if(empty($from_reset)) {
            //Save info in the reset table
            $query_insert_reset = Connection::make()->prepare("INSERT INTO reset(reset_email, reset_code) VALUES(?, ?)");
            $query_insert_reset->execute([$email, $code]);
        } else {
            //Overwrite the old code if one already exists
            $query_insert_reset = Connection::make()->prepare("UPDATE reset SET reset_code = ? WHERE reset_email = ?");
            $query_insert_reset->execute([$code, $email]);
        }

        //Formulate and send email
        $from = 'Brianbekhof@gmail.com';
        $to = $email;
        $subject = 'Wachtwoord veranderen voor Flevosap';

        $message = '
            <p>Beste '.$email.',</p>
            
            <p>Door op de onderstaande link te klikken kunt u uw wachtwoord veranderen:</p>
            <p>'.$linkTwo.'</p>
            
            <p>Met vriendelijke groeten,</p>
            <br>
            <p>Team Flevosap.</p>';

        //HTML for the email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: ".$from."\r\n";

        //Mail function to send the email
        mail($to, $subject, $message, $headers);

        //Notify user email was sent successfully
        $msg = '<h4 style="text-align: center; color: #1ede00; padding-top: 1%;">Wij hebben u een email verzonden!</h4>
                <br>
                <p style="text-align: center; color: #000000;">Bekijk ook uw spam folder als de email niet binnen komt.</p>';
    } else {
        //Throw error if the email isn't found in the database
        $error = "<script> alert ('Dit email adres komt niet voor in onze database!');</script>";
    }
}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flevosap wachtwoord vergeten</title>

    <!--Add CSS-->
    <link href="css/banner.css" rel="stylesheet">
    <link href="css/navbar.css" rel="stylesheet">
    <link href="css/forgotPsw.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
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
        <div class="forgotCard">
            <h1 class="forgotPswTxt">Wachtwoord vergeten</h1>
            <!--Message & error-->
            <?php if(isset($msg)) {echo $msg;} ?>
            <?php if(isset($error)) {echo $error;} ?>

            <!--Form to submit email for forgotten password-->
            <div class="forgotContainer">
                <form action="forgotPsw.view.php" method="POST">
                    <label for="email">Email adres</label>
                    <input type="email" name="email" placeholder="Email adres"><br>
                    <input type="submit" class="sendLink" name="sendLink" value="Versturen">
                </form>
            </div>
        </div>
    </section>
</main>
<footer>
    <div class="inner_footer">
        <div class="logo_container">
            <img src="../images/Flevosap-logo.png">
        </div>
        <div class="footer_third">
            <p>
                <h1> Info </h1>
                <ul class="flevoinfo">

                    <li> Flevosap bv</li>
                    <li>Prof. Zuurlaan 22</li>
                    <li> 8256 PE Biddinghuizen, Nederland</li>
                    <li> info@flevosap.nl"</li>
                    <li> Tel: +31 (0)321 – 33 25 25"</li>
                </ul>
                <div>
                    <a href="https://www.fssc22000.com/" target="_blank">
                        <img class="fsscicon" src="../images/fssc-foto-png.png">
                    </a>
                    <a href="https://www.keurmerkmvo.nl" target="_blank">
                        <img class="mvoicon" src="../images/mvo-keurmerk.jpeg"
                    </a>
                    <a href="https://www.gmpplus.org/nl" target="_blank">
                        <img class=gmopicon src="../images/gmp.jpeg">
                    </a>
                </div>
            </p>
        </div>

        <div class="tekst1"><h1>Volg ons</h1></div>
        <!-- Add font awesome icons -->

        <div><a href="https://www.facebook.com/Flevosap/" class="fa fa-facebook" target="_blank"></a>
            <a href="https://www.instagram.com/flevosap/" class="fa fa-instagram" target="_blank"></a>
        </div>
</footer>
</body>
</html>