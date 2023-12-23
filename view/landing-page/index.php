<!DOCTYPE html>
<html lang="en">

<?php
session_start();
require '../../config.php';
require '../../controller/getData.php';
$dataHotels = getData($conn, "SELECT * FROM kamar");

?>

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

<body>

  <!-- navbar start -->
  <nav class="container-navbar">
    <div class="navbar-content container-lg">
      <a href="">
        <img src="../../assets/logo-pbl.png" class="logo" alt="" />
      </a>

      <div class="d-flex align-items-center gap-2">
        <div>
          <a href="#about-us" class="text-button-primary">Tentang Kami</a>
          <a href="../catalog-product-page/" class="text-button-primary">Catalog</a>
        </div>

        <div class="divider"></div>

        <a href="../login/">
          <button class="button-primary">Masuk</button>
        </a>
        <a href="../register/">
          <button class="button-secondary">Daftar</button>
        </a>
      </div>
    </div>
  </nav>
  <!-- navbar end -->

  <div class="banner-container">
    <img class="banner-hotel" src="../../assets/images/landing-page/banner-hotel.jpg" alt="">
    <div class="title-banner">
      <h1>SELEMAT DATANG</h1>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa, quas.</p>
    </div>


    <div class="box-detail">
      <div>
        <p class="title-count">
          Booking Kamar
        </p>
        <p class="result-count">
          Kamu
        </p>
      </div>
      <div class="d-flex flex-column text-center">
        <p class="title-count">
          CHECK-IN
        </p>
        <p class="result-count">
          10
        </p>
      </div>
      <div class="d-flex flex-column text-center">
        <p class="title-count">
          CHECK-OUT
        </p>
        <p class="result-count">
          7
        </p>
      </div>
      <div class="d-flex flex-column text-center">
        <p class="title-count">
          TAMU
        </p>
        <p class="result-count">
          5
        </p>
      </div>
    </div>
  </div>

  <div id="about-us"></div>

  <div class="container-lg about-us-container">
    <div class="right-content">
      <img src="../../assets/images/landing-page/banner-about-us.jpg" class="about-banner" />
    </div>
    <div class="left-content">
      <div>
        <p class="head-title-about-us">Kamu Harus Tau</p>
        <p class="title-about-us">Tentang Kami</p>
      </div>
      <p class="desc-about-us">&emsp;Selamat datang, perpaduan harmonis antara kemewahan dan kehangatan, di mana setiap
        masa
        menginap adalah kisah unik
        menunggu untuk terungkap. Terletak di jantung kota Batam, hotel kami mewujudkan lambang kemewahan dan personal
        melayani</p>

      <p class="desc-about-us">&emsp;Manjakan diri dalam pelukan kamar dan suite yang dirancang dengan cermat,
        masing-masing merupakan surga kenyamanan yang dihiasi dengan fasilitas modern dan dekorasi penuh gaya. Baik Anda
        berada di sini untuk bisnis atau liburan, komitmen kami terhadap keunggulan memastikan pengalaman yang lancar
        dan berkesan.</p>

      <button class="button-secondary">Contact-Us</button>
    </div>
  </div>

  <div class="container-lg out-rooms-container">
    <div class="headline">
      <p class="content-headline">KAMAR YANG TERSEDIA</p>
      <h1 class="headline-title">KAMAR KAMI</h1>
    </div>

    <div class="d-flex flex-wrap justify-content-center gap-lg-5 mt-lg-4" style="padding-top: 40px;">

      <?php $i = 1; ?>
      <?php foreach ($dataHotels as $dataHotel) : ?>
        <div class="card-rooms">
          <img src="../../assets/images/landing-page/banner-hotel.jpg" class="card-img-top" alt="...">

          <div class="card-rooms-content">
            <p class="number-rooms"><?php echo $dataHotel['room_number'] ?></p>
            <p class="title-rooms"><?php echo $dataHotel['room_name'] ?></h>
            <p class="desc-rooms"><?php echo $dataHotel['description'] ?>
            </p>
          </div>

          <button class="button-primary">See Details</button>
        </div>
        <?php $i++; ?>
      <?php endforeach; ?>
    </div>
  </div>

  <div style="background-color: #9e9e9e1c;">
    <div class="container-lg services-container">
      <div class="headline">
        <p class="content-headline">KAMU AKAN MENDAPATKAN QUALITAS YANG BAIK</p>
        <h1 class="headline-title">SERVICES</h1>
      </div>

      <div class="d-flex justify-content-center gap-lg-5 mt-lg-4">
        <div class="card" style="width: 16rem;aspect-ratio: 1;">

        </div>
        <div class="card" style="width: 16rem;aspect-ratio: 1;">
        </div>
        <div class="card" style="width: 16rem;aspect-ratio: 1;">
        </div>
      </div>
    </div>
  </div>

  <div class="container-lg tag-line-container">
    <div class="left-content">
      <div class="d-flex  flex-column gap-2 text-center">
        <p class="title-tag-line">Seamless Luxury</p>
        <h1 class="title-tag-line">Pengalaman Menginap yang Tak Terlupakan Tingkatkan Pengalaman Anda</h1>

        <p class="desc-tag-line">Memulai Perjalanan Ketenangan yang Halus: Bersantai dalam Kecanggihan yang Tak
          Tertandingi dan
          Kenyamanan Sempurna</p>
      </div>
    </div>

    <div class="right-content">
      <img src="../../assets/images/landing-page/wallpaper-hotel.jpg" class="image-content-tag-line" />
    </div>
  </div>

  <div class="container-lg about-us-container">
    <div class="left-content">
      <div>
        <p class="title-about-us">Keuntungan</p>
        <p class="head-title-about-us">APA YANG KAMU DAPAT</p>
      </div>
      <p class="desc-about-us">&emsp;Berlokasi strategis di jantung kota Batam, hotel kami menyediakan akses mudah ke
        tempat-tempat wisata utama, kawasan bisnis, dan landmark budaya, memastikan bahwa Anda berada di pusat semuanya.
      </p>

      <p class="desc-about-us">&emsp;Manjakan diri dalam pelukan kamar dan suite yang dirancang dengan cermat,
        masing-masing merupakan surga kenyamanan yang dihiasi dengan fasilitas modern dan dekorasi penuh gaya. Baik Anda
        berada di sini untuk bisnis atau liburan, komitmen kami terhadap keunggulan memastikan pengalaman yang lancar
        dan berkesan.</p>

    </div>
    <div class="right-content">
      <img src="../../assets/images/landing-page/advantage-hotel.jpg" class="advantage-banner" />
    </div>
  </div>

  <!-- footer start -->
  <footer class="border-top footer">
    <div class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 container-lg">
      <p class="col-md-4 mb-0 text-body-secondary">&copy; 2023 PBL-IF-D-MALAM, Mhs</p>
    </div>
  </footer>
  <!-- footer end -->

</body>

</html>