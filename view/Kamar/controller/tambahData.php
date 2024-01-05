<?php
include '../../../config.php';


$nama_kamar = $_POST['nama_kamar'];
$nomer_kamar = "6987" . $_POST['nomer_kamar'];
$deskripsi_kamar = $_POST['deskripsi_kamar'];
$type_kamar = $_POST['type_kamar'];
$harga_kamar = 'RP. ' . $_POST['harga_kamar'];

$namaFiles      = $_FILES['image_hotel']['name'];
$ukuranFiles    = $_FILES['image_hotel']['size'];
$tmpName        = $_FILES['image_hotel']['tmp_name'];
$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
$ekstensiGambar      = explode('.', $namaFiles);
$ekstensiGambar     = strtolower(end($ekstensiGambar));

$namaFileBaru = uniqid();
$namaFileBaru .= '.';
$namaFileBaru .= $ekstensiGambar;

$path = "../../../assets/productImages/" . $namaFileBaru;

if (in_array($ekstensiGambar, $ekstensiGambarValid)) {
  if ($ukuranFiles <= 1000000) {
    if (move_uploaded_file($tmpName, "$path") === true) {
      $input = mysqli_query($conn, "INSERT INTO kamar
      VALUES('','$nama_kamar','$deskripsi_kamar','$nomer_kamar','$namaFileBaru','$harga_kamar','$type_kamar')") or die(mysqli_error($conn));

      if ($input) {
        header("location: ../../kamar/index.php");
      } else {
        echo "terjadi kesalah, tolong upload lagi ";
        echo "<br/> <a href='../kamar'";
      }
    }
  }
} else {
  $input = mysqli_query($conn, "INSERT INTO kamar
      VALUES('','$nama_kamar','$deskripsi_kamar','$nomer_kamar','not-image.jpg','$harga_kamar','$type_kamar')") or die(mysqli_error($conn));

  if ($input) {
    header("location: ../../kamar/index.php");
  } else {
    echo "terjadi kesalah, tolong upload lagi ";
    echo "<br/> <a href='../kamar'";
  }
}
