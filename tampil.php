<?php include("config.php"); ?>
<html>
<div class="p-3 mb-2 bg-dark text-white" style="height: 1000px;">
    <head>
        <title>PPDB</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Data Siswa</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
        <header>
            <h3 align="center">Siswa Yang Sudah Mendaftar</h3>
        </header>
        <table class="table table-hover table-dark">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Kode</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Agama</th>
                    <th scope="col">Sekolah Asal</th>
                    <th scope="col">Edit & Hapus</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                    $sql = "SELECT * FROM tb_siswa";
                    $query = mysqli_query($db, $sql);

                    while($siswa = mysqli_fetch_array($query)){
                        echo "<tr>";

                        echo "<td>".$siswa['Kode']."</td>";
                        echo "<td>".$siswa['Nama']."</td>";
                        echo "<td>".$siswa['Alamat']."</td>";
                        echo "<td>".$siswa['JenisKelamin']."</td>";
                        echo "<td>".$siswa['Agama']."</td>";
                        echo "<td>".$siswa['AsalSekolah']."</td>";

                        echo "<td>";
                        echo "<a class='btn btn-outline-light' href='editdata.php?id=".$siswa['Kode']."'>Edit</a>";
                        echo "<a class='btn btn-outline-danger mx-1' href='hapus.php?id=".$siswa['Kode']."'>Hapus</a>";
                        echo "<td>";

                        echo "<tr>";
                    }
                ?>
            </tbody>
        </table>
        <br>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end mx-5">
            <a class="btn btn-outline-light align-end" href="inputdata.php" text-decoration = "none" text-align="center">Input data baru</a>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </div>
    </body>
</div>
</html>