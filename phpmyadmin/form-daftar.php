<!DOCTYPE html>
<html>
<head>
    <title>Pendataan Mandiri Wiraswasta untuk Keperluan Kolektif Ekonomi Komplek | Wiraswasta Indie</title>
</head>

<body>
    <header>
        <h3>Pendataan Mandiri Wiraswasta untuk Keperluan Kolektif Ekonomi Komplek</h3>
    </header>

    <form action="proses-pendataan.php" method="POST">

        <fieldset>

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" />
        </p>
        <p>
            <label for="alamat_usaha">Alamat: </label>
            <textarea name="alamat_usaha"></textarea>
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
        </p>
        <p>
            <label for="nama_usaha">Nama Usaha: </label>
                <textarea name="nama_usaha"></textarea>
        </p>
        <p>
            <label for="bidang_usaha">Bidang Usaha: </label>
            <input type="text" name="bidang_usaha" placeholder="bidang usaha" />
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>

    </form>

    </body>
</html>
