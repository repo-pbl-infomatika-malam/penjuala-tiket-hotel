<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Invoice List</title>
  <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="../../styles/global.css">
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
        <img src="../../assets/logo-pbl.png" class="logo" alt="" />
      </a>

      <div class="d-flex align-items-center gap-2">
        <a href="index.php">
          <button class="text-button-primary">Kamar</button>
        </a>
        <a href="transaksi.php">
          <button class="text-button-primary">Transaksi</button>
        </a>
        <div class="divider"></div>

        <a href="../../controller/logout.php" class="button-primary">keluar</a>
      </div>
    </div>
  </nav>
  <!-- navbar end -->

  <!-- Bagian Daftar Invoice -->
  <div class="container mt-5">
    <h1 class="h1">Daftar Transaksi</h1>

    <!-- Tabel Invoice -->
    <table class="table">
      <thead class="table-secondary">
        <tr>
          <th scope="col">Nomor Invoice</th>
          <th scope="col">Tanggal</th>
          <th scope="col">Total Harga</th>
          <th scope="col">Status</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>

        <?php foreach ($dataTransaksi as $data) : ?>
          <tr>
            <td><?= $data['nomer_invoice'] ?></td>
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

            <td class="d-flex gap-2" style="width: 100px;">
              <?php if ($data['status'] === 'tunggu konfirmasi') : ?>
                <form action="controller/updateStatus.php" method="post">
                  <input type="hidden" name="status" value="berhasil" />
                  <input type="hidden" name="id_transaksi" value="<?= $data['id_booking']; ?>" />
                  <button class="btn btn-success">Konfirmasi</button>
                </form>
                <form action="controller/updateStatus.php" method="post">
                  <input type="hidden" name="status" value="gagal" />
                  <input type="hidden" name="id_transaksi" value="<?= $data['id_booking']; ?>" />
                  <button class="btn btn-danger">Batal</button>
                </form>
              <?php else : ?>
                <p class="btn btn-dark disabled">Konfirmasi</p>
                <p class="btn btn-dark disabled">Batal</p>

              <?php endif; ?>
            </td>
          </tr>
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