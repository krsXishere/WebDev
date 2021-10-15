<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "db_ppdb";

    $db = mysqli_connect($server, $user, $password, $database);
    if(!$db){
        die ("Gagal terhubung dengan server!" .mysqli_connect_error());
    }
?>