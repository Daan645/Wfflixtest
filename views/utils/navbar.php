<ul class="links-container">
    <?php
    if(isset($_SESSION["userid"]) && $_SESSION["isAdmin"] == 1) {
        ?>
        <li class="link-item"><a href="../views/index.view.php" class="link selected">Thuis</a></li>
        <li class="link-item"><a href="../views/products.view.php" class="link">Producten</a></li>
        <li class="link-item"><a href="../views/aboutUs.view.php" class="link">Over ons</a></li>
        <li class="link-item"><a href="../views/contact.view.php" class="link">Contact</a></li>

<!--Begin Dropdown Menu-->

        <div class="dropdown">
            <button class="dropbtn">Beheer Paneel</button>
            <div class="dropdown-content">
                <a href="../views/productlist.view.php">Producten Lijst</a>
                <a href="../views/userlist.view.php">Gebruikers Lijst</a>
            </div>
        </div>

<!--End Dropdown Menu-->

        <li class="link-item"><a href="../includes/logout.inc.php" class="link">Log uit</a></li>

        <!--                    <li class="link-item"><a href="../views/register.view.php" class="link">Registreren</a></li>-->
        <?php
    } elseif(isset($_SESSION["userid"])) {
        ?>
        <li class="link-item"><a href="../views/index.view.php" class="link selected">Thuis</a></li>
        <li class="link-item"><a href="../views/products.view.php" class="link">Producten</a></li>
        <li class="link-item"><a href="../views/aboutUs.view.php" class="link">Over ons</a></li>
        <li class="link-item"><a href="../views/contact.view.php" class="link">Contact</a></li>
        <li class="link-item"><a href="../includes/logout.inc.php" class="link">Log uit</a></li>
        <?php
    } else {
        ?>
    <li class="link-item"><a href="../views/index.view.php" class="link selected">Thuis</a></li>
    <li class="link-item"><a href="../views/products.view.php" class="link">Producten</a></li>
    <li class="link-item"><a href="../views/aboutUs.view.php" class="link">Over ons</a></li>
    <li class="link-item"><a href="../views/contact.view.php" class="link">Contact</a></li>
    <li class="link-item"><a href="../views/login.view.php" class="link">Login</a></li>
    <li class="link-item"><a href="../views/register.view.php" class="link">Registreren</a></li>
    <?php
    }
    ?>
</ul>