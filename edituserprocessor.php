<?php

require("dbconnector.php");
  
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['phone'];
$user = $_POST['username'];
$password = $_POST['password'];
$passport = $_POST['passport'];
$id = $_POST['user'];

$db = new PDO($dsn, $db_user,$dbpass, $erromode);
$upd = $db->prepare('UPDATE users SET name = ?,email = ?,phone = ?,password = ?,username = ?,image_path = ? WHERE id = ?');
$upd->execute([$name,$email,$number,$password,$user,$passport,$id]);
$test = $upd->rowcount();
echo '<script type="text/javascript">
alert("successfully updated");
window.location = "users.php";
</script>';
die();

