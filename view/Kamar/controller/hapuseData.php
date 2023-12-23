<?php
include '../../../config.php';

$idroom = $_GET['idroom'];
$result = mysqli_query($conn, "DELETE FROM kamar WHERE id_room='$idroom'");
header("location: ../../kamar/index.php");
