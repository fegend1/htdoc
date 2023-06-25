<?php
require("dbconnector.php");
if(isset($_GET['user']) && ($_GET['user'])>0){
    $user = $_GET['user'];
    $db = new PDO($dsn, $db_user,$dbpass, $erromode);
    $upd = $db->prepare('UPDATE users SET status = ? WHERE id = ?');
    $upd->execute([0,$user]);
    $test = $upd->rowCount();
    echo '<script type="text/javascript">
    alert("successfully updated");
window.location = "users.php";
</script>';
die();
}