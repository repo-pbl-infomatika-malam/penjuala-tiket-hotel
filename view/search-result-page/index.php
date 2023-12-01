<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Search Hotel</title>
  <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <nav class=" navbar navbar-expand-lg bg-success">
    <div class="container-lg">
      <a class="navbar-brand text-light fs-4 fw-semibold" href="../index.php">Tiket Ajah</a>

      <div id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="../login" class="btn btn-outline-light" type="submit">Login</a>
          </li>
          <li class="nav-item ms-2">
            <a href="../register " class="btn btn-outline-light" type="submit">Register</a>
          </li>
        </ul>
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
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>