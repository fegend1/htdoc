<?php

$dsn = "mysql:host=localhost;
        dbname=delivery_company;
        charset=utf8mb4";
 $db_user ='FEGEND';
 $dbpass = 'FEGEND0901461';
 $erromode = array(
    PDO::ATTR_ERRMODE =>
    PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE =>
     PDO::FETCH_ASSOC,
     PDO::ATTR_EMULATE_PREPARES => FALSE);
?>
