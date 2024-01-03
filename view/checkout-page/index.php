<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../../assets/favicon.ico">
  <title>Checkout</title>
  <link rel="stylesheet" type="text/css" href="../../assets/fontawesome/css/all.min.css">
  <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="_landing-page.css" rel="stylesheet" />
  <link href="../../styles/global.css" rel="stylesheet" />
</head>

<body>

  <?php
  session_start();

  if (!isset($_SESSION['role'])) {
    header("location: ../login");
  }

  if ($_SESSION['phone'] === '' && $_SESSION['phone'] === '') {
    header("location: ../edit-profile-page");
  }

  $id_room = $_GET["id_room"];

  require '../../config.php';
  require '../../controller/getData.php';
  $dataHotel = getData($conn, "SELECT * FROM kamar  WHERE id_room = $id_room")[0];

  ?>

  <!-- navbar start -->
  <nav class="container-navbar">
    <div class="navbar-content container-lg">
      <a href="../landing-page/">
        <img src="../../assets/logo-pbl.png" class="logo" alt="" />
      </a>

      <!-- <div class="d-flex align-items-center gap-2">
        <div>
          <a href="../landing-page/#about-us" class="text-button-primary">Tentang Kami</a>
          <a href="../catalog-product-page/" class="text-button-primary">Katalog</a>
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
      </div> -->
    </div>
  </nav>
  <!-- navbar end -->
  <br>
  <br>

  <form method="post" action="buatTransaksi.php" class="container">
    <div class="row">
      <div class="col-md-4 order-md-2 mb-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-muted">Pesanan tiket anda</span>
          <span class="badge badge-secondary badge-pill">3</span>
        </h4>
        <ul class="list-group mb-3 sticky-top">
          <li class="list-group-item d-flex justify-content-between">
            <span>Total</span>
            <strong><?= $dataHotel['price'] ?></strong>
          </li>
        </ul>
        <div class="input-group">
          <div class="d-grid col mt-1 mx-auto">
            <input type="hidden" name="id_room" value="<?= $dataHotel['id_room'] ?>">
            <input type="hidden" name="id_user" value="<?= $_SESSION['id_user'] ?>">
            <input type="hidden" name="total_harga" value="<?= $dataHotel['price'] ?>">
            <button class="button-secondary" id="checkout_button" type="submit">Pesan Sekarang</button>
          </div>
        </div>
      </div>
      <div class="col-md-8 order-md-1">
        <center>
          <p class="mb-3 h4">Pesanan Hotel</p>
        </center>

        <div class="d-flex gap-3 mb-3">
          <img src="../../assets/productImages/<?php echo $dataHotel['image'] ?>" width="350px" height="200px" />

          <div class="row">
            <dt class="dt  col-3">Nama Kamar</dt>
            <dd class="dd  col-9">: <?= $dataHotel['room_name'] ?></dd>

            <dt class="dt  col-3">Tipe Kamar</dt>
            <dd class="dd  col-9">: <?= $dataHotel['type_room'] ?></dd>

            <dt class="dt  col-3">Dekripsi</dt>
            <dd class="dd  col-9">: <?= $dataHotel['description'] ?></dd>
          </div>
        </div>

        <br>
        <br>
        <form class="needs-validation" novalidate="">
          <div class="mb-3">

            <label for="text">No. Handphone: <?php echo $_SESSION['phone'] ?></span></label>

          </div>
          <div class="mb-3">
            <label for="email">Email: <?php echo $_SESSION['address'] ?></span></label>
          </div>
        </form>
      </div>
    </div>
    </div>

    <!-- footer start -->
    <footer class="border-top">
      <div class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 container-lg">
        <p class="col-md-4 mb-0 text-body-secondary">&copy; 2023 PBL-IF-D-MALAM, Mhs</p>
      </div>
    </footer>
    <!-- footer end -->
</body>

</html>