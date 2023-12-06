<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0">
  <title>Tiket AjA</title>
  <link href="../../assets/css/bootstrap.min.css"
    rel="stylesheet">
  <link href="styles.css"
    rel="stylesheet" />
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-success fixed-top">
    <div class="container-lg">
      <a class="navbar-brand text-light fs-4 fw-semibold"
        href="../index.php">Tiket Ajah</a>

      <div id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="../login"
              class="btn btn-outline-light"
              type="submit">Login</a>
          </li>
          <li class="nav-item ms-2">
            <a href="../register "
              class="btn btn-outline-light"
              type="submit">Register</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container-lg">
    <div class="slider">
      <span class="imgtext">
        <!-- <p id="wel">Selamat Datang Di</p> -->
        <h1 id="h1">Selamat Datang...</h1>
        <p id="loremp">Lorem ipsum dolor sit amet, no mollis regione accusamus qui. Legere voluptua mei an, possim
          aliquid
          utroque.</p>
        <input type="button"
          class="btn btn-light"
          value="Check Tiket">
      </span>
      <img
        src="https://cdn0-production-images-kly.akamaized.net/oSgflu88GES_yPHxHhW2S6owtCE=/800x450/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/3386715/original/094552600_1614241094-Double_Tree_Jakarta.jpg"
        class="imag">
    </div>

    <div class="banner">
      <span class="bspan border border-3 border-dark-subtle"><i class="fas fa-utensils"></i>Best Service</span>
      <span class="bspan border border-3 border-dark-subtle"><i class="fas fa-concierge-bell"></i>Quality Food</span>
      <span class="bspan border border-3 border-dark-subtle"><i class="fas fa-wifi"></i>Perfect Cooked</span>
    </div>

    <div class="bg-dark-subtle p-5">
      <div class="check">
        <div class="checklb">
          <lable>Check In</lable>
          <input type="date"
            name=""
            value="check-in"
            class="checkinp"
            id="">
        </div>
        <div class="checklb">
          <lable>Check Out</lable>
          <input type="date"
            name=""
            value="check-out"
            class="checkinp"
            id="">
        </div>
        <div class="checklb">
          <lable class="checklb">Rooms</lable>
          <select class="secroom"
            name="rooms"
            id="rooms">
            <option class="optroom"
              value="royal room">Royal Room</option>
            <option class="optroom"
              value="delux room">Delux Room</option>
            <option class="optroom"
              value="double room">Double Room</option>
            <option class="optroom"
              value="single room">Single Room</option>
          </select>
        </div>
      </div>
      <div class="d-flex align-items-center justify-content-center">
        <button class="btn btn-light ">search</button>
      </div>
    </div>

    <div class="rooms">
      <h1>Hotel Tersedia</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, reprehenderit!</p>
      <div class="roomimages">
        <?php for ($x = 0; $x <= 5; $x++) : ?>
        <span class="innerimg">
          <img src="https://picsum.photos/300"
            class="img2">
          <p class="h11">Ini Hotel</p>
          <p class="pricetag">Rp.100.000</p>
        </span>
        <?php endfor; ?>
      </div>
    </div>

  </div>

  <div class="room-deal">
    <img
      src="https://raw.githubusercontent.com/koushil-mankali/single-page-hotel-site-front-end/master/images/room-deal.jpg"
      id="imgdeal">
  </div>


  <div class="about container-lg">
    <img
      src="https://raw.githubusercontent.com/koushil-mankali/single-page-hotel-site-front-end/master/images/about-us-2.jpg">
    <div class='about-p'>
      <h1>Tentang Hotel</h1>
      <p>Kevin pastrami tri-tip prosciutto ham hock pork belly bacon pork loin salami pork chop shank corned beef
        tenderloin meatball cow. Pork bresaola meatloaf tongue, landjaeger tail andouille strip steak tenderloin
        sausage
        chicken tri-tip. Incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
      <ol>
        <li>Pork bresaola meatloaf tongue, landjaeger tail andouille.</li>
        <li>Pork bresaola meatloaf tongue, landjaeger tail andouille.</li>
        <li>Pork bresaola meatloaf tongue, landjaeger tail andouille.</li>
        <li>Pork bresaola meatloaf tongue, landjaeger tail andouille.</li>
        <li>Pork bresaola meatloaf tongue, landjaeger tail andouille.</li>
      </ol>
    </div>

    <div class="clirev">
      <span class="espan"><i class="fspan fa-4x far fa-smile-beam"></i>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, soluta.</p>
      </span>
      <span class="espan"><i class="fspan fa-4x far fa-heart"></i>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, soluta.</p>
      </span>
      <span class="espan"><i class="fspan fa-4x far fa-thumbs-up"></i>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, soluta.</p>
      </span>
      <span class="espan"><i class="fspan fa-4x far fa-star"></i>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, soluta.</p>
      </span>
    </div>

  </div>
  </div>
</body>

</html>