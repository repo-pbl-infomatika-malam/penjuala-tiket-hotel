<?php
// include database connection file
include 'koneksi.php';
$id= $_POST['id'];
$nama=$_POST['nama'];
$deskripsi=$_POST['deskripsi'];
$status=$_POST['status'];
$harga=$_POST['harga'];
$result = mysqli_query($koneksi, "UPDATE produk SET
nama='$nama',deskripsi='$deskripsi',status='$status', harga='$harga' WHERE id='$id'");
// Redirect to homepage to display updated user in list
header("Location: index.php");
?>