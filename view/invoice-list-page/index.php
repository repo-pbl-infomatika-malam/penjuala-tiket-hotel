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
            class="text-button-primary">Catalog</a>
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

  <!-- Bagian Daftar Invoice -->
  <div class="container mt-5">
    <h1>Daftar Invoice</h1>

    <!-- Tabel Invoice -->
    <table class="table">
      <thead class="table-secondary">
        <tr>
          <th scope="col">Nomor Invoice</th>
          <th scope="col">Nama Pelanggan</th>
          <th scope="col">Tanggal</th>
          <th scope="col">Total Harga</th>
          <th scope="col">Email</th>
          <th scope="col">No. Telepon</th>
          <th scope="col">Status</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <!-- Entri Invoice 1 -->
        <tr>
          <td>INV001</td>
          <td>John Doe</td>
          <td>2023-01-01</td>
          <td>Rp500.000,00</td>
          <td>johndoe53@gmail.com</td>
          <td>083266439022</td>
          <td>
            <span class="badge text-bg-success">Berhasil</span>
          </td>
          <td>
            <button class="btn button-secondary">Detail</button>
          </td>
        </tr>

        <!-- Entri Invoice 2 -->
        <tr>
          <td>INV002</td>
          <td>Jane Doe</td>
          <td>2023-02-01</td>
          <td>Rp800.000,00</td>
          <td>jane32@gmail.com</td>
          <td>085693548675</td>
          <td>
            <span class="badge text-bg-warning">Menunggu</span>
          </td>
          <td>
            <button class="btn button-secondary">Detail</button>
          </td>
        </tr>

        <!-- Entri Invoice 3 -->

        <tr>
          <td>INV003</td>
          <td>Jina Doe</td>
          <td>2023-05-01</td>
          <td>Rp1.000.000,00</td>
          <td>jina255@gmail.com</td>
          <td>087355348808</td>
          <td>
            <span class="badge text-bg-danger">Kadaluwarsa</span>
          </td>
          <td>
            <button class="btn button-secondary">Detail</button>
          </td>
        </tr>

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