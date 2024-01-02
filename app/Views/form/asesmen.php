
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>BBL</title>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="js/script.js"></script>



    <script type="text/javascript">
    var i = 45;
    var no = 1;

    function addRow(tableID) {

      i1 = no + 1;
      i2 = i + 1;
      i3 = i + 2;
      i4 = i + 3;
      i5 = i + 4;
      i6 = i + 5;
      i7 = i + 6;
      i8 = i + 7;

      $("#" + tableID).append($("<tr>")
        .append($("<td>").html(i1))
        .append($("<td>").html('<div class="form-group"><input type="date" class="form-control" name="v_' + i + '" placeholder="Diagnosa Medis"></div>'))
        .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" name="v_' + i2 + '" ></div>'))
        .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" name="v_' + i3 + '" ></div>'))
        .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" name="v_' + i4 + '" ></div>'))
        .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" name="v_' + i5 + '" ></div>'))
        .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" name="v_' + i6 + '" ></div>'))
        .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" name="v_' + i7 + '" ></div>'))
        .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" name="v_' + i8 + '" ></div>'))
      )

      i += 9;
      no += 1;


    }
  </script>


  </head>

  <body>
    <div class="container mt-3" >


      <a href="<?= site_url('dashboard/formulir') ?>" class="btn btn-danger"> ← Back</a>


      <form action="<?php echo site_url('dashboard/simpan') ?>" method="post">
        <input type="hidden" id="FORM" name="FORM" value="F8">


      <br><br><table class="table table-bordered mb-0" style="border: 1px solid black;">
        <tbody>

          <tr>
            <td>
               <div style="text-align: center;"><font size="5"><br><b>PENGKAJIAN AWAL</b>
                     <br><b>KEPERAWATAN/KEBIDANAN BAYI</b>
                     <br><b>BARU LAHIR</b></font>
               </div>
            </td>
            <td>
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
            </td>
          </tr>
          </tbody>
      </table>


          <table class="table table-bordered " style="border: 1px solid black;">
            <tbody>
          <tr>
            <td rowspan="2">Catatan: Formulir digunakan untuk pasien neonatus dan harus diisi lengkap dalam waktu 24 jam pertama pasien masuk ruang awat inap.</td>
          </tr>

        </tbody>
      </table>


      <form>
          

          <div class="mb-3">
          <div class="row">
            <div class="col-4">
          <div class="col-md-12">
                 <label for="">Tanggal masuk ruangan</label>
                 : <input type="date" id="v_01" name="v_01" readonly="">
                </div>
           </div>
           <div class="col-4">
          <div class="col-md-10">
                <label for="">Pukul</label>
                : <input type="time" id="v_01" name="v_01" readonly="">
             </div>
           </div>
           <div class="col-4">
          <div class="col-md-12">
                <label for="">Ruang Rawat</label>
                : <input type="text" id="v_01" name="v_01" readonly="">
             </div>
           </div>
         </div>
       </div>



                                  <div class="mb-5">
                                   <label class="col-2" for="">Sumber Data</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_01" id="t_01_pasien" value="option1">
                                        <label class="form-check-label" for="t_01_pasien">Pasien</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_01" id="t_01_keluarga" value="option2">
                                        <label class="form-check-label" for="t_01_keluarga">Keluarga</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_01" id="t_01_lainlain" value="option2">
                                        <label class="form-check-label" for="t_01_lainlain">Lain-lain</label>
                                        <input type="text" id="v_01" name="v_01" >
                                    </div>
                                </div>

          
          <div class="mb-1">
                              <label><b>IDENTITAS PENANGGUNG JAWAB (KELUARGA)</b></label>
                            </div>
          <div class="row">
            <div class="col-6">
          <div class="row mb-3">
                                <div class="col-md-4">
                                  <label for=""><b>Nama Ibu</b></label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="v_14" name="v_14" style="width: 250px" autocomplete="off">
                                </div>
                            </div>
          <div class="row mb-3">
                                <div class="col-md-4">
                                  <label for="">Umur saat ini</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="v_14" name="v_14" style="width: 250px" autocomplete="off">
                                </div>
                            </div>
          <div class="row mb-3">
                                <div class="col-md-4">
                                  <label for="">Pekerjaan</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="v_14" name="v_14" style="width: 250px" autocomplete="off">
                                </div>
                            </div>
          <div class="row mb-3">
                                <div class="col-md-4">
                                  <label for="">Pendidikan</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="v_14" name="v_14" style="width: 250px" autocomplete="off">
                                </div>
                            </div>
          <div class="row mb-3">
                                <div class="col-md-4">
                                  <label for="">Alamat</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="v_14" name="v_14" style="width: 250px" autocomplete="off">
                                </div>
                            </div>
          <div class="row mb-3">
                                <div class="col-md-4">
                                  <label for="">No. Telepon</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="v_14" name="v_14" style="width: 250px" autocomplete="off">
                                </div>
                            </div>
          <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="">Penghasilan/bulan</label>
                                </div>
                                <div class="col-md-1">
                                <div class="input-group flex-nowrap" style="width: 250px">
                                    <span class="input-group-text" id="addon-wrapping">Rp</span>
                                    <input type="text" class="form-control" autocomplete="off">
                                  </div>
                                </div>
                                </div>
          <div class="row mb-5">
                                <div class="col-md-4">
                                  <label for="">Agama</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="v_14" name="v_14" style="width: 250px" autocomplete="off">
                                </div>
                            </div>
          </div>
          <div class="col-6">
          <div class="row mb-3">
                                <div class="col-md-4">
                                  <label for="">Nama Ayah</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="v_14" name="v_14" style="width: 250px" autocomplete="off">
                                </div>
                            </div>
          <div class="row mb-3">
                                <div class="col-md-4">
                                  <label for="">Umur saat ini</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="v_14" name="v_14" style="width: 250px" autocomplete="off">
                                </div>
                            </div>
          <div class="row mb-3">
                                <div class="col-md-4">
                                  <label for="">Pekerjaan</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="v_14" name="v_14" style="width: 250px" autocomplete="off">
                                </div>
                            </div>
          <div class="row mb-3">
                                <div class="col-md-4">
                                  <label for="">Pendidikan</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="v_14" name="v_14" style="width: 250px" autocomplete="off">
                                </div>
                            </div>
          <div class="row mb-3">
                                <div class="col-md-4">
                                  <label for="">Alamat</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="v_14" name="v_14" style="width: 250px" autocomplete="off">
                                </div>
                            </div>
          <div class="row mb-3">
                               <div class="col-md-4">
                                  <label for="">No. Telepon</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="v_14" name="v_14" style="width: 250px" autocomplete="off">
                                </div>
                            </div>
          <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="">Penghasilan/bulan</label>
                                </div>
                                <div class="col-md-1">
                                <div class="input-group flex-nowrap" style="width: 250px">
                                    <span class="input-group-text" id="addon-wrapping">Rp</span>
                                    <input type="text" class="form-control" autocomplete="off">
                                  </div>
                                </div>

                            </div>
          <div class="row mb-5">
                                <div class="col-md-4">
                                  <label for="">Agama</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="v_14" name="v_14" style="width: 250px" autocomplete="off">
                                </div>
                            </div>
          </div>
          </div>


          <div class="mb-5">
          <div class="row mb-3">
                                <div class="col-md-2">
                                    <label for=""><b>Keluhan Utama</b></label>
                                </div>
                                <div class="col-md-10">
                                    <textarea class="form-control" id="" name="" rows="5" cols="7" ></textarea>
                                </div>
                            </div>
                          </div>


          <div><b>RIWAYAT KEHAMILAN/PERSALINAN/NIFAS IBU YANG LALU</b></div>

    <table class="w-full table table-striped table-bordered table-hover text-center mb-0" style="border: 1px solid black;">
      <thead>

        <tr style="text-align: center;">
          <td rowspan="2"><b>No</b></td>
          <td rowspan="2"><b>Tanggal Tahun Kelahiran</b></td>
          <td rowspan="2"><b>Sex</b></td>
          <td rowspan="2"><b>Berat Badan Lahir</b></td>
          <td><b>Keadaan Bayi</b></td>
          <td><b>Komplikasi Kehamilan/Kelahiran</b></td>
          <td><b>Penyakit Waktu Hamil</b></td>
          <td><b>Jenis Persalinan</b></td>
          <td rowspan="2"><b>Lain-lain</b></td>
        </tr>

        <tr>
          <td>
            <div>
              <br><b>Anak Hidup</b>
              <br><b>+ 1 hari</b>
              <br><b>+ 28 hari</b>
              <br><b>Abortus</b>
              <br><b>Lain-lain</b>
            </div>
          </td>
          <td>
            <div>
              <br><b>Toxaemia</b>
              <br><b>Eklamsi</b>
              <br><b>CPD</b>
              <br><b>Pendaharan</b>
              <br><b>Lain-lain</b>
            </div>
          </td>
          <td>
            <div>
              <br><b>Diabetes</b>
              <br><b>Jantung</b>
              <br><b>Hipertensi</b>
              <br><b>Lain-lain</b>
            </div>
          </td>
          <td>
            <div>
              <br><b>Spontan</b>
              <br><b>Sungsang</b>
              <br><b>Extroceps</b>
              <br><b>Ex. Vacuum</b>
              <br><b>Lain-lain</b>
            </div>
          </td>
        </tr>
      </thead>
      <tbody id="tbody1">
        <tr style="text-align: center;">
          <td>1</td>
          <td>
            <div class="form-group">
              <input type="date" class="form-control" required="required" name="v_01" id="v_01">
            </div>
          </td>
          <td>
            <div class="form-group">
              <input type="text" class="form-control" name="v_02" id="v_02">
            </div>
          </td>
          <td>
            <div class="form-group">
              <input type="text" class="form-control" name="v_03" id="v_03">
            </div>
          </td>
          <td>
            <div class="form-group">
              <input type="text" class="form-control" name="v_04" id="v_04">
            </div>
          </td>
          <td>
            <div class="form-group">
              <input type="text" class="form-control" name="v_05" id="v_05">
            </div>
          </td>
          <td>
            <div class="form-group">
              <input type="text" class="form-control" name="v_06" id="v_06">
            </div>
          </td>
          <td>
            <div class="form-group">
              <input type="text" class="form-control" name="v_07" id="v_07">
            </div>
          </td>
          <td>
            <div class="form-group">
              <input type="text" class="form-control" name="v_08" id="v_08">
            </div>
          </td>
        </tr>
      </tbody>
      <tfoot>
        <td colspan="9" align="center">
          <button type="button" class="btn btn-primary" onclick="addRow('tbody1')">Tambah Baris</button>
        </td>
      </tfoot>
    </table>


          <br><div class="mb-3"><b>RIWAYAT KEHAMILAN SEKARANG IBU</b></div>
          <div class="mb-3">
          <div class="row">
                      <div class="col-4">
                      <div class="input-group flex-nowrap"  style="width: 100px">
                        <span class="input-group-text" id="addon-wrapping">G</span>
                        <input type="text" class="form-control">
                        </div>
                      </div>

                      <div class="col-4">
                      <div class="input-group flex-nowrap"  style="width: 100px">
                        <span class="input-group-text" id="addon-wrapping">P</span>
                        <input type="text" class="form-control">
                        </div>
                      </div>

                      <div class="col-4">
                      <div class="input-group flex-nowrap"  style="width: 100px">
                        <span class="input-group-text" id="addon-wrapping">A</span>
                        <input type="text" class="form-control">
                        </div>
                      </div>
            </div>
          </div>



          <div class="mb-3">
                                   <label class="col-3" for="">Pemeriksaan Antenatal</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_02" id="t_02_dokter" value="0">
                                        <label class="form-check-label" for="t_02_dokter">Dokter</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_02" id="t_02_bidan" value="1">
                                        <label class="form-check-label" for="t_02_bidan">Bidan</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_02" id="t_02_tidakada" value="2">
                                        <label class="form-check-label" for="t_02_tidakada">Tidak Ada</label>
                                    </div>
                                </div>

          <div class="mb-3">
                                   <label class="col-3" for="">Pemeriksaan Antenatal</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_03" id="t_03_teratur" value="0">
                                        <label class="form-check-label" for="t_03_teratur">Pemeriksaan Teratur</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_03" id="t_03_tidak" value="1">
                                        <label class="form-check-label" for="t_03_tidak">Pemeriksaan Tidak Teratur</label>
                                    </div>
                                </div>



          <div class="mb-3">
          <div class="row">
          <div class="col-3">
          <div class="mb-3">
                          <label for="alasan" type="text" class="text-center" id="v_11" name="v_11">Penyakit selama hamil</label>
                        </div>
                      </div>
                <div class="col-3">
                <div class="mb-1 form-check">
                              <input type="checkbox" class="form-check-input" name="t_04" id="t_04_anemia">
                              <label class="form-check-label" for="t_04_anemia">Anemia</label>
                            </div>
                            <div class="mb-1 form-check">
                              <input type="checkbox" class="form-check-input" name="t_05" id="t_05_hipertensi">
                              <label class="form-check-label" for="t_05_hipertensi">Hipertensi</label>
                            </div>
                          </div>
                          <div class="col-3">
                            <div class="mb-1 form-check">
                              <input type="checkbox" class="form-check-input"  name="t_06" id="t_06_jantung">
                              <label class="form-check-label" for="lakt_06_jantungi">Penyakit Jantung</label>
                            </div>
                            <div class="mb-1 form-check">
                              <input type="checkbox" class="form-check-input" name="t_07" id="t_07_tuberkulosis">
                              <label class="form-check-label" for="t_07_tuberkulosis">Tuberkulosis</label>
                            </div>
                          </div>
                          <div class="col-3">
                            <div class="mb-1 form-check">
                              <input type="checkbox" class="form-check-input" name="t_08" id="t_08_diabetes">
                              <label class="form-check-label" for="t_08_diabetes">Diabetes</label>
                            </div>
                            <div class="mb-3 form-check">
                              <input type="checkbox" class="form-check-input" name="t_09" id="t_09_lainlain">
                              <label class="form-check-label" for="t_09_lainlain">Lain-lain :</label>
                              <input type="text" name="" id="" style="width: 100px">
                          </div>
                        </div>
                        </div>
                      </div>


                  <div class="mb-3">
                    <div class="row">
                      <div class="col-3">
                          <label>Komplikasi Kehamilan</label>
                      </div>
                       <div class="col-4">
                        <div class="mb-1 form-check">
                              <input type="checkbox" class="form-check-input" name="t_010" id="t_010_pendaharan">
                              <label class="form-check-label" for="t_010_pendaharan">Pendarahan</label>
                            </div>
                            <div class="mb-1 form-check">
                              <input type="checkbox" class="form-check-input" name="t_011" id="t_011_infeksi">
                              <label class="form-check-label" for="t_011_infeksi">Infeksi</label>
                            </div>
                    </div>
                    <div class="col-4">
                      <div class="mb-1 form-check">
                              <input  type="checkbox" class="form-check-input" name="t_012" id="t_012_preeklamsi">
                              <label class="form-check-label" for="t_012_preeklamsi">Preeklamsi/eklamsi</label>
                            </div>
                            <div class="mb-3 form-check">
                              <input type="checkbox" class="form-check-input" name="t_013" id="t_013_lainlain">
                              <label class="form-check-label" for="t_013_lainlain">Lain-lain :</label>
                              <input type="text" name="" id="" style="width: 100px">
                          </div>
                    </div>
                  </div>
                </div>



                <div class="mb-5">
                    <div class="row">
                      <div class="col-3">
                        <label>Kebiasaan Ibu waktu hamil</label>
                      </div>
                       <div class="col-4">
                        <div class="mb-1 form-check">
                              <input type="checkbox" class="form-check-input" name="t_014" id="t_014_merokok">
                              <label class="form-check-label" for="t_014_merokok">Merokok</label>
                            </div>
                            <div class="mb-3 form-check">
                              <input type="checkbox" class="form-check-input" name="t_015" id="t_015_lain">
                              <label class="form-check-label" for="t_015_lain">Lain-lain :</label>
                              <input type="text" name="" id="" style="width: 100px">
                          </div>
                    </div>
                    <div class="col-4">
                      <div class="mb-1 form-check">
                              <input type="checkbox" class="form-check-input" name="t_016" id="t_016_obat">
                              <label class="form-check-label" for="t_016_obat">Konsumsi Obat</label>
                              <input type="text" name="" id="" style="width: 100px">
                            </div>
                    </div>

                  </div>
                </div>


                <div class="mb-3"><b>RIWAYAT PERSALINAN SEKARANG</b></div>
                <div class="mb-3">
                  <div class="col-6">
                <div class="col-md-12">
                 <label for="">Tanggal persalinan</label>
                 : <input type="date" id="v_01" name="v_01" >      Jam
                  : <input type="time" id="v_01" name="v_01" >
                    </div>
                  </div>
                </div>



                <div class="mb-3">
                    <div class="row">
                      <div class="col-2">
                          <label>Jenis Persalinan</label>
                      </div>
                       <div class="col-4">
                      <div class="form-check form-check-inline">
                             <input class="form-check-input" type="radio" name="t_017" id="t_017" value="0">
                             <div class="col-md-1">
                                <div class="input-group flex-nowrap" style="width: 200px">
                                    <span class="input-group-text" id="addon-wrapping">Spontan</span>
                                    <input type="text" class="form-control" autocomplete="off">
                                  </div>
                                </div>
                                    </div>
                            <div class="form-check form-check-inline">
                             <input class="form-check-input" type="radio" name="t_017" id="t_017" value="1">
                             <div class="col-md-1">
                                <div class="input-group flex-nowrap" style="width: 200px">
                                    <span class="input-group-text" id="addon-wrapping">VE, indikasi</span>
                                    <input type="text" class="form-control" autocomplete="off">
                                  </div>
                                </div>
                                    </div>
                    </div>
                    <div class="col-4">
                      <div class="form-check form-check-inline">
                             <input class="form-check-input" type="radio" name="t_017" id="t_017" value="2">
                             <div class="col-md-1">
                                <div class="input-group flex-nowrap" style="width: 200px">
                                    <span class="input-group-text" id="addon-wrapping">SC, indikasi</span>
                                    <input type="text" class="form-control" autocomplete="off">
                                  </div>
                                </div>
                                    </div>
                            <div class="form-check form-check-inline">
                             <input class="form-check-input" type="radio" name="t_017" id="t_017" value="3">
                             <div class="col-md-1">
                                <div class="input-group flex-nowrap" style="width: 200px">
                                    <span class="input-group-text" id="addon-wrapping">FE, indikasi</span>
                                    <input type="text" class="form-control" autocomplete="off">
                                  </div>
                                </div>
                                    </div>
                    </div>
                  </div>
                </div>



                 <div class="mb-3">
                                <div>
                                   <label class="col-2" for="">Letak</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_018" id="t_018_preskep" value="0">
                                        <label class="form-check-label" for="t_018_preskep">Preskep</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_018" id="t_018_presbo" value="1">
                                        <label class="form-check-label" for="t_018_presbo">Presbo</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_018" id="t_018_preski" value="2">
                                        <label class="form-check-label" for="t_018_preski">Preski</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_018" id="t_018_letli" value="3">
                                        <label class="form-check-label" for="t_018_letli">Letli</label>
                                    </div>
                                </div>
                              </div>



                <div class="mb-3">
                              <div>
                                   <label class="col-2" for="">Persalinan di</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_019" id="t_019_rsmy" value="0">
                                        <label class="form-check-label" for="t_019_rsmy">RSMY</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_019" id="t_019_bersalin" value="1">
                                        <label class="form-check-label" for="t_019_bersalin">Rumah Bersalin</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_019" id="t_019_lain" value="2">
                                        <label class="form-check-label" for="t_019_lain">Lain-lain</label>
                                        <input type="text" name="" id="" style="width: 100px">
                                    </div>
                                </div>
                              </div>




                <div class="mb-3">
                              <div>
                                   <label class="col-2" for="">Pertolongan persalinan</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_020" id="t_020_dokter" value="0">
                                        <label class="form-check-label" for="t_020_dokter">Dokter</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_020" id="t_020_bidan" value="1">
                                        <label class="form-check-label" for="t_020_bidan">Bidan</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_020" id="t_020_lain" value="2">
                                        <label class="form-check-label" for="t_020_lain">Lain-lain</label>
                                        <input type="text" name="" id="" style="width: 100px">
                                    </div>
                                </div>
                              </div>



             
                <div class="mb-3">
                <div class="row">
                  <div class="col-6">
                <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="">Lamanya Persalinan</label>
                                </div>
                                <div class="col-md-6">
                                : Kala I : <input type="time" id="v_01" name="v_01" > Jam
                                </div>
                            </div>
                  </div>
                  <div class="col-6">
                <div class="col-md-12">
                 <label for="">Kala II</label>
                  : <input type="time" id="v_01" name="v_01" > menit
                    </div>
                  </div>
                  </div>
                </div>



                <div class="mb-3">
                  <div class="row mb-3">
                                <div class="col-md-2">
                                    <label for="">Pecah ketuban</label>
                                </div>
                                <div class="col-md-6">
                                   : <input type="time" id="v_01" name="v_01"> jam sebelum persalinan
                                </div>
                            </div>
                          </div>




                <div class="mb-3">
                <div class="row mb-3">
                                <div class="col-md-2">
                                  <label for="">Kondisi air ketuban</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="v_14" name="v_14" style="width: 500px" autocomplete="off">
                                </div>
                                 </div>
                          </div>




                <div class="mb-3">
                                <div>
                                   <label class="col-2" for="">Medikasi Waktu Persalinan</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_021" id="t_021_anal" value="0">
                                        <label class="form-check-label" for="t_021_anal">Analgesik</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_021" id="t_021_anti" value="1">
                                        <label class="form-check-label" for="t_021_anti">Antibiotik</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_021" id="t_021_anas" value="2">
                                        <label class="form-check-label" for="t_021_anas">Anastesia</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_021" id="t_021_lain" value="option2">
                                        <label class="form-check-label" for="t_021_lain">Lain-lain</label>
                                        : <input type="text" id="v_01" name="v_01" style="width: 100px;">
                                    </div>
                                    </div>
                                </div>




                 <div class="mb-3">
                                <div>
                                   <label class="col-2" for="">Tali Pusat</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_segar" value="option1">
                                        <label class="form-check-label" for="t_022_segar">Segar/Layu</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_besar" value="option2">
                                        <label class="form-check-label" for="t_022_besar">Besar/Kecil</label>
                                    </div>
                                    </div>
                                </div>




                 <div class="mb-5">
                   <div class="row mb-3">
                                <div class="col-md-2">
                                  <label for="">Komplikasi Persalinan</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="v_14" name="v_14" style="width: 500px" autocomplete="off">
                                </div>
                            </div>
                          </div>





                  <div class="mb-1"><b>KEADAAN BAYI SAAT LAHIR</b></div>
                  <div class="mb-3"><b>Pemeriksaan Umum</b></div>
                  <div class="mb-3">
                   <div class="col-6">
                           <div class="row text-align">
                              <div class="col-md-4">
                                <label for="">Keadaan Umum</label>
                              </div>
                              <div class="col-md-2">
                                <input type="text" class="form-control" id="v_05" name="v_05" style="width: 300px" >
                              </div>
                            </div>
                          </div>
                          </div>
                   <div class="mb-3">
                   <div class="row mb-3">
                                <div class="col-md-2">
                                    <label for="">Nadi</label>
                                </div>
                                <div class="input-group mb-3" style="width: 200px">
                                <input type="text" class="form-control" >
                                <span class="input-group-text" id="basic-addon2">x/menit</span>
                              </div>
                            </div>
                          </div>
                   <div class="mb-3">
                   <div class="row mb-3">
                                <div class="col-md-2">
                                    <label for="">Suhu</label>
                                </div>
                                <div class="col-md-3">
                                   <div class="input-group mb-3" style="width: 140px">
                                <input type="text" class="form-control" >
                                <span class="input-group-text" id="basic-addon2">°C</span>
                              </div>
                                </div>
                            </div>
                          </div>
                   <div class="mb-5">
                   <div class="row mb-3">
                                <div class="col-md-2">
                                    <label for="">Nadi</label>
                                </div>
                                <div class="input-group mb-3" style="width: 200px">
                                <input type="text" class="form-control" >
                                <span class="input-group-text" id="basic-addon2">x/menit</span>
                              </div>
                            </div>
                          </div>




                   <div class="mb-3"><b>Pemeriksaan Antroprometri</b></div>
                   <div class="mb-3">
                   <div class="row mb-3">
                                <div class="col-md-2">
                                    <label for="">PB</label>
                                </div>
                                <div class="col-md-3">
                                       <div class="input-group mb-3" style="width: 140px">
                                    <input type="text" class="form-control" >
                                    <span class="input-group-text" id="basic-addon2">cm</span>
                                  </div>
                                </div>
                            </div>
                          </div>
                   <div class="mb-3">
                   <div class="row mb-3">
                                <div class="col-md-2">
                                    <label for="">BB</label>
                                </div>
                                <div class="col-md-3">
                                   <div class="input-group mb-3" style="width: 140px">
                                <input type="text" class="form-control" >
                                <span class="input-group-text" id="basic-addon2">Kg</span>
                              </div>
                                </div> 
                            </div>
                          </div>
                   <div class="mb-3">
                   <div class="row mb-3">
                                <div class="col-md-2">
                                    <label for="">Lingkar Kepala</label>
                                </div>
                                <div class="col-md-3">
                                       <div class="input-group mb-3" style="width: 140px">
                                    <input type="text" class="form-control" >
                                    <span class="input-group-text" id="basic-addon2">cm</span>
                                  </div>
                                </div>
                            </div>
                          </div>
                   <div class="mb-3">
                   <div class="row mb-3">
                                <div class="col-md-2">
                                    <label for="">Lingkar Dada</label>
                                </div>
                                <div class="col-md-3">
                                       <div class="input-group mb-3" style="width: 140px">
                                    <input type="text" class="form-control" >
                                    <span class="input-group-text" id="basic-addon2">cm</span>
                                  </div>
                                </div>
                            </div>
                          </div>
                   <div class="mb-5">
                   <div class="row mb-3">
                                <div class="col-md-2">
                                    <label for="">Lingkar Lengan</label>
                                </div>
                                <div class="col-md-3">
                                       <div class="input-group mb-3" style="width: 140px">
                                    <input type="text" class="form-control" >
                                    <span class="input-group-text" id="basic-addon2">cm</span>
                                  </div>
                                </div>
                            </div>
                          </div>





                   <div class="mb-3"><b>Pemeriksaan Khusus</b></div>
                   <div class="mb-3">Inspeksi</div>
                   <div class="mb-3">
                                <div>
                                   <label class="col-2" for="">Kepala</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_12" id="t_01" value="option1">
                                        <label class="form-check-label" for="t_01">Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_12" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Tidak Normal</label>
                                        ( <input type="text" id="v_01" name="v_01" style="width: 150px"> )
                                    </div>
                                    </div>
                                </div>
                   <div class="mb-3">
                                <div>
                                   <label class="col-2" for="">Rambut</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_13" id="t_01" value="option1">
                                        <label class="form-check-label" for="t_01">Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_13" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Tidak Normal</label>
                                        ( <input type="text" id="v_01" name="v_01" style="width: 150px"> )
                                    </div>
                                    </div>
                                </div>
                   <div class="mb-3">
                                <div>
                                   <label class="col-2" for="">Wajah</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_14" id="t_01" value="option1">
                                        <label class="form-check-label" for="t_01">Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_14" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Tidak Normal</label>
                                        ( <input type="text" id="v_01" name="v_01" style="width: 150px"> )
                                    </div>
                                    </div>
                                </div>
                   <div class="mb-3">
                                <div>
                                   <label class="col-2" for="">Hidung</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_15" id="t_01" value="option1">
                                        <label class="form-check-label" for="t_01">Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_15" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Tidak Normal</label>
                                        ( <input type="text" id="v_01" name="v_01" style="width: 150px"> )
                                    </div>
                                    </div>
                                </div>
                   <div class="mb-3">
                                <div>
                                   <label class="col-2" for="">Mulut</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_16" id="t_01" value="option1">
                                        <label class="form-check-label" for="t_01">Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_16" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Tidak Normal</label>
                                        ( <input type="text" id="v_01" name="v_01" style="width: 150px"> )
                                    </div>
                                    </div>
                                </div>
                   <div class="mb-3">
                                <div>
                                   <label class="col-2" for="">Leher</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_17" id="t_01" value="option1">
                                        <label class="form-check-label" for="t_01">Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_17" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Tidak Normal</label>
                                        ( <input type="text" id="v_01" name="v_01" style="width: 150px"> )
                                    </div>
                                    </div>
                                </div>
                   <div class="mb-3">
                                <div>
                                   <label class="col-2" for="">Dada</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_18" id="t_01" value="option1">
                                        <label class="form-check-label" for="t_01">Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_18" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Tidak Normal</label>
                                        ( <input type="text" id="v_01" name="v_01" style="width: 150px"> )
                                    </div>
                                    </div>
                                </div>
                   <div class="mb-3">
                                <div>
                                   <label class="col-2" for="">Abdomen</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_19" id="t_01" value="option1">
                                        <label class="form-check-label" for="t_01">Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_19" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Tidak Normal</label>
                                        ( <input type="text" id="v_01" name="v_01" style="width: 150px"> )
                                    </div>
                                    </div>
                                </div>




                   <div class="mb-3">Ekstremitas </div>
                   <div class="mb-3">
                                <div>
                                   <label class="col-2" for="">Atas</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_20" id="t_01" value="option1">
                                        <label class="form-check-label" for="t_01">Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_20" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Tidak Normal</label>
                                        ( <input type="text" id="v_01" name="v_01" style="width: 150px"> )
                                    </div>
                                    </div>
                                </div>
                  <div class="mb-5">
                                <div>
                                   <label class="col-2" for="">Bawah</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_21" id="t_01" value="option1">
                                        <label class="form-check-label" for="t_01">Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_21" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Tidak Normal</label>
                                        ( <input type="text" id="v_01" name="v_01" style="width: 150px"> )
                                    </div>
                                    </div>
                                </div>
                   
                   


                   <div class="mb-3"><b>Anogenital</b></div>
                   <div class="mb-3">Laki-laki: </div>
                   <div class="mb-3">
                                <div>
                                   <label class="col-2" for="">Testis</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_22" id="t_01" value="option1">
                                        <label class="form-check-label" for="t_01">Testis turun</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_22" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Belum Turun </label>
                                    </div>
                                    </div>
                                </div>
                   <div class="mb-3">
                                <div>
                                   <label class="col-2" for="">Penis</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_23" id="t_01" value="option1">
                                        <label class="form-check-label" for="t_01">Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_23" id="t_01" value="option1">
                                        <label class="form-check-label" for="t_01">Hipospadia</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_23" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Lain-lain</label>
                                        ( <input type="text" id="v_01" name="v_01" style="width: 150px"> )
                                    </div>
                                    </div>
                                </div>




                   <div class="mb-3">Perempuan: </div>
                   <div class="mb-3">
                                <div>
                                   <label class="col-2" for="">Vulva Vagina</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_24" id="t_01" value="option1">
                                        <label class="form-check-label" for="t_01">Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_24" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Tidak Normal</label>
                                        ( <input type="text" id="v_01" name="v_01" style="width: 150px"> )
                                    </div>
                                    </div>
                                </div>
                   <div class="mb-3">
                                <div>
                                   <label class="col-2" for="">Labia Mayora</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_25" id="t_01" value="option1">
                                        <label class="form-check-label" for="t_01">Sudah menutup</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_25" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Belum menutup </label>
                                    </div>
                                    </div>
                                </div>
                   <div class="mb-5">
                                <div>
                                   <label class="col-2" for="">Lubang Anus</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_26" id="t_01" value="option1">
                                        <label class="form-check-label" for="t_01">Ada</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_26" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Tidak ada</label>
                                    </div>
                                    </div>
                                </div>




                   <div class="mb-3"><b>Reflek</b></div>
                   <div class="mb-3">
                                <div>
                                   <label class="col-2" for="">Moro</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_27" id="t_01" value="option1">
                                        <label class="form-check-label" for="t_01">Ada</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_27" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Tidak</label>
                                    </div>
                                    </div>
                                </div>
                   <div class="mb-3">
                                <div>
                                   <label class="col-2" for="">Rooting</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_28" id="t_01" value="option1">
                                        <label class="form-check-label" for="t_01">Ada</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_28" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Tidak</label>
                                    </div>
                                    </div>
                                </div>
                   <div class="mb-3">
                                <div>
                                   <label class="col-2" for="">Sucking</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_29" id="t_01" value="option1">
                                        <label class="form-check-label" for="t_01">Ada</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_29" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Tidak</label>
                                    </div>
                                    </div>
                                </div>
                   <div class="mb-3">
                                <div>
                                   <label class="col-2" for="">Swallowing</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_30" id="t_01" value="option1">
                                        <label class="form-check-label" for="t_01">Ada</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_30" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Tidak</label>
                                    </div>
                                    </div>
                                </div>
                   <div class="mb-3">
                                <div>
                                   <label class="col-2" for="">Walking</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_31" id="t_01" value="option1">
                                        <label class="form-check-label" for="t_01">Ada</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_31" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Tidak</label>
                                    </div>
                                    </div>
                                </div>
                   <div class="mb-3">
                                <div>
                                   <label class="col-2" for="">Graphs</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_32" id="t_01" value="option1">
                                        <label class="form-check-label" for="t_01">Ada</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_32" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Tidak</label>
                                    </div>
                                    </div>
                                </div>
                   <div class="mb-3">
                                <div>
                                   <label class="col-2" for="">Babinski</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_33" id="t_01" value="option1">
                                        <label class="form-check-label" for="t_01">Ada</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_33" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Tidak</label>
                                    </div>
                                    </div>
                                </div>
                   <div class="mb-5">
                                <div>
                                   <label class="col-2" for="">Tonicneck</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_34" id="t_01" value="option1">
                                        <label class="form-check-label" for="t_01">Ada</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_34" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Tidak</label>
                                    </div>
                                    </div>
                                </div>





                   <div class="mb-3"><b>Eliminasi</b></div>
                   <div class="mb-3">
                                <div>
                                   <label class="col-2" for="">BAK</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_35" id="t_01" value="option1">
                                        <label class="form-check-label" for="t_01">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_35" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Tidak</label>
                                    </div>
                                    </div>
                                </div>
                   <div class="mb-5">
                                <div>
                                   <label class="col-2" for="">BAB</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_36" id="t_01" value="option1">
                                        <label class="form-check-label" for="t_01">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_36" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Tidak</label>
                                    </div>
                                    </div>
                                </div>





                   <div class="mb-1"><b>PENILAIAN APGAR SCORE</b></div>
                   <table class="table table-bordered mb-0" style="border: 1px solid black;">
                     <tbody>


                      <tr style="text-align: center;">
                        <td>Tanda</td>
                        <td>0</td>
                        <td>1</td>
                        <td>2</td>
                        <td>Jumlah Nilai</td>
                      </tr>


                      <tr>
                        <td>Frekuensi Jantung</td>
                        <td>
                          <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_37" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Tidak ada</label>
                                    </div>
                        </td>
                        <td><div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_37" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02"><100x/menit</label>
                                    </div></td>
                        <td>
                          <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_37" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">>100x/menit</label>
                                    </div>
                        </td>
                        <td style="text-align: center;"><input type="text" id="v_01" name="v_01" style="width: 50px">
                        </td>
                      </tr>

                      <tr>
                        <td>Usaha napas</td>
                        <td>
                          <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_38" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Tidak ada</label>
                                    </div>
                        </td>
                        <td>
                          <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_38" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Lambat</label>
                                    </div>
                        </td>
                        <td>
                          <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_38" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Menangis kuat</label>
                                    </div>
                        </td>
                        <td style="text-align: center;"><input type="text" id="v_01" name="v_01" style="width: 50px"></td>
                      </tr>

                      <tr>
                        <td>Tonus otot</td>
                        <td>
                          <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_39" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Lumpuh</label>
                                    </div>
                        </td>
                        <td>
                          <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_39" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Ekstremitas Fleksi sedikit</label>
                                    </div>
                        </td>
                        <td>
                          <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_39" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Gerakan Aktif</label>
                                    </div>
                        </td>
                        <td style="text-align: center;"><input type="text" id="v_01" name="v_01" style="width: 50px"></td>
                      </tr>

                      <tr>
                        <td>Refleks</td>
                        <td>
                          <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_40" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Tidak Beraksi</label>
                                    </div>
                        </td>
                        <td>
                          <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_40" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Gerakan Sedikit</label>
                                    </div>
                        </td>
                        <td>
                          <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_40" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Reaksi Melawan</label>
                                    </div>
                        </td>
                        <td style="text-align: center;"><input type="text" id="v_01" name="v_01" style="width: 50px"></td>
                      </tr>

                      <tr>
                        <td>Warna</td>
                        <td>
                          <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_41" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Biru/pucat</label>
                                    </div>
                        </td>
                        <td>
                          <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_41" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Tubuh kemerahan, tangan dan kaki biru</label>
                                    </div>
                        </td>
                        <td>
                          <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_41" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Kemerahan</label>
                                    </div>
                        </td>
                        <td style="text-align: center;"><input type="text" id="v_01" name="v_01" style="width: 50px"></td>
                      </tr>
                       
                     </tbody>
                   </table>





                   <br><div class="mb-3"><b>Pemeriksaan Penunjang</b></div>
                   <div class="mb-4">
                   <div class="row mb-3">
                                <div class="col-md-2">
                                    <label for="">a. Laboraturium</label>
                                </div>
                                <div class="col-md-10">
                                    <textarea class="form-control" id="" name="" rows="3" cols="7" ></textarea>
                                </div>
                            </div>
                          </div>
                   <div class="mb-3">Lain-lain yang perlu dilaporkan </div>
                   <div class="row mb-3">
                                <div class="col-md-2">
                                    <label for="">Terapi yang didapat</label>
                                </div>
                                <div class="col-md-10">
                                    <textarea class="form-control" id="" name="" rows="2" cols="7" ></textarea>
                                </div>
                            </div>
                          
                   <div class="mb-3">
                                <div>
                                   <label class="col-2" for="">Injeksi Vit K</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_42" id="t_01" value="option1">
                                        <label class="form-check-label" for="t_01">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_42" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Tidak</label>
                                    </div>
                                    </div>
                                </div>
                   <div class="mb-3">
                                <div>
                                   <label class="col-2" for="">Salf Mata</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_43" id="t_01" value="option1">
                                        <label class="form-check-label" for="t_01">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_43" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Tidak</label>
                                    </div>
                                    </div>
                                </div>
                   <div class="mb-3">Imunisasi</div>
                   <div class="mb-3">
                                <div>
                                   <label class="col-2" for="">Polio 0</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_44" id="t_01" value="option1">
                                        <label class="form-check-label" for="t_01">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_44" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Tidak</label>
                                    </div>
                                    </div>
                                </div>
                   <div class="mb-5">
                                <div>
                                   <label class="col-2" for="">Hepatitis 0</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_45" id="t_01" value="option1">
                                        <label class="form-check-label" for="t_01">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_45" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Tidak</label>
                                    </div>
                                    </div>
                                </div>




                   <div class="mb-1">SKRINING NYERI - NIPS (Neonatal Infant Pain Score)</div>

                   <table class="table table-bordered mb-0" style="border: 1px solid black;">
                     <tbody>


                      <tr style="text-align: center;">
                        <td colspan="2"><b>Kategori</b></td>

                        <td><b>Skor</b></td>
                        <td><b>Ceklis</b></td>
                      </tr>


                      <tr>
                        <td rowspan="2">EKSPRESI</td>
                        <td>Otot wajah rileks, ekspresi netral</td>
                        <td style="text-align: center;">0</td>
                        <td style="text-align: center;"><input for="" type="checkbox" class="form-check-input" value="0" id="p1" onclick="UpdateCost(this);"></td>
                      </tr>

                      <tr>
                        <td>Otot wajah tenang, alis berkerut, rahang dagu mengunci</td>
                        <td style="text-align: center;">1</td>
                        <td style="text-align: center;"><input for="" type="checkbox" class="form-check-input" value="1" id="p2" onclick="UpdateCost(this);"></td>
                      </tr>


                      <tr>
                        <td rowspan="3">TANGISAN</td>
                        <td>Tenang, tidak menangis</td>
                        <td style="text-align: center;">0</td>
                        <td style="text-align: center;"><input for="" type="checkbox" class="form-check-input" value="0" id="p3" onclick="UpdateCost(this);"></td>
                      </tr>

                      <tr>
                        <td>Mengerang, sebentar-sebentar menangis</td>
                        <td style="text-align: center;">1</td>
                        <td style="text-align: center;"><input for="" type="checkbox" class="form-check-input" value="1" id="p4" onclick="UpdateCost(this);"></td>
                      </tr>

                      <tr>
                        <td>Terus-menerus menangis, menangis kencang, melengking
                            (menangis diam dapat dimasukkan dalam skor ini jika bayi terintubasi dengan dasar penilainannya pergerakan mulut dan wajah)
                        </td>
                        <td style="text-align: center;">2</td>
                        <td style="text-align: center;"><input for="" type="checkbox" class="form-check-input" value="2" id="p5" onclick="UpdateCost(this);"></td>
                      </tr>


                      <tr>
                        <td rowspan="2">POLA NAPAS</td>
                        <td>Rileks, napas regular</td>
                        <td style="text-align: center;">0</td>
                        <td style="text-align: center;"><input for="" type="checkbox" class="form-check-input" value="0" id="p6" onclick="UpdateCost(this);"></td>
                      </tr>

                      <tr>
                        <td>Pola napas berubah: tidak teratur, lebih cepat dari biasanya, tersedak, menahan napas</td>
                        <td style="text-align: center;">1</td>
                        <td style="text-align: center;"><input for="" type="checkbox" class="form-check-input" value="1" id="p7" onclick="UpdateCost(this);"></td>
                      </tr>


                      <tr>
                        <td rowspan="2">TANGAN</td>
                        <td>Rileks, otot tangan tidak kaku, kadang bergerak tidak beraturan</td>
                        <td style="text-align: center;">0</td>
                        <td style="text-align: center;"><input for="" type="checkbox" class="form-check-input" value="0" id="p8" onclick="UpdateCost(this);"></td>
                      </tr>

                      <tr>
                        <td>Fleksi/ekstensi yang kaku, meluruskan tangan tapi dengan cepat melakukan fleksi, ekstensi yang kaku</td>
                        <td style="text-align: center;">1</td>
                        <td style="text-align: center;"><input for="" type="checkbox" class="form-check-input" value="1" id="p9" onclick="UpdateCost(this);"></td>
                      </tr>


                      <tr>
                        <td rowspan="2">KAKI</td>
                        <td>Rileks, otot tangan tidak kaku, kadang kaki bergerak tidak beraturan</td>
                        <td style="text-align: center;">0</td>
                        <td style="text-align: center;"><input for="" type="checkbox" class="form-check-input" value="0" id="p10" onclick="UpdateCost(this);"></td>
                      </tr>

                      <tr>
                        <td>Fleksi/ekstensi yang kaku, meluruskan kaki tapi dengan cepat melakukan fleksi, ekstensi yang kaku</td>
                        <td style="text-align: center;">1</td>
                        <td style="text-align: center;"><input for="" type="checkbox" class="form-check-input" value="1" id="p11" onclick="UpdateCost(this);"></td>
                      </tr>

                      <tr>
                        <td rowspan="2">KESADARAN</td>
                        <td>Tidur pulas atau cepat bangun, alert dan tenang</td>
                        <td style="text-align: center;">0</td>
                        <td style="text-align: center;"><input for="" type="checkbox" class="form-check-input" value="0" id="p12" onclick="UpdateCost(this);"></td>
                      </tr>

                      <tr>
                        <td>Rewel, gelisah dan meronta-ronta</td>
                        <td style="text-align: center;">1</td>
                        <td style="text-align: center;"><input for="" type="checkbox" class="form-check-input" value="1" id="p13" onclick="UpdateCost(this);"></td>
                      </tr>


                      <tr style="text-align: center;">
                        <td colspan="2"><b>NILAI TOTAL SKOR 1-7</b></td>
                        <td colspan="2">
                          <input style="width: 50px" type="text" id="total" disabled="disabled"/> /7
                        </td>
                      </tr>

                      <tr>
                        <td colspan="4">
                          <label for="">Catatan  :</label>
                          <br><label for="">1. Skor > 3 mengindikasikan bahwa bayi mengalami nyeri, lakukan observasi ulang setiap 4 jam</label>
                          <br><label for="">2. Observasi nyeri dilakukan setiap shift pada saat pengukuran tanda vital, pasien pertama kali dirawat dan pasien dengan paska tindakan</label>
                        </td>
                      </tr>

                     </tbody>
                   </table>




                  <br><div class="mb-1"><b>Skrining Gizi pada Anak (skrining gizi berdasarkan adaptasi Strong-Kids)</b></div>

                  <table class="table table-bordered mb-0" style="border: 1px solid black;">
                    <tbody>

                      <tr style="text-align: center;">
                        <td><b>Parameter </b></td>
                        <td><b>Skor</b></td>
                        <td><b>Ceklis</b></td>
                      </tr>

                      <tr>
                        <td>
                          <label for="">1. Apakah pasien tampak kurus?</label>
                          <br><label for="">a. Tidak</label>
                          <br><label for="">b. Ya</label>
                          <br><label for="">2.  Apakah terdapat penurunan BB selama satu bulan terakhir? (berdasarkan penilaian objektif data BB bila ada/penilaian subjektif dari orangtua pasien ATAU untuk bayi < 1 tahun : BB naik selama 3 bulan terakhir)</label>
                          <br><label for="">a. Tidak</label>
                          <br><label for="">b. Ya</label>
                          <br><label for="">3.  Apakah terdapat salah satu dari kondisi berikut?</label>
                          <br><label for="">• Diare ≥ 5x sehari dan atau muntah lebih dari 3x sehari dalam seminggu terakhir</label>
                          <br><label for="">• Asupan makanan berkurang selama satu minggu terakhir</label>
                          <br><label for="">a. Tidak</label>
                          <br><label for="">b. Ya</label>
                          <br><label for="">4.  Apakah terdapat penyakit atau keadaan yang mengakibatkan pasien berisiko mengalami malnutrisi ? (lihat tabel di bawah)</label>
                          <br><label for="">a. Tidak</label>
                          <br><label for="">b. Ya</label>
                        </td>
                        <td>
                          <label for=""></label>
                          <br><label for="">0</label>
                          <br><label for="">1</label>
                          <br><label for=""></label>
                          <br><label for=""></label>
                          <br><label for="">0</label>
                          <br><label for="">1</label>
                          <br><label for=""></label>
                          <br><label for=""></label>
                          <br><label for=""></label>
                          <br><label for="">0</label>
                          <br><label for="">1</label>
                          <br><label for=""></label>
                          <br><label for="">0</label>
                          <br><label for="">2</label>
                        </td>
                        <td>
                          <label for=""></label>
                          <br><input for="" type="checkbox" class="form-check-input" value="0" id="p14" onclick="UpdateCost1(this);">
                          <br><input for="" type="checkbox" class="form-check-input" value="1" id="p15" onclick="UpdateCost1(this);">
                          <br><label for=""></label>
                          <br><label for=""></label>
                          <br><input for="" type="checkbox" class="form-check-input" value="0" id="p16" onclick="UpdateCost1(this);">
                          <br><input for="" type="checkbox" class="form-check-input" value="1" id="p17" onclick="UpdateCost1(this);">
                          <br><label for=""></label>
                          <br><label for=""></label>
                          <br><label for=""></label>
                          <br><input for="" type="checkbox" class="form-check-input" value="0" id="p18" onclick="UpdateCost1(this);">
                          <br><input for="" type="checkbox" class="form-check-input" value="1" id="p19" onclick="UpdateCost1(this);">
                          <br><label for=""></label>
                          <br><input for="" type="checkbox" class="form-check-input" value="0" id="p20" onclick="UpdateCost1(this);">
                          <br><input for="" type="checkbox" class="form-check-input" value="2" id="p21" onclick="UpdateCost1(this);">
                        </td>
                      </tr>


                      <tr>
                        <td style="text-align: right;"><b>Total Skor </b></td>
                        <td colspan="2" style="text-align: center;"><input style="width: 50px" type="text" id="total1" disabled="disabled"/>
                        </td>
                      </tr>
          
                    </tbody>
                  </table>




                  <br><div class="mb-1">Daftar penyakit/ keadaan yang berisiko mengakibatkan malnutrisi:</div>
                  <div class="mb-1">Interpretasi Skor:</div>
                  <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_46" id="t_01" value="option1">
                                        <label class="form-check-label" for="t_01"><b>0 Risiko Rendah</b></label>
                                    </div>
                                     <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_46" id="t_01" value="option1">
                                        <label class="form-check-label" for="t_01"><b>1-3 Risiko Sedang</b></label>
                                    </div>
                                     <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_46" id="t_01" value="option1">
                                        <label class="form-check-label" for="t_01"><b>4-5 Risiko Berat</b></label>
                                    </div>
                  <div class="mb-1">(Bila pasien berisiko malnutrisi sedang dan berat, selanjutnya dilakukan pengkajian lanjut oleh ahli gizi)</div>
                  <div class="mb-5">
                                <div>
                                   <label class="col-4" for="">Sudah dibaca dan diketahui oleh Nutrisionis </label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_47" id="t_01" value="option1">
                                        <label class="form-check-label" for="t_01">Ya, tanggal&jam</label>
                                        <input type="date"> <input type="time">
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio_47" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Tidak</label>
                                        Nama/paraf Dietisen: <input type="text" style="width: 100px"> 
                                    </div>
                                    </div>
                                </div>



                    <table class="table table-bordered mb-0" style="border: 1px solid black;">
                      <tbody>
                        
                        <tr style="text-align: center;">
                          <td>KEBUTUHAN EDUKASI</td>
                        </tr>



                        <tr>
                          <td>
                            <div class="mb-3">
                              <div class="row">
                              <div class="col-3">
                              <div class="mb-3">
                                  <label for="alasan" type="text" class="text-center" id="v_11" name="v_11">Hambatan Pelajaran :</label>
                                  <div class="mb-1 form-check">
                                      <input for="laki" type="checkbox" class="form-check-input" id="t_09">
                                      <label class="form-check-label" name="t_09">Tidak ada</label>
                                    </div>
                                    <div class="mb-1 form-check">
                                      <input for="perempuan" type="checkbox" class="form-check-input" id="t_10">
                                      <label class="form-check-label" name="t_10">Emosi</label>
                                    </div>
                                </div>
                              </div>
                        <div class="col-3">
                        <div class="mb-1 form-check">
                                      <input for="laki" type="checkbox" class="form-check-input" id="t_09">
                                      <label class="form-check-label" name="t_09">Pendengaran</label>
                                    </div>
                                    <div class="mb-1 form-check">
                                      <input for="perempuan" type="checkbox" class="form-check-input" id="t_10">
                                      <label class="form-check-label" name="t_10">Budaya/kepercayaan</label>
                                    </div>
                                  </div>
                                  <div class="col-3">
                                    <div class="mb-1 form-check">
                                      <input for="laki" type="checkbox" class="form-check-input" id="t_11">
                                      <label class="form-check-label" name="t_11">Penglihatan</label>
                                    </div>
                                    <div class="mb-1 form-check">
                                      <input for="perempuan" type="checkbox" class="form-check-input" id="t_12">
                                      <label class="form-check-label" name="t_12">Bahasa</label>
                                    </div>
                                  </div>
                                  <div class="col-3">
                                    <div class="mb-1 form-check">
                                      <input for="laki" type="checkbox" class="form-check-input" id="t_13">
                                      <label class="form-check-label" name="t_13">Kognitif</label>
                                    </div>
                                    <div class="mb-3 form-check">
                                      <input for="perempuan" type="checkbox" class="form-check-input" id="t_14">
                                      <label class="form-check-label" name="t_14">Lain-lain</label>
                                  </div>
                                </div>
                                </div>
                              </div>





                              <div class="mb-3">
                                <div class="row">
                                  <div class="col-4">
                                  <label for="alasan" type="text" class="text-center" id="v_11" name="v_11">Edukasi yang dibutuhkan :</label>
                                  <div class="mb-1 form-check">
                                      <input for="laki" type="checkbox" class="form-check-input" id="t_09">
                                      <label class="form-check-label" name="t_09">Stimulasi tumbuh kembang</label>
                                    </div>
                                    <div class="mb-1 form-check">
                                      <input for="perempuan" type="checkbox" class="form-check-input" id="t_10">
                                      <label class="form-check-label" name="t_10">Pemberian ASI/teknik menyusui</label>
                                    </div>
                                    <div class="mb-1 form-check">
                                      <input for="perempuan" type="checkbox" class="form-check-input" id="t_10">
                                      <label class="form-check-label" name="t_10">Rehabilitasi</label>
                                    </div>
                                  </div>


                                    <div class="col-4">
                                    <div class="mb-1 form-check">
                                      <input for="laki" type="checkbox" class="form-check-input" id="t_09">
                                      <label class="form-check-label" name="t_09">Nutrisi</label>
                                    </div>
                                    <div class="mb-1 form-check">
                                      <input for="perempuan" type="checkbox" class="form-check-input" id="t_10">
                                      <label class="form-check-label" name="t_10">Manajemen nyeri</label>
                                    </div>
                                    <div class="mb-1 form-check">
                                      <input for="perempuan" type="checkbox" class="form-check-input" id="t_10">
                                      <label class="form-check-label" name="t_10">Jaminan finansial</label>
                                    </div>
                                  </div>

                                    <div class="col-4">
                                    <div class="mb-1 form-check">
                                      <input for="laki" type="checkbox" class="form-check-input" id="t_09">
                                      <label class="form-check-label" name="t_09">Perawatan luka</label>
                                    </div>
                                    <div class="mb-1 form-check">
                                      <input for="perempuan" type="checkbox" class="form-check-input" id="t_10">
                                      <label class="form-check-label" name="t_10">Medikasi</label>
                                    </div>
                                    <div class="mb-1 form-check">
                                      <input for="perempuan" type="checkbox" class="form-check-input" id="t_10">
                                      <label class="form-check-label" name="t_10">Lain-lain</label>
                                      <input type="text" style="width: 200px">
                                    </div>
                                  </div>

                                  </div>
                                </div>


                          </td>
                        </tr>



                      </tbody>
                    </table>

      </form>


      <br><div class="mb-5">
               <div class="d-grid gap-2">
                 <input class="btn btn-primary" type="submit" name="submit" value="Simpan">
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