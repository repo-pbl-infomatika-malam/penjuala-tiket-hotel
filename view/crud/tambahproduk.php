<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css" >
        <link rel="stylesheet" type="text/css" href="admin.css">
        <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
        <title>Penjualan Tiket Hotel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
        <a class="navbar-brand" href="#">Welcome Admin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" datatarget="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <div class="icon ml-4">
        <h5>
        <i class="fas fa-envelope-square mr-3"></i>
        <i class="fas fa-bell-slash mr-3"></i>
        <i class="fas fa-sign-out-alt mr-3"></i>
        </h5>
    </div>
    </div>
    </nav>
<div class="col-md-10 p-5 pt-2">
<h3><i class="fas fa-user-graduate mr-2"></i> Input New Data</h3><hr>
<form action="simpanproduk.php" method="post">
<div class="form-row">
<div class="form-group col-md-4">
<label >ID</label>
<input type="text" name="id" class="form-control" id="id">
</div>
</div>
<div class="form-row">
<div class="form-group col-md-6">
<label >PRODUCT NAME</label>
<input type="text" name="nama" class="form-control" id="nama">
</div>
</div>
<div class="form-row">
<div class="form-group col-md-6">
<label >DESCRIPTION</label>
<input type="text" name="deskripsi" class="form-control" id="deskripsi">
</div>
</div>
<div class="form-row">
<div class="form-group col-md-6">
    <label >STATUS</label>
    <input type="text" name="status" class="form-control" id="status">
</div>
</div>
<div class="form-row">
<div class="form-group col-md-6">
    <label >PRICE</label>
    <input type="text" name="harga" class="form-control" id="harga">
</div>
</div>
<button type="submit" class="btn btn-primary">SAVE</button>
</form>
</div>
</div>
</body>
</html>