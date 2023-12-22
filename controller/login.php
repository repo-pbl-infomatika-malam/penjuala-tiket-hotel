<?php
session_start();
include '../config.php';

$email = $_POST['email'];
$password = $_POST['password'];

$data = mysqli_query($conn, "select * from users where email='$email'");
$row = mysqli_fetch_array($data);

$unHashPassword = password_verify($password, $row['password']);

print_r($row);

if ($unHashPassword) {
  if (mysqli_num_rows($data) > 0) {
    $_SESSION['username'] = $row['username'];
    $_SESSION['role'] = $row['role'];

    header("location: ../view/landing-page");
  }
} else {
  echo 'Email dan Password tiak ada';
}
