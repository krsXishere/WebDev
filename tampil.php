<?php include("config.php"); ?>
<html>
    <head>
        <title>PPDB</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
<body>
    <header>
        <h3>Siswa yang sudah mendaftar</h3>
    </header>
    <table id = "table" border = "1px" border-radius = "10px">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Sekolah Asal</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $sql = "SELECT * FROM tb_siswa";
                $query = mysqli_query($db, $sql);

                while($siswa = mysqli_fetch_array($query)){
                    echo "<tr>";

                    echo "<td>".$siswa['Nama']."</td>";
                    echo "<td>".$siswa['Alamat']."</td>";
                    echo "<td>".$siswa['JenisKelamin']."</td>";
                    echo "<td>".$siswa['Agama']."</td>";
                    echo "<td>".$siswa['AsalSekolah']."</td>";

                    echo "<tr>";
                }
            ?>
        </tbody>
    </table>
    <br>
    <a id = "a" href="inputdata.php" text-decoration = "none">Input data baru</a>
</body>
</html>