<?php
// md5,sha256,harh
session_start();
require('dbconnector.php');
$username= $_POST['username'];
$pwd= $_POST['password'];
if(!empty($username) && !empty($pwd)){
    $db= new PDO($dsn,$db_user,$dbpass,$erromode);
    $get=$db->prepare('SELECT * FROM users WHERE username = ? AND password = ? LIMIT 1');
    $get->execute([$username,md5($pwd)]);
    $row=$get->fetch(PDO::FETCH_ASSOC);
    if(is_array($row) && count(row)>0){
        $_SESSION['user id'] = $row['id'];
        $_SESSION['name'] = $row['name'];
        echo '<script type/javascript>
        window.location = "users_photo_album.php"</script>';
    } else{
        echo '<script>alert("invalid login credential")
        window.location = "assignment.php"</script>';
    }
}
?>