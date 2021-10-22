<?php
    include("config.php");
    $id = $_GET['id'];
    $sql = "DELETE FROM tb_siswa WHERE Kode = '$id'";
    $query = mysqli_query($db, $sql);

    if($query){
        header("location:tampil.php");
    } else {
        die("Gagal menghapus ...");
    }
?>