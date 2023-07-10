<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-wiraswasta.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM wiraswasta WHERE id=$id";
$query = mysqli_query($db, $sql);
$wiraswasta = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak dapat ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Edit Format Data Wiraswasta | Wiraswasta Indie</title>
</head>

<body>
    <header>
        <h3>Edit Format Data Wiraswasta</h3>
    </header>

    <form action="proses-edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $wiraswasta['id'] ?>" />

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $wiraswasta['nama'] ?>" />
        </p>
        <p>
            <label for="alamat_usaha">Alamat Usaha: </label>
            <textarea name="alamat_usaha"><?php echo $wiraswasta['alamat_usaha'] ?></textarea>
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <?php $jenis_kelamin = $wiraswasta['jenis_kelamin']; ?>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jenis_kelamin == 'laki-laki') ? "checked": "" ?>> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jenis_kelamin == 'perempuan') ? "checked": "" ?>> Perempuan</label>
        </p>
        <p>
            <label for="nama_usaha">Nama Usaha: </label>
           <input type="text" name="nama_usaha" placeholder="nama usaha" value="<?php echo $wiraswasta['nama_usaha'] ?>" />

            </select>
        </p>
        <p>
            <label for="bidang_usaha">Bidang Usaha: </label>
            <input type="text" name="bidang_usaha" placeholder="detil_tentang_bidang_usahanya" value="<?php echo $wiraswasta['bidang_usaha'] ?>" />
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>
