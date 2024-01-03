<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Form Dashboard</title>

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

<img src="<?= base_url('assets/rs.jpg') ?>" class="card-img-top" width="50px">
<br><br><h5 class="text-center"><b>RSUD DR. M. YUNUS BENGKULU</b></h5>
<h6 class="text-center">Jl. Bhayangkara, Sidomulyo, Gading Cempaka, Kota Bengkulu, Prov Bengkulu, 38211 | Telepon: (0736) 52004</h6>

 <br><br><div class="container" style="margin: 0 auto;">
        <div class="row align-items-center">
<h6 class="fw-normal">Rumah Sakit Umum Bengkulu pada awalnya berdiri di. Jl. A Yani (Kampung Cina) yang sekarang ditempati kantor Pos Bengkulu pada tahun 1922, kemudian pada tahun 1925 pindah ke Anggut Atas. Di daerah Ratu Agung yang sekarang menjadi Jl.Soekarno-Hatta. Dengan Direkturnya seorang Dokter Belanda bernama dr.Briunkop, didampingi seorang dokter dari Indonesia yang bernama dr. Assikin serta beberapa petugas kesehatan, Zickken Opesser ( Perawat ) dan 2 orang tenaga adiministrasi dan seorang pelayan. Pada saat itu Propinsi Bengkulu masih merupakan karesidenan dari propinsi Sumatera Selatan. Tahun 1977 Rumah Sakit pindah ke Padang Harapan sampai tahun 1995. Berkat usaha yang keras dari jajaran pejabat Rumah Sakit maka pada Tanggal 7 maret 1978 Rumah sakit daerah Bengkulu diresmikan pemakaiannya oleh Menteri Kesehatan Prof.G.A Siswabessy dan menjadikan tanggal 7 Maret sebagai hari Jadi Rumah Sakit dengan klarifikasi C berdasarkan Surat keputusan menteri Nomor: 51/Menkes/SK/II/1978. Kemudian meningkat menjadi Tipe B non pendidikan berdasarkan Keputusan menteri Nomor: 1065/Menkes/SK/XI/1992.</h6>

<h6 class="fw-normal">Berdasarkan Keputusan Menteri Dalam Negeri Nomor : 445.28.366 tanggal 10 Juli 1995 RSUD Dr. M. Yunus Bengkulu resmi menjadi Rumah Sakit Umum Swadana Daerah yang diperkuat dengan Peraturan Daerah No.14 Th.1994 tanggal 22 November 1994 dan Surat Keputusan Direktur No. 655 Th.1995 tanggal 13 Desember. Berdasarkan Peraturan Daerah No.7 Th. 2002 tentang Organisasi RSUD Dr.M.Yunus Bengkulu, dinyatakan bahwa RSUD Dr. M.Yunus Bengkulu merupakan Lembaga Teknis Daerah yang berbentuk badan. Sekarang menjadi Lembaga Pendidikan Akademi Keperawatan Propinsi Bengkulu. Pada tahun 1996 Rumah Sakit Umum Propinsi Bengkulu dipindahkan ke lokasi desa Sidomulyo kota Bengkulu sampai dengan sekarang. RSUD dr. M. Yunus Bengkulu diresmikan oleh Prof. Dr. Sujudi pada tanggal 25 November 1997 dan ditetapkan sebagai hari jadi RSUD Dr. M. Yunus Bengkulu. Berdasarkan Surat keputusan Menteri Dalam Negeri No. 445.28.366 tanggal 10 Juli 1995 Rumah Sakit Umum Bengkulu resmi menjadi Rumah Sakit Umum Swadana Daerah yang diperkuat dengan Perda No.14 tahun 1994 tanggal 22 November 1994, dan surat Keputusan Gubernur Bengkulu No.655 Th.1995 tanggal 13 Desember 1995. Selanjutnya berdasarkan Surat Keputusan Menteri Kesehatan RI No.1413/MENKES/SK/XII/2006 tanggal 15 Desember 2006 menjadi Rumah Sakit Tipe B Pendidikan dan merupakan Rumah sakit Rujukan tertinggi di Propinsi Bengkulu dan pada Tanggal 29 Desember 2009 berdasarkan Sk. Gubernur No. 320 XXVII RSUD dr. M. Yunus Bengkulu ditetapkan menjadi Badan Layanan Umum Daerah (BLUD).</h6>
</div>
</div>




<br><br><br><h5 style="text-align: center;"><b>- Visi, Misi dan Motto RSUD dr. M. Yunus Bengkulu -</b></h5>

    <div class="container" style="margin: 0 auto;">
        <div class="row align-items-center">
            <div class="col-md-4">
                <div class="card mt-5" style="width: 18rem;" align="center">
                    <img src="<?= base_url('assets/visi.png') ?>" class="card-img-top" width="50px">
                    <div class="card-body">
                        <h5 class="card-title">Visi</h5>
                        <p class="card-text">"Menjadi Rumah Sakit tipe A dengan pelayanan berkualitas, maju, berdaya saing serta melaksanakan pendidikan dan penelitian"</p>
                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="card mt-5" style="width: 18rem;" align="center">
                    <img src="<?= base_url('assets/misi.png') ?>" class="card-img-top" width="50px">
                    <div class="card-body">
                        <h5 class="card-title">Misi</h5>
                        <p class="card-text">
                            Menyelenggarakan pelayanan prima yang profesional, 
                            Meningkatkan sarana dan prasarana yang memadai sesuai dengan standar RS tipe A, 
                            Meningkatkan kualitas SDM Rumah Sakit,kuantitas dokter spesialis dan Sub spesialis, 
                            Memantapkan kesejahteraan tenaga medik dan non medik</p>
                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="card mt-5" style="width: 18rem;" align="center">
                    <img src="<?= base_url('assets/motto.png') ?>" class="card-img-top" width="50px">
                    <div class="card-body">
                        <h5 class="card-title">Motto</h5>
                        <p class="card-text">
                            Ramah dalam memberikan pelayanan, Empati pada pasien dan keluarga, Merawat pasien dengan sepenuh hati, Tepat dalam mendiagnosa dan tata laksana</p>
                    </div>
                </div>
            </div>

        </div>
    </div>





><br><br><br><br><h5 style="text-align: center;"><b>- STRUKTUR ORGANISASI -</b></h5>
<br><br><img src="<?= base_url('assets/struktur.jpg') ?>" class="card-img-top" width="30px">


<br><br><nav class="navbar navbar-light bg-primary" style="text-align: center;">
  <div style="text-align: center;">Copyright © RSUD M. Yunus Bengkulu - Prov Bengkulu</div>
</nav>




    <?= $this->renderSection('content') ?>

    <script src="<?= base_url('bootstrap-5.0.2-dist/js/bootstrap.min.js') ?>" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="<?= base_url('jquery-3.7.1.min.js') ?>"></script>

</body>

</html>