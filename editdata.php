<?php
    include("config.php");

    if(isset($_GET['id'])){
        header("location:tampil.php");
    }

    $id = $_GET['id'];
    $sql = "SELECT FROM tb_siswa WHERE Kode='$id'";
    $query = mysqli_query($db, $sql);
    $siswa = mysqli_fetch_assoc($query);

    if(mysqli_num_rows($query) < 1 ){
        die("Data tidak ditemukan ...");
    }
?>

<DOCTYPE html>
<html>
    <body>
        <head>Formulir PPDB</head>
        <header>
            <h3>Formulir Pendaftaran Siswa Baru</h3>
        </header>
        <form action = "prosesinput.php" method = "POST">
            <fieldset>
                <p>
                    <label >Kode : </label>
                    <input type="text" name = "Kode" placeholder = "Kode" value=<?php echo $siswa['Kode']?>/>
                </p>
                <p>
                    <label >Nama : </label>
                    <input type="text" name = "Nama" placeholder = "Nama Lengkap" value="<?php echo $siswa['Nama']?>"/>
                </p>
                <P>
                    <label >Alamat : </label>
                    <textarea name="Alamat" value="<?php echo $siswa['Alamat']?>"></textarea>
                </P>
                <p>
                    <label >Jenis Kelamin : </label> <?php $JenisKelamin = $siswa ['$JenisKelamin']; ?>
                    <label><input type="radio" name = "JK" value = "Laki-laki" <?php echo ($JenisKelamin=='Laki-laki') ? "checked": "" ?>>Laki-laki</label>
                    <label><input type="radio" name = "JK" value = "Perempuan" <?php echo ($JenisKelamin=='Laki-laki') ? "checked": "" ?>>Perempuan</label>
                </p>
                <p>
                    <label >Agama : </label>
                    <?php $Agama = $siswa['Agama']; ?>
                    <select name="Agama">
                        <option <?php echo ($Agama == 'Islam') ? "selected": "" ?>>Islam</option>
                        <option <?php echo ($Agama == 'Kristen') ? "selected": "" ?>>Kristen</option>
                        <option <?php echo ($Agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
                        <option <?php echo ($Agama == 'Budha') ? "selected": "" ?>>Budha</option>
                        <option <?php echo ($Agama == 'Kong Hu Cu') ? "selected": "" ?>>Kong Hu Cu</option>
                    </select>
                </p>
                <p>
                    <label >Asal Sekolah</label>
                    <input type="text" name = "AsalSekolah" placeholder = "Nama Sekolah" value="<?php echo $siswa['AsalSekolah']?>"/>
                </p>
                <p>
                    <input type="submit" value = "Simpan" name = "Simpan"/>
                </p>
            </fieldset> 
        </form>
    </body>
</html>