<?php
    include("config.php");

    if(!isset($_GET['id'])){
        header("location:tampil.php");
    }

    $id = $_GET['id'];
    $sql = "SELECT * FROM tb_siswa WHERE Kode='$id'";
    $query = mysqli_query($db, $sql);
    $siswa = mysqli_fetch_assoc($query);

    if(mysqli_num_rows($query) < 1 ){
        die("Data tidak ditemukan ...");
    }
?>

<DOCTYPE html>
<html>
    <body>
        <div class="container">
            <head>Formulir PPDB</head>
            <header>
                <h3>Formulir Pendaftaran Siswa Baru</h3>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Data Siswa</title>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
                </header>
            <form action = "prosesedit.php" method = "POST">
                <fieldset>
                    <p>
                        <input type="hidden" name = "id" value="<?php echo $siswa['Kode']?>"/>
                    </p>
                    <p>
                        <label for="Nama">Nama : </label>
                        <input type="text" name = "Nama" placeholder = "Nama Lengkap" value="<?php echo $siswa['Nama']?>"/>
                    </p>
                    <P>
                        <label>Alamat : </label>
                        <textarea name="Alamat"><?php echo $siswa['Alamat']?></textarea>
                    </P>
                    <p>
                        <label >Jenis Kelamin : </label>
                        <?php $JenisKelamin = $siswa ['JenisKelamin']; ?>
                        <label><input type="radio" name = "JenisKelamin" value = " Laki-laki" <?php echo ($JenisKelamin=='Laki-laki') ? "checked": "" ?>>Laki-laki</label>
                        <label><input type="radio" name = "JenisKelamin" value = " Perempuan" <?php echo ($JenisKelamin=='Perempuan') ? "checked": "" ?>>Perempuan</label>
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
                        <input class="btn btn-outline-dark" type="submit" value = "Simpan" name = "Simpan"/>
                    </p>
                </fieldset> 
            </form>
        </div>
    </body>
</html>