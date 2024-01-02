

<!doctype html>
<html lang="en">

<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Lanjutan 1</title>

  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <title>jQuery UI Signature Basics</title>
  <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet">
  <link href="css/jquery.signature.css" rel="stylesheet">
  <style>
    .kbw-signature {
      width: 200px;
      height: 125px;
    }
  </style>
  <!--[if IE]>
    <script src="excanvas.js"></script>
    <![endif]-->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="js/jquery.signature.js"></script>


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




  <script>
        $(function(){
            fungsi1_disabled();
            $("#t_019_rsmy, #t_019_rumah").click(fungsi1_disabled);
        });
        $(function(){
            fungsi1_enable();
            $("#t_019_lain").click(fungsi1_enable);
        });
        
        function fungsi1_disabled(){
            if (this.click){
                $("#v_26").attr("disabled", true);
                $("#v_26").val("");
            } else{
                $("#v_26").removeAttr("disabled");
            }
        }
        function fungsi1_enable(){
            $("#v_26").attr("disabled", true);
            if (this.click){
                $("#v_26").removeAttr("disabled");
                $("#v_26").focus();
            } else{
                $("#v_26").attr("disabled", true);
            }
        }
    </script>




    <script>
        $(function(){
            fungsi2_disabled();
            $("#t_020_dokter, t_020_bidan").click(fungsi2_disabled);
        });
        $(function(){
            fungsi2_enable();
            $("#t_020_lain").click(fungsi2_enable);
        });
        
        function fungsi2_disabled(){
            if (this.click){
                $("#v_27").attr("disabled", true);
                $("#v_27").val("");
            } else{
                $("#v_27").removeAttr("disabled");
            }
        }
        function fungsi2_enable(){
            $("#v_27").attr("disabled", true);
            if (this.click){
                $("#v_27").removeAttr("disabled");
                $("#v_27").focus();
            } else{
                $("#v_27").attr("disabled", true);
            }
        }
    </script>



    <script>
        $(function(){
            fungsi3_disabled();
            $("#t_021_anal, #t_021_anti, #t_021_anas").click(fungsi3_disabled);
        });
        $(function(){
            fungsi3_enable();
            $("#t_021_lain").click(fungsi3_enable);
        });
        
        function fungsi3_disabled(){
            if (this.click){
                $("#v_32").attr("disabled", true);
                $("#v_32").val("");
            } else{
                $("#v_32").removeAttr("disabled");
            }
        }
        function fungsi3_enable(){
            $("#v_32").attr("disabled", true);
            if (this.click){
                $("#v_32").removeAttr("disabled");
                $("#v_32").focus();
            } else{
                $("#v_32").attr("disabled", true);
            }
        }
    </script>




</head>

