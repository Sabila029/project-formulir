
<!doctype html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Lanjutan 2</title>

     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="js/jquery.signature.js"></script>




    <script>$("#v_03").keydown(function(e) {
        !0 == e.shiftKey && e.preventDefault(), e.keyCode >= 48 && e.keyCode <= 57 || e.keyCode >= 96 && e.keyCode <= 105 || 8 == e.keyCode || 9 == e.keyCode || 37 == e.keyCode || 39 == e.keyCode || 46 == e.keyCode || 190 == e.keyCode || e.preventDefault(), -1 !== $(this).val().indexOf(".") && 190 == e.keyCode && e.preventDefault()
    });</script>



    <script>
        $(function(){
            fungsi1_disabled();
            $("#t_09_normal").click(fungsi1_disabled);
        });
        $(function(){
            fungsi1_enable();
            $("#t_09_tidaknormal").click(fungsi1_enable);
        });
        
        function fungsi1_disabled(){
            if (this.click){
                $("#v_15").attr("disabled", true);
                $("#v_15").val("");
            } else{
                $("#v_15").removeAttr("disabled");
            }
        }
        function fungsi1_enable(){
            $("#v_15").attr("disabled", true);
            if (this.click){
                $("#v_15").removeAttr("disabled");
                $("#v_15").focus();
            } else{
                $("#v_15").attr("disabled", true);
            }
        }
    </script>


    <script>
        $(function(){
            fungsi2_disabled();
            $("#t_010_normal").click(fungsi2_disabled);
        });
        $(function(){
            fungsi2_enable();
            $("#t_010_tidak").click(fungsi2_enable);
        });
        
        function fungsi2_disabled(){
            if (this.click){
                $("#v_16").attr("disabled", true);
                $("#v_16").val("");
            } else{
                $("#v_16").removeAttr("disabled");
            }
        }
        function fungsi2_enable(){
            $("#v_16").attr("disabled", true);
            if (this.click){
                $("#v_16").removeAttr("disabled");
                $("#v_16").focus();
            } else{
                $("#v_16").attr("disabled", true);
            }
        }
    </script>


    <script>
        $(function(){
            fungsi3_disabled();
            $("#t_011_normal").click(fungsi3_disabled);
        });
        $(function(){
            fungsi3_enable();
            $("#t_011_tidak").click(fungsi3_enable);
        });
        
        function fungsi3_disabled(){
            if (this.click){
                $("#v_17").attr("disabled", true);
                $("#v_17").val("");
            } else{
                $("#v_17").removeAttr("disabled");
            }
        }
        function fungsi3_enable(){
            $("#v_17").attr("disabled", true);
            if (this.click){
                $("#v_17").removeAttr("disabled");
                $("#v_17").focus();
            } else{
                $("#v_17").attr("disabled", true);
            }
        }
    </script>


    <script>
        $(function(){
            fungsi4_disabled();
            $("#t_023_tidak").click(fungsi4_disabled);
        });
        $(function(){
            fungsi4_enable();
            $("#t_023_ada").click(fungsi4_enable);
        });
        
        function fungsi4_disabled(){
            if (this.click){
                $("#v_21").attr("disabled", true);
                $("#v_21").val("");
            } else{
                $("#v_21").removeAttr("disabled");
            }
        }
        function fungsi4_enable(){
            $("#v_21").attr("disabled", true);
            if (this.click){
                $("#v_21").removeAttr("disabled");
                $("#v_21").focus();
            } else{
                $("#v_21").attr("disabled", true);
            }
        }
    </script>



    <script>
        $(function(){
            fungsi5_disabled();
            $("#t_025_labio, #t_025_pendarahan").click(fungsi5_disabled);
        });
        $(function(){
            fungsi5_enable();
            $("#t_025_lain").click(fungsi5_enable);
        });
        
        function fungsi5_disabled(){
            if (this.click){
                $("#v_22").attr("disabled", true);
                $("#v_22").val("");
            } else{
                $("#v_22").removeAttr("disabled");
            }
        }
        function fungsi5_enable(){
            $("#v_22").attr("disabled", true);
            if (this.click){
                $("#v_22").removeAttr("disabled");
                $("#v_22").focus();
            } else{
                $("#v_22").attr("disabled", true);
            }
        }
    </script>


    <script>
        $(function(){
            fungsi6_disabled();
            $("#t_032_tidakada").click(fungsi6_disabled);
        });
        $(function(){
            fungsi6_enable();
            $("#t_032_ada").click(fungsi6_enable);
        });
        
        function fungsi6_disabled(){
            if (this.click){
                $("#v_27").attr("disabled", true);
                $("#v_27").val("");
            } else{
                $("#v_27").removeAttr("disabled");
            }
        }
        function fungsi6_enable(){
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
            fungsi7_disabled();
            $("#t_038_bebas").click(fungsi7_disabled);
        });
        $(function(){
            fungsi7_enable();
            $("#t_038_terbatas").click(fungsi7_enable);
        });
        
        function fungsi7_disabled(){
            if (this.click){
                $("#v_30").attr("disabled", true);
                $("#v_30").val("");
            } else{
                $("#v_30").removeAttr("disabled");
            }
        }
        function fungsi7_enable(){
            $("#v_30").attr("disabled", true);
            if (this.click){
                $("#v_30").removeAttr("disabled");
                $("#v_30").focus();
            } else{
                $("#v_30").attr("disabled", true);
            }
        }
    </script>



  </head>
  <body>

    <div class="container mt-1" >

      <a href="<?= site_url('dashboard/formulir') ?>" class="btn btn-danger"> ← Back</a>

       <form action="<?php echo site_url('dashboard/simpan') ?>" method="post">
        <input type="hidden" id="FORM" name="FORM" value="F3">

  
      <h1 style="text-align: right;">Lanjutan 2</h1>



      <table class="table table-bordered mb-0" style="border: 1px solid black;">
        <tbody>


          <tr>
            <td>
               <div style="text-align: center;"><font size="5"><br><b>PENGKAJIAN AWAL KEPERAWATAN</b>
                     <br><b>DAN MEDIS PASIEN</b>
                     <br><b>NEONATUS</b></font>
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



       <br><div class="mb-3"><b>KEADAAN BAYI SAAT LAHIR</b></div>
               

           <div class="row mb-3">
                                    <div class="col-md-10">
                              <div class="row text-align">
                                <div class="col-md-3">
                                  <label for="">Tanggal persalinan</label>
                                </div>
                                <div class="input-group mb-3" style="width: 200px">
                                  <input type="date" class="form-control" id="v_01" name="v_01">
                                </div>
                                <div class="input-group mb-3" style="width: 200px">
                                  <span class="input-group-text">Jam</span>
                                  <input type="time" class="form-control" id="v_02" name="v_02">
                                </div>
                              </div>
                            </div>
                        </div>
            




                <div class="mb-2">
                                <div class="row mb-2">                       
                                <div>
                                   <label class="col-md-2">Jenis Kelamin</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="gender_Laki" value="0" readonly>
                                        <label class="form-check-label" for="gender_Laki">Laki-laki</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="gender_Perempuan" value="1" readonly>
                                        <label class="form-check-label" for="gender_Perempuan">Perempuan</label>
                                    </div>
                                </div>
                            </div>
                          </div>
                <div class="mb-3">
                                <div>
                                   <label class="col-md-2" for="">Kelahiran</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_01" id="t_01_tunggal" value="0">
                                        <label class="form-check-label" for="t_01_tunggal">Tunggal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_01" id="t_01_kembar" value="1">
                                        <label class="form-check-label" for="t_01_kembar">Kembar</label>
                                    </div>
                                    </div>
                                  </div>



           <div class="row">
           <div class="row mb-3">
                                    <div class="col-md-10">
                              <div class="row text-align">
                                <div class="col-md-3">
                                  <label for="">Antropometri saat lahir</label>
                                </div>
                                <div class="input-group mb-3" style="width: 200px">
                                  <span class="input-group-text">BB</span>
                                  <input type="number" class="form-control" id="v_03" name="v_03" autocomplete="off">
                                  <span class="input-group-text">gram</span>
                                </div>
                                <div class="input-group mb-3" style="width: 200px">
                                  <span class="input-group-text">PB</span>
                                  <input type="number" class="form-control" id="v_04" name="v_04" autocomplete="off">
                                  <span class="input-group-text">cm</span>
                                </div>
                                <div class="input-group mb-3" style="width: 200px">
                                  <span class="input-group-text">LK</span>
                                  <input type="number" class="form-control" id="v_05" name="v_05" autocomplete="off">
                                  <span class="input-group-text">cm</span>
                                </div>
                                <div class="input-group mb-3" style="width: 200px">
                                  <span class="input-group-text">LD</span>
                                  <input type="number" class="form-control" id="v_06" name="v_06" autocomplete="off">
                                  <span class="input-group-text">cm</span>
                                </div>
                                <div class="input-group mb-3" style="width: 200px">
                                  <span class="input-group-text">LLA</span>
                                  <input type="number" class="form-control" id="v_07" name="v_07" autocomplete="off">
                                  <span class="input-group-text">cm</span>
                                </div>
                              </div>
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
                                        <input class="form-check-input jumlah" type="radio" name="t_02" id="t_02_tidak" value="0">
                                        <label class="form-check-label" for="t_02_tidak">Tidak ada</label>
                                    </div>
                        </td>
                        <td><div class="form-check form-check-inline">
                                        <input class="form-check-input jumlah" type="radio" name="t_02" id="t_02_<100x/menit" value="1">
                                        <label class="form-check-label" for="t_02_<100x/menit"><100x/menit</label>
                                    </div></td>
                        <td>
                          <div class="form-check form-check-inline">
                                        <input class="form-check-input jumlah" type="radio" name="t_02" id="t_02_>100x/menit" value="2">
                                        <label class="form-check-label" for="t_02_>100x/menit">>100x/menit</label>
                                    </div>
                        </td>
                        <td style="text-align: center;"><input type="text" id="v_08" name="v_08" style="width: 50px" readonly>
                        </td>
                      </tr>

                      <tr>
                        <td>Usaha napas</td>
                        <td>
                          <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_03" id="t_03_tidakada" value="0">
                                        <label class="form-check-label" for="t_03_tidakada">Tidak ada</label>
                                    </div>
                        </td>
                        <td>
                          <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_03" id="t_03_lambat" value="1">
                                        <label class="form-check-label" for="t_03_lambat">Lambat</label>
                                    </div>
                        </td>
                        <td>
                          <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_03" id="t_03_menangis" value="2">
                                        <label class="form-check-label" for="t_03_menangis">Menangis kuat</label>
                                    </div>
                        </td>
                        <td style="text-align: center;"><input type="text" id="v_09" name="v_09" style="width: 50px"></td>
                      </tr>

                      <tr>
                        <td>Tonus otot</td>
                        <td>
                          <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_04" id="t_04_lumpuh" value="0">
                                        <label class="form-check-label" for="t_04_lumpuh">Lumpuh</label>
                                    </div>
                        </td>
                        <td>
                          <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_04" id="t_04_fleksi" value="1">
                                        <label class="form-check-label" for="t_04_fleksi">Ekstremitas Fleksi sedikit</label>
                                    </div>
                        </td>
                        <td>
                          <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_04" id="t_04_aktif" value="2">
                                        <label class="form-check-label" for="t_04_aktif">Gerakan Aktif</label>
                                    </div>
                        </td>
                        <td style="text-align: center;"><input type="text" id="v_10" name="v_10" style="width: 50px"></td>
                      </tr>

                      <tr>
                        <td>Refleks</td>
                        <td>
                          <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_05" id="t_05_tidakberaksi" value="0">
                                        <label class="form-check-label" for="t_05_tidakberaksi">Tidak Beraksi</label>
                                    </div>
                        </td>
                        <td>
                          <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_05" id="t_05_gerakansedikit" value="1">
                                        <label class="form-check-label" for="t_05_gerakansedikit">Gerakan Sedikit</label>
                                    </div>
                        </td>
                        <td>
                          <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_05" id="t_05_reaksimelawan" value="2">
                                        <label class="form-check-label" for="t_05_reaksimelawan">Reaksi Melawan</label>
                                    </div>
                        </td>
                        <td style="text-align: center;"><input type="text" id="v_11" name="v_11" style="width: 50px"></td>
                      </tr>

                      <tr>
                        <td>Warna</td>
                        <td>
                          <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_06" id="t_06_biru" value="0">
                                        <label class="form-check-label" for="t_06_biru">Biru/pucat</label>
                                    </div>
                        </td>
                        <td>
                          <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_06" id="t_06_tubuh" value="1">
                                        <label class="form-check-label" for="t_06_tubuh">Tubuh kemerahan, tangan dan kaki biru</label>
                                    </div>
                        </td>
                        <td>
                          <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_06" id="t_06_kemerahan" value="2">
                                        <label class="form-check-label" for="t_06_kemerahan">Kemerahan</label>
                                    </div>
                        </td>
                        <td style="text-align: center;"><input type="text" id="v_12" name="v_12" style="width: 50px"></td>
                      </tr>
                       
                     </tbody>
                   </table>




                   <br><div class="mb-1">Lain-lain yang perlu dilaporkan:</div>
                   <div class="mb-3">
                <div class="row mb-3">
                                <div class="col-md-2">
                                  <label for="">Injeksi Vit K</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="v_13" name="v_13" style="width: 500px" autocomplete="off">
                                </div>
                                 </div>
                          </div>

                   <div class="mb-5">
                <div class="row mb-3">
                                <div class="col-md-2">
                                  <label for="">Salf Mata</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="v_14" name="v_14" style="width: 500px" autocomplete="off">
                                </div>
                                 </div>
                          </div>




                   <div class="mb-1"><b>PEMERIKSAAN FISIK NEONATUS</b></div>
                   <div class="row">
                    <div class="col-4">
                   <div class="mb-3">
                         TD :<input type="number" id="tension_upper" name="tension_upper" style="width: 40px;" readonly> /
                         <input type="number" id="tension_bellow" name="tension_bellow" style="width: 40px;" readonly >mmHg
                     </div>
                       <div class="mb-4">
                         Nadi :<input type="number" id="nadi" name="nadi" style="width: 50px;" readonly>x/menit
                       </div>
                     </div>
                     <div class="col-4">
                       <div class="mb-3">
                         P :<input type="number" id="panjang" name="panjang" style="width: 50px;" readonly>x/menit
                       </div>
                       <div class="mb-4">
                         Suhu :<input type="number" id="temperature" name="temperature" style="width: 50px;" readonly>°C
                       </div>
                     </div>
                     <div class="col-4">
                       <div class="mb-5">
                         SpO2 :<input type="number" id="saturasi" name="saturasi" style="width: 50px;" readonly >
                       </div>
                     </div>
                     </div>





                    
                   <div class="mb-5">
                        <div class="col-md-10">
                             <label class="col-3" for="">Antropometri saat lahir  </label>
                             BB :<input type="number" id="weight" name="weight" style="width: 50px;" readonly>gram
                             PB :<input type="number" id="height" name="height" style="width: 50px;" readonly=>cm
                             LK :<input type="number" id="head_circumference" name="head_circumference" style="width: 50px;" readonly>cm
                             LD :<input type="number" id="chest_size" name="chest_size" style="width: 50px;" readonly>cm
                             LLA :<input type="number" id="LLA" name="LLA" style="width: 50px;" readonly>cm
                           </div>
                         </div>



                   <div class="mb-1"><b>Pernapasan</b></div>
                   <div class="mb-3">
                                <div>
                                   <label class="col-2" for="">Irama</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_07" id="t_07_regular" value="0">
                                        <label class="form-check-label" for="t_07_regular">Regular </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_07" id="t_07_irre" value="1">
                                        <label class="form-check-label" for="t_07_irre">Irregular</label>
                                    </div>
                                    </div>
                                </div>
                   <div class="mb-3">
                                <div>
                                   <label class="col-2" for="">Retraksi dada</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_08" id="t_08_ada" value="0">
                                        <label class="form-check-label" for="t_08_ada">Ada</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_08" id="t_08_tidak" value="1">
                                        <label class="form-check-label" for="t_08_tidak">Tidak ada</label>
                                    </div>
                                    </div>
                                </div>
                   <div class="mb-3">
                                <div>
                                   <label class="col-2" for="">Bentuk dada</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_09" id="t_09_normal" value="0">
                                        <label class="form-check-label" for="t_09_normal">Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_09" id="t_09_tidaknormal" value="1">
                                        <label class="form-check-label" for="t_09_tidaknormal">Tidak Normal, sebutkan</label>
                                        <input type="text" id="v_15" name="v_15" style="width: 150px">
                                    </div>
                                    </div>
                                </div>
                   <div class="mb-3">
                                <div>
                                   <label class="col-2" for="">Pola Napas</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_010" id="t_010_normal" value="0">
                                        <label class="form-check-label" for="t_010_normal">Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_010" id="t_010_tidak" value="1">
                                        <label class="form-check-label" for="t_010_tidak">Tidak Normal, sebutkan</label>
                                        <input type="text" id="v_16" name="v_16" style="width: 150px">
                                    </div>
                                    </div>
                                </div>
                   <div class="mb-3">
                                <div>
                                   <label class="col-2" for="">Suara napas</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_011" id="t_011_normal" value="0">
                                        <label class="form-check-label" for="t_011_normal">Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_011" id="t_011_tidak" value="1">
                                        <label class="form-check-label" for="t_011_tidak">Tidak Normal, sebutkan</label>
                                        <input type="text" id="v_17" name="v_17" style="width: 150px">
                                    </div>
                                    </div>
                                </div>
                   <div class="mb-3">
                                <div>
                                   <label class="col-2" for="">NCH</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_012" id="t_012_tidak" value="0">
                                        <label class="form-check-label" for="t_012_tidak">Tidak Ada</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_012" id="t_012_ada" value="1">
                                        <label class="form-check-label" for="t_012_ada">Ada</label>
                                    </div>
                                    </div>
                                </div>
                   <div class="mb-5">
                                <div>
                                   <label class="col-2" for="">Alat bantu napas</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_013" id="t_013_spontan" value="0">
                                        <label class="form-check-label" for="t_013_spontan">Spontan</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_013" id="t_013_ventilator" value="1">
                                        <label class="form-check-label" for="t_013_ventilator">Ventilator, setting</label>
                                        <input type="text"  id="v_18" name="v_18" style="width: 150px">
                                    </div>
                                     </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_013" id="t_013_kanul" value="2">
                                        <label class="form-check-label" for="t_013_kanul">Kanul/ RB Mask / NRB Mask (lingkari yang sesuai)</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_013" id="t_013_lain" value="3">
                                        <label class="form-check-label" for="t_013_lain">Lain-lain</label>
                                        <input type="text"  id="v_19" name="v_19" style="width: 150px">
                                    </div>
                                    O2<input type="text"  id="v_20" name="v_20" style="width: 50px">L/menit
                                </div>





                  <div class="mb-1"><b>Sirkulasi</b></div>
                  <div class="row">
                    <div class="col-6">
                   <div class="mb-3">
                                <div>
                                   <label class="col-3" for="">Sianosis</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_014" id="t_014_tidak" value="0">
                                        <label class="form-check-label" for="t_014_tidak">Tidak ada </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_014" id="t_014_ada" value="1">
                                        <label class="form-check-label" for="t_014_ada">Ada</label>
                                    </div>
                                    </div>
                                </div>
                   <div class="mb-3">
                                <div>
                                   <label class="col-3" for="">Pucat</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_015" id="t_015_tidak" value="0">
                                        <label class="form-check-label" for="t_015_tidak">Tidak ada</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_015" id="t_015_ada" value="1">
                                        <label class="form-check-label" for="t_015_ada">Ada</label>
                                    </div>
                                    </div>
                                </div>
                   <div class="mb-3">
                                <div>
                                   <label class="col-3" for="">Intensitas  nadi</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_016" id="t_016_kuat" value="0">
                                        <label class="form-check-label" for="t_016_kuat">Kuat </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_016" id="t_016_lemah" value="1">
                                        <label class="form-check-label" for="t_016_lemah">Lemah</label>
                                    </div>
                                    </div>
                                </div>
                   <div class="mb-5">
                                <div>
                                   <label class="col-3" for="">Irama nadi</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_017" id="t_017_regular" value="0">
                                        <label class="form-check-label" for="t_017_regular">Regular</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_017" id="t_017_irre" value="1">
                                        <label class="form-check-label" for="t_017_irre">Irregular</label>
                                    </div>
                                    </div>
                                </div>
                              </div>
                    <div class="col-6">
                   <div class="mb-3">
                                <div>
                                   <label class="col-3" for="">Edema</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_018" id="t_018_tidak" value="0">
                                        <label class="form-check-label" for="t_018_tidak">Tidak ada </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_018" id="t_018_ada" value="1">
                                        <label class="form-check-label" for="t_018_ada">Ada</label>
                                    </div>
                                    </div>
                                </div>
                   <div class="mb-3">
                                <div>
                                   <label class="col-3" for="">Akral </label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_019" id="t_019_hangat" value="0">
                                        <label class="form-check-label" for="t_019_hangat">Hangat</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_019" id="t_019_dingin" value="1">
                                        <label class="form-check-label" for="t_019_dingin">Dingin</label>
                                    </div>
                                    </div>
                                </div>
                   <div class="mb-3">
                                <div>
                                   <label class="col-3" for="">CRT</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_020" id="t_020_<3" value="0">
                                        <label class="form-check-label" for="t_020_<3"><3 detik</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_020" id="t_020_>3" value="1">
                                        <label class="form-check-label" for="t_020_>3">>3 detik</label>
                                    </div>
                                    </div>
                                </div>
                   <div class="mb-5">
                                <div>
                                   <label class="col-3" for="">Clubbing finger</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_021" id="t_021_tidak" value="0">
                                        <label class="form-check-label" for="t_021_tidak">TIdak ada</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_021" id="t_021_ada" value="1">
                                        <label class="form-check-label" for="t_021_ada">Ada</label>
                                    </div>
                                    </div>
                                </div>
                              </div>
                              </div>




                   
                   <div class="mb-1"><b>Neurologi</b></div>
                   <div class="mb-2">
                                <div>
                                   <label class="col-2" for="">Kesadaran</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_compos" value="0">
                                        <label class="form-check-label" for="t_022_compos">Compos mentis </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_apatis" value="1">
                                        <label class="form-check-label" for="t_022_apatis">Apatis </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_somnolen" value="2">
                                        <label class="form-check-label" for="t_022_somnolen">Somnolen </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_sopor" value="3">
                                        <label class="form-check-label" for="t_022_sopor">Sopor </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_022" id="t_022_coma" value="4">
                                        <label class="form-check-label" for="t_022_coma">Coma  </label>
                                    </div>
                                </div>
                              </div>
                   <div class="mb-3">
                                <div>
                                   <label class="col-2" for="">Gangguan  neurologi</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_023" id="t_023_tidak" value="0">
                                        <label class="form-check-label" for="t_023_tidak">Tidak ada</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_023" id="t_023_ada" value="1">
                                        <label class="form-check-label" for="t_023_ada">Ada, sebutkan</label>
                                        <input type="text" id="v_21" name="v_21" style="width: 150px">
                                    </div>
                                    </div>
                                </div>



                   <div class="mb-3">
                              <div>
                                   <label class="col-2" for="">Mulut</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_024" id="t_024_mukosa" value="0">
                                        <label class="form-check-label" for="t_024_mukosa">Mukosa lembab</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_024" id="t_024_kering" value="1">
                                        <label class="form-check-label" for="t_024_kering">Mukosa kering</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_024" id="t_024_stomatiti" value="2">
                                        <label class="form-check-label" for="t_024_stomatiti">Stomatitis</label>
                                    </div>
                                </div>
                              </div>
                   <div class="mb-3">
                              <div>
                                   <label class="col-2" for="">Muntah</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_025" id="t_025_labio" value="0">
                                        <label class="form-check-label" for="t_025_labio">Labio/Palatoschiziz</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_025" id="t_025_pendarahan" value="1">
                                        <label class="form-check-label" for="t_025_pendarahan">Perdarahan gusi </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_025" id="t_025_lain" value="2">
                                        <label class="form-check-label" for="t_025_lain">Lain-lain</label>
                                        <input type="text"id="v_22" name="v_22" style="width: 100px">
                                    </div>
                                </div>
                              </div>


                   <div class="mb-3">
                                <div>
                                   <label class="col-2" for="">Residu</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_026" id="t_026_ada" value="0">
                                        <label class="form-check-label" for="t_026_ada">Ada </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_026" id="t_026_tidakada" value="1">
                                        <label class="form-check-label" for="t_026_tidakada">Tidak Ada</label>
                                    </div>
                                    </div>
                                </div>
                   <div class="mb-3">
                                <div>
                                   <label class="col-2" for="">Omphalitis</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_027" id="t_027_ada" value="0">
                                        <label class="form-check-label" for="t_027_ada">Ada</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_027" id="t_027_tidakada" value="1">
                                        <label class="form-check-label" for="t_027_tidakada">TIdak Ada</label>
                                    </div>
                                    </div>
                                </div>
                   <div class="mb-3">
                                <div>
                                   <label class="col-2" for="">Kembung</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_028" id="t_028_ada" value="o">
                                        <label class="form-check-label" for="t_028_ada">Ada </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_028" id="t_028_tidak" value="1">
                                        <label class="form-check-label" for="t_028_tidak">Tidak Ada</label>
                                    </div>
                                    </div>
                                </div>




           <div class="mb-5">
           <div class="row mb-3">
                                    <div class="col-md-10">
                              <div class="row text-align">
                                <div class="input-group mb-3" style="width: 320px">
                                  <span class="input-group-text">Peristaltik usus</span>
                                  <input type="number" class="form-control" id="v_23" name="v_23"autocomplete="off">
                                  <span class="input-group-text">x/menit</span>
                                </div>
                                <div class="input-group mb-3" style="width: 280px">
                                  <span class="input-group-text">Lingkar Perut</span>
                                  <input type="number" class="form-control" id="v_24" name="v_24" autocomplete="off">
                                  <span class="input-group-text">cm</span>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>






                    <div class="mb-1"><b>Eliminasi</b></div>
                    <div class="mb-3">
                              <div>
                                   <label class="col-2" for="">Defekasi Pengeluaran</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_029" id="t_029_anus" value="0">
                                        <label class="form-check-label" for="t_029_anus">Anus</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_029" id="t_029_stoma" value="1">
                                        <label class="form-check-label" for="t_029_stoma">Stoma</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_029" id="t_029_genitalia" value="2">
                                        <label class="form-check-label" for="t_029_genitalia">Genitalia</label>
                                    </div>
                                </div>
                              </div>




           <div class="mb-2">
           <div class="row mb-3">
                                    <div class="col-md-10">
                              <div class="row text-align">
                                <div class="input-group mb-3" style="width: 320px">
                                  <span class="input-group-text">Frekuensi</span>
                                  <input type="number" class="form-control" id="v_25" name="v_25" autocomplete="off">
                                  <span class="input-group-text">x/hari</span>
                                </div>
                                <div class="input-group mb-3" style="width: 280px">
                                  <span class="input-group-text">Konsistensi</span>
                                  <input type="number" class="form-control" id="v_26" name="v_26" autocomplete="off">
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>




                  <div class="mb-3">
                              <div>
                                   <label class="col-2" for="">Karakteristik feses</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_030" id="t_030_normal" value="0">
                                        <label class="form-check-label" for="t_030_normal">Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_030" id="t_030_cair" value="1">
                                        <label class="form-check-label" for="t_030_cair">Cair</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_030" id="t_030_hijau" value="2">
                                        <label class="form-check-label" for="t_030_hijau">Hijau</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_030" id="t_030_dempul" value="3">
                                        <label class="form-check-label" for="t_030_dempul">Dempul</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_030" id="t_030_terdapatdarah" value="4">
                                        <label class="form-check-label" for="t_030_terdapatdarah">Terdapat darah</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_030" id="t_030_lainlain" value="5">
                                        <label class="form-check-label" for="t_030_lainlain">Lain-lain</label>
                                    </div>
                                </div>
                              </div>




                    <div class="mb-3">
                              <div>
                                   <label class="col-2" for="">Urin : Pengeluaran</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_031" id="t_031_spontan" value="0">
                                        <label class="form-check-label" for="t_031_spontan">Spontan</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_031" id="t_031_keteter" value="1">
                                        <label class="form-check-label" for="t_031_keteter">Kateter Urinn</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_031" id="t_031_cystotomy" value="2">
                                        <label class="form-check-label" for="t_031_cystotomy">Cystotomy</label>
                                    </div>
                                </div>
                              </div>






                    <div class="mb-3">
                                <div>
                                   <label class="col-2" for="">Kelainan</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_032" id="t_032_tidakada" value="0">
                                        <label class="form-check-label" for="t_032_tidakada">Tidak ada</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_032" id="t_032_ada" value="1">
                                        <label class="form-check-label" for="t_032_ada">Ada, sebutkan</label>
                                        <input type="text" id="v_27" name="v_27" style="width: 150px">
                                    </div>
                                    </div>
                                </div>




            <div class="mb-5">
           <div class="row mb-3">
                                    <div class="col-md-10">
                              <div class="row text-align">
                                <div class="input-group mb-3" style="width: 320px">
                                  <span class="input-group-text">Diuresis</span>
                                  <input type="number" class="form-control" id="v_28" name="v_28" autocomplete="off">
                                  <span class="input-group-text">ml/jam</span>
                                </div>
                                <div class="input-group mb-3" style="width: 280px">
                                  <span class="input-group-text">Warna</span>
                                  <input type="text" class="form-control" id="v_29" name="v_29" autocomplete="off">
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>





                    <div class="mb-1"><b>Integumen</b></div>
                    <div class="mb-3">
                              <div>
                                   <label class="col-2" for="">Warna Kulit</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_033" id="t_033_normal" value="0">
                                        <label class="form-check-label" for="t_033_normal">Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_033" id="t_033_anemia" value="1">
                                        <label class="form-check-label" for="t_033_anemia">Anemia</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_033" id="t_033_ikterik" value="2">
                                        <label class="form-check-label" for="t_033_ikterik">Ikterik</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_033" id="t_033_mottled" value="3">
                                        <label class="form-check-label" for="t_033_mottled">Mottled</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_033" id="t_033_cyanosis" value="4">
                                        <label class="form-check-label" for="t_033_cyanosis">Cyanosis</label>
                                    </div>
                                </div>
                              </div>





                      <div class="mb-3">
                              <div>
                                   <label class="col-2" for="">Kelainan</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_034" id="t_034_tidak" value="0">
                                        <label class="form-check-label" for="t_034_tidak">Tidak ada</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_034" id="t_034_ada" value="1">
                                        <label class="form-check-label" for="t_034_ada">Ada</label>
                                    </div>
                                </div>
                              </div>




                      <div class="mb-3">
                              <div>
                                   <label class="col-2" for="">Luka</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_035" id="t_035_tidakada" value="0">
                                        <label class="form-check-label" for="t_035_tidakada">Tidak Ada</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_035" id="t_035_ada" value="1">
                                        <label class="form-check-label" for="t_035_ada">Ada</label>
                                    </div>
                                </div>
                              </div>





                      <div class="mb-5">
                              <div>
                                   <label class="col-2" for="">Turgor</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_036" id="t_036_elastis" value="0">
                                        <label class="form-check-label" for="t_036_elastis">ELastis</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_036" id="t_036_tidak" value="1">
                                        <label class="form-check-label" for="t_036_tidak">Tidak Elastis</label>
                                    </div>
                                </div>
                              </div>





                      <div class="mb-1"><b>Muskuloskeletal</b></div>
                      <div class="mb-3">
                                <div>
                                   <label class="col-2" for="">Kelainan tulang</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_037" id="t_037_tidak" value="0">
                                        <label class="form-check-label" for="t_037_tidak">Tidak ada</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_037" id="t_037_ada" value="1">
                                        <label class="form-check-label" for="t_037_ada">Ada</label>
                                    </div>
                                    </div>
                                </div>


                       <div class="mb-5">
                                <div>
                                   <label class="col-2" for="">Gerakan bayi</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_038" id="t_038_bebas" value="0">
                                        <label class="form-check-label" for="t_038_bebas">Bebas</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_038" id="t_038_terbatas" value="1">
                                        <label class="form-check-label" for="t_038_terbatas">Terbatas, sebutkan</label>
                                        <input type="text" id="v_30" name="v_30" style="width: 150px">
                                    </div>
                                    </div>
                                </div>





                         <div class="mb-1"><b>Genitalia</b></div>
                         <div class="mb-3">
                                <div>
                                   <label class="col-2" for="">Perempuan</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_039" id="t_039_labia" value="0">
                                        <label class="form-check-label" for="t_039_labia">Labia mayora menutup</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_039" id="t_039_belum" value="1">
                                        <label class="form-check-label" for="t_039_belum">Belum menutup</label>
                                    </div>
                                    </div>
                                </div>
                         <div class="mb-3">
                                <div>
                                   <label class="col-2" for="">Laki-laki</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_040" id="t_040_turun" value="0">
                                        <label class="form-check-label" for="t_040_turun">Testis turun</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_040" id="t_040_belum" value="1">
                                        <label class="form-check-label" for="t_040_belum">Belum turun</label>
                                    </div>
                                    </div>
                                </div>
                         <div class="mb-5">
                                <div>
                                   <label class="col-2" for="">Lubang Anus</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_041" id="t_041_tidakada" value="0">
                                        <label class="form-check-label" for="t_041_tidakada">Tidak ada</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_041" id="t_041_ada" value="1">
                                        <label class="form-check-label" for="t_041_ada">Ada</label>
                                    </div>
                                    </div>
                                </div>





                        <div class="mb-1"><b>Kelainan Bawaan</b></div>
                        <div class="mb-5">
                        <div class="row">
                          <div class="col-4">
                        <div class="mb-1 form-check">
                              <input  type="checkbox" class="form-check-input"  name="t_042" id="t_042_ompha">
                              <label class="form-check-label" for="t_042_ompha">Omphalocel</label>
                            </div>
                        <div class="mb-1 form-check">
                              <input type="checkbox" class="form-check-input"   name="t_043" id="t_043_gastro">
                              <label class="form-check-label" for="t_043_gastro">Gastroschizis</label>
                            </div>
                        <div class="mb-1 form-check">
                              <input  type="checkbox" class="form-check-input" name="t_044" id="t_044_hisprung">
                              <label class="form-check-label" for="t_044_hisprung" >Hisprung Disease</label>
                            </div>
                          </div>
                          <div class="col-4">
                        <div class="mb-1 form-check">
                              <input type="checkbox" class="form-check-input"  name="t_045" id="t_045_atresia">
                              <label class="form-check-label"  for="t_045_atresia">Atresia Ani</label>
                            </div>
                        <div class="mb-1 form-check">
                              <input  type="checkbox" class="form-check-input"  name="t_046" id="t_046_polidaktilli">
                              <label class="form-check-label" for="t_046_polidaktilli">Polidaktili</label>
                            </div>
                        <div class="mb-1 form-check">
                              <input  type="checkbox" class="form-check-input" name="t_047" id="t_047_sindaktili">
                              <label class="form-check-label" for="t_047_sindaktili" >Sindaktili </label>
                            </div>
                          </div>
                          <div class="col-4">
                        <div class="mb-1 form-check">
                              <input type="checkbox" class="form-check-input"  name="t_048" id="t_048_cepal">
                              <label class="form-check-label"  for="t_048_cepal">Cepal Hematoma</label>
                            </div>
                        <div class="mb-1 form-check">
                              <input  type="checkbox" class="form-check-input" name="t_049" id="t_049_downsyndrom">
                              <label class="form-check-label" for="t_049_downsyndrom" >Down Syndrom</label>
                            </div>
                        <div class="mb-1 form-check">
                              <input  type="checkbox" class="form-check-input" name="t_050" id="t_050_lainnya">
                              <label class="form-check-label" for="t_050_lainnya" >Lainnya</label>
                              <input type="text" id="v_31" name="v_31" style="width: 150px">
                            </div>
                          </div>
                          </div>
                        </div>




                  <div class="mb-1"><b>Refleks-refleks</b></div>
                   <div class="mb-1">Inspeksi</div>
                   <div class="mb-5">
                                <div>
                                   <label class="col-3" for="">Sucking (menghisap)</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_051" id="t_051_positif" value="0">
                                        <label class="form-check-label" for="t_051_positif">POsitif</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_051" id="t_051_negatif" value="1">
                                        <label class="form-check-label" for="t_051_negatif">Negatif</label>
                                    </div>
                                </div>
                                <div>
                                   <label class="col-3" for="">Rooting (mencari putting) </label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_052" id="t_052_positif" value="0">
                                        <label class="form-check-label" for="t_052_positif">POsitif</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_052" id="t_052_negatif" value="1">
                                        <label class="form-check-label" for="t_052_negatif">Negatif</label>
                                    </div>
                                </div>
                                <div>
                                   <label class="col-3" for="">Palmar Grap (menggenggam tangan) </label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_053" id="t_053_positif" value="0">
                                        <label class="form-check-label" for="t_053_positif">POsitif</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_053" id="t_053_negatif" value="1">
                                        <label class="form-check-label" for="t_053_negatif">Negatif</label>
                                    </div>
                                </div>
                                <div>
                                   <label class="col-3" for="">Plantar Grap (menggenggam kaki) </label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_054" id="t_054_positif" value="0">
                                        <label class="form-check-label" for="t_054_positif">POsitif</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_054" id="t_054_negatif" value="1">
                                        <label class="form-check-label" for="t_054_negatif">Negatif</label>
                                    </div>
                                </div>
                                <div>
                                   <label class="col-3" for="">Moro (terkejut) </label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_055" id="t_055_positif" value="0">
                                        <label class="form-check-label" for="t_055_positif">POsitif</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_055" id="t_055_negatif" value="1">
                                        <label class="form-check-label" for="t_055_negatif">Negatif</label>
                                    </div>
                                </div>
                                <div>
                                   <label class="col-3" for="">Tonic Neck (tonus leher) </label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_056" id="t_056_positif" value="0">
                                        <label class="form-check-label" for="t_056_positif">POsitif</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_056" id="t_056_negatif" value="1">
                                        <label class="form-check-label" for="t_056_negatif">Negatif</label>
                                    </div>
                                </div>
                                <div>
                                   <label class="col-3" for="">Stapping (seperti berjalan) </label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_057" id="t_057_positif" value="0">
                                        <label class="form-check-label" for="t_057_positif">POsitif</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_057" id="t_057_negatif" value="1">
                                        <label class="form-check-label" for="t_057_negatif">Negatif</label>
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