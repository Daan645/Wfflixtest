<?php

if(isset($_POST["submitRegister"])) {
//    Grabbing data from register submit button
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];
    $email = $_POST['email'];

//    Instantiate RegisterContr class
    include "../database/Connection.php";
    include "../classes/RegisterClass.php";
    include "../controller/RegisterContr.php";
    $register = new RegisterContr($uid, $pwd, $email);

//    Running error handlers and user sign up
    $register->registerUser();

//    Going back to index page
    header("location: ../views/index.view.php?error=none");
}