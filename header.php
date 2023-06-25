<?php
session_start();
if(!isset($_SESSION['user id'])){
    echo'<script>alet("please login");
    window.location="assignment.php"</script>';
    die();
}
echo'welcom,'.strtoupper($_SESSION['name']);
echo'<br>';
echo"<b> Today's date is:".date('F M,Y');
echo'</b>';