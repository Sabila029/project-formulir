<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <img src="<?= base_url('assets/logors.png') ?>" alt="logo" width="50px" height="70px">
    <a class="navbar-brand" href="#"><b>RSUD Dr. YUNUS BENGKULU</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="<?= site_url('dashboard/home') ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= site_url('dashboard/pendaftaran') ?>">Pendaftaran</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= site_url('dashboard/daftarpasien') ?>">Pasien</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= site_url('dashboard/formulir') ?>">Formulir</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= site_url('dashboard/data') ?>">Data</a>
        </li>
      </ul>
    </div>
  </div>
</nav>



    <div class="container">



      <br><h3 style="text-align: center;"><b>PENDAFTARAN PASIEN</b></h3>



        <form action="<?php echo site_url('dashboard/simpanuser') ?>" method="post">



          <br><br><div class="row mb-3">
                                    <div class="col-md-10">
                              <div class="row text-align">
                                <div class="col-md-3">
                                  <label for="">No. Rekam Medik</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="NO_REGISTRATION" name="NO_REGISTRATION" style="width: 400px" autofocus autocomplete="off" required >
                                </div>
                              </div>
                            </div>
                        </div>



                        <div class="row mb-3">
                                    <div class="col-md-10">
                              <div class="row text-align">
                                <div class="col-md-3">
                                  <label for="">Nama Lengkap</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="THENAME" name="THENAME" style="width: 400px" autocomplete="off" required >
                                </div>
                              </div>
                            </div>
                        </div>


                        <div class="row mb-3">
                                    <div class="col-md-10">
                              <div class="row text-align">
                                <div class="col-md-3">
                                  <label for="">Tanggal Lahir</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="date" class="form-control" id="DATE_OF_BIRTH" name="DATE_OF_BIRTH" style="width: 400px" autocomplete="off" required>
                                </div>
                              </div>
                            </div>
                        </div>
                        

                        <div class="row mb-3">
                            <div class="col-md-10">
                              <div class="row text-align">
                                <div class="col-md-3">
                                  <label for="">Jenis Kelamin</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="GENDER" name="GENDER" style="width: 400px" autocomplete="off" required>
                                </div>
                              </div>
                            </div>
                        </div>


                        <div class="row mb-3">
                            <div class="col-md-10">
                              <div class="row text-align">
                                <div class="col-md-3">
                                  <label for="">Alamat</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="ADDRESS" name="ADDRESS" style="width: 400px" autocomplete="off" required>
                                </div>
                              </div>
                            </div>
                        </div>



                                  <div class="mb-5">
                                     <div class="d-grid gap-2">
                                       <input class="btn btn-primary" style="width: 100px;" type="submit" name="submit" value="Simpan">
                                    </div>
                                </div>

          


        </form>



      
    </div>

  </body>
</html>