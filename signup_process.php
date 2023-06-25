<?php
session_start();
require("dbconnector.php");
  
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['phone'];
$user = $_POST['username'];
$password = $_POST['password'];

$db = new PDO($dsn, $db_user,$dbpass, $erromode);
$start = $db->prepare("INSERT INTO users(name,phone,email,status,reg_date,
username,password) VAlUES(?,?,?,?,?,?,?)");

$start->execute([$name,$number,$email,1,'2022-10-25',$user,md5($password)]);
$insert_id = $db->lastInsertid();
echo $insert_id;
if($insert_id > 0) {
    echo '<script type="text/javascript">
    alert("welcome onboard!");
    window.location="sign-up.php";
    </script>';
} else {
    echo "unsuccessful";
};
?>

