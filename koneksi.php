<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "tb_siswa";

    $connection = mysqli_connect($host,$user,$pass,$db);
    if(!$connection){
        die("connection fail");
    }else{
        // echo "connection success";
    }
?>