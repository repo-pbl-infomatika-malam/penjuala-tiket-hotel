<!DOCTYPE html>
<html lang="en">

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
 
<style>

    button.btn1 {
        color : #000;
        background: #E09145;
        color: black;
        padding: 8px 20px;
        border: 5px #E09145;
        border-radius: 10px;
    }
</style>

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
          <h4 class="title text-dark">
            Nama Hotel
          </h4>
          <h5>Room Number</h5><br>

          <div class="mb-3">
         <span style="color:#E09145"> Price</span>
            <span class="h5">Rp 1.500.000,00</span>
            <span class="text-">/per night</span>
          </div>

          <p>
            Modern look and quality demo item is a streetwear-inspired collection that continues to break away from the conventions of mainstream fashion. Made in Italy, these black and brown clothing low-top shirts for
            men.
          </p>

          <div class="row">
            <dt class="col-3">Type: </dt>
            <dd class="col-9">Standard</dd>

            <dt class="col-3">Capacity:</dt>
            <dd class="col-9">2 Persons</dd>

            <dt class="col-3">Facility:</dt>
            <dd class="col-9">Free Wi-Fi, Bed, Lamp, Bathroom, Shower, Air Conditioning, Non-smoking, Cupboard, and Coffee Maker</dd>
          </div>

          <hr />

          <div class="row mb-4">
            <div class="col-md-4 col-6">
              <label class="mb-2">Type</label>
              <select class="form-select border border-secondary" style="height: 35px;">
                <option>Standard</option>
                <option>Deluxe</option>
              </select>
            </div>
            <!-- col.// -->
            <div class="col-md-4 col-6 mb-3">
              <label class="mb-2 d-block">Quantity</label>
              <div class="input-group mb-3" style="width: 170px;">
                <button class="btn btn-white border border-secondary px-3" type="button" id="button-addon1" data-mdb-ripple-color="dark">
                  <i class="fas fa-minus"></i>
                </button>
                <input type="text" class="form-control text-center border border-secondary" placeholder="14" aria-label="Example text with button addon" aria-describedby="button-addon1" />
                <button class="btn btn-white border border-secondary px-3" type="button" id="button-addon2" data-mdb-ripple-color="dark">
                  <i class="fas fa-plus"></i>
                </button>
              </div>
            </div>
          </div>
          <button class="btn1">Buy Now</button>
        </div>
      </main>
    </div>
  </div>
</section>