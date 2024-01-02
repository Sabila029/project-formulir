<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Formulir</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbar-static/">

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('bootstrap-5.0.2-dist/css/bootstrap.min.css') ?>" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">
    <link href="css/simple-sidebar.css" rel="stylesheet">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
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



<br><div style="text-align: center;">
    <img src="<?= base_url('assets/monitor.png') ?>" alt="logo" width="100px" height="100px" >
  </div>



    <div class="container" style="margin: 0 auto;">
        <div class="row align-items-center">
            <div class="col-md-4">
                <div class="card mt-5" style="width: 18rem;" align="center">
                    <img src="<?= base_url('assets/form.png') ?>" class="card-img-top" width="50px">
                    <div class="card-body">
                        <h5 class="card-title">Pengkajian Awal Keperawatan dan Medis Pasien Neonatus</h5>
                        <br>
                        <a href="<?= site_url('dashboard/neonatus') ?>" class="btn btn-outline-info">Isi Formulir</a>
                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="card mt-5" style="width: 18rem;" align="center">
                    <img src="<?= base_url('assets/form.png') ?>" class="card-img-top" width="50px">
                    <div class="card-body">
                        <h5 class="card-title">Pengkajian Awal Keperawatan dan Medis Pasien Neonatus 2</h5>
                        <br>
                        <a href="<?= site_url('dashboard/neonatus2') ?>" class="btn btn-outline-info">Isi Formulir</a>
                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="card mt-5" style="width: 18rem;" align="center">
                    <img src="<?= base_url('assets/form.png') ?>" class="card-img-top" width="50px">
                    <div class="card-body">
                        <h5 class="card-title">Pengkajian Awal Keperawatan dan Medis Pasien Neonatus 3</h5>
                        <br>
                        <a href="<?= site_url('dashboard/neonatus3') ?>" class="btn btn-outline-info">Isi Formulir</a>
                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="card mt-5" style="width: 18rem;" align="center">
                    <img src="<?= base_url('assets/form.png') ?>" class="card-img-top" width="50px">
                    <div class="card-body">
                        <h5 class="card-title">Pengkajian Awal Keperawatan dan Medis Pasien Neonatus4</h5>
                        <br>
                        <a href="<?= site_url('dashboard/neonatus4') ?>" class="btn btn-outline-info">Isi Formulir</a>
                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="card mt-5" style="width: 18rem;" align="center">
                    <img src="<?= base_url('assets/form.png') ?>" class="card-img-top" width="50px">
                    <div class="card-body">
                        <h5 class="card-title">Pengkajian Awal Keperawatan dan Medis Pasien Neonatus5</h5>
                        <br>
                        <a href="<?= site_url('dashboard/neonatus5') ?>" class="btn btn-outline-info">Isi Formulir</a>
                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="card mt-5" style="width: 18rem;" align="center">
                    <img src="<?= base_url('assets/form.png') ?>" class="card-img-top" width="50px">
                    <div class="card-body">
                        <h5 class="card-title">Penundaan/Pembatalan Tindakan Operasi</h5>
                        <br>
                        <a href="<?= site_url('dashboard/operasi') ?>" class="btn btn-outline-info">Isi Formulir</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mt-5" style="width: 18rem;" align="center">
                    <img src="<?= base_url('assets/form.png') ?>" class="card-img-top" width="50px">
                    <div class="card-body">
                        <h5 class="card-title">Pre Operasi dan Post Operasi</h5>
                        <br>
                        <a href="<?= site_url('dashboard/prepostop') ?>" class="btn btn-outline-info">Isi Formulir</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mt-5" style="width: 18rem;" align="center">
                    <img src="<?= base_url('assets/form.png') ?>" class="card-img-top" width="50px">
                    <div class="card-body">
                        <h5 class="card-title">Pengkajian Awal Keperawatan/Kebidanan Bayi Baru Lahir</h5>
                        <br>
                        <a href="<?= site_url('dashboard/asesmen') ?>" class="btn btn-outline-info">Isi Formulir</a>
                    </div>
                </div>
            </div>

            

        </div>
    </div>


    <br><br><nav class="navbar navbar-light bg-primary" style="text-align: center;">
  <div style="text-align: center;">Copyright © RSUD M. Yunus Bengkulu - Prov Bengkulu</div>
</nav>



    <?= $this->renderSection('content') ?>

    <script src="<?= base_url('bootstrap-5.0.2-dist/js/bootstrap.min.js') ?>" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="<?= base_url('jquery-3.7.1.min.js') ?>"></script>

</body>

</html>