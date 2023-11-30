<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Search Hotel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<div class="container mt-4">
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
