<?php
include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$deskripsi= $_POST['deskripsi'];
$status = $_POST['status'];
$input = mysqli_query($koneksi,"INSERT INTO produk
VALUES('$id','$nama','$deskripsi','$status','$harga')") or die(mysql_error());
if($input){
echo "Data Berhasil Disimpan";
header("location:index.php");
}else{
echo "Gagal Disimpan";
}
?>