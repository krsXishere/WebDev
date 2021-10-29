<?php
    include("config.php");

    if(isset($_POST['Simpan'])){
        $id = $_POST['id'];
        $Nama = $_POST['Nama'];
        $Alamat = $_POST['Alamat'];
        $JenisKelamin = $_POST['JenisKelamin'];
        $Agama = $_POST['Agama'];
        $AsalSekolah = $_POST['AsalSekolah'];

        $sql = "UPDATE tb_siswa SET Nama='$Nama', Alamat='$Alamat', JenisKelamin='$JenisKelamin', Agama='$Agama', AsalSekolah='$AsalSekolah' WHERE Kode='$id'";
        $query = mysqli_query($db, $sql);

        if($query){
            header("Location:tampil.php");
        } else {
            die("Gagal menyimpan perubahan data...");
        }
    } else {
        die("Akses dilarang...");
    }
?>