<?php
    include("config.php");
        $Kode = $_POST['Kode'];
        $Nama = $_POST['Nama'];
        $Alamat = $_POST['Alamat'];
        $JenisKelamin = $_POST['JenisKelamin'];
        $Agama = $_POST['Agama'];
        $AsalSekolah = $_POST['AsalSekolah'];

        $sql = "INSERT INTO tb_siswa(Kode, Nama, Alamat, JenisKelamin, Agama, AsalSekolah) value('$Kode', '$Nama', '$Alamat', '$JenisKelamin', '$Agama', '$AsalSekolah')";
        $query = mysqli_query($db, $sql);

        if($query){
            header('location: tampil.php');
        } else {
            header('location: inputdata.php');
        }
?>