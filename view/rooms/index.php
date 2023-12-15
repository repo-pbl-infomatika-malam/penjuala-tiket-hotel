
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
          <a href="../catalog-product-page/"
            class="text-button-primary">Create Ticket</a>
        </div>

        <div class="divider"></div>

        
      </div>
    </div>
  </nav>
  <!-- navbar end -->


        <!-- Button trigger modal -->
        <div class="mt-5">
        <button type="button" class="btn btn-success mb-3 " data-bs-toggle="modal" data-bs-target="#modaltambah">
          ADD PRODUCT
        </button>
        </div>

        <table class="table table-bordered table-striped table-hover">
          <tr>
            <th>ID ROOMS</th>
            <th>ROOMS NUMBER</th>
            <th>CAPACITY</th>
            <th>DESCRIPTION</th>
            <th>IMAGE</th>
            <th>TYPE ROOMS</th>
            <th>PRICE</th>
            <th>ACTION</th>
          </tr>

    
          <tr>
            <td>123</td>
            <td>1.1</td>
            <td>2 persons</td>
            <td>Free wifi</td>
            <td>1</td>
            <td>minimalis</td>
            <td>350.000</td>

            <td>
              <a href="#" class="btn btn-warning">Update</a>
              <a href="#" class="btn btn-danger">Delete</a>
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
                    <label class="form-label">ID ROOMS</label>
                    <input type="text" class="form-control" name="tid" placeholder="Input Id Room">
                  </div>

                  <div class="mb-3">
                    <label class="form-label">ROOMS NUMBER</label>
                    <input type="text" class="form-control" name="tnumber" placeholder="Input Room Number">
                  </div>

                  <div class="mb-3">
                    <label class="form-label">CAPACITY</label>
                    <input type="text" class="form-control" name="tcapacity" placeholder="Input Capacity Room">
                  </div>

                  <div class="mb-3">
                    <label class="form-label">DESCRIPTION</label>
                    <textarea class="form-control" name="tdescription" rows="3"></textarea>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">IMAGE</label>
                    <input type="file" class="form-control" name="fimage" placeholder="choose image">
                  </div>

                  <div class="mb-3">
                    <label class="form-label">TYPE ROOMS</label>
                    <select class="form-select" name="ttype">
                      <option></option>
                      <option value="Standart Room">Standart Room</option>
                      <option value="Superior Room">Superior Room</option>
                      <option value="Family Room">Family Room</option>
                    </select>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">PRICE</label>
                    <input type="text" class="form-control" name="tprice" placeholder="Input Price">
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