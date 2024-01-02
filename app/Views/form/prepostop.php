
<!doctype html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>PrepostOperasi</title>

    <style>
      .box1{
        width: 450px;
        height: 80px;
        background: transparent;
      }
      .box2{
        width: 300px;
        height: 80px;
        background: transparent;
      }

      .kbw-signature { width: 250px; height: 200px; }
    </style>



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="<?php echo base_url('js/jquery.signature.js')?>"></script>
<script>
$(function() {
  var sig = $('#sig2').signature();
  $('#disable').click(function() {
    var disable = $(this).text() === 'Disable';
    $(this).text(disable ? 'Enable' : 'Disable');
    sig.signature(disable ? 'disable' : 'enable');
  });
  $('#clear').click(function() {
    sig.signature('clear');
  });
  $('#json').click(function() {
    alert(sig.signature('toJSON'));
  });
  $('#svg').click(function() {
    alert(sig.signature('toSVG'));
  });
});

</script>
<script>
$(function() {
  var sig = $('#sig3').signature();
  $('#disable').click(function() {
    var disable = $(this).text() === 'Disable';
    $(this).text(disable ? 'Enable' : 'Disable');
    sig.signature(disable ? 'disable' : 'enable');
  });
  $('#clear').click(function() {
    sig.signature('clear');
  });
  $('#json').click(function() {
    alert(sig.signature('toJSON'));
  });
  $('#svg').click(function() {
    alert(sig.signature('toSVG'));
  });
});
</script>

<script>
$(function() {
  var sig = $('#sig4').signature();
  $('#disable').click(function() {
    var disable = $(this).text() === 'Disable';
    $(this).text(disable ? 'Enable' : 'Disable');
    sig.signature(disable ? 'disable' : 'enable');
  });
  $('#clear').click(function() {
    sig.signature('clear');
  });
  $('#json').click(function() {
    alert(sig.signature('toJSON'));
  });
  $('#svg').click(function() {
    alert(sig.signature('toSVG'));
  });
});
</script>

<script>
$(function() {
  var sig = $('#sig5').signature();
  $('#disable').click(function() {
    var disable = $(this).text() === 'Disable';
    $(this).text(disable ? 'Enable' : 'Disable');
    sig.signature(disable ? 'disable' : 'enable');
  });
  $('#clear').click(function() {
    sig.signature('clear');
  });
  $('#json').click(function() {
    alert(sig.signature('toJSON'));
  });
  $('#svg').click(function() {
    alert(sig.signature('toSVG'));
  });
});
</script>


  </head>




  <body>
    <div class="container mt-3" >

      <a href="<?= site_url('dashboard/formulir') ?>" class="btn btn-danger"> ← Back</a>


      <form action="<?php echo site_url('dashboard/simpan') ?>" method="post">
        <input type="hidden" id="FORM" name="FORM" value="F7">


      <h3 style="text-align: right;">RM 10 Lanjutan 2</h3>

      <h6>RSUD Dr. M YUNUS BENGKULU</h6>
      <h6>JALAN BHAYANGKARA KOTA BENGKULU</h6>

 <div class="row">
  <div class="col-6">
    <div class="box" style="border: 1px solid black; text-align: center"><font size="5"><b>SERAH TERIMA</b>
    <br><b>PRE OPERASI DAN POST OPERASI</b></font></div> 
  </div>

  <div class="col-6">
     <div class="box" style="border: 1px solid black;">
      <div class="row mb-3">
                                    <div class="col-md-10">
                              <div class="row text-align">
                                <div class="col-md-5">
                                  <label for="">No. Rekam Medik</label>
                                </div>
                                <div class="col-md-1">
                                  <select class="form-select form-control" name="NO_REGISTRATION" id="NO_REGISTRATION" style="width: 200px;" required>
                                      <option value="" selected disabled>-Pilih Nomor Rekam Medik-</option>
                                      <?php foreach ($pasien as $value) :?>
                                        <option value="<?= $value['NO_REGISTRATION']; ?>"><?= $value['NO_REGISTRATION']; ?></option>
                                        <?php endforeach; ?>
                                  </select>
                                </div>
                              </div>
                            </div>
                        </div>


      <div class="row mb-3">
                                    <div class="col-md-10">
                              <div class="row text-align">
                                <div class="col-md-5">
                                  <label for="">Nama Lengkap</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="THENAME" name="THENAME" style="width: 200px" readonly>
                                </div>
                              </div>
                            </div>
                        </div>


      <div class="row mb-3">
                                    <div class="col-md-10">
                              <div class="row text-align">
                                <div class="col-md-5">
                                  <label for="">Tanggal Lahir</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="DATE_OF_BIRTH" name="DATE_OF_BIRTH" style="width: 200px" readonly>
                                </div>
                              </div>
                            </div>
                        </div>


      <div class="row mb-3">
                            <div class="col-md-10">
                              <div class="row text-align">
                                <div class="col-md-5">
                                  <label for="">Jenis Kelamin</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="GENDER" name="GENDER" style="width: 200px" readonly>
                                </div>
                              </div>
                            </div>
                        </div>
  </div>
 </div>
