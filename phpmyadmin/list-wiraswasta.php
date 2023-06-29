<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendataan Mandiri Wiraswasta untuk Keperluan Kolektif Ekonomi Komplek | Wiraswasta Indie</title>
</head>

<body>
    <header>
        <h3>Wiraswasta yang telah mendaftar</h3>
    </header>

    <nav>
        <a href="form-daftar.php"><img src="tambahlst wiraswasta.png"></a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat Usaha</th>
            <th>Jenis Kelamin</th>
            <th>Nama Usaha</th>
            <th>Bidang Usaha</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM wiraswasta";
        $query = mysqli_query($db, $sql);

        while($wiraswasta = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$wiraswasta['id']."</td>";
            echo "<td>".$wiraswasta['nama']."</td>";
            echo "<td>".$wiraswasta['alamat_usaha']."</td>";
            echo "<td>".$wiraswasta['jenis_kelamin']."</td>";
            echo "<td>".$wiraswasta['nama_usaha']."</td>";
            echo "<td>".$wiraswasta['bidang_usaha']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$wiraswasta['id']."'>Edit</a> | ";
            echo "<a href='delete.php?id=".$wiraswasta['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>
