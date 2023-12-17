
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Penjualan tiket hotel</title>
  <link href="../../assets/css/bootstrap.min.css"
    rel="stylesheet">
  <link rel="stylesheet"
    href="style.css">
  <link rel="stylesheet"
    href="../../styles/global.css">
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
        <a href="../landing-page/index.php#about-us"
            class="text-button-primary">About Us</a>
        </div>
        <div class="divider"></div>
        <a class="button-secondary">Keluar</a>
      </div>
    </div>
  </nav>
  
  <!-- navbar end -->
<br>
<br>
  <p class="fs-1 container">Dashboard Admin <bold></bold></p>
  <BR>
  <br>
  <br>
        <div class="container ">
  <div class="row row-cols-5 row-cols-lg-5 g-2 g-lg-3">
    <div class="col">
    <div class="card text-white bg-secondary mb-4" style="max-width: 18rem;">
  <div class="card-header">KAMAR TERSEDIA</div>
  <div class="card-body">
    <h5 class="card-title">3 Kamar Standar</h5>
    <h5 class="card-title">8 Kamar Istimewa</h5>
    <h5 class="card-title">10 Kamar Keluarga</h5>
    
  </div>
  <a href="#" class="button-secondary ">Ubah</a>
  
</div>
    </div>

    <div class="col">
    <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
  <div class="card-header">KAMAR TIDAK TERSEDIA</div>
  <div class="card-body">
  <h5 class="card-title">7 Kamar Standar</h5>
    <h5 class="card-title">2 Kamar Istimewa</h5>
    <h5 class="card-title">6 Kamar Keluarga</h5>
    </div>
  <a href="#" class="button-secondary ">Ubah</a>
  
</div>
    </div>

<div class="col">
    <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
  <div class="card-header">JUMLAH KAMAR</div>
  <div class="card-body">
  <h5 class="card-title">10 Kamar Standar</h5>
    <h5 class="card-title">10 Kamar Istimewa</h5>
    <h5 class="card-title">10 Kamar Keluarga</h5>
  </div>
  <a href="#" class="button-secondary ">Ubah</a>
 
</div>
</div>
  </div>
<br>
<br>
 <!-- Button trigger modal -->
       <div> 
        <button type="button" class="button-secondary mb-3 " data-bs-toggle="modal" data-bs-target="#modaltambah">
          TAMBAH PRODUK
        </button>
        </div>


        <table class="table table-bordered table-striped table-hover container">
          <tr>
            <th>ID KAMAR</th>
            <th>NOMOR KAMAR</th>
            <th>DESKRIPSI</th>
            <th>FOTO</th>
            <th>TIPE KAMAR</th>
            <th>HARGA</th>
            <th>AKSI</th>
          </tr>

    
          <tr>
            <td>123</td>
            <td>1.1</td>
            <td>Free wifi</td>
            <td>1</td>
            <td>minimalis</td>
            <td>350.000</td>

            <td>
              <a href="#" class="btn btn-success">Ubah</a>
              <a href="#" class="btn btn-danger">Hapus</a>
            </td>
          </tr>
          
        </table>

        <!-- Awal Modal -->
        <div class="modal fade modal-lg" id="modaltambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title fs-5" id="staticBackdropLabel">FORM DATA PRODUCT </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>

              <form method="POST" action="aksi_rooms.php">
                <div class="modal-body overflow-auto">

                  <div class="mb-3">
                    <label class="form-label">ID KAMAR</label>
                    <input type="text" class="form-control" name="tid" placeholder="Masukan id Kamar">
                  </div>

                  <div class="mb-3">
                    <label class="form-label">NOMOR KAMAR</label>
                    <input type="text" class="form-control" name="tnumber" placeholder="Masukan Nomor Kamar">
                  </div>

                  <div class="mb-3">
                    <label class="form-label">DESKRIPSI</label>
                    <textarea class="form-control" name="tdescription" rows="3"></textarea>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">FOTO</label>
                    <input type="file" class="form-control" name="fimage" placeholder="choose image">
                  </div>

                  <div class="mb-3">
                    <label class="form-label">TIPE KAMAR</label>
                    <select class="form-select" name="ttype">
                      <option></option>
                      <option value="Standart Room">Kamar Standar</option>
                      <option value="Superior Room">Kamar Istimewa </option>
                      <option value="Family Room">Kamar Keluarga</option>
                    </select>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Harga</label>
                    <input type="text" class="form-control" name="tprice" placeholder="Masukan Harga">
                  </div>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" name="bsubmit">Submit</button>
                </div>
              </form>

            </div>
          </div>
        </div>

        <!-- akhir Modal -->

      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>