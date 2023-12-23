<?php
include '../../../config.php';

$id_room = $_POST['id_room'];
$nama_kamar = $_POST['nama_kamar'];
$nomer_kamar = "6987" . $_POST['nomer_kamar'];
$deskripsi_kamar = $_POST['deskripsi_kamar'];
$type_kamar = $_POST['type_kamar'];
$harga_kamar = $_POST['harga_kamar'];
$gambarLama = $_POST['gambarLama'];

$result = mysqli_query($conn, "UPDATE kamar SET room_name='$nama_kamar', description='$deskripsi_kamar',
room_number='$nomer_kamar', image='$gambarLama', price='$harga_kamar', type_room='$type_kamar', WHERE id_room='$id_room'");

header("location: ../../kamar/index.php");
