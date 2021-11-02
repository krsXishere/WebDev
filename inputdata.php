<html>
    <body>
        <div class="container">
            <header>
                <h3>Formulir Pendaftaran Siswa Baru</h3>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Data Siswa</title>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            </header>
            <form action = "prosesinput.php" method = "POST">
                <fieldset>
                    <div class="container">
                        <div class="form-group">
                            <p>
                                <label >Kode : </label>
                                <input type="text" name = "Kode" placeholder = "Kode"/>
                            </p>
                        </div>
                        <div class="form-group">
                            <p>
                                <label >Nama : </label>
                                <input type="text" name = "Nama" placeholder = "Nama Lengkap"/>
                            </p>
                        </div>
                        <div class="form-group">
                            <P>
                                <label >Alamat : </label>
                                <textarea name="Alamat"></textarea>
                            </P>
                        </div>
                        <div class="md-group">
                            <p>
                                <label >Jenis Kelamin : </label>
                                <label><input type="radio" name = "JenisKelamin" value = "Laki-laki">Laki-laki</label>
                                <label><input type="radio" name = "JenisKelamin" value = "Perempuan">Perempuan</label>
                            </p>
                        </div>
                        <div class="form-group">
                            <p>
                                <label >Agama : </label>
                                <select name="Agama">
                                    <option>Islam</option>
                                    <option>Kristen</option>
                                    <option>Hindu</option>
                                    <option>Budha</option>
                                    <option>Kong Hu Cu</option>
                                </select>
                            </p>
                        </div>
                        <div class="form-group">
                            <p>
                                <label >Asal Sekolah</label>
                                <input type="text" name = "AsalSekolah" placeholder = "Nama Sekolah"/>
                            </p>
                        </div>
                        <p>
                            <input class="btn btn-outline-success" type="submit" value = "Daftar" name = "Daftar"/>
                        </p>
                    </div>
                </fieldset> 
            </form>
        </div>
    </body>
</html>