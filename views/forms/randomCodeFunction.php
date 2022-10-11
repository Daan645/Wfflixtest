<?php

//Generate a random code with max length 5
function generateRandomString($length = 5) {
    $characters  = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'; //Chars that are allowed to be used
    $charactersLength = strlen($characters);
    $randomString = '';
    for($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}