<body>

  <div class="container mt-3">

    <a href="<?= site_url('dashboard/formulir') ?>" class="btn btn-danger"> ← Back</a>

     <form action="<?php echo site_url('dashboard/simpan') ?>" method="post">
      <input type="hidden" id="FORM" name="FORM" value="F2">


    <h1 style="text-align: right;">Lanjutan 1</h1>


    <table class="table table-bordered mb-0" style="border: 1px solid black;">
      <tbody>


        <tr>
          <td>
            <div style="text-align: center;">
              <font size="5"><br><b>PENGKAJIAN AWAL KEPERAWATAN</b>
                <br><b>DAN MEDIS PASIEN</b>
                <br><b>NEONATUS</b>
              </font>
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



    <div><b>RIWAYAT KELAHIRAN YANG LALU</b></div>

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
              <input type="date" class="form-control" name="v_01" id="v_01" autocomplete="off">
            </div>
          </td>
          <td>
            <div class="form-group">
              <input type="text" class="form-control" name="v_02" id="v_02" autocomplete="off">
            </div>
          </td>
          <td>
            <div class="form-group">
              <input type="text" class="form-control" name="v_03" id="v_03" autocomplete="off">
            </div>
          </td>
          <td>
            <div class="form-group">
              <input type="text" class="form-control" name="v_04" id="v_04" autocomplete="off">
            </div>
          </td>
          <td>
            <div class="form-group">
              <input type="text" class="form-control" name="v_05" id="v_05" autocomplete="off">
            </div>
          </td>
          <td>
            <div class="form-group">
              <input type="text" class="form-control" name="v_06" id="v_06" autocomplete="off">
            </div>
          </td>
          <td>
            <div class="form-group">
              <input type="text" class="form-control" name="v_07" id="v_07" autocomplete="off">
            </div>
          </td>
          <td>
            <div class="form-group">
              <input type="text" class="form-control" name="v_08" id="v_08" autocomplete="off">
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
        <input class="form-check-input" type="radio" name="t_01" id="t_01_dokter" value="0">
        <label class="form-check-label" for="t_01_dokter">Dokter</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="t_01" id="t_01_bidan" value="1">
        <label class="form-check-label" for="t_01_bidan">Bidan</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="t_01" id="t_01_tidakada" value="2">
        <label class="form-check-label" for="t_01_tidakada">Tidak Ada</label>
      </div>
    </div>

    <div class="mb-3">
      <label class="col-3" for="">Pemeriksaan Antenatal</label>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="t_02" id="t_02_teraktur" value="0">
        <label class="form-check-label" for="t_02_teraktur">Pemeriksaan Teratur</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="t_02" id="t_02_tidakteratur" value="1">
        <label class="form-check-label" for="t_02_tidakteratur">Pemeriksaan Tidak Teratur</label>
      </div>
    </div>



    <div class="mb-3">
      <div class="row">
        <div class="col-3">
          <div class="mb-3">
            <label >Penyakit selama hamil</label>
          </div>
        </div>
        <div class="col-3">
          <div class="mb-1 form-check">
            <input type="checkbox" class="form-check-input" name="t_03" id="t_03_anemia">
            <label class="form-check-label" for="t_03_anemia">Anemia</label>
          </div>
          <div class="mb-1 form-check">
            <input type="checkbox" class="form-check-input" name="t_04" id="t_04_hipertensi">
            <label class="form-check-label" for="t_04_hipertensi">Hipertensi</label>
          </div>
        </div>
        <div class="col-3">
          <div class="mb-1 form-check">
            <input type="checkbox" class="form-check-input" name="t_05" id="t_05_penyakit">
            <label class="form-check-label" for="t_05_penyakit">Penyakit Jantung</label>
          </div>
          <div class="mb-1 form-check">
            <input type="checkbox" class="form-check-input" name="t_06" id="t_06_tuberkulosis">
            <label class="form-check-label" for="t_06_tuberkulosis">Tuberkulosis</label>
          </div>
        </div>
        <div class="col-3">
          <div class="mb-1 form-check">
            <input type="checkbox" class="form-check-input" name="t_07" id="t_07_diabetes">
            <label class="form-check-label" for="t_07_diabetes">Diabetes</label>
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" name="t_08" id="t_08_lain">
            <label class="form-check-label" for="t_08_lain">Lain-lain :</label>
            <input type="text" name="v_12" id="v_12" style="width: 100px">
          </div>
        </div>
      </div>
    </div>


    <div class="mb-2">
      <div class="row">
        <div class="col-3">
          <div class="mb-3">
            <label >Komplikasi Kehamilan</label>
          </div>
        </div>
        <div class="col-4">
          <div class="mb-1 form-check">
            <input type="checkbox" class="form-check-input" name="t_09" id="t_09_darah">
            <label class="form-check-label" for="t_09_darah">Pendarahan</label>
          </div>
          <div class="mb-1 form-check">
            <input type="checkbox" class="form-check-input" name="t_010" id="t_010_infeksi">
            <label class="form-check-label" for="t_010_infeksi">Infeksi</label>
          </div>
        </div>
        <div class="col-4">
          <div class="mb-1 form-check">
            <input type="checkbox" class="form-check-input" name="t_011" id="t_011_eklamsi">
            <label class="form-check-label" for="t_011_eklamsi">Preeklamsi/eklamsi</label>
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" name="t_012" id="t_012_lain">
            <label class="form-check-label" for="t_012_lain">Lain-lain :</label>
            <input type="text" name="v_13" id="v_13" style="width: 100px">
          </div>
        </div>
      </div>
    </div>



    <div class="mb-3">
      <div class="row">
        <div class="col-3">
          <label>Kebiasaan Ibu waktu hamil</label>
        </div>
        <div class="col-4">
          <div class="mb-1 form-check">
            <input type="checkbox" class="form-check-input" name="t_013" id="t_013_merokok">
            <label class="form-check-label" for="t_013_merokok">Merokok</label>
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" name="t_014" id="t_014_lain">
            <label class="form-check-label" for="t_014_lain">Lain-lain :</label>
            <input type="text" name="v_14" id="v_14" style="width: 100px">
          </div>
        </div>
        <div class="col-4">
          <div class="mb-1 form-check">
            <input type="checkbox" class="form-check-input" name="t_015" id="t_015_obat">
            <label class="form-check-label" for="t_015_obat">Konsumsi Obat</label>
            <input type="text" name="v_15" id="v_15" style="width: 100px">
          </div>
        </div>

      </div>
    </div>



    <table class="table table-bordered mb-0" style="border: 1px solid black;">
      <tbody>

        <tr>
          <td>
            <div class="row mb-3">
              <div class="col-md-6">
                <label for="">Pemeriksaan terakhir waktu hamil</label>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-md-7">
                <label class="col-md-5">Golongan darah </label>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="t_016" id="t_016_a" value="0">
                  <label class="form-check-label" for="t_016_a">A</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="t_016" id="t_016_b" value="1">
                  <label class="form-check-label" for="t_016_b">B</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="t_016" id="t_016_ab" value="2">
                  <label class="form-check-label" for="t_016_ab">AB</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="t_016" id="t_016_o" value="2">
                  <label class="form-check-label" for="t_016_o">O</label>
                </div>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-md-3">
                <label for="">Hb </label>
              </div>
              <div class="col-md-6">
                :<input type="text" id="v_16" name="v_16" style="width: 150px;">
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-md-3">
                <label for="">Leukosit </label>
              </div>
              <div class="col-md-6">
                :<input type="text" id="v_17" name="v_17" style="width: 150px;">
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-md-3">
                <label for="">Gula Darah</label>
              </div>
              <div class="col-md-6">
                :<input type="text" id="v_18" name="v_18" style="width: 150px;">
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-md-3">
                <label for="">Urin Lengkap</label>
              </div>
              <div class="col-md-6">
                :<input type="text" id="v_19" name="v_19" style="width: 150px;">
              </div>
            </div>
          </td>
          <td>
            <div class="row mb-3">
              <div class="col-md-12">
                <label for="">USG ANTENATAL</label>
              </div>
            </div>
          </td>
        </tr>

      </tbody>
    </table>




    <br>
    <div class="mb-3"><b>RIWAYAT PERSALINAN</b></div>

    <div class="row mb-3">
                                    <div class="col-md-10">
                              <div class="row text-align">
                                <div class="col-md-3">
                                  <label for="">Tanggal persalinan</label>
                                </div>
                                <div class="input-group mb-3" style="width: 200px">
                                  <input type="date" class="form-control" id="v_20" name="v_20">
                                </div>
                                <div class="input-group mb-3" style="width: 200px">
                                  <span class="input-group-text">Jam</span>
                                  <input type="time" class="form-control" id="v_21" name="v_21">
                                </div>
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
            <input class="form-check-input" type="radio" name="t_017" id="t_017_spontan" value="0">
            <label class="form-check-label" for="t_017_spontan">Spontan</label>
            <input type="text" name="v_22" id="v_22" style="width: 100px">
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="t_017" id="t_017_indikasi" value="1">
            <label class="form-check-label" for="t_017_indikasi">VE, indikasi</label>
            <input type="text" name="v_23" id="v_23" style="width: 100px">
          </div>
        </div>
        <div class="col-4">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="t_017" id="t_017_sc" value="2">
            <label class="form-check-label" for="t_017_sc">SC, indikasi</label>
            <input type="text" name="v_24" id="v_24" style="width: 100px">
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="t_017" id="t_017_fe" value="3">
            <label class="form-check-label" for="t_017_fe">FE, indikasi</label>
            <input type="text" name="v_25" id="v_25" style="width: 100px">
          </div>
        </div>
      </div>
    </div>



    <div class="mb-3">
      <div>
        <label class="col-2" for="">Letak</label>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="t_018" id="t_018_presker" value="0">
          <label class="form-check-label" for="t_018_presker">Preskep</label>
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
          <input class="form-check-input" type="radio" name="t_019" id="t_019_rumah" value="1">
          <label class="form-check-label" for="t_019_rumah">Rumah Bersalin</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="t_019" id="t_019_lain" value="2">
          <label class="form-check-label" for="t_019_lain">Lain-lain</label>
          <input type="text" name="v_26" id="v_26" style="width: 100px">
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
          <input type="text" name="v_27" id="v_27" style="width: 100px">
        </div>
      </div>
    </div>



    <div class="row mb-3">
                                    <div class="col-md-10">
                              <div class="row text-align">
                                <div class="col-md-3">
                                  <label for="">Lamanya Persalinan</label>
                                </div>
                                <div class="input-group mb-3" style="width: 250px">
                                  <span class="input-group-text">Kala I</span>
                                  <input type="time" class="form-control" id="v_28" name="v_28">
                                  <span class="input-group-text">Jam</span>
                                </div>
                                <div class="input-group mb-3" style="width: 270px">
                                  <span class="input-group-text">Kala II</span>
                                  <input type="time" class="form-control" id="v_29" name="v_29">
                                  <span class="input-group-text">Menit</span>
                                </div>
                              </div>
                            </div>
                        </div>



    <div class="row mb-3">
                                    <div class="col-md-10">
                              <div class="row text-align">
                                <div class="col-md-3">
                                  <label for="">Pecah ketuban</label>
                                </div>
                                <div class="input-group mb-3" style="width: 320px">
                                  <input type="time" class="form-control" id="v_30" name="v_30">
                                  <span class="input-group-text">jam sebelum persalinan</span>
                                </div>
                              </div>
                            </div>
                        </div>






    <div class="row mb-3">
                        <div class="col-6">
                           <div class="row text-align">
                              <div class="col-md-4">
                                <label for="">Kondisi Air Ketuban</label>
                              </div>
                              <div class="col-md-2">
                                <input type="text" class="form-control" id="v_31" name="v_31" style="width: 500px" autocomplete="off" >
                              </div>
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
          <input class="form-check-input" type="radio" name="t_021" id="t_021_lain" value="3">
          <label class="form-check-label" for="t_021_lain">Lain-lain</label>
          : <input type="text" id="v_32" name="v_32" style="width: 100px;">
        </div>
      </div>
    </div>




    <div class="mb-3">
      <div>
        <label class="col-2" for="">Tali Pusat</label>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="t_022" id="t_022_segar" value="0">
          <label class="form-check-label" for="t_022_segar">Segar/Layu</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="t_022" id="t_022_besar" value="1">
          <label class="form-check-label" for="t_022_besar">Besar/Kecil</label>
        </div>
      </div>
    </div>




    <div class="row mb-3">
                        <div class="col-6">
                           <div class="row text-align">
                              <div class="col-md-4">
                                <label for="">Komplikasi Persalinan</label>
                              </div>
                              <div class="col-md-2">
                                <input type="text" class="form-control" id="v_33" name="v_33" style="width: 500px" autocomplete="off" >
                              </div>
                            </div>
                          </div>
                        </div>


      <div class="mb-5">
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