<?php
include '../../config.php';

date_default_timezone_set("Asia/Bangkok");

$id_booking = uniqid();
$id_user = $_POST['id_user'];
$id_room = $_POST['id_room'];
$total_harga = $_POST['total_harga'];
$dateTime = date("Y-m-d H:i:s");
// $time = date("H:i:s");

$input = mysqli_query($conn, "INSERT INTO tranksaksi
      VALUES('','$id_room','$id_user','$dateTime','$total_harga','tunggu konfirmasi','$id_booking')") or die(mysqli_error($conn));

if ($input) {
  header("location: ../daftar-transaksi/index.php");
}


print_r($dateTime);
print_r($_POST);
