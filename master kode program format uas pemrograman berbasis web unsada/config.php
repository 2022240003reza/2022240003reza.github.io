<?php
$server = "localhost";
$username = "id20933208_teknik";
$pass = "Tutuesday#30";
$db = "id20933208_oke";
$db = mysqli_connect($server, $username, $pass, $db);

if (mysqli_connect_errno()) {
  echo "koneksi gagal : " .mysqli_connect_error();
}
?>