

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

    <div class="container mt-3">

      <a href="<?= site_url('dashboard/data') ?>" class="btn btn-outline-dark"> ← Back</a>

      <h4 style="text-align: center;"><b>Daftar Formulir Neonatus</b></h4>

      <br><br><table class="table table-bordered mb-0" style="border: 1px solid black;">
      <tbody>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">No.RM</th>
      <th scope="col">Nama Lengkap</th>
      <th scope="col">Gender</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1;
    foreach ($data as $data) : ?> 
    <tr>
      <td><?= $i++; ?></td>
      <td><?= $data['NO_REGISTRATION']; ?></td>
      <td><?= $data['THENAME']; ?></td>  
      <td><?= $data['GENDER']; ?></td>
      <td>
        <a href="" class="btn btn-primary">Detail</a>
        <a href="" class="btn btn-warning">Update</a>
        <a href="" class="btn btn-danger">Delete</a>
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