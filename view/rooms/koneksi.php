<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "db-pbl";

$koneksi = mysqli_connect($host, $user, $pass, $db);
if(!$koneksi){
    echo "Gagal konek: " . die(mysqli_error($koneksi));
}
