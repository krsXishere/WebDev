<html>
    <body>
        <div class="p-3 mb-2 bg-dark text-white" style="height: 1000px;" >
            <header>
                <h3 align="center">Formulir Pendaftaran Siswa Baru</h3>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Data Siswa</title>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            </header>
            <form action = "prosesinput.php" method = "POST">
                <fieldset>
                        <div class="form-group">
                            <label for="Kode" class="form-label">Kode</label>
                            <input type="text" name = "Kode" placeholder = "Kode" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label for="Nama" class="form-label">Nama</label>
                            <input type="text" name = "Nama" placeholder = "Nama Lengkap" class="form-control"/>
                        </div>
                        <div class="md-form">
                            <label for="Alamat" >Alamat</label>
                            <textarea name="Alamat" class="md-textarea form-control" rows="3" placeholder="Alamat"></textarea>
                        </div>
                        <div class="md-form">
                            <label for="JenisKelamin">Jenis Kelamin</label>
                            <div class="form-check">
                                <label class="form-check-label">
                                <input type="radio" name = "JenisKelamin" value = "Laki-laki" class="form-check-input">Laki-laki</label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                <input type="radio" name = "JenisKelamin" value = "Perempuan" class="form-check-input">Perempuan</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Agama" >Agama</label>
                                <select name="Agama" class="form-control">
                                    <option>Pilih Agama</option>
                                    <option>Islam</option>
                                    <option>Kristen</option>
                                    <option>Hindu</option>
                                    <option>Budha</option>
                                    <option>Kong Hu Cu</option>
                                </select>
                        </div>
                        <div class="form-group">
                            <label >Asal Sekolah</label>
                            <input class="form-control" type="text" name = "AsalSekolah" placeholder = "Nama Sekolah"/>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end mx-6">
                            <input class="btn btn-outline-success" type="submit" value = "Daftar" name = "Daftar"/>
                        </div>
                </fieldset> 
            </form>
        </div>
    </body>
</html>