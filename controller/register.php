<?php
require '../config.php';

$username = $_POST['username'];
$email = $_POST['email'];
$address = $_POST['address'];
$phone_number = $_POST['phone_number'];
$password = $_POST['password'];
$rePassword = $_POST['rePassword'];


$password = password_hash($password, PASSWORD_DEFAULT);

$input =  mysqli_query($conn, "INSERT INTO  users VALUES ('','$username','buyer', '$email','$password','$address','$phone_number')");


header("location: ../view/login");
