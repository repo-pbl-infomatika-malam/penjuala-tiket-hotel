<?php
session_start();

require '../../config.php';
require '../../controller/getData.php';
$dataHotels = getData($conn, "SELECT * FROM kamar");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width, initial-scale=1">
  <title>Hotel Room Catalog</title>
  <link href="../../assets/css/bootstrap.min.css"
    rel="stylesheet">
  <link rel="stylesheet"
    href="style.css">
  <link rel="stylesheet"
    href="../../styles/global.css">
</head>

<body>

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
          <a href="../landing-page/index.php#about-us"
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

  <!-- Banner Section -->
  <div class="banner">
    <h1>Selamat datang di Katalog Kamar Hotel Kami</h1>
    <p>Temukan kamar mewah kami dan pesan penginapan Anda hari ini!</p>
  </div>

  <div class="container mt-5">
    <h1 class="mb-4">Katalog Kamar Hotel</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4">


      <?php foreach ($dataHotels as $dataHotel) : ?>

      <div class="col">
        <div class="card h-100">
          <img class="card-img-top"
            src="../../assets/productImages/<?php echo $dataHotel['image'] ?>"
            width="240"
            alt="iamge product">
          <div class="card-body">
            <h5 class="card-title"><?php echo $dataHotel['room_name'] ?></h5>
            <p class="card-text"><?php echo $dataHotel['description'] ?></p>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Nomor Kamar: <?php echo $dataHotel['room_number'] ?></li>
              <li class="list-group-item">Tipe: <?php echo $dataHotel['type_room'] ?></li>
              <li class="list-group-item">Harga: <?php echo $dataHotel['price'] ?></li>
            </ul>
            <div class="mt-3 d-flex justify-content-between">
              <a class="btn button-secondary"
                href="../detail-product-page/index.php?id_room=<?php echo $dataHotel['id_room']; ?>">Lihat Rincian</a>
              <button type="button"
                class="btn button-primary me-2">Pesan Sekarang</button>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

  <!-- footer start -->
  <footer class="border-top mt-5">
    <div class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 container-lg">
      <p class="col-md-4 mb-0 text-body-secondary">&copy; 2023 PBL-IF-D-MALAM, Mhs</p>
    </div>
  </footer>
  <!-- footer end -->

  <script src="../../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>