<!DOCTYPE html>
<html lang="en">

<?php
require '../../config.php';
require '../../controller/getData.php';
$dataHotels = getData($conn, "SELECT * FROM rooms");

?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon"
    href="../../assets/favicon.ico">
  <title>Tiket AjA</title>
  <link rel="stylesheet"
    type="text/css"
    href="../../assets/fontawesome/css/all.min.css">
  <link href="../../assets/css/bootstrap.min.css"
    rel="stylesheet">
  <link href="styles.css"
    rel="stylesheet" />
</head>

<body>
  <nav class="container-navbar">
    <div class="navbar-content container-lg">
      <img src="../../assets/logo-pbl.png"
        class="logo"
        alt="" />

      <div class="d-flex align-items-center gap-3">

        <a href="#"
          class="text-button-primary">About</a>
        <a href="#"
          class="text-button-primary">Catalog</a>
        <a href="#"
          class="text-button-primary">Contact Us</a>
      </div>


      <div class="d-flex align-items-center gap-3">

        <!-- <div class="divider"></div> -->

        <a href="../login/">
          <button class="button-primary">Sign In</button>
        </a>
        <a class="button-secondary">Sign Up</a>
      </div>
    </div>
  </nav>

  <div class="banner-container">
    <img class="banner-hotel"
      src="../../assets/landing-page/banner-hotel.jpg"
      alt="">
    <div class="title-banner">
      <h1>WELCOME</h1>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa, quas.</p>
    </div>

    <div class="box-detail">
      <div>
        <p class="title-count">
          Book Your
        </p>
        <p class="result-count">
          Room
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
          GUESTS
        </p>
        <p class="result-count">
          5
        </p>
      </div>
    </div>
  </div>

  <div class="container-lg about-us-container">
    <div class="right-content">
      <img src="../../assets/landing-page/banner-about-us.jpg"
        class="about-banner" />
    </div>
    <div class="left-content">
      <div>
        <p class="head-title-about-us">GET TO KNOW</p>
        <p class="title-about-us">About Us</p>
      </div>
      <p class="desc-about-us">Welcome, a harmonious blend of opulence and warmth, where each stay is a unique story
        waiting to unfold. Nestled in the heart of Batam, our hotel embodies the epitome of luxury and personalized
        service</p>

      <p class="desc-about-us">&emsp;Indulge in the embrace of meticulously designed rooms and suites, each a haven of
        comfort
        adorned with modern amenities and stylish decor. Whether you're here for business or leisure, our commitment to
        excellence ensures a seamless and memorable experience.</p>

      <button class="button-secondary">Contact-Us</button>
    </div>

  </div>

  <div class="container-lg out-rooms-container">

    <div class="headline">
      <p class="content-headline">AVAILABLE ACCOMMODATIONS</p>
      <h1 class="headline-title">OUR ROOMS</h1>
    </div>

    <div class="d-flex flex-wrap justify-content-center gap-lg-5 mt-lg-4"
      style="padding-top: 40px;">

      <?php $i = 1; ?>
      <?php foreach ($dataHotels as $dataHotel): ?>
      <?php 

      if ($i>=2){
        return false;
        echo 'stop';
      }; ?>
      <div class="card-rooms">
        <img src="../../assets/landing-page/banner-hotel.jpg"
          class="card-img-top"
          alt="...">

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
        <p class="content-headline">WILL GIVE YOU GOOD QUALITY</p>
        <h1 class="headline-title">SERVICES</h1>
      </div>

      <div class="d-flex justify-content-center gap-lg-5 mt-lg-4">
        <div class="card"
          style="width: 16rem;aspect-ratio: 1;">

        </div>
        <div class="card"
          style="width: 16rem;aspect-ratio: 1;">
        </div>
        <div class="card"
          style="width: 16rem;aspect-ratio: 1;">
        </div>
      </div>
    </div>
  </div>


  <div class="container-lg tag-line-container">
    <div class="left-content">
      <div class="d-flex  flex-column gap-2 text-center">
        <p class="title-tag-line">Seamless Luxury</p>
        <h1 class="title-tag-line">Unforgettable Stay Elevate Your Experience</h1>

        <p class="desc-tag-line">Embark on a Journey of Refined Tranquility: Unwind in Unmatched Sophistication and
          Impeccable Comfort</p>
      </div>
    </div>

    <div class="right-content">
      <img src="../../assets/landing-page/wallpaper-hotel.jpg"
        class="image-content-tag-line" />
    </div>
  </div>

  <div class="container-lg about-us-container">
    <div class="left-content">
      <div>
        <p class="title-about-us">Advantage</p>
        <p class="head-title-about-us">WHAT YOU GET</p>
      </div>
      <p class="desc-about-us">&emsp;Strategically nestled in the heart of Batam, our hotel provides easy access to key
        attractions, business districts, and cultural landmarks, ensuring that you are at the center of it all.</p>

      <p class="desc-about-us">&emsp;Indulge in the embrace of meticulously designed rooms and suites, each a haven of
        comfort
        adorned with modern amenities and stylish decor. Whether you're here for business or leisure, our commitment to
        excellence ensures a seamless and memorable experience.</p>

    </div>
    <div class="right-content">
      <img src="../../assets/landing-page/advantage-hotel.jpg"
        class="advantage-banner" />
    </div>
  </div>

  <footer class=" border-top">
    <div class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 container-lg">
      <p class="col-md-4 mb-0 text-body-secondary">&copy; 2023 PBL-IF-D-MALAM, Mhs</p>
    </div>
  </footer>

</body>

</html>