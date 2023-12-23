<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../../assets/favicon.ico">
  <title>Tiket AjA</title>
  <link rel="stylesheet" type="text/css" href="../../assets/fontawesome/css/all.min.css">
  <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="_landing-page.css" rel="stylesheet" />
  <link href="../../styles/global.css" rel="stylesheet" />
</head>

<?php
session_start();
require '../../config.php';
require '../../controller/getData.php';

if (!isset($_SESSION['role'])) {
  header("location: ../login");
}

$idUser = $_SESSION['id_user'];

$user = getData($conn, "SELECT * FROM users  WHERE id_user = $idUser")[0];

?>

<body>
  <!-- navbar start -->
  <nav class="container-navbar">
    <div class="navbar-content container-lg">
      <a href="../landing-page/">
        <img src="../../assets/logo-pbl.png" class="logo" alt="" />
      </a>

      <div class="d-flex align-items-center gap-2">
        <div>
          <a href="../landing-page/#about-us" class="text-button-primary">Tentang Kami</a>
          <a href="../catalog-product-page/" class="text-button-primary">Katalog</a>

          <?php if (isset($_SESSION['role'])) : ?>
            <a href="../daftar-transaksi/" class="text-button-primary">Daftar Transaksi</a>
          <?php endif; ?>
        </div>

        <div class="divider"></div>
        <?php if (!isset($_SESSION['role'])) : ?>
          <a href="../login/">
            <button class="button-primary">Masuk</button>
          </a>
          <a href="../register/">
            <button class="button-secondary">Daftar</button>
          </a>
        <?php else : ?>

          <a href="../edit-profile-page/" class="button-primary">
            <img src="../../assets/images/avatar.png" class="rounded-circle" style="width: 30px;" alt="Avatar" />
          </a>
          <a href="../../controller/logout.php">
            <button class="button-primary">keluar</button>
          </a>
        <?php endif; ?>
      </div>
    </div>
  </nav>
  <!-- navbar end -->

  <br>
  <div class="container">
    <h1>Edit Profile</h1>
    <hr>
    <div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img src="../../assets/images/avatar.png" class="rounded-3" style="width: 150px;" alt="Avatar" />
        </div>
      </div>

      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <center><span class="h5">Data Diri</span></center>
        <br>

        <form class="form-horizontal" role="form">
          <div class="form-group">
            <div class="form-group mb-3">
              <label class="col-lg-3 control-label ">Nama Pengguna: <?= $user['username'] ?></label>
            </div>
            <div class="form-group mb-3">
              <label class="col-lg-3 control-label">Email: <?= $user['email'] ?></label>
            </div>
            <div class="form-group mb-3">
              <label class="col-lg-3 control-label">No.Handphone: <?= $user['phone_number'] ?></label>
            </div>
            <div class="form-group mb-3">
              <label class="col-lg-3 control-label">Alamat: <?= $user['address'] ?></label>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
  <hr>

  <!-- footer start -->
  <footer class=" border-top">
    <div class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 container-lg">
      <p class="col-md-4 mb-0 text-body-secondary">&copy; 2023 PBL-IF-D-MALAM, Mhs</p>
    </div>
  </footer>
  <!-- footer end -->
</body>

</html>