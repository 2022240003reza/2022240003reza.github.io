<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $nama = $_POST['nama'];
    $alamat_usaha = $_POST['alamat_usaha'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $nama_usaha = $_POST['nama_usaha'];
    $bidang_usaha = $_POST['bidang_usaha'];

    // buat query
    $sql = "INSERT INTO wiraswasta (nama, alamat_usaha, jenis_kelamin, nama_usaha, bidang_usaha) VALUE ('$nama', '$alamat_usaha', '$jenis_kelamin', '$nama_usaha', '$bidang_usaha')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("maaf akses ditolak...");
}

?>
