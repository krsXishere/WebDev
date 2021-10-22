<html>
    <body>
        <header>
            <h3>Formulir Pendaftaran Siswa Baru</h3>
        </header>
        <form action = "prosesinput.php" method = "POST">
            <fieldset>
                <p>
                    <label >Kode : </label>
                    <input type="text" name = "Kode" placeholder = "Kode"/>
                </p>
                <p>
                    <label >Nama : </label>
                    <input type="text" name = "Nama" placeholder = "Nama Lengkap"/>
                </p>
                <P>
                    <label >Alamat : </label>
                    <textarea name="Alamat"></textarea>
                </P>
                <p>
                    <label >Jenis Kelamin : </label>
                    <label><input type="radio" name = "JenisKelamin" value = "Laki-laki">Laki-laki</label>
                    <label><input type="radio" name = "JenisKelamin" value = "Perempuan">Perempuan</label>
                </p>
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
                <p>
                    <label >Asal Sekolah</label>
                    <input type="text" name = "AsalSekolah" placeholder = "Nama Sekolah"/>
                </p>
                <p>
                    <input type="submit" value = "Daftar" name = "Daftar"/>
                </p>
            </fieldset> 
        </form>
    </body>
</html>