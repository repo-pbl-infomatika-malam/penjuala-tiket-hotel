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

  <style>
    #footer {
      width: 100%;
      background: blue;
      color: white;
    }

    .dt {
      color: green;
    }

    .dd {
      color: green;
    }
  </style>

</head>


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
          <a href="../catalog-product-page/" class="text-button-primary">Catalog</a>
        </div>

        <div class="divider"></div>

        <a href="../login-buyer/">
          <button class="button-primary">Masuk</button>
        </a>
        <a href="../register/">
          <button class="button-secondary">Daftar</button>
        </a>
      </div>
    </div>
  </nav>
  <!-- navbar end -->
  <br>
  <br>

  <div class="container">
    <div class="row">
      <div class="col-md-4 order-md-2 mb-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-muted">Pesanan tiket anda</span>
          <span class="badge badge-secondary badge-pill">3</span>
        </h4>
        <ul class="list-group mb-3 sticky-top">
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0">Nama tiket</h6>
              <small class="text-muted">id tiket</small>
            </div>
            <span class="text-muted">Rp.</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-condensed">
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span>Total</span>
            <strong>Rp.</strong>
          </li>
        </ul>
        <div class="input-group">
          <div class="d-grid col mt-1 mx-auto">
            <button class="button-secondary">Pesan Sekarang</button>
          </div>
        </div>
      </div>
      <div class="col-md-8 order-md-1">
        <center>
          <p class="mb-3 h4">Pesanan Hotel</p>
        </center>

        <div class="d-flex justify-content-center mb-3">
          <img src="../../assets/images/catalog-product/room3.jpg" width="350px" height="200px" />
        </div>

        <div class="row">
          <dt class="dt  col-3">Tipe Kamar</dt>
          <dd class="dd  col-9">: Standard</dd>

          <dt class="dt  col-3">Kapasitas</dt>
          <dd class="dd  col-9">: 2 Orang</dd>

          <dt class="dt  col-3">Fasilitas</dt>
          <dd class="dd  col-9">: Wi-Fi, Tempat tidur, Lampu tidur, Kamar mandi, Shower, Pendingin ruangan, Dilarang
            merokok, Lemari, dan Pembuat kopi</dd>
        </div>
        <br>
        <br>
        <form class="needs-validation" novalidate="">
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="firstName">Nama depan:</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
              <div class="invalid-feedback"> Nama depan yang valid wajib diisi. </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="lastName">Nama belakang:</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
              <div class="invalid-feedback">Nama depan yang valid wajib diisi. </div>
            </div>
          </div>
          <div class="mb-3">

            <label for="text">No. Handphone:</span></label>
            <input type="text" class="form-control" id="email" placeholder="+62">
            <div class="invalid-feedback">Silakan masukkan no. handphone yang aktif. </div>

          </div>
          <div class="mb-3">
            <label for="email">Email:</span></label>
            <input type="email" class="form-control" id="email" placeholder="email@gmail.com">
            <div class="invalid-feedback">Silakan masukkan alamat email yang valid. </div>
          </div>

          <hr class="mb-4">
          <h4 class="mb-3">Pembayaran</h4>
          <div class="footer_block_content">
            <p>
              <img src="https://www.rumahparfum.com/img/cms/Metode Pembayaran/pvisa.png" width="96" height="40">
              <img src="https://www.rumahparfum.com/img/cms/Metode Pembayaran/pmaster.png" width="96" height="40">
              <img src="https://www.rumahparfum.com/img/cms/Metode Pembayaran/pbni.png" width="96" height="40">
              <img src="../../assets/images/logo-payment/logo-dana.png" alt="" width="84" height="35">
            </p>
            <hr class="mb-4">

        </form>
      </div>
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