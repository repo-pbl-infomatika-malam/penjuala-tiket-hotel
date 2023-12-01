<?php
include 'koneksi.php';
$id= $_GET['id'];
$result = mysqli_query($koneksi, "SELECT * FROM product WHERE id='$id'");
while($user_data = mysqli_fetch_array($result))
{
$nama = $user_data['nama'];
$deskripsi = $user_data['deskripsi'];
$status = $user_data['status'];
$harga = $user_data['harga'];
}
?>
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
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
<a class="navbar-brand" href="#">SELAMAT DATANG ADMIN</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" datatarget="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" arialabel="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<form class="form-inline my-2 my-lg-0 ml-auto">
<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>
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
<h3><i class="fas fa-user-graduate mr-2"></i> UBAH DATA PRODUK</h3><hr>
<form action="update_mhs.php" method="post">
<div class="form-row">
<div class="form-group col-md-4">
<label >ID</label>
<input type="text" id="id" class="form-control" id="id" value=<?php echo $id;?>>
</div>
</div>
<div class="form-row">
<div class="form-group col-md-8">
<label >NAMA PRODUK</label>
<input type="text" name="nama" class="form-control" id="nama" value=<?php echo $nama;?>>
</div>
</div>
<div class="form-row">
<div class="form-group col-md-6">
<label >DESKRIPSI</label>
<input type="text" name="deskripsi" class="form-control" id="deskripsi" value=<?php echo $deskripsi;?>>
</div>
</div>
<div class="form-row">
<div class="form-group col-md-6">
<label >STATUS</label>
<input type="text" name="status" class="form-control" id="status" value=<?php echo
$status;?>>
</div>
</div>
<div class="form-row">
<div class="form-group col-md-8">
<label >HARGA</label>
<input type="text" name="harga" class="form-control" id="harga" value=<?php echo $harga;?>>
</div>
</div>
<button type="submit" class="btn btn-primary">SIMPAN</button>
</form>
</div>
</div>
</body>
</html>