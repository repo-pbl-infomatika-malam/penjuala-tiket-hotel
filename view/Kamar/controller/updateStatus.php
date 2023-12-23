<?php
include '../../../config.php';

print_r($_POST);
$id_transaksi = $_POST['id_transaksi'];
$status = $_POST['status'];

$query  = "UPDATE tranksaksi SET status = '$status' WHERE id_booking = '$id_transaksi'";

$input = mysqli_query($conn, $query);

if ($input) {
  header("location: ../../kamar/transaksi.php");
}
