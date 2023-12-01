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
    <nav class="navbar navbar-expand-lg navbar-light bg-info fixed-top">
      <a class="navbar-brand nav-link text-white" href="#" >Welcome</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
    <h3 ><i class="fas fa-user-graduate mr-2"></i> Data product</h3><hr>
        <a href="tambahproduk.php" class="btn btn-primary mb-2" data-togle="modal" data-target="#tambahproduk"> 
        <i class="fas fa-plus-circle mr-2"></i>ADD PRODUCT DATA</a>
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">PRODUCT NAME</th>
            <th scope="col">DESCRIPTION</th>
            <th scope="col">STATUS</th>
            <th scope="col">PRICE</th>
            <th colspan="3" scope="col">ACTION</th>
          </tr>
        </thead>
        <?php
          include 'koneksi.php';

            $query = mysqli_query($koneksi, "SELECT * FROM produk");
            $no = 1;
            while($data = mysqli_fetch_assoc($query)) {
        ?>
        <tr>
          <td><?php echo $data['id'];?></td>
          <td><?php echo $data['nama'];?></td>
          <td><?php echo $data['deskripsi'];?></td>
          <td><?php echo $data['status'];?></td>
          <td><?php echo $data['harga'];?></td>
          <td>
          <i class="fas fa-edit bg-success p-2 text-white rounded"></i>
          <a href="ubahproduk" data-toggle="modal" data-target="#ubahproduk<?php echo $data['id'];?>">Edit</a>|
          <i class="fas fa-trash-alt bg-danger p-2 text-white rounded"></i>
          <a href="hapusproduk" data-toggle="modal" data-target="#hapusproduk<?php echo $data['id'];?>">Delete</a>
          </td>
        </tr>
        <!-- Update Modal -->
            <div class="example-modal">
          <div class="modal fade" id="editproduk<?php echo $data['id'];?>" role="dialog">
          <div class="modal-dialog">
          <div class="modal-content">
          <div class="modal-header">
          <h3 class="modal-title">Edit Data Mahasiswa</h3>
          </div>
          <div class="modal-body">
          <form action="updateproduk.php" method="post" role="form">
          <?php
          $id = $data['id'];
          $query1 = mysqli_query($koneksi, "SELECT * FROM produk WHERE id='$id'");
          while ($data1 = mysqli_fetch_assoc($query1)) 
            ?>

        <!-- modal delete -->
        <div class="example-modal">
        <div id="hapusproduk<?php echo $data['id']; ?>" class="modal fade" role="dialog" style="display:none;">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
        <h3 class="modal-title">Konfirmasi Hapus Data</h3>
        </div>
        <div class="modal-body">
        <h5 align = "center" >Apakah anda yakin ingin menghapus NIM <?php echo
        $data['id'];?><strong><span class="grt"></span></strong> ?</h5>
        </div>
        <div class="modal-footer">
        <button id="nodelete" type="button" class="btn btn-danger pull-left" datadismiss="modal">Cancel</button>
        <a href="hapusproduk.php?id=<?php echo $data['id']; ?>" class="btn btn-primary">Delete</a>
        </div>
        </div>
        </div>
        </div>
        </div>
        <?php
        }
      ?>
      </table>

        </tbody>
      </table>
  </div>

</div>
              <!-- Simpan Modal  -->
              <div class="example-modal">
        <div id="tambahproduk" class="modal fade" role="dialog" style="display:none;">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
        <h3 class="modal-title">Add New Data</h3>
        </div>
        <div class="modal-body">
        <form action="simpanproduk.php" method="post" role="form">
        <div class="form-group">
        <div class="row">
        <label class="col-sm-3 control-label text-right">ID</label>
        <div class="col-sm-8"><input type="text" class="form-control" name="id" placeholder="id"
        value=""></div>
        </div>
        </div>
        <div class="form-group">
        <div class="row">
        <label class="col-sm-3 control-label text-right">PRODUCT NAME</label>
        <div class="col-sm-8"><input type="text" class="form-control" name="nama" placeholder="nama" 
        value=""></div>
        </div>
        </div>
        <div class="form-group">
        <div class="row">
        <label class="col-sm-3 control-label text-right">DESCRIPTION</label>
        <div class="col-sm-8"><input type="text" class="form-control" name="deskripsi" placeholder="deskripsi"
        id="deskripsi" value="">
        </div>
        </div>
        </div>
        <div class="form-group">
        <div class="row">
        <label class="col-sm-3 control-label text-right">STATUS</label>
        <div class="col-sm-8"><input type="text" name="status" class="form-control"
        placeholder="status">
        </input>
        </div>
        </div>
        </div>
        <div class="form-group">
        <div class="row">
        <label class="col-sm-3 control-label text-right">PRICE</label>
        <div class="col-sm-8"><input type="text" class="form-control" name="harga" placeholder="harga"
        id="harga" value="">
        </div>
        </div>
        </div>
        <div class="modal-footer">
        <button id="nosave" type="button" class="btn btn-danger pull-left" datadismiss="modal">Cancel</button>
        <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
        </div>
        </form>
        </div>
        </div>
        </div>
        </div>
        </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>