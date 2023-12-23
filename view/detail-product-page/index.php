<?php
session_start();

$id_room = $_GET["id_room"];

require '../../config.php';
require '../../controller/getData.php';
$dataHotel = getData($conn, "SELECT * FROM kamar  WHERE id_room = $id_room")[0];

?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF- 8">
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

  <link rel="stylesheet"
    type="text/css"
    href="detail-invoice.css">
  <link href="../../styles/global.css"
    rel="stylesheet" />
  <title>Detail Product</title>

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
          <a href="../landing-page/#about-us"
            class="text-button-primary">Tentang Kami</a>
          <a href="../catalog-product-page/"
            class="text-button-primary">Katalog</a>
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
  <br>

  <!-- konten -->
  <section class="py-5">
    <div class="container">
      <div class="row gx-5">
        <aside class="col-lg-6">
          <div class="border rounded-4 mb-3 d-flex justify-content-center">
          </div>
          <div class="d-flex justify-content-center mb-3">
            <img class="w-100"
              src="../../assets/productImages/<?php echo $dataHotel['image'] ?>"
              alt="iamge product">
            </a>
          </div>
        </aside>
        <main class="col-lg-6 ">
          <div class="ps-lg-3">
            <p class="h6">ROOMS NUMBER : <?= $dataHotel['room_number'] ?></p>

            <div class="mb-3">
              <span style="color:#E09145"> Price</span>
              <span class="h5"><?= $dataHotel['price'] ?></span>
            </div>

            <p class="h6">DESCRIPTION:</p>
            <p><?= $dataHotel['description'] ?>
            </p><br>

            <div class="row">
              <dt class="col-3">Type room:</dt>
              <dd class="col-9"><?= $dataHotel["type_room"] ?></dd>
            </div>

            <hr />
            <a class="button-secondary"
              href="../checkout-page/index.php?id_room=<?php echo $dataHotel['id_room']; ?>">Book</a>
            </a>
          </div>
        </main>
      </div>
    </div>
  </section>

  <!-- footer start -->
  <footer class=" border-top">
    <div class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 container-lg">
      <p class="col-md-4 mb-0 text-body-secondary">&copy; 2023 PBL-IF-D-MALAM, Mhs</p>
    </div>
  </footer>
  <!-- footer end -->

</body>

</html>