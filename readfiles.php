<?php
session_start();
include "database/Connection.php";

?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="description" content="videos">
    <meta name="keywords" content="Flevosap">
    <title>videos</title>

</head>
<body>
<div>
    <?php

    $fetchVideos = Connection::make()->prepare("SELECT * FROM videos ORDER BY id DESC ");
    $fetchVideos->execute();
    while ($fetchVideo = $fetchVideos->fetch(PDO::FETCH_ASSOC) ) {
        $name = $fetchVideo['name'];
        $location = $fetchVideo['location'];

        echo "<div style='float: left; margin-right: 5px;'>
        <video src='" . $location . "' controls width='320px' height='320px'></video><br>
        <span>" . $name . "</span>
    </div>";
    }

    ?>


</div>


</body>