</div>


    <table class="table table-bordered mt-5" style="border: 1px solid black;">
      <tbody>

        <tr>
          <td colspan="6">
            <div class="row">
              <div class="col-6">
              <div class="row mb-3">
                            <div class="col-md-10">
                              <div class="row text-align">
                                <div class="col-md-5">
                                  <label for="">Tanggal Operasi</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="date" class="form-control" id="v_01" name="v_01" style="width: 200px" >
                                </div>
                              </div>
                            </div>
                        </div>
                      </div>


             <div class="col-6">         
             <div class="col-1">
                  <label for="">Sifat</label>
              </div>
              <div class="col-2">
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="t_01" id="t_01_elektif">
                <label class="form-check-label" for="t_01_elektif">Elektif</label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="t_01" id="t_01_cito">
                <label class="form-check-label" for="t_01_cito">Cito</label>
                </div>                 
                </div>
              </div>
            </div>
                   </td>
                  </tr>

        <tr>
          <td colspan="6">
            <div class="row">
              <div class="col-6">
             <div class="row mb-3">
                               <div class="col-md-4">
                                    <label for="">Operator</label>
                                </div>
                                <div class="col-md-1">
                                <div class="input-group flex-nowrap" style="width: 250px">
                                    <span class="input-group-text" id="addon-wrapping">dr.</span>
                                    <input type="text" id="v_02" name="v_02" class="form-control" autocomplete="off">
                                  </div>
                                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="row mb-3">
                <div class="col-md-4">
                                    <label for="">Anastesiolog</label>
                                </div>
                                <div class="col-md-1">
                                <div class="input-group flex-nowrap" style="width: 250px">
                                    <span class="input-group-text" id="addon-wrapping">dr.</span>
                                    <input type="text" id="v_02" name="v_02" class="form-control" autocomplete="off">
                                  </div>
                                </div>
              </div>
            </div>
            </div>
          </td>
        </tr>

        <tr>
          <td colspan="6">
             <div class="col-md-10">
                              <div class="row text-align">
                                <div class="col-md-3">
                                  <label for="">Diagnosa Op. /Lokasi</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="v_04" name="v_04" style="width: 500px" >
                                </div>
                              </div>
                            </div>
          </td>
        </tr>

        <tr style="background-color: black; color: white; text-align: center;" >
          <td colspan="4" style="width: 50%;"><b>DAFTAR CEK PRE OPERASI</b></td>
          <td colspan="2"><b>PEMERIKSAAN POST OPERASI</b></td>
        </tr>
        <tr style="text-align: center; background-color: #C0C0C0;">
          <td></td>
          <td><b>Item Pengecekan</b></td>
          <td><b>Ya</b></td>
          <td><b>Tidak</b></td>
          <td colspan="2"><b>Item Pemeriksaan</b></td>
        </tr>


        <tr>
          <td style="text-align: center;">1</td>
          <td>Bon Permintaan</td>
         <td>
            <div class="mb-1">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="t_02" id="t_02">
                              </div>
                            </div>
           </td>
           <td>
           <div class="mb-1">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="t_02" id="t_02">
                              </div>
                            </div>
          </td>
          <td style="text-align: center;">1</td>
          <td>
             <div class="row align-items-center">
              <div class="col-md-6">
                <label class="col-form-label">Laporan Operasi/Lap Anestesi</label>
              </div>
              <div class="col-md-4">
                <div class="form-check-inline">
                  <input type="radio" class="form-check-input" name="t_03" value="t_03">
                  <label>Ada</label>
                </div>
                <div class="form-check-inline">
                  <input type="radio" class="form-check-input" name="t_03" value="t_03">
                  <label>Tidak</label>
                </div>
              </div>
            </div>
          </td>
         </tr>


         <tr>
           <td style="text-align: center;">2</td>
           <td>Gelang Identitas Pasien</td>
           <td>
            <div class="mb-1">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="t_04" id="t_04">
                              </div>
                            </div>
           </td>
           <td>
           <div class="mb-1">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="t_04" id="t_04">
                              </div>
                            </div>
          </td>
           <td rowspan="3" style="text-align: center;">2</td>
           <td rowspan="3">
             <div class="col-md-4">
                <label for="">Tanda-tanda vital :</label>
             </div>
             <div class="row">
              <div class="col-6">
             <div class="col-md-5">
                <label for="">TD</label>
                : <input type="text" id="v_05" name="v_05" style="width: 50%">mmHg
             </div>
            <div class="col-md-5">
                <label for="">RR</label>
                : <input type="text" id="v_06" name="v_06" style="width: 50%">x/mnt
             </div>
          </div>
          <div class="col-6">
            <div class="col-md-5">
                <label for="">N</label>
                : <input type="text" id="v_07" name="v_07" style="width: 50%">x/mnt
             </div>
            <div class="col-md-5">
                <label for="">S</label>
                : <input type="text" id="v_08" name="v_08" style="width: 50%">°C
             </div>
          </div>
          </div>
           </td>
         </tr>


         <tr>
           <td style="text-align: center;">3</td>
           <td>Informed Concent Bedah</td>
          <td>
            <div class="mb-1">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="t_05" id="t_05">
                              </div>
                            </div>
           </td>
           <td>
           <div class="mb-1">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="t_05" id="t_05">
                              </div>
                            </div>
          </td>
         </tr>

          <tr>
           <td style="text-align: center;">4</td>
           <td>Informed Concent Anestesi</td>
           <td>
            <div class="mb-1">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="t_06" id="t_06">
                              </div>
                            </div>
           </td>
           <td>
           <div class="mb-1">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="t_06" id="t_06">
                              </div>
                            </div>
          </td>
         </tr>

         <tr>
           <td style="text-align: center;">5</td>
           <td>Asesmen Pra Anestesi</td>
          <td>
            <div class="mb-1">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="t_07" id="t_07">
                              </div>
                            </div>
           </td>
           <td>
           <div class="mb-1">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="t_07" id="t_07">
                              </div>
                            </div>
          </td>
           <td rowspan="2" style="text-align: center;">3</td>
           <td rowspan="2">
             <div class="col-md-10">
                              <div class="row text-align">
                                <div class="col-md-3">
                                  <label for="">Kesadaran</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="v_09" name="v_09" style="width: 300px" >
                                </div>
                              </div>
                            </div>
           </td>
         </tr>

         <tr>
           <td style="text-align: center;">6</td>
           <td>Asesmen Pra Operasi</td>
          <td>
            <div class="mb-1">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="t_08" id="t_08">
                              </div>
                            </div>
           </td>
           <td>
           <div class="mb-1">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="t_08" id="t_08">
                              </div>
                            </div>
          </td>
         </tr>

         <tr>
           <td rowspan="2" style="text-align: center;">7</td>
           <td rowspan="2">
            <p>Pemeriksaan Penunjang</p>
            <p>X-Ray/CT-Scan/MRI/USG/EKG/EEG/</p>
            <p>Laboraturium</p></td>
           <td rowspan="2">
             <div class="mb-1">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="t_09" id="t_09">
                              </div>
                            </div>
           </td>
           <td rowspan="2">
             <div class="mb-1">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="t_09" id="t_09">
                              </div>
                            </div>
           </td>
           <td>4</td>
           <td>   
                                <div>
                                   <label class="col-3" for="">Jalan Nafas</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_010" id="t_010_bersih" value="option1">
                                        <label class="form-check-label" for="t_010_bersih">Bersih</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_010" id="t_010_parsial" value="option2">
                                        <label class="form-check-label" for="t_010_parsial">Parsial</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_010" id="t_010_tersumbat" value="option2">
                                        <label class="form-check-label" for="t_010_tersumbat">Tersumbat</label>
                                    </div>
                                </div>
                            


           </td>
         </tr>

         <tr>
           <td rowspan="3">5</td>
           <td>
             <div class="col-md-10">
                              <div class="row text-align">
                                <div class="col-md-3">
                                  <label for="">Kulit</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="v_10" name="v_10" style="width: 300px" >
                                </div>
                              </div>
                            </div>
           </td>
         </tr>

         <tr>
           <td rowspan="2">8</td>
           <td>
             <div class="col-md-10">
                              <div class="row text-align">
                                <div class="col-md-5">
                                  <label for="">Persiapan Darah</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="v_11" name="v_11" style="width: 200px" >
                                </div>
                              </div>
                            </div>
           </td>
           <td>
             <div class="mb-1">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="t_011" id="t_011">
                              </div>
                            </div>
           </td>
           <td>
             <div class="mb-1">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="t_011" id="t_011">
                              </div>
                            </div>
           </td>
           <td>
             <div>
                                   <label class="col-2" for="">Warna</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_012" id="t_012_kemerahan" value="option1">
                                        <label class="form-check-label" for="t_012_kemerahan">Kemerahan</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_012" id="t_012_pucat" value="option2">
                                        <label class="form-check-label" for="t_012_pucat">Pucat</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_012" id="t_012_sianosis" value="option2">
                                        <label class="form-check-label" for="t_012_sianosis">Sianosis</label>
                                    </div>
                                </div>
           </td>
         </tr>

         <tr>
           <td>
            <div class="col-md-10">
                              <div class="row text-align">
                                <div class="col-md-5">
                                  <label for="">Jumlah</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="v_12" name="v_12" style="width: 200px" >
                                </div>
                              </div>
                            </div>
           </td>
            </td>
           <td>
              <div class="mb-1">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="t_013" id="t_013">
                              </div>
                            </div>
           </td>
           <td>
              <div class="mb-1">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="t_013" id="t_013">
                              </div>
                            </div>
           </td>
           <td>
             <div class="col-md-10">
                              <div class="row text-align">
                                <div class="col-md-3">
                                  <label for="">Turgor</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="v_13" name="v_13" style="width: 300px" >
                                </div>
                              </div>
                            </div>
           </td>
         </tr>

         <tr>
           <td style="text-align: center;">9</td>
           <td>Informed Concent Tranfusi</td>
           <td>
             <div class="mb-1">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="t_014" id="t_014">
                              </div>
                            </div>
           </td>
           <td>
             <div class="mb-1">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="t_014" id="t_014">
                              </div>
                            </div>
           </td>
           <td>6</td>
           <td>
            <div class="row">
              <div class="col-4">
            <div class="mb-1">
                              <label for="alasan" type="text" id="v_12" name="v_12">Klasifikasi Luka Operasi</label>
                            </div>
             <div class="mb-1 form-check">
                              <input type="checkbox" class="form-check-input" name="t_015" id="t_015_bersih">
                              <label class="form-check-label" for="t_015_bersih">Bersih</label>
                            </div>
                          </div>
                          <div class="col-4">
                            <div class="mb-1 form-check">
                              <input type="checkbox" class="form-check-input" name="t_016" id="t_016_bersih">
                              <label class="form-check-label" for="t_016_bersih">Bersih</label>
                            </div>
                            <div class="mb-1 form-check">
                              <input type="checkbox" class="form-check-input" name="t_017" id="t_017_kontaminasi">
                              <label class="form-check-label" for="t_017_kontaminasi">Terkontaminasi</label>
                            </div>
                          </div>
                          <div class="col-4">
                            <div class="mb-1 form-check">
                              <input type="checkbox" class="form-check-input" name="t_018" id="t_018_kontaminasi">
                              <label class="form-check-label" for="t_018_kontaminasi">Terkontaminasi</label>
                            </div>
                            <div class="mb-1 form-check">
                              <input type="checkbox" class="form-check-input" name="t_019" id="t_019_infeksi">
                              <label class="form-check-label" for="t_019_infeksi">Infeksi</label>
                              </div>
                            </div>
            </div>
           </td>
         </tr>

         <tr>
           <td rowspan="2">10</td>
           <td>
             <div class="col-md-10">
                <label for="">Premediksi:</label>
                Jam : <input type="time" id="v_01" name="v_01">WIB
             </div>
           </td>
           <td>
             <div class="mb-1">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="t_020" id="t_020">
                              </div>
                            </div>
           </td>
           <td>
             <div class="mb-1">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="t_020" id="t_020">
                              </div>
                            </div>
           </td>
           <td rowspan="4">7</td>
           <td>
             <div class="col-md-10">
                              <div class="row text-align">
                                <div class="col-md-3">
                                  <label for="">Drain</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="v_14" name="v_14" style="width: 300px" >
                                </div>
                              </div>
                            </div>
           </td>
         </tr>


         <tr>
           <td>
             <div class="col-md-10">
                              <div class="row text-align">
                                <div class="col-md-5">
                                  <label for="">Nama Obat</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="v_15" name="v_15" style="width: 200px" >
                                </div>
                              </div>
                            </div>
           </td>
           </td>
           <td>
             <div class="mb-1">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="t_021" id="t_021">
                              </div>
                            </div>
           </td>
           <td>
             <div class="mb-1">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="t_021" id="t_021">
                              </div>
                            </div>
           </td>
           <td>
             <div class="col-md-10">
                              <div class="row text-align">
                                <div class="col-md-3">
                                  <label for="">Lokasi</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="v_16" name="v_16" style="width: 300px" >
                                </div>
                              </div>
                            </div>
           </td>
         </tr>

         <tr>
           <td style="text-align: center;">11</td>
           <td>Lembar Penandaan Operasi</td>
           <td>
             <div class="mb-1">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="t_022" id="t_022">
                              </div>
                            </div>
           </td>
           <td>
             <div class="mb-1">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="t_022" id="t_022">
                              </div>
                            </div>
           </td>
           <td>
             <div class="col-md-10">
                              <div class="row text-align">
                                <div class="col-md-3">
                                  <label for="">Jumlah Cairan</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="v_17" name="v_17" style="width: 300px" >
                                </div>
                              </div>
                            </div>
           </td>
         </tr>

         <tr>
           <td rowspan="2" style="text-align: center;">12</td>
           <td>Tanda-tanda vital</td>
           <td>
              <div class="mb-1">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="t_023" id="t_023">
                              </div>
                            </div>
           </td>
           <td>
              <div class="mb-1">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="t_023" id="t_023">
                              </div>
                            </div>
           </td>
           <td>
            <div class="col-md-10">
                              <div class="row text-align">
                                <div class="col-md-3">
                                  <label for="">warna</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="v_18" name="v_18" style="width: 300px" >
                                </div>
                              </div>
                            </div>
           </td>
         </tr>

         <tr>
           <td>
             <div class="row">
              <div class="col-3">
             <div class="col-md-7">
                <label for="">TD</label>
                : <input type="text" id="v_19" name="v_19" style="width: 40%">
             </div>
           </div>
           <div class="col-3">
            <div class="col-7">
                <label for="">RR</label>
                : <input type="text" id="v_20" name="v_20" style="width: 40%">
             </div>
           </div>
          <div class="col-3">
            <div class="col-md-7">
                <label for="">N</label>
                : <input type="text" id="v_21" name="v_21" style="width: 40%">
             </div>
           </div>
           <div class="col-3">
            <div class="col-md-7">
                <label for="">S</label>
                : <input type="text" id="v_22" name="v_22" style="width: 40%">
             </div>
          </div>
          </div>
           </td>
           <td>
             <div class="mb-1">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="t_024" id="t_024">
                              </div>
                            </div>
           </td>
           <td>
             <div class="mb-1">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="t_024" id="t_024">
                              </div>
                            </div>
           </td>
           <td rowspan="5">8</td>
           <td>
             <div class="col-md-10">
                              <div class="row text-align">
                                <div class="col-md-3">
                                  <label for="">Infus</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="v_23" name="v_23" style="width: 300px" >
                                </div>
                              </div>
                            </div>
           </td>
         </tr>

         <tr>
           <td style="text-align: center;">13</td>
           <td>
             <div class="col-md-10">
                <label for="">Puasa, mulai jam</label>
                : <input type="time" id="v_24" name="v_24"> WIB
             </div>
           </td>
           <td>
              <div class="mb-1">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="t_025" id="t_02"5>
                              </div>
                            </div>
           </td>
           <td>
              <div class="mb-1">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="t_025" id="t_02"5>
                              </div>
                            </div>
           </td>
           <td>
             <div class="col-md-10">
                              <div class="row text-align">
                                <div class="col-md-3">
                                  <label for="">Jenis Cairan</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="v_25" name="v_25" style="width: 300px" >
                                </div>
                              </div>
                            </div>
           </td>
         </tr>

         <tr>
           <td style="text-align: center;">14</td>
           <td>Lavement/Hukmah/Klisma dilakukan</td>
           <td>
             <div class="mb-1">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="t_026" id="t_026">
                              </div>
                            </div>
           </td>
           <td>
             <div class="mb-1">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="t_026" id="t_026">
                              </div>
                            </div>
           </td>
           <td>
             <div class="col-md-10">
                              <div class="row text-align">
                                <div class="col-md-3">
                                  <label for="">Lokasi</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="v_26" name="v_26" style="width: 300px" >
                                </div>
                              </div>
                            </div>
           </td>
         </tr>

         <tr>
           <td style="text-align: center;">15</td>
           <td>Persiapan Kulit/Cukur dilakukan</td>
           <td>
             <div class="mb-1">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="t_027" id="t_027">
                              </div>
                            </div>
           </td>
           <td>
             <div class="mb-1">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="t_027" id="t_027">
                              </div>
                            </div>
           </td>
           <td>
             <div class="col-md-10">
                              <div class="row text-align">
                                <div class="col-md-3">
                                  <label for="">Jumlah Tetesan</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="v_27" name="v_27" style="width: 300px" >
                                </div>
                              </div>
                            </div>
           </td>
         </tr>

         <tr>
           <td style="text-align: center;" rowspan="4">16</td>
           <td>
             <div class="col-md-10">
                              <div class="row text-align">
                                <div class="col-md-3">
                                  <label for="">Protese</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="v_28" name="v_28" style="width: 200px" >
                                </div>
                              </div>
                            </div>
           </td>
           <td>
            <div class="mb-1">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="t_028" id="t_028">
                              </div>
                            </div>
           </td>
           <td>
             <div class="mb-1">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="t_028" id="t_028">
                              </div>
                            </div>
           </td>
           <td>
             <div class="col-md-10">
                              <div class="row text-align">
                                <div class="col-md-3">
                                  <label for="">Sisa cairan</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="v_29" name="v_29" style="width: 300px" >
                                </div>
                              </div>
                            </div>
           </td>
         </tr>

         <tr>
           <td>Gigi Palsu Dilepas</td>
            <td>
             <div class="mb-1">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="t_029" id="t_029">
                              </div>
                            </div>
           </td>
           <td>
             <div class="mb-1">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="t_029" id="t_029">
                              </div>
                            </div>
           </td>
           <td rowspan="3">9</td>
           <td>
             <div class="col-md-10">
                              <div class="row text-align">
                                <div class="col-md-3">
                                  <label for="">Katheter Urin</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="v_30" name="v_30" style="width: 300px" >
                                </div>
                              </div>
                            </div>
           </td>
         </tr>

         <tr>
           <td>Kontak Lensa dilepas</td>
           <td>
            <div class="mb-1">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="t_030" id="t_030">
                              </div>
                            </div>
           </td>
           <td>
             <div class="mb-1">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="t_030" id="t_030">
                              </div>
                            </div>
           </td>
           <td>
             <div class="col-md-10">
                              <div class="row text-align">
                                <div class="col-md-3">
                                  <label for="">Jumlah Urin</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="v_31" name="v_31" style="width: 300px" >
                                </div>
                              </div>
                            </div>
           </td>
         </tr>

         <tr>
           <td>Alat bantu dengar dilepas</td>
           <td>
             <div class="mb-1">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="t_031" id="t_031">
                              </div>
                            </div>
           </td>
           <td>
             <div class="mb-1">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="t_031" id="t_031">
                              </div>
                            </div>
           </td>
           <td>
             <div class="col-md-10">
                              <div class="row text-align">
                                <div class="col-md-3">
                                  <label for="">Warna</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="v_32" name="v_32" style="width: 300px" >
                                </div>
                              </div>
                            </div>
           </td>
         </tr>

         <tr>
           <td style="text-align: center;">17</td>
           <td>Pace Maker (Alat Pace Jantung) Terpasang</td>
            <td>
             <div class="mb-1">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="t_032" id="t__032">
                              </div>
                            </div>
           </td>
           <td>
             <div class="mb-1">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="t_032" id="t__032">
                              </div>
                            </div>
           </td>
           <td rowspan="5">10</td>
           <td>
              <div class="col-md-10">
                              <div class="row text-align">
                                <div class="col-md-3">
                                  <label for="">Produk Operasi</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="v_33" name="v_33" style="width: 300px" >
                                </div>
                              </div>
                            </div>
           </td>
         </tr>

         <tr>
           <td style="text-align: center;">18</td>
           <td>Perhiasan Dilepas</td>
           <td>
             <div class="mb-1">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="t_033" id="t_033">
                              </div>
                            </div>
           </td>
           <td>
             <div class="mb-1">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="t_033" id="t_033">
                              </div>
                            </div>
           </td>
           <td>
             <div>
                                   <label class="col-2" for="">Implant</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_034" id="t_034_pins" value="option1">
                                        <label class="form-check-label" for="t_034_pins">Pins</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_034" id="t_034_plate" value="option2">
                                        <label class="form-check-label" for="t_034_plate">Plate</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_034" id="t_034_screw" value="option2">
                                        <label class="form-check-label" for="t_034_screw">Screw</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_034" id="t_034_kirsner" value="option2">
                                        <label class="form-check-label" for="t_034_kirsner">Kirsner</label>
                                    </div>
                                </div>
           </td>
         </tr>

         <tr>
           <td style="text-align: center;">19</td>
           <td>Cat Kuku Dihapus</td>
          <td>
             <div class="mb-1">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="t_035" id="t_035">
                              </div>
                            </div>
           <td>
             <div class="mb-1">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="t_035" id="t_035">
                              </div>
                            </div>
           </td>
           <td>
              <div class="col-md-10">
                              <div class="row text-align">
                                <div class="col-md-3">
                                  <label for="">Spesimen</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="v_34" name="v_34" style="width: 300px" >
                                </div>
                              </div>
                            </div>
           </td>
         </tr>

         <tr>
           <td style="text-align: center;">20</td>
           <td>`IV.Line (infus) terpasang</td>
           <td>
             <div class="mb-1">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="t_036" id="t_036">
                              </div>
                            </div>
           </td>
           <td>
             <div class="mb-1">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="t_036" id="t_036">
                              </div>
                            </div>
           </td>
           <td>
              <div class="col-md-10">
                              <div class="row text-align">
                                <div class="col-md-3">
                                  <label for="">Jaringan Tubuh</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="v_35" name="v_35" style="width: 300px" >
                                </div>
                              </div>
                            </div>
           </td>
         </tr>


         <tr>
           <td style="text-align: center;" rowspan="2">21</td>
           <td rowspan="2">Kateter Urin Terpasang</td>
           <td rowspan="2">
             <div class="mb-1">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="t_037" id="t_037">
                              </div>
                            </div>
           </td>
           <td rowspan="2">
             <div class="mb-1">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="t_037" id="t_037">
                              </div>
                            </div>
           </td>
           <td>
             <div class="col-md-10">
                              <div class="row text-align">
                                <div class="col-md-3">
                                  <label for="">Corpal</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="v_36" name="v_36" style="width: 300px" >
                                </div>
                              </div>
                            </div>
           </td>
         </tr>

         <tr>
           <td style="text-align: center;">11</td>
           <td>
              <div>
                                   <label class="col-7" for="">Alasan Transfer ke ruangan</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_038" id="t_038_aldert" value="0">
                                        <label class="form-check-label" for="t_038_aldert">Skor Aldert</label>
                                        <input type="text" name="v_37" id="v_37">
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_038" id="t_038_stewart" value="1">
                                        <label class="form-check-label" for="t_038_stewart">Skor Stewart</label>
                                        <input type="text" name="v_38" id="v_38">
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_038" id="t_038_bromage" value="2">
                                        <label class="form-check-label" for="t_038_bromage">Skor Bromage</label>
                                        <input type="text" name="v_39" id="v_39">
                                    </div>
                                </div>
           </td>
         </tr>

         <tr style="text-align: center; background-color: #C0C0C0;" >
          <td colspan="3" style="width: 50%;"><b>Catatan / Keterangan Lain :</b></td>
          <td colspan="3"><b>Catatan / Keterangan Lain :</b></td>
        </tr>


        <tr >
          <td colspan="3" style="width: 50%;">
          <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_039" id="t_039_hbsag" value="option1">
                                        <label class="form-check-label" for="t_039_hbsag">HBsAG</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_039" id="t_039_b20" value="option2">
                                        <label class="form-check-label" for="t_039_b20">B20/HIV</label>
                                    </div></td>
          <td colspan="3">
             <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_040" id="t_040_pa" value="option1">
                                        <label class="form-check-label" for="t_040_pa">PA</label>
                                    </div>
                                     <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_040" id="t_040_kultur" value="option1">
                                        <label class="form-check-label" for="t_040_kultur">Kultur</label>
                                    </div>
                                     <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_040" id="t_040_formulir" value="option1">
                                        <label class="form-check-label" for="t_040_formulir">Formulir PA/Kultur</label>
                                    </div>

          </td>
        </tr>


         <tr >
          <td colspan="3" style="width: 50%;">
          <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_041" id="t_041" value="option2">
                                        <label class="form-check-label" for="t_041"></label>
                                        <input type="text" name="v_40" id="v_40"></td>
          <td colspan="3"><div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_042" id="t_042" value="option2">
                                        <label class="form-check-label" for="t_042"></label>
                                        <input type="text" name="v_41" id="v_41"></td>
        </tr>


        <tr style="text-align: center;">
          <td colspan="3" style="width: 50%;">
          <div class="col-9">
                <label for="">Tanggal</label>
                : <input type="date" id="v_42" name="v_42">
                 <label for="">Jam</label>
                : <input type="time" id="v_43" name="v_43"> WIB
             </div>
             
           </td>
          <td colspan="3" style="width: 50%;">
          <div class="col-8">
                <label for="">Tanggal</label>
                : <input type="date" id="v_44" name="v_44">
                 <label for="">Jam</label>
                : <input type="time" id="v_45" name="v_45"> WIB
             </div>
             
           </td>
        </tr>


      </tbody>
    </table>



    <table  class="table table-bordered" style="border: 1px solid black;">
      <tr style="text-align: center;">
          <td>
            <div>
<div class="col-md-8">
                <label for="">Diserahkan oleh perawat </label>
                Ruang :<input type="text" id="v_01" name="v_01" style="width: 100px;">
             </div>
    <div class="mb-1" >
      <div id="sig2"></div>
    <br><label for="ruang">NIP.</label>
    <input type="text" id="v_46" name="v_46">
  </div>
</div>
          </td>
          <td style="text-align: center;">
            <div>
 <div class="mb-3">
    <label for="alasan" type="text">Diterima oleh perawat Ruang </label>
    <p>Terima Ibis</p>
  </div>
    <div class="mb-1" >
      <div id="sig3"></div>
    <br><label for="ruang">NIP.</label>
    <input type="text" id="v_47" name="v_47">
  </div>
</div>

          </td>
          <td style="text-align: center;">
            <div>
 <div class="mb-3">
    <label for="alasan" type="text">Diserahkan oleh perawat</label>
    <p>Recovery Room (RR)</p>
  </div>
    <div class="mb-1" >
      <div id="sig4"></div>
    <br><label for="ruang">NIP.</label>
    <input type="text" id="v_48" name="v_48">
  </div>
</div>

          </td>
          <td>
            <div>
<div class="col-md-8">
                <label for="">Diterima oleh perawat </label>
                Ruang :<input type="text" id="v_01" name="v_01" style="width: 100px;">
             </div>
    <div class="mb-1" >
      <div id="sig5"></div>
    <br><label for="ruang">NIP.</label>
    <input type="text" id="v_49" name="v_49">
  </div>
</div>
          </td>
        </tr>
      
    </table>

    <div class="mb-5">
               <div class="d-grid gap-2">
                 <button class="btn btn-primary" type="button">Submit</button>
              </div>
          </div>


</form>


    </div>



    <script>
        $('#NO_REGISTRATION').on('change', (event) => {
            getpasien(event.target.value).then(pasien => {
                $('#THENAME').val(pasien.THENAME);
                $('#DATE_OF_BIRTH').val(pasien.DATE_OF_BIRTH);
                $('#GENDER').val(pasien.GENDER);

            });
        });


        async function getpasien(NO_REGISTRATION){
            let response = await fetch('/api/databiodata/show/' + NO_REGISTRATION)
            let data = await response.json();


            return data;
        }
    </script>




  </body>
</html>