<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width, initial-scale=1">
  <title>Invoice List</title>
  <link href="../../assets/css/bootstrap.min.css"
    rel="stylesheet">
  <link rel="stylesheet"
    href="style.css">
  <link rel="stylesheet"
    href="../../styles/global.css">
</head>

<body>

  <?php
  session_start();

  if (!isset($_SESSION['role'])) {
    header("location: ../login");
  }

  require '../../config.php';
  require '../../controller/getData.php';
  $dataTransaksi = getData($conn, "SELECT * FROM tranksaksi");

  ?>
  <!-- navbar start -->
  <nav class="container-navbar">
    <div class="navbar-content container-lg">
      <a href="../landing-page/">
        <img src="../../assets/logo-pbl.png"
          class="logo"
          alt="" />
      </a>

      <div class="d-flex align-items-center gap-2">
        <div>
          <a href="../landing-page/#about-us"
            class="text-button-primary">Tentang Kami</a>
          <a href="../catalog-product-page/"
            class="text-button-primary">Katalog</a>
          <?php if (isset($_SESSION['role'])) : ?>
          <a href="../daftar-transaksi/"
            class="text-button-primary">Daftar Transaksi</a>
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

        <a href="../edit-profile-page/"
          class="button-primary">
          <img src="../../assets/images/avatar.png"
            class="rounded-circle"
            style="width: 30px;"
            alt="Avatar" />
        </a>
        <a href="../../controller/logout.php">
          <button class="button-primary">keluar</button>
        </a>
        <?php endif; ?>
      </div>
    </div>
  </nav>
  <!-- navbar end -->

  <!-- Bagian Daftar Invoice -->
  <div class="container mt-5">
    <h1>Daftar Transaksi</h1>

    <!-- Tabel Invoice -->
    <table class="table">
      <thead class="table-secondary">
        <tr>
          <th scope="col">No</th>
          <th scope="col">Tanggal</th>
          <th scope="col">Total Harga</th>
          <th scope="col">Status</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>

        <?php $i = 1; ?>
        <?php foreach ($dataTransaksi as $data) : ?>
        <tr>
          <td><?= $i ?></td>
          <td><?= $data['tanggal_transaksi'] ?></td>
          <td><?= $data['total_harga'] ?></td>
          <td>

            <?php if ($data['status'] === 'tunggu konfirmasi') : ?>
            <span class="badge text-bg-warning p-2"><?= $data['status'] ?></span>
            <?php elseif ($data['status'] === 'berhasil') : ?>
            <span class="badge text-bg-success p-2"><?= $data['status'] ?></span>
            <?php elseif ($data['status'] === 'kadaluwarsa' || $data['status'] === 'gagal') : ?>
            <span class="badge text-bg-danger p-2"><?= $data['status'] ?></span>
            <?php endif; ?>

          </td>
          <td>
            <a id="button_check_detail_invoice=<?php echo $i; ?>"
              href="../detail-invoice/index.php?id_booking=<?= $data['id_booking'] ?>"
              class="btn button-secondary">Lihat Invoice</a>
          </td>
        </tr>



        <?php $i++ ?>
        <?php endforeach; ?>


      </tbody>
    </table>
    <!-- Akhir Tabel Invoice -->


  </div>
  <!-- Akhir Bagian Daftar Invoice -->

  <!-- Footer -->
  <footer class="border-top mt-5">
    <div class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 container-lg">
      <p class="col-md-4 mb-0 text-body-secondary">&copy; 2023 PBL-IF-D-MALAM, Mhs</p>
    </div>
  </footer>
  <!-- Akhir Footer -->

  <script src="../../assets/js/bootstrap.bundle.min.js"></script>

</body>

</html>