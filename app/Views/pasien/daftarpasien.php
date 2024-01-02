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


    <div class="container mt-3">

      <a href="<?= site_url('dashboard/pendaftaran') ?>" class="btn btn-outline-dark"> ← Back</a>

      <br><h3 style="text-align: center;"><b>DAFTAR PASIEN</b></h3>



      <br><table class="table table-bordered mb-0" style="border: 1px solid black;">
        <tbody>



          <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">No.RM</th>
      <th scope="col">Nama Lengkap</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">Gender</th>
      <th scope="col">Alamat</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1;
    foreach ($pasien as $data) : ?> 
    <tr>
      <td><?= $i++; ?></td>
      <td><?= $data['NO_REGISTRATION']; ?></td>
      <td><?= $data['THENAME']; ?></td>
      <td><?= $data['DATE_OF_BIRTH']; ?></td>
      <td><?= $data['GENDER']; ?></td>
      <td><?= $data['ADDRESS']; ?></td>
      <td>
        <a href="" class="btn btn-warning">Update</a>
        <a href="<?= site_url('dashboard/delete') ?>" class="btn btn-danger">Delete</a>
      </td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>

          


        </tbody>
      </table>


      
    </div>

  </body>
</html>