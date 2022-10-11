<?php
session_start();
include "database/Connection.php";

//File Upload
if (isset($_POST['submit'])){
    $maxsize= 104857600; //100MB in Bytes
}

if (isset($_FILES['file']['name']) && $_FILES['file']['name'] !=''){
$name = $_FILES['file']['name'];
$target_dir = "videos/";
$target_file = $target_dir.$name;

// file extension
    $extension = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

//  valid file extensions
    $extension_arr = array("mp4", "avi", "3gp", "mov", "mpeg");

//   check extension
    if (in_array($extension, $extension_arr)){

//   check file size
        if ($_FILES['file']['size'] >=$maxsize){
            $_SESSION['message'] = "File too large. file must be less than 100MB";
        } else{
//   upload
            if (move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
// name kan fout zijn!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
            $stmt = Connection::make()->prepare("INSERT INTO videos(name,location) VALUES('".$name."','".$target_file."')");
            $stmt->execute();

            $_SESSION['message'] = "Upload successfully";
            }
        }
    } else{
        $_SESSION['message'] = "Invalid file extension.";
    }


}else{
    $_SESSION['message'] = "Please select a file.";
}


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
<!--Upload response-->
<?php
if (isset($_SESSION['message'])){
    echo $_SESSION['message'];
    unset($_SESSION['message']);
}

?>


<form method="post" action="" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" name="submit" value="upload">
</form>
</body>


