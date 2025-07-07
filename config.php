<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "onlineshop_6b";

    $connect_db = mysqli_connect($server, $username, $password, $database);
    mysqli_query($connect_db, "SET CHARACTER SET 'utf8'");
    mysqli_query($connect_db, "SET SESSION collaction_connection = 'utf8_unicode_ci'");
    if ($connect_db->connect_error){
        // die("Connection error: ". $connect_db->connect_error);
    }else{
        // echo "Connect Database Success !";
    }
?>