

<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Lanjutan 4</title>





    <style> 
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
        $(function(){
            fungsi1_disabled();
            $("#t_011_tidak").click(fungsi1_disabled);
        });
        $(function(){
            fungsi1_enable();
            $("#t_011_ya").click(fungsi1_enable);
        });
        
        function fungsi1_disabled(){
            if (this.click){
                $("#v_01").attr("disabled", true);
                $("#v_01").val("");
            } else{
                $("#v_01").removeAttr("disabled");
            }
        }
        function fungsi1_enable(){
            $("#v_01").attr("disabled", true);
            if (this.click){
                $("#v_01").removeAttr("disabled");
                $("#v_01").focus();
            } else{
                $("#v_01").attr("disabled", true);
            }
        }
    </script>




  </head>
  <body>



    <div class="container mt-3" >

      <a href="<?= site_url('dashboard/formulir') ?>" class="btn btn-danger"> ← Back</a>


      <form action="<?php echo site_url('dashboard/simpan') ?>" method="post">
        <input type="hidden" id="FORM" name="FORM" value="F5">


      <h1 style="text-align: right;">Lanjutan 4</h1>



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
          </tr>
          </tbody>
      </table>




      <br><div class="mb-1"><b>SKRINING PERENCANAAN PULANG/DISCHARGE PLANNING UNTUK PELAYANAN MPP</b></div>


        <table class="table table-bordered mb-0" style="border: 1px solid black;">
          <tbody>

            <tr style="text-align: center;">
              <td><b>Kriteria Seleksi </b></td>
              <td><b>Ya </b></td>
              <td><b>Tidak </b></td>
              <td><b>Kriteria Seleksi </b></td>
              <td><b>Ya </b></td>
              <td><b>Tidak </b></td>
            </tr>
                

            <tr>
              <td>Pasien dengan kognitif rendah</td>
              <td style="text-align: center;"><div>
                                        <input class="form-check-input" for="t_01_ya" type="radio" id="t_01_ya" name="t_01" value="0">
                                    </div>
                        </td>
              <td style="text-align: center;"><div>
                                        <input class="form-check-input" for="t_01_tidak" type="radio" id="t_01_tidak" name="t_01" value="1">
                                    </div>
                        </td>
              <td>Riwayat gangguan mental, bunuh diri, dll</td>
              <td style="text-align: center;"><div>
                                        <input class="form-check-input" for="t_02_ya" type="radio" id="t_02_ya" name="t_02" value="0">
                                    </div>
                        </td>
              <td style="text-align: center;"><div>
                                        <input class="form-check-input" for="t_02_tidak" type="radio" id="t_02_tidak" name="t_02" value="1">
                                    </div>
                        </td>
            </tr>




            <tr>
              <td>Pasien dengan resiko tinggi</td>
              <td style="text-align: center;"><div>
                                        <input class="form-check-input" for="t_03_ya" type="radio" id="t_03_ya" name="t_03" value="0">
                        </td>
              <td style="text-align: center;"><div >
                                        <input class="form-check-input" for="t_03_tidak" type="radio" id="t_03_tidak" name="t_03" value="1">
                                    </div>
                        </td>
              <td>Pasien readmisi RS dlm 1 bulan diagnose sama</td>
              <td style="text-align: center;"><div >
                                        <input class="form-check-input" for="t_04_ya" type="radio" id="t_04_ya" name="t_04" value="0">
                                    </div>
                        </td>
              <td style="text-align: center;"><div >
                                        <input class="form-check-input" for="t_04_tidak" type="radio" id="t_04_tidak" name="t_04" value="1">
                                    </div>
                        </td>
            </tr>




            <tr>
              <td>Kasus dengan penyakit kronik > 1 diagnosa</td>
              <td style="text-align: center;"><div>
                                        <input class="form-check-input" for="t_05_ya" type="radio" id="t_05_ya" name="t_05" value="0">
                                    </div>
                        </td>
              <td style="text-align: center;"><div>
                                        <input class="form-check-input" for="t_05_tidak" type="radio" id="t_05_tidak" name="t_05" value="1">
                                    </div>
                        </td>
              <td>Perkiraan asuhan dengan biaya finansial tinggi</td>
              <td style="text-align: center;"><div>
                                       <input class="form-check-input" for="t_06_ya" type="radio" id="t_06_ya" name="t_06" value="0">
                                    </div>
                        </td>
              <td style="text-align: center;"><div>
                                        <input class="form-check-input" for="t_06_tidak" type="radio" id="t_06_tidak" name="t_06" value="1">
                                    </div>
                        </td>
            </tr>




            <tr>
              <td>Status fungsional rendah, kebutuhan ADL tinggi</td>
              <td style="text-align: center;"><div>
                                        <input class="form-check-input" for="t_07_ya" type="radio" id="t_07_ya" name="t_07" value="0">
                                    </div>
                        </td>
              <td style="text-align: center;"><div>
                                        <input class="form-check-input" for="t_07_tidak" type="radio" id="t_07_tidak" name="t_07" value="1">
                                    </div>
                        </td>
              <td>Kasus yang melebihi rata-rata hari rawat</td>
              <td style="text-align: center;"><div>
                                        <input class="form-check-input" for="t_08_ya" type="radio" id="t_08_ya" name="t_08" value="0">
                                    </div>
                        </td>
              <td style="text-align: center;"><div>
                                        <input class="form-check-input" for="t_08_tidak" type="radio" id="t_08_tidak" name="t_08" value="1">
                                    </div>
                        </td>
            </tr>




            <tr>
              <td>Pasien dgn Riwayat penggunaan peralatan medis</td>
              <td style="text-align: center;"><div>
                                        <input class="form-check-input" for="t_09_ya" type="radio" id="t_09_ya" name="t_09" value="0">
                                    </div>
                        </td>
              <td style="text-align: center;"><div>
                                        <input class="form-check-input" for="t_09_tidak" type="radio" id="t_09_tidak" name="t_09" value="1">
                                    </div>
                        </td>
              <td>Pasien dengan complain tinggi</td>
              <td style="text-align: center;"><div>
                                        <input class="form-check-input" for="t_010_ya" type="radio" id="t_010_ya" name="t_010" value="0">
                                    </div>
                        </td>
              <td style="text-align: center;"><div>
                                        <input class="form-check-input" for="t_010_tidak" type="radio" id="t_010_tidak" name="t_010" value="1">
                                    </div>
                        </td>
            </tr>




            <tr>
              <td>
                <div>Dirujuk ke
                  <input type="text" id="v_01" name="v_01" style="width: 200px">
                </div>
                </td>
              <td style="text-align: center;"><div>
                                        <input class="form-check-input" for="t_011_ya" type="radio" id="t_011_ya" name="t_011" value="0">
                                    </div>
                        </td>
              <td style="text-align: center;"><div>
                                        <input class="form-check-input" for="t_011_tidak" type="radio" id="t_011_tidak" name="t_011" value="1">
                                    </div>
                        </td>
              <td>Pasien butuh kontinuitas pelayanan</td>
              <td style="text-align: center;"><div>
                                        <input class="form-check-input" for="t_012_ya" type="radio" id="t_012_ya" name="t_012" value="0">
                                    </div>
                        </td>
              <td style="text-align: center;"><div>
                                        <input class="form-check-input" for="t_012_tidak" type="radio" id="t_012_tidak" name="t_012" value="1">
                                    </div>
                        </td>
            </tr>
            



            <tr>
              <td colspan="4">Lain-lain</td>
              <td colspan="2"></td>
            </tr>

          </tbody>
        </table>




                     <br><br><div class="mb-1"><b>DAFTAR MASALAH KEPERAWATAN</b></div>

                     <table class="table table-bordered md-0" style="border: 1px solid black;">
                       <tbody>
                         

                         <tr style="text-align: center;">
                           <td><b>No</b></td>
                           <td><b>Tanggal Ditemukan</b></td>
                           <td><b>Diagnosis Keperawatan</b></td>
                           <td><b>Tanggal Teratasi</b></td>
                           <td><b>No</b></td>
                           <td><b>Tanggal Ditemukan</b></td>
                           <td><b>Diagnosis Keperawatan</b></td>
                           <td><b>Tanggal Teratasi</b></td>
                         </tr>



                         <tr>
                           <td style="text-align: center;">1</td>
                           <td><input type="date" class="form-control" id="v_02" name="v_02" style="width: 140px"></td>
                           <td>Anemia</td>
                           <td><input type="date" class="form-control" id="v_03" name="v_03" style="width: 140px"></td>
                           <td style="text-align: center;">15</td>
                           <td><input type="date" class="form-control" id="v_04" name="v_04" style="width: 140px"></td>
                           <td>Menyusui tidak efektif</td>
                           <td><input type="date" class="form-control" id="v_05" name="v_05" style="width: 140px"></td>
                         </tr>



                         <tr>
                           <td style="text-align: center;">2</td>
                           <td><input type="date" class="form-control" id="v_06" name="v_06" style="width: 140px"></td>
                           <td>Bersihan jalan napas tidak efektif</td>
                           <td><input type="date" class="form-control" id="v_07" name="v_07" style="width: 140px"></td>
                           <td style="text-align: center;">16</td>
                           <td><input type="date" class="form-control" id="v_08" name="v_08" style="width: 140px"></td>
                           <td>Gangguan eliminasi urin</td>
                           <td><input type="date" class="form-control" id="v_09" name="v_09" style="width: 140px"></td>
                         </tr>



                         <tr>
                           <td style="text-align: center;">3</td>
                           <td><input type="date" class="form-control" id="v_10" name="v_10" style="width: 140px"></td>
                           <td>DefisitNutrisi</td>
                           <td><input type="date" class="form-control" id="v_11" name="v_11" style="width: 140px"></td>
                          <td style="text-align: center;">17</td>
                           <td><input type="date" class="form-control" id="v_12" name="v_12" style="width: 140px"></td>
                           <td>Risiko ketidakseimbangan cairan</td>
                           <td><input type="date" class="form-control" id="v_13" name="v_13" style="width: 140px"></td>
                         </tr>



                         <tr>
                           <td style="text-align: center;">4</td>
                           <td><input type="date" class="form-control" id="v_14" name="v_14" style="width: 140px"></td>
                           <td>Diare</td>
                           <td><input type="date" class="form-control"  id="v_15" name="v_15" style="width: 140px"></td>
                           <td style="text-align: center;">18</td>
                           <td><input type="date" class="form-control"  id="v_16" name="v_16" style="width: 140px"></td>
                           <td>Risiko ketidakseimbangan elektrolit</td>
                           <td><input type="date" class="form-control" id="v_17" name="v_17" style="width: 140px"></td>
                         </tr>




                         <tr> 
                           <td style="text-align: center;">5</td>
                           <td><input type="date" class="form-control" id="v_18" name="v_18" style="width: 140px"></td>
                           <td>Gangguan eliminasi urin</td>
                           <td><input type="date" class="form-control" id="v_19" name="v_19" style="width: 140px"></td>
                           <td style="text-align: center;">19</td>
                           <td><input type="date" class="form-control" id="v_20" name="v_20" style="width: 140px"></td>
                           <td>Risiko ikterus neonatus</td>
                           <td><input type="date" class="form-control" id="v_21" name="v_21" style="width: 140px"></td>
                         </tr>




                         <tr>
                           <td style="text-align: center;">6</td>
                           <td><input type="date" class="form-control" id="v_22" name="v_22" style="width: 140px"></td>
                           <td>Gangguan integritas kulit/jaringan</td>
                           <td><input type="date" class="form-control" id="v_23" name="v_23" style="width: 140px"></td>
                           <td style="text-align: center;">20</td>
                           <td><input type="date" class="form-control" id="v_24" name="v_24" style="width: 140px"></td>
                           <td>Risiko infeksi</td>
                           <td><input type="date" class="form-control" id="v_25" name="v_25" style="width: 140px"></td>
                         </tr>



                         <tr>
                           <td style="text-align: center;">7</td>
                           <td><input type="date" class="form-control" id="v_26" name="v_26" style="width: 140px"></td>
                           <td>Gangguan pertukaran gas</td>
                           <td><input type="date" class="form-control" id="v_27" name="v_27" style="width: 140px"></td>
                           <td style="text-align: center;">21</td>
                           <td><input type="date" class="form-control" id="v_28" name="v_28" style="width: 140px"></td>
                           <td>Risiko jatuh</td>
                           <td><input type="date" class="form-control" id="v_29" name="v_29" style="width: 140px"></td>
                         </tr>



                         <tr>
                           <td style="text-align: center;">8</td>
                           <td><input type="date" class="form-control" id="v_30" name="v_30" style="width: 140px"></td>
                           <td>Hipervolemia</td>
                           <td><input type="date" class="form-control" id="v_31" name="v_31" style="width: 140px"></td>
                          <td style="text-align: center;">22</td>
                           <td><input type="date" class="form-control" id="v_32" name="v_32" style="width: 140px"></td>
                           <td>Risiko termoregulasi tidak efektif</td>
                           <td><input type="date" class="form-control" id="v_33" name="v_33" style="width: 140px"></td>
                         </tr>



                         <tr>
                           <td style="text-align: center;">9</td>
                           <td><input type="date" class="form-control" id="v_34" name="v_34" style="width: 140px"></td>
                           <td>Hipovolemia</td>
                           <td><input type="date" class="form-control" id="v_35" name="v_35" style="width: 140px"></td>
                           <td style="text-align: center;">23</td>
                           <td><input type="date" class="form-control" id="v_36" name="v_36" style="width: 140px"></td>
                           <td>Risiko gangguan integritas kulit</td>
                           <td><input type="date" class="form-control" id="v_37" name="v_37" style="width: 140px"></td>
                         </tr>



                         <tr>
                           <td style="text-align: center;">10</td>
                           <td><input type="date" class="form-control" id="v_38" name="v_38"  style="width: 140px"></td>
                           <td>Ikterik neonatus</td>
                           <td><input type="date" class="form-control" id="v_39" name="v_39" style="width: 140px"></td>
                          <td style="text-align: center;">24</td>
                           <td><input type="date" class="form-control" id="v_40" name="v_40" style="width: 140px"></td>
                           <td>Risiko perfusi perifer tidak efektif</td>
                           <td><input type="date" class="form-control" id="v_41" name="v_41" style="width: 140px"></td>
                         </tr>



                         <tr>
                           <td style="text-align: center;">11</td>
                           <td><input type="date" class="form-control" id="v_42" name="v_42" style="width: 140px"></td>
                           <td>Hipotermia</td>
                           <td><input type="date" class="form-control" id="v_43" name="v_43" style="width: 140px"></td>
                          <td style="text-align: center;">25</td>
                           <td><input type="date" class="form-control" id="v_44" name="v_44" style="width: 140px"></td>
                           <td>Risiko konstipasi</td>
                           <td><input type="date" class="form-control" id="v_45" name="v_45" style="width: 140px"></td>
                         </tr>



                         <tr>
                           <td style="text-align: center;">12</td>
                           <td><input type="date" class="form-control" id="v_46" name="v_46" style="width: 140px"></td>
                           <td>Hipertermia</td>
                           <td><input type="date" class="form-control" id="v_47" name="v_47" style="width: 140px"></td>
                           <td style="text-align: center;">26</td>
                           <td><input type="date" class="form-control" id="v_48" name="v_48" style="width: 140px"></td>
                           <td>Kurang pengetahuan orangtua</td>
                           <td><input type="date" class="form-control" id="v_49" name="v_49" style="width: 140px"></td>
                         </tr>


                         <tr>
                           <td style="text-align: center;">13</td>
                           <td><input type="date" class="form-control" id="v_50" name="v_50" style="width: 140px"></td>
                           <td>Nyeri akut</td>
                           <td><input type="date" class="form-control" id="v_51" name="v_51" style="width: 140px"></td>
                          <td style="text-align: center;">27</td>
                           <td><input type="date" class="form-control" id="v_52" name="v_52" style="width: 140px"></td>
                           <td>
                             <label>Lain-lain</label>
                             <input type="text" class="form-control" id="v_53" name="v_53" style="width: 200px">
                           </td>
                           <td><input type="date" class="form-control" id="v_54" name="v_54" style="width: 140px"></td>
                         </tr>




                         <tr>
                           <td style="text-align: center;">14</td>
                           <td><input type="date" class="form-control" id="v_55" name="v_55" style="width: 140px"></td>
                           <td>Pola napas tidak efektif</td>
                           <td><input type="date" class="form-control" id="v_56" name="v_56" style="width: 140px"></td>
                           <td style="text-align: center;">28</td>
                           <td><input type="date" class="form-control" id="v_57" name="v_57" style="width: 140px"></td>
                           <td>
                             <label>Lain-lain</label>
                             <input type="text" class="form-control" id="v_58" name="v_58" style="width: 200px">
                           </td>
                           <td><input type="date" class="form-control" id="v_59" name="v_59" style="width: 140px"></td>
                         </tr>

                       </tbody>
                     </table>




                     <table class="table table-bordered mt-3" style="border: 1px solid black;">
                        <tbody>


                          <tr style="text-align: center;">
                            <br><td rowspan="2"><br><br><br><br><br><br><b>Nama dan tanda tangan Perawat/Bidan</b></td>
                            <td><b>Perawat/Bidan Yang Melakukan Pengkajian</b></td>
                            <td><b>Perawat/Bidan Yang Memverifikasi</b></td>
                          </tr>


                          <tr style="text-align: center;">
                            <td>
                              <div id="sig2"></div>
                            </td>
                            <td>
                              <div id="sig3"></div>
                            </td>
                          </tr>


                          <tr style="text-align: center;">
                            <td><b>Tanggal/Jam</b></td>
                            <td>
                              <input type="date" id="v_60" name="v_60"> <input type="time" id="v_61" name="v_61">
                            </td>
                            <td>
                              <input type="date" id="v_62" name="v_62"> <input type="time" id="v_63" name="v_63">
                            </td>
                          </tr>
            



          </tbody>
        </table>



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