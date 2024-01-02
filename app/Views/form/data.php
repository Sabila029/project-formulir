<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Data Pasien</title>
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


  <br><div style="text-align: center;">
    <img src="<?= base_url('assets/data.png') ?>" alt="logo" width="100px" height="100px" >
  </div>


  <div class="container" style="margin: 0 auto;">
        <div class="row align-items-center">
            <div class="col-md-4">
                <div class="card mt-5" style="width: 18rem;" align="center">
                    <div class="card-body">
                        <h5 class="card-title">Pengkajian Awal Keperawatan dan Medis Pasien Neonatus</h5>
                        <br>
                        <a href="<?= site_url('dashboard/neo') ?>" class="btn btn-outline-success">Lihat</a>
                    </div>
                </div>
            </div>


  <div class="col-md-4">
                <div class="card mt-5" style="width: 18rem;" align="center">
                    <div class="card-body">
                        <h5 class="card-title">Pengkajian Awal Keperawatan dan Medis Pasien Neonatus 2</h5>
                        <br>
                        <a href="<?= site_url('dashboard/neo2') ?>" class="btn btn-outline-success">Lihat</a>
                    </div>
                </div>
            </div>


  <div class="col-md-4">
                <div class="card mt-5" style="width: 18rem;" align="center">
                    <div class="card-body">
                        <h5 class="card-title">Pengkajian Awal Keperawatan dan Medis Pasien Neonatus 3</h5>
                        <br>
                        <a href="<?= site_url('dashboard/neo3') ?>" class="btn btn-outline-success">Lihat</a>
                    </div>
                </div>
            </div>



  <div class="col-md-4">
                <div class="card mt-5" style="width: 18rem;" align="center">
                    <div class="card-body">
                        <h5 class="card-title">Pengkajian Awal Keperawatan dan Medis Pasien Neonatus4</h5>
                        <br>
                        <a href="<?= site_url('dashboard/neo4') ?>" class="btn btn-outline-success">Lihat</a>
                    </div>
                </div>
            </div>


  <div class="col-md-4">
                <div class="card mt-5" style="width: 18rem;" align="center">
                    <div class="card-body">
                        <h5 class="card-title">Pengkajian Awal Keperawatan dan Medis Pasien Neonatus5</h5>
                        <br>
                        <a href="<?= site_url('dashboard/neo5') ?>" class="btn btn-outline-success">Lihat</a>
                    </div>
                </div>
            </div>



  <div class="col-md-4">
                <div class="card mt-5" style="width: 18rem;" align="center">
                    <div class="card-body">
                        <h5 class="card-title">Penundaan/Pembatalan Tindakan Operasi</h5>
                        <br>
                        <a href="<?= site_url('dashboard/op') ?>" class="btn btn-outline-success">Lihat</a>
                    </div>
                </div>
            </div>



  <div class="col-md-4">
                <div class="card mt-5" style="width: 18rem;" align="center">
                    <div class="card-body">
                        <h5 class="card-title">Pre Operasi dan Post Operasi</h5>
                        <br>
                        <a href="<?= site_url('dashboard/prepost') ?>" class="btn btn-outline-success">Lihat</a>
                    </div>
                </div>
            </div>



  <div class="col-md-4">
                <div class="card mt-5" style="width: 18rem;" align="center">
                    <div class="card-body">
                        <h5 class="card-title">Pengkajian Awal Keperawatan/Kebidanan Bayi Baru Lahir</h5>
                        <br>
                        <a href="<?= site_url('dashboard/bbl') ?>" class="btn btn-outline-success">Lihat</a>
                    </div>
                </div>
            </div>





  </div>
</div>
</div>


  <br><br><nav class="navbar navbar-light bg-primary">
  <div style="text-align: center;">Copyright © RSUD M. Yunus Bengkulu - Prov Bengkulu</div>
</nav>


 
  </body>
</html>