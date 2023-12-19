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

  <!-- Navbar Start -->
  <nav class="container-navbar">
    <div class="navbar-content container-lg">
      <a href="../landing-page/">
        <img src="../../assets/logo-pbl.png" class="logo" alt="" />
      </a>

      <div class="d-flex align-items-center gap-2">
        <div>
          <a href="../landing-page/index.php#about-us" class="text-button-primary">About Us</a>
          <a href="../catalog-product-page/" class="text-button-primary">Catalog</a>
        </div>

        <div class="divider"></div>

        <a href="../login/">
          <button class="button-primary">Sign In</button>
        </a>
        <a class="button-secondary">Sign Up</a>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->

  <!-- Bagian Daftar Invoice -->
  <div class="container mt-5">
    <h1>Daftar Invoice</h1>
    

    <!-- Tabel Invoice -->
    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">Nomor Invoice</th>
          <th scope="col">Tanggal</th>
          <th scope="col">Total Harga</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <!-- Entri Invoice 1 -->
        <tr>
          <td>INV001</td>
          <td>2023-01-01</td>
          <td>Rp500.000,00</td>
          <td>
            <button class="btn btn-secondary">Lihat Detail</button>
          </td>
        </tr>

        <!-- Entri Invoice 2 -->
        <tr>
          <td>INV002</td>
          <td>2023-02-01</td>
          <td>Rp800.000,00</td>
          <td>
            <button class="btn btn-secondary">Lihat Detail</button>
          </td>
        </tr>
        <!-- Tambahkan entri invoice lebih banyak sesuai kebutuhan -->
      </tbody>
    </table>
    <!-- Akhir Tabel Invoice -->

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