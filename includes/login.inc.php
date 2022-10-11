<?php

if(isset($_POST["submitLogin"])) {
//    Grabbing data from database
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];

//    Instantiate LoginContr class
    include "../database/Connection.php";
    include "../classes/LoginClass.php";
    include "../controller/LoginContr.php";
    $login = new LoginContr($uid, $pwd);

//    Running error handlers and user login
    $login->loginUser();

//    Going back to index page
    header("location: ../views/index.view.php?error=none");
}