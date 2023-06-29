<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat_usaha = $_POST['alamat_usaha'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $nama_usaha = $_POST['nama_usaha'];
    $bidang_usaha = $_POST['bidang_usaha'];

    // buat query update
    $sql = "UPDATE wiraswasta SET nama='$nama', alamat_usaha='$alamat_usaha', jenis_kelamin='$jenis_kelamin', nama_usaha='$nama_usaha', bidang_usaha='$bidang_usaha' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-wiraswasta.php
        header('Location: list-wiraswasta.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("maaf akses ditolak...");
}

?>
