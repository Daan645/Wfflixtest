<!--Code to check if the user is an admin-->

<?php
//starts session
session_start();

//if the user has a user id and is admin he will be redirected to the page (do nothing with the url)
if (isset($_SESSION["userid"]) && $_SESSION["isAdmin"] == 1) {
//does nothing with the link so the admin wil go to the right page
    header("Location:");

}

//if the user is not an admin it will be redirected to the index.php page
else {
//redirects the user to index.php
    header("Location:../index.php");
}
?>

