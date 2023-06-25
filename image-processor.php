<?php
require('dbconnector.php');
// var_dump($_FILES);
$name = $_POST['name'];
$image = $_FILES['picture'];
 if(!file_exists('./uploads/')){
    mkdir('./uploads');
 }
 $upload_dir = './uploads/';
//  $image_name = $image['name'];
$ext = explode('.',$image['name']);
$ext = end($ext);
$image_name = 'niit'.$name.'.'.$ext;
$image_name = "niit-$name.".$ext;
 $image_path = $upload_dir.$image_name;
 if(move_uploaded_file($image['tmp_name'],$image_path)){
    $db = new PDO($dsn, $db_user,$dbpass, $erromode);
    $get = $db->prepare("UPDATE users SET image_path = ? WHERE id = ?");
    $get->execute([$image_path,$name]);
    echo 'upload successfully';
    echo "<img src='$image_path' alt='' />";
 }






?>