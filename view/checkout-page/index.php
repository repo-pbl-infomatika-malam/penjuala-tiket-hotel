<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon"
    href="../../assets/favicon.ico">
  <title>Checkout</title>
  <link rel="stylesheet"
    type="text/css"
    href="../../assets/fontawesome/css/all.min.css">
  <link href="../../assets/css/bootstrap.min.css"
    rel="stylesheet">
  <link href="_landing-page.css"
    rel="stylesheet" />
  <link href="../../styles/global.css"
    rel="stylesheet" />

   <style>
   #footer {
            width: 100%;
            background: blue;
            color: white;
   }
    </style> 

</head>


<body>
 <!-- navbar start -->
 <nav class="container-navbar">
    <div class="navbar-content container-lg">
      <a href="">
        <img src="../../assets/logo-pbl.png"
          class="logo"
          alt="" />
      </a>

      <div class="d-flex align-items-center gap-2">
        <div>
          <a href="#about-us"
            class="text-button-primary">About Us</a>
          <a href="../catalog-product-page/"
            class="text-button-primary">Catalog</a>
        </div>

        <div class="divider"></div>

        <a href="../login/">
          <button class="button-primary">Sign In</button>
        </a>
        <a class="button-secondary">Sign Up</a>
      </div>
    </div>
  </nav>
  <br>
  <br>

  <div class="container">
    <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Your ticket order</span>
                <span class="badge badge-secondary badge-pill">3</span>
            </h4>
            <ul class="list-group mb-3 sticky-top">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Tiket Name</h6>
                        <small class="text-muted">id ticket</small>
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
                    <button class="button-secondary">Book Now</button>
                    </div>
                </div>
        </div>
        <div class="col-md-8 order-md-1">
            <center><p class="mb-3 h4">Hotel Booking</p></center>
            <br>

            <p class="h6">DESCRIPTION:</p>
            <p>
            Lorem ipsum dolor sit amet. Et expedita illo ut minima doloremque ea reiciendis esse ea similique vitae. Est numquam corrupti est minus veniam 33 nihil rerum et totam distinctio At ipsa nemo ut laborum omnis sed placeat voluptatem! Est quod impedit aut necessitatibus incidunt et omnis corrupti qui quam optio ab asperiores sint! Quo iusto tempore et blanditiis quia aut dolor unde aut voluptatibus labore sit doloremque rerum?
            </p>
            <br>
            <form class="needs-validation" novalidate="">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName">First name</label>
                        <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                        <div class="invalid-feedback"> Valid first name is required. </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName">Last name</label>
                        <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                        <div class="invalid-feedback"> Valid last name is required. </div>
                    </div>
                </div>
                <div class="mb-3">

                    <p>Phone Number</p>
                    <p>Phone Number</p>

                </div>
                <div class="mb-3">
                    <label for="email">Email</span></label>
                    <input type="email" class="form-control" id="email" placeholder="Email">
                    <div class="invalid-feedback"> Please enter a valid email address for shipping updates. </div>
                </div>

                <hr class="mb-4">
                <h4 class="mb-3">Payment</h4>
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