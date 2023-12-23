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

  <div class="container">
    <div class="brand-section">
      <div class="row">
        <div class="col-6">
          <h6 class="heading">INVOICE</h6>
        </div>
        <div class="col-6">
          <div class="company-details">
            <p class="text-white">Batam Centre, Jl. Ahmad Yani, Tlk. Tering, Kec. Batam Kota</p>
            <p class="text-white">Kota Batam, Kepulauan Riau 29461</p>
            <p class="text-white">+62 81234567890</p>
          </div>
        </div>
      </div>
    </div>

    <div class="body-section">
      <div class="row">
        <div class="col-6">
          <p class="sub-heading">Kode Invoice: 001</p>
          <p class="sub-heading">Tanggal Pemesanan: 16-09-2023 21:05:15</p>
          <p class="sub-heading">Email: minipbltim2@gmail.com</p>
        </div>
        <div class="col-6">
          <p class="sub-heading">Nama Lengkap: Patar Glen </p>
          <p class="sub-heading">Alamat: Batam, Indonesia </p>
          <p class="sub-heading">Nomor Telepon: 089876543210</p>
        </div>
      </div>
    </div>

    <div class="body-section">
      <br>
      <table class="table-bordered">
        <thead>
          <tr>
            <th>Title</th>
            <th class="w-20">Harga</th>
            <th class="w-20">Kapasitas</th>
            <th class="w-20">Sub Total</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Lorem ipsum dolor sit amet. Et expedita illo ut minima doloremque ea reiciendis esse ea similique vitae.
              Est numquam corrupti est minus veniam 33 nihil rerum et totam distinctio At ipsa nemo ut laborum omnis sed
              placeat voluptatem! Est quod impedit aut necessitatibus incidunt et omnis corrupti qui quam optio ab
              asperiores sint! Quo iusto tempore et blanditiis quia aut dolor unde aut voluptatibus labore sit
              doloremque rerum?</td>
            <td>Rp. 1.500.000</td>
            <td>3-4 Orang</td>
            <td>Rp. 1.500.000</td>
          </tr>
          <tr>
            <td colspan="3" class="text-right">Sub Total</td>
            <td>Rp. 1.500.000</td>
          </tr>
          <tr>
            <td colspan="3" class="text-right">Pajak 12%</td>
            <td>Rp. 180.000</td>
          </tr>
          <tr>
            <td colspan="3" class="text-right">Total</td>
            <td>Rp. 1.680.000</td>
          </tr>
        </tbody>
      </table>
      <br>
      <h3 class="sub-heading">Status Pembayaran: Sukses</h3>
    </div>
  </div>

</body>

</html>