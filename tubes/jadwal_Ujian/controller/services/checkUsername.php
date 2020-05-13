<?php
    require_once "mysqlDB.php";

    $db = new mysqlDB("localhost","root","","ftis_akademik_a");

    $user = $_GET['usr'];
    $query = "SELECT * FROM user WHERE username = '$user'";
    #print_r($query);
    $res = $db->executeSelectQuery($query);
    if(count($res)>0){
        echo "Username tidak bisa digunakan";
    }else{
        echo "Username Bisa Digunakan";
    }
?>