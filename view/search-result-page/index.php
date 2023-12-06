<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Search Hotel</title>
<<<<<<< HEAD
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <style>
    .category-checkbox {
      margin-bottom: 5px; 
    }

    body {
      background-color: #333;
    }

    .container-lg {
      background-color: #444; 
      border-radius: 10px; 
      padding: 20px; 
      margin-top: 20px; 
    }

    .list-group-item {
      background-color: #555; 
      outline: 2px solid #666;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }
  </style>
=======
  <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
>>>>>>> c4e8a1ccc77c89bbe5916ef8cb8242fe88a038ed
</head>

<body>
  <nav class=" navbar navbar-expand-lg bg-success">
    <div class="container-lg">
      <a class="navbar-brand text-light fs-4 fw-semibold" href="../index.php">Tiket Ajah</a>

<<<<<<< HEAD
<div class="container-lg mt-4">
  <div class="row">
    <div class="col-md-3">
      <div class="form-group">
        <label for="destination">Destination</label>
        <input type="text" class="form-control" id="destination" placeholder="Enter destination">
=======
      <div id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="../login" class="btn btn-outline-light" type="submit">Login</a>
          </li>
          <li class="nav-item ms-2">
            <a href="../register " class="btn btn-outline-light" type="submit">Register</a>
          </li>
        </ul>
>>>>>>> c4e8a1ccc77c89bbe5916ef8cb8242fe88a038ed
      </div>
    </div>
  </nav>

  <div class="container mt-4 container-lg">
    <div class="row">
      <div class="col-md-3">
        <div class="form-group">
          <label for="destination">Destination</label>
          <input type="text" class="form-control" id="destination" placeholder="Enter destination">
        </div>
      </div>

      <div class="col-md-3">
        <div class="form-group">
          <label for="dates">Dates</label>
          <input type="text" class="form-control" id="dates" placeholder="e.g., 7 Dec 2023 - 8 Dec 2023">
        </div>
      </div>

<<<<<<< HEAD
    <div class="col-md-3 align-self-end">
      <div class="form-group mb-0">
        <button type="submit" class="btn btn-primary col-md-8">Search</button>
      </div>
    </div>
  </div>

  <div class="container-lg mt-3">
  <div class="btn-group ms-5 col-md-1" role="group" aria-label="Basic checkbox toggle button group">
    <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
    <label class="btn btn-outline-primary" for="btncheck1">Sort</label>
  </div>

  <div class="btn-group ms-4 " role="group" aria-label="Basic checkbox toggle button group">
    <div class="btn-group">
      <button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Top Reviewed
      </button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Solo Travelers</a></li>
        <li><a class="dropdown-item" href="#">Couples</a></li>
        <li><a class="dropdown-item" href="#">Groups</a></li>
      </ul>
    </div>
  </div>

  <div class="btn-group ms-4 " role="group" aria-label="Basic checkbox toggle button group">
    <div class="btn-group">
      <button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Prices
      </button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Highest</a></li>
        <li><a class="dropdown-item" href="#">Lowest</a></li>
      </ul>
    </div>
  </div>

  <div class="btn-group ms-4 col-md-2" role="group" aria-label="Basic checkbox toggle button group">
    <input type="checkbox" class="btn-check" id="btncheck4" autocomplete="off">
    <label class="btn btn-outline-primary" for="btncheck4">Best Match</label>
  </div>


  <div class="btn-group ms-4 col-md-2" role="group" aria-label="Basic checkbox toggle button group">
    <input type="checkbox" class="btn-check" id="btncheck5" autocomplete="off">
    <label class="btn btn-outline-primary" for="btncheck5">Hot Deals!</label>
    </div>

    <div class="container-lg mt-4">
  <div class="col-md-2 ms-0">
    <ul class="list-group list-group-flush p-2 pt-4">
      <li class="list-group-item" style="background-color: #0077ff;outline: 2px solid #00A8E8; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);">
        <i class="fas fa-list"></i> ⭐⭐⭐⭐⭐
      </li>
      <li class="list-group-item" style="background-color: #0059bf; outline: 2px solid #00A8E8; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);">
        <i class="fas fa-angle-right"></i> ⭐⭐⭐⭐
      </li>
      <li class="list-group-item" style="background-color: #004191; outline: 2px solid #0066b3; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);">
        <i class="fas fa-angle-right"></i> ⭐⭐⭐
      </li>
      <li class="list-group-item" style="background-color: #002752; outline: 2px solid #004578; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);">
        <i class="fas fa-angle-right"></i> ⭐⭐
      </li>
      <li class="list-group-item" style="background-color: #001428; outline: 2px solid #00203a; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);">
        <i class="fas fa-angle-right"></i> ⭐⭐
      </li>
      <li class="list-group-item" style="background-color: #00071c; outline: 2px solid #00112b; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);">
        <i class="fas fa-angle-right"></i> ⭐
      </li>
    </ul>
=======
      <div class="col-md-3">
        <div class="form-group mb-0">
          <label for="guests">Guests and Rooms</label>
          <input type="text" class="form-control" id="guests" placeholder="e.g., 2 adults 1 room">
        </div>
      </div>

      <div class="col-md-3 align-self-end">
        <div class="form-group mb-0">
          <button type="submit" class="btn btn-primary col-md-8">Search</button>
        </div>
      </div>

    </div>
>>>>>>> c4e8a1ccc77c89bbe5916ef8cb8242fe88a038ed
  </div>

<<<<<<< HEAD



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
=======
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
>>>>>>> c4e8a1ccc77c89bbe5916ef8cb8242fe88a038ed
</body>

</html>