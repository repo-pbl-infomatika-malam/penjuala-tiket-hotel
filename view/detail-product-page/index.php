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
  <title>Invoice</title>

</head>




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
  <br>

  <!-- konten -->
  <section class="py-5">
    <div class="container">
      <div class="row gx-5">
        <aside class="col-lg-6">
          <div class="border rounded-4 mb-3 d-flex justify-content-center">
          </div>
          <div class="d-flex justify-content-center mb-3">
            <img src="../../assets/images/catalog-product/room1.jpg" />
            </a>
          </div>
          <!-- thumbs-wrap.// -->
          <!-- gallery-wrap .end// -->
        </aside>
        <main class="col-lg-6">
          <div class="ps-lg-3">
            <p class="h5">ID ROOMS</p>
            <p class="h6">ROOMS NUMBER</p>

            <div class="mb-3">
              <span style="color:#E09145"> Price</span>
              <span class="h5">Rp 1.500.000,00</span>
              <span class="text-muted">/per night</span>
            </div>

            <p class="h6">DESCRIPTION:</p>
            <p>
              Lorem ipsum dolor sit amet. Et expedita illo ut minima doloremque ea reiciendis esse ea similique vitae.
              Est numquam corrupti est minus veniam 33 nihil rerum et totam distinctio At ipsa nemo ut laborum omnis sed
              placeat voluptatem! Est quod impedit aut necessitatibus incidunt et omnis corrupti qui quam optio ab
              asperiores sint! Quo iusto tempore et blanditiis quia aut dolor unde aut voluptatibus labore sit
              doloremque rerum?
            </p><br>

            <div class="row">
              <dt class="col-3">Type room:</dt>
              <dd class="col-9">Standard</dd>

              <dt class="col-3">Capacity:</dt>
              <dd class="col-9">2 Persons</dd>

              <dt class="col-3">Facility:</dt>
              <dd class="col-9">Free Wi-Fi, Bed, Lamp, Bathroom, Shower, Air Conditioning, Non-smoking, Cupboard, and
                Coffee Maker</dd>
            </div>

            <hr />

            <div class="row mb-4">
              <div class="col-md-4 col-6">
                <label class="mb-2">Type</label>
                <select class="form-select border border-secondary"
                  style="height: 35px;">
                  <option>Standard</option>
                  <option>Deluxe</option>
                </select>
              </div>
              <!-- col.// -->
              <div class="col-md-4 col-6 mb-3">
                <label class="mb-2 d-block">Quantity</label>
                <div class="input-group mb-3"
                  style="width: 170px;">
                  <button class="btn btn-white border border-secondary px-3"
                    type="button"
                    id="button-addon1"
                    data-mdb-ripple-color="dark">
                    <i class="fas fa-minus"></i>
                  </button>
                  <input type="text"
                    class="form-control text-center border border-secondary"
                    placeholder="14"
                    aria-label="Example text with button addon"
                    aria-describedby="button-addon1" />
                  <button class="btn btn-white border border-secondary px-3"
                    type="button"
                    id="button-addon2"
                    data-mdb-ripple-color="dark">
                    <i class="fas fa-plus"></i>
                  </button>
                </div>
              </div>
            </div>
            <button class="button-secondary">Book Now</button>
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