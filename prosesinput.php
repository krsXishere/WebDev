<?php
    include("config.php");

    //if(isset($_POST['daftar'])){
        $Nama = $_POST['Nama'];
        $Alamat = $_POST['Alamat'];
        $JenisKelamin = $_POST['JenisKelamin'];
        $Agama = $_POST['Agama'];
        $AsalSekolah = $_POST['AsalSekolah'];

        $sql = "INSERT INTO tb_siswa(Nama, Alamat, JenisKelamin, Agama, AsalSekolah) value('$Nama', '$Alamat', '$JenisKelamin', '$Agama', '$AsalSekolah')";
        $query = mysqli_query($db, $sql);

        if($query){
            header('location: tampil.php');
        } else {
            header('location: inputdata.php');
        }
    //} else {
    //    die("Akses dilarang ...");
    //}
?>