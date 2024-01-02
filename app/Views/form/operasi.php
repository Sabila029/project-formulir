
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulir Operasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<title>jQuery UI Signature Basics</title>
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet">
<link href="<?php echo base_url('css/jquery.signature.css') ?>" rel="stylesheet">
<style>
.kbw-signature { width: 250px; height: 200px; }
</style>
<!--[if IE]>
<script src="excanvas.js"></script>
<![endif]-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="<?php echo base_url('js/jquery.signature.js') ?>"></script>
<script>
$(function() {
  var sig = $('#sig').signature();
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
        <input type="hidden" id="FORM" name="FORM" value="F6">

  
       <h3 style="text-align: right;">RM 08 Lanjutan</h3>
       <table class="table table-bordered" style="border: 2px solid black;">
                <tbody >
                    <tr >
                      <td style="width: 10%" >
                        <img src="<?= base_url('assets/logo.jpg') ?>" alt="logo" width="150px" height="200px">
                      </td>
                        <td style="width: 40%; text-align: center; vertical-align: middle;">
                         <h6 >RSUD Dr. YUNUS BENGKULU</h6>
                         <p>Jln. Bhayangkara Bengkulu 38229
                         Telp. (0736) 52004 – 53006</p>


                        </td>
                        <td style="width: 50%;" rowspan="2">
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
                                  <label for="">Jenis Kelamin</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="GENDER" name="GENDER" style="width: 200px" readonly>
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

                            <div class="text-center">
                              <label for="waktu">(STIKER PASIEN)</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                      <td colspan="2">
                          <div class="text-center">
                            <label for="waktu"><b>PENUNDAAN/PEMBATALAN TINDAKAN OPERASI</b></label>
                          </div>
                     </td>
                    </tr>
                    <tr style="border: 2px solid black;">
                      <td colspan="3">
                        <div class="row mb-3">
                        <div class="col-6">
                           <div class="row text-align">
                              <div class="col-md-6">
                                <label for=""><b>Hari/Tanggal/Waktu</b></label>
                              </div>
                              <div class="col-md-2">
                                <input type="date" class="form-control" id="v_01" name="v_01" style="width: 500px" >
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-6">
                           <div class="row text-align">
                              <div class="col-md-6">
                                <label for=""><b>Asal Ruang Rawat</b></label>
                              </div>
                              <div class="col-md-2">
                                <input type="text" class="form-control" id="v_02" name="v_02" style="width: 500px" >
                              </div>
                            </div>
                          </div>

                      </td>
                    </tr>

                     <tr style="border: 2px solid black;">
                      <td colspan="3">
                        <div class="row mb-3">
                        <div class="col-6">
                           <div class="row text-align">
                              <div class="col-md-6">
                                <label for=""><b>Diagnosa Pre Operasi</b></label>
                              </div>
                              <div class="col-md-2">
                                <input type="text" class="form-control" id="v_03" name="v_03" style="width: 500px" >
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="row mb-3">
                        <div class="col-6">
                           <div class="row text-align">
                              <div class="col-md-6">
                                <label for=""><b>Rencana Tindakan Operasi</b></label>
                              </div>
                              <div class="col-md-2">
                                <input type="text" class="form-control" id="v_04" name="v_04" style="width: 500px" >
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="row mb-3">
                        <div class="col-6">
                           <div class="row text-align">
                              <div class="col-md-6">
                                <label for=""><b>Rencana Tindakan Anestesi</b></label>
                              </div>
                              <div class="col-md-2">
                                <input type="text" class="form-control" id="v_05" name="v_05" style="width: 500px" >
                              </div>
                            </div>
                          </div>
                        </div>

                         <div class="row mb-3">
                         <div class="col-6">
                           <div class="row text-align">
                              <div class="col-md-6">
                                <label for=""><b>Dokter Bedah</b></label>
                              </div>
                              <div class="col-md-2">
                                <input type="text" class="form-control" id="v_06" name="v_06" style="width: 500px" >
                              </div>
                            </div>
                          </div>
                        </div>

                         <div class="row mb-3">
                         <div class="col-6">
                           <div class="row text-align">
                              <div class="col-md-6">
                                <label for=""><b>Dokter Anestesi</b></label>
                              </div>
                              <div class="col-md-2">
                                <input type="text" class="form-control" id="v_07" name="v_07" style="width: 500px" >
                              </div>
                            </div>
                          </div>
                        </div>

                      </td>
                    </tr>

                    <tr style="border: 2px solid black;">
                      <td colspan="3">
                        <div class="mb-3">
                          <label for="alasan" type="text" class="text-center"><b>Penyebab/Alasan Penundaan</b></label>
                        </div>
                         <div class="mb-1">
                              <label ><b>1. Pasien</b></label>
                            </div>
                            <div class="row">
                              <div class="col-6">
                             <div class="mb-1 form-check">
                              <input  type="checkbox" class="form-check-input" name="t_01" id="t_01_menstruasi">
                              <label class="form-check-label" for="t_01_menstruasi" >Menstruasi</label>
                            </div>
                            <div class="mb-1 form-check">
                              <input type="checkbox" class="form-check-input" name="t_02" id="t_02_demam">
                              <label class="form-check-label" for="t_02_demam">Demam/Panas</label>
                            </div>
                            <div class="mb-1 form-check">
                              <input type="checkbox" class="form-check-input" name="t_03" id="t_03_batuk">
                              <label class="form-check-label" for="t_03_batuk">Batuk/Pilek</label>
                            </div>
                            <div class="mb-1 form-check">
                              <input type="checkbox" class="form-check-input" name="t_04" id="t_04_<10">
                              <label class="form-check-label" for="t_04_<10">HB<10 Gram %</label>
                            </div>
                            <div class="mb-1 form-check">
                              <input type="checkbox" class="form-check-input" name="t_05" id="t_05_darahtinggi">
                              <label class="form-check-label" for="t_05_darahtinggi">Tekanan Darah Tinggi</label>
                            </div>
                            <div class="mb-1 form-check">
                              <input type="checkbox" class="form-check-input" name="t_06" id="t_06_kelainan">
                              <label class="form-check-label" for="t_06_kelainan">Kelainan Kardiologi</label>
                              </div>
                            </div>
                          

                            <div class="col-6">
                            <div class="mb-1 form-check">
                              <input type="checkbox" class="form-check-input" name="t_07" id="t_07_menolak">
                              <label class="form-check-label" for="t_07_menolak">Menolak di Operasi</label>
                            </div>
                            <div class="mb-1 form-check">
                              <input type="checkbox" class="form-check-input" name="t_08" id="t_08_belummasuk">
                              <label class="form-check-label" for="t_08_belummasuk">Belum Masuk Ruang Perawatan</label>
                            </div>
                            <div class="mb-1 form-check">
                              <input type="checkbox" class="form-check-input" name="t_09" id="t_09_tidakterdaftar">
                              <label class="form-check-label" for="t_09_tidakterdaftar">Tidak Terdaftar Dalam Acara</label>
                            </div>
                            <div class="mb-1 form-check">
                              <input type="checkbox" class="form-check-input" name="t_010" id="t_010_salah">
                              <label class="form-check-label" for="t_010_salah">Salah Mengajukan Rencana</label>
                            </div>
                            <div class="mb-1 form-check">
                              <input type="checkbox" class="form-check-input" name="t_011" id="t_011_tidakdatang">
                              <label class="form-check-label" for="t_011_tidakdatang">Tidak Datang</label>
                            </div>
                            <div class="mb-3 form-check">
                              <input type="checkbox" class="form-check-input" name="t_012" id="t_012_lainlain">
                              <label class="form-check-label" for="t_012_lainlain" >Lain-lain :</label>
                              <input type="text" name="v_08" id="v_08">
                          </div>
                        </div>
                        </div>
                          <div class="mb-1">
                                <label><b>2. Dokter Bedah/Operator</b></label>
                              </div>
                              <div class="row">
                                <div class="col-6">
                               <div class="mb-1 form-check">
                                <input type="checkbox" class="form-check-input" name="t_013" id="t_013_terlambat">
                                <label class="form-check-label" for="t_013_terlambat">Terlambat Datang</label>
                              </div>
                               <div class="mb-1 form-check">
                                <input type="checkbox" class="form-check-input" name="t_014" id="t_014_sakit">
                                <label class="form-check-label" for="t_014_sakit">Sakit</label>
                              </div>
                              </div>
                              <div class="col-6">
                               <div class="mb-1 form-check">
                                <input type="checkbox" class="form-check-input" name="t_015" id="t_015_dinasluar">
                                <label class="form-check-label" for="t_015_dinasluar">Dinas Luar</label>
                              </div>
                               <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" name="t_016" id="t_016_lainlain">
                                <label class="form-check-label" for="t_016_lainlain">Lain-Lain : </label>
                                <input type="text" name="v_09" id="v_09">
                              </div>
                                </div>
                              </div>


                              <div class="mb-1">
                                <label><b>3. Ruang Rawat</b></label>
                              </div>
                              <div class="mb-1 form-check">
                                <input type="checkbox" class="form-check-input" name="t_017" id="t_017_surat">
                                <label class="form-check-label" for="t_017_surat">Surat Izin Tindakan Operasi/Anestesi tidak ada</label>
                              </div>
                              <div class="mb-1 form-check">
                                <input type="checkbox" class="form-check-input" name="t_018" id="t_018_persiapan">
                                <label class="form-check-label" for="t_018_persiapan">Persiapan Operasi belum Lengkap, Belum/Tidak Ada :</label>
                              </div>
                              <div class="row">
                                <div class="col-6">
                              <div class="mb-1 form-check">
                                <input type="checkbox" class="form-check-input" name="t_019" id="t_019_hasil">
                                <label class="form-check-label" for="t_019_hasil">Hasil Pemeriksaan Laboraturium</label>
                              </div>
                              <div class="mb-1 form-check">
                                <input type="checkbox" class="form-check-input" name="t_020" id="t_020_hasil">
                                <label class="form-check-label" for="t_020_hasil">Hasil Pemeriksaan Radiologi</label>
                              </div>
                              <div class="mb-1 form-check">
                                <input type="checkbox" class="form-check-input" name="t_021" id="t_021_hasil">
                                <label class="form-check-label" for="t_021_hasil">Hasil Pemeriksaan/Konsultasi Penyakit Dalam</label>
                              </div>
                              <div class="mb-1 form-check">
                                <input type="checkbox" class="form-check-input" name="t_022" id="t_022_persiapan">
                                <label class="form-check-label" for="t_022_persiapan">Persiapan Darah</label>
                              </div>
                            </div>
                            <div class="col-6">
                              <div class="mb-1 form-check">
                                <input type="checkbox" class="form-check-input" name="t_023" id="t_023_puasa">
                                <label class="form-check-label" for="t_023_puasa">Puasa</label>
                              </div>
                              <div class="mb-1 form-check">
                                <input type="checkbox" class="form-check-input" name="t_024" id="t_024_cukur">
                                <label class="form-check-label" for="t_024_cukur">Cukur</label>
                              </div>
                              <div class="mb-1 form-check">
                                <input type="checkbox" class="form-check-input" name="t_025" id="t_025_huknah">
                                <label class="form-check-label" for="t_025_huknah">Huknah/Lavement</label>
                              </div>
                              <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" name="t_026" id="t_026_lainlain">
                                <label class="form-check-label" for="t_026_lainlain" >Lain-lain : </label>
                                <input type="text" name="v_10" id="v_10">
                              </div>
                            </div>
                            </div>


                               <div class="mb-1">
                                <label><b>4. Fasilitas/Peralatan Kamar Operasi</b></label>
                              </div>
                               <div class="row">
                                 <div class="col-6">
                               <div class="mb-1 form-check">
                                <input type="checkbox" class="form-check-input" name="t_027" id="t_027_linen">
                                <label class="form-check-label" for="t_027_linen">Linen/Pakaian Operasi Habis</label>
                              </div>
                               <div class="mb-1 form-check">
                                <input type="checkbox" class="form-check-input" name="t_028" id="t_028_bhp">
                                <label class="form-check-label" for="t_028_bhp">BHP/BMHP Habis/Kosong</label>
                              </div>
                               <div class="mb-1 form-check">
                                <input type="checkbox" class="form-check-input" name="t_029" id="t_029_oksigen">
                                <label class="form-check-label" for="t_029_oksigen">Oksigen/Gas Media Lainnya Habis/Kosong</label>
                              </div>
                            </div>
                            <div class="col-6">
                               <div class="mb-1 form-check">
                                <input type="checkbox" class="form-check-input" name="t_030" id="t_030_peralatan">
                                <label class="form-check-label" for="t_030_peralatan">Peralatan media RUsak/Perbaikan</label>
                              </div>
                               <div class="mb-1 form-check">
                                <input type="checkbox" class="form-check-input" name="t_031" id="t_031_ac">
                                <label class="form-check-label" for="t_031_ac">AC/Listrik Mati</label>
                              </div>
                               <div class="mb-1 form-check">
                                <input type="checkbox" class="form-check-input" name="t_032" id="t_032_airmati">
                                <label class="form-check-label" for="t_032_airmati">Air Mati</label>
                              </div>
                               <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" name="t_033" id="t_033_lainlain">
                                <label class="form-check-label" for="t_033_lainlain">Lain-lain : </label>
                                <input type="text" name="v_11" id="v_11">
                              </div>
                            </div>
                          </div>
                               <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for=""><b>5. Penyebab/Alasan Lainnya : </b></label>
                                </div>
                                <div>
                                      <textarea class="form-control" id="v_12" name="v_12" rows="5" cols="7"></textarea>
                                  </div>
                            </div>
                      </td>
                    </tr>

                    <tr>
                      <td colspan="3">
                         <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for=""><b>Rencana Tindakan Operasi</b></label>
                                </div>
                                <div>
                                    <textarea class="form-control" id="v_13" name="v_13" rows="5" cols="7"></textarea>
                                    </div>
                            </div>
                      </td>
                    </tr>
                </tbody>
</table>

<div style="text-align: right;">
  <div class="mb-1">
    <label for="diagnosa">Bengkulu, </label>
    <input type="date" id="v_14" name="v_14">
  </div>
 <div class="mb-3">
    <label for="alasan" type="text">Penanggung Jawab Kamar Operasi</label>
  </div>
    <div class="mb-1" >
      <div id="sig"></div>
    <br><label for="ruang">NIP.</label>
    <input type="text" id="v_15" name="v_15" autocomplete="off">
  </div>
</div>


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