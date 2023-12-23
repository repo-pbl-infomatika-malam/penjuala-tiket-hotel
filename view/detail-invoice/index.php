<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../../assets/favicon.ico">
  <title>Invoice</title>
  <link rel="stylesheet" type="text/css" href="../../assets/fontawesome/css/all.min.css">
  <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="detail-invoice.css" rel="stylesheet" />
  <link href="../../styles/global.css" rel="stylesheet" />
</head>

<?php
session_start();
require '../../config.php';
require '../../controller/getData.php';

$id_booking = $_GET['id_booking'];

if (!isset($_SESSION['role'])) {
  header("location: ../login");
}

$dataInvoice = getData($conn, "SELECT * FROM tranksaksi  WHERE id_booking = $id_booking")[0];

$idUser = $dataInvoice['id_user'];
$idRoom = $dataInvoice['id_room'];

$user = getData($conn, "SELECT * FROM users  WHERE id_user = $idUser")[0];
$kamar = getData($conn, "SELECT * FROM kamar  WHERE id_room = $idRoom")[0];

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

  <div class="container">
    <div class="brand-section">
      <div class="row">
        <div class="col-6">
          <h6 class="heading">INVOICE</h6>
        </div>
      </div>
    </div>

    <div class="body-section">
      <div class="row">
        <div class="col-6">
          <p class="sub-heading">Kode Invoice: <?= $dataInvoice['nomer_invoice'] ?></p>
          <p class="sub-heading">Tanggal Pemesanan: <?= $dataInvoice['tanggal_transaksi'] ?></p>
          <p class="sub-heading">Email: <?= $user['email'] ?></p>
        </div>
        <div class="col-6">
          <p class="sub-heading">Nama Lengkap: <?= $user['username'] ?> </p>
          <p class="sub-heading">Alamat: <?= $user['address'] ?></p>
          <p class="sub-heading">Nomor Telepon: <?= $user['phone_number'] ?></p>
        </div>
      </div>
    </div>

    <div class="body-section">
      <br>
      <table class="table-bordered">
        <thead>
          <tr>
            <th>Title</th>
            <th class="w-40">Deskripsi</th>
            <th style="width: 150px;">Harga Total</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><?= $kamar['room_name'] ?></td>
            <td><?= $kamar['description'] ?></td>
            <td><?= $dataInvoice['total_harga'] ?></td>
          </tr>

        </tbody>
      </table>
      <br>
      <h3 class="sub-heading">Status Pembayaran: <?= $dataInvoice['status'] ?></h3>
    </div>
  </div>

</body>

</html>