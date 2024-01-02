

<!doctype html>
<html lang="en">
  <head>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Lanjutan 3</title>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="js/jquery.signature.js"></script>



    <script>
    $(function() {
       $('input.jumlah').click(function() {

            var nilai1 = parseInt($('input[name="t_01"]:checked').val());
            var nilai2 = parseInt($('input[name="t_02"]:checked').val());
            var nilai3 = parseInt($('input[name="t_03"]:checked').val());
            var nilai4 = parseInt($('input[name="t_04"]:checked').val());
            var nilai5 = parseInt($('input[name="t_05"]:checked').val());
            var nilai6 = parseInt($('input[name="t_06"]:checked').val());

            if(isNaN(nilai1)){
                nilai1 = 0;
            } 

            if(isNaN(nilai2)){
                nilai2 = 0;
            } 

            if(isNaN(nilai3)){
                nilai3 = 0;
            } 

            if(isNaN(nilai4)){
                nilai4 = 0;
            } 

            if(isNaN(nilai5)){
                nilai5 = 0;
            } 

            if(isNaN(nilai6)){
                nilai6 = 0;
            } 

            $('#t_07').val(nilai1 + nilai2 + nilai3 + nilai4 + nilai5 + nilai6);
       });
    });
 </script>


 <script>
    $(function() {
       $('input.jumlah').click(function() {

            var nilai1 = parseInt($('input[name="t_08"]:checked').val());
            var nilai2 = parseInt($('input[name="t_09"]:checked').val());
            var nilai3 = parseInt($('input[name="t_010"]:checked').val());
            var nilai4 = parseInt($('input[name="t_011"]:checked').val());

            if(isNaN(nilai1)){
                nilai1 = 0;
            } 

            if(isNaN(nilai2)){
                nilai2 = 0;
            } 

            if(isNaN(nilai3)){
                nilai3 = 0;
            } 

            if(isNaN(nilai4)){
                nilai4 = 0;
            } 

            $('#t_012').val(nilai1 + nilai2 + nilai3 + nilai4 );
       });
    });
 </script>



 <script>
    $(function() {
       $('input.jumlah').click(function() {

            var nilai1 = parseInt($('input[name="t_015"]:checked').val());
            var nilai2 = parseInt($('input[name="t_016"]:checked').val());
            var nilai3 = parseInt($('input[name="t_017"]:checked').val());
            var nilai4 = parseInt($('input[name="t_018"]:checked').val());
            var nilai5 = parseInt($('input[name="t_019"]:checked').val());

            if(isNaN(nilai1)){
                nilai1 = 0;
            } 

            if(isNaN(nilai2)){
                nilai2 = 0;
            } 

            if(isNaN(nilai3)){
                nilai3 = 0;
            } 

            if(isNaN(nilai4)){
                nilai4 = 0;
            } 

            if(isNaN(nilai5)){
                nilai5 = 0;
            } 

            $('#t_020').val(nilai1 + nilai2 + nilai3 + nilai4 +nilai5);
       });
    });
 </script>



 <script>
    $(function() {
       $('input.jumlah').click(function() {

            var nilai1 = parseInt($('input[name="t_021"]:checked').val());
            var nilai2 = parseInt($('input[name="t_022"]:checked').val());
            var nilai3 = parseInt($('input[name="t_023"]:checked').val());
            var nilai4 = parseInt($('input[name="t_024"]:checked').val());
            var nilai5 = parseInt($('input[name="t_025"]:checked').val());
            var nilai6 = parseInt($('input[name="t_026"]:checked').val());
            var nilai7 = parseInt($('input[name="t_027"]:checked').val());

            if(isNaN(nilai1)){
                nilai1 = 0;
            } 

            if(isNaN(nilai2)){
                nilai2 = 0;
            } 

            if(isNaN(nilai3)){
                nilai3 = 0;
            } 

            if(isNaN(nilai4)){
                nilai4 = 0;
            } 

            if(isNaN(nilai5)){
                nilai5 = 0;
            } 

            if(isNaN(nilai6)){
                nilai6 = 0;
            } 

            if(isNaN(nilai7)){
                nilai7 = 0;
            } 

            $('#t_028').val(nilai1 + nilai2 + nilai3 + nilai4 + nilai5 + nilai6 + nilai7);
       });
    });
 </script>







  </head>
  <body>


    <div class="container mt-3" >
      <a href="<?= site_url('dashboard/formulir') ?>" class="btn btn-danger"> ← Back</a>

       <form action="<?php echo site_url('dashboard/simpan') ?>" method="post">
        <input type="hidden" id="FORM" name="FORM" value="F4">


      <h1 style="text-align: right;">Lanjutan 3</h1>



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



       <br><div class="mb-1"><b>SKRINING NYERI - NIPS (Neonatal Infant Pain Score)</b></div>

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
                        <td><div class="form-check form-check-inline">
                                        <input class="form-check-input jumlah" type="radio" id="t_01_ototwajahrileks" value="0" name="t_01"></td>
                      </tr>

                      <tr>
                        <td>Otot wajah tenang, alis berkerut, rahang dagu mengunci</td>
                        <td style="text-align: center;">1</td>
                        <td><div class="form-check form-check-inline">
                                        <input class="form-check-input jumlah" type="radio" id="t_01_ototwajahtenang" value="1" name="t_01"></td>
                      </tr>


                      <tr>
                        <td rowspan="3">TANGISAN</td>
                        <td>Tenang, tidak menangis</td>
                        <td style="text-align: center;">0</td>
                        <td><input class="form-check-input jumlah" type="radio" id="t_02_tenang" value="1" name="t_02"></td>
                      </tr>

                      <tr>
                        <td>Mengerang, sebentar-sebentar menangis</td>
                        <td style="text-align: center;">1</td>
                        <td><input class="form-check-input jumlah" type="radio" id="t_02_mengerang" value="1" name="t_02"></td>
                      </tr>

                      <tr>
                        <td>Terus-menerus menangis, menangis kencang, melengking
                            (menangis diam dapat dimasukkan dalam skor ini jika bayi terintubasi dengan dasar penilainannya pergerakan mulut dan wajah)
                        </td>
                        <td style="text-align: center;">2</td>
                        <td><input class="form-check-input jumlah" type="radio" id="t_02_terusmemangis" value="2" name="t_02"></td>
                      </tr>


                      <tr>
                        <td rowspan="2">POLA NAPAS</td>
                        <td>Rileks, napas regular</td>
                        <td style="text-align: center;">0</td>
                        <td><input class="form-check-input jumlah" type="radio" id="t_03_rileks" value="0" name="t_03"></td>
                      </tr>

                      <tr>
                        <td>Pola napas berubah: tidak teratur, lebih cepat dari biasanya, tersedak, menahan napas</td>
                        <td style="text-align: center;">1</td>
                        <td><input class="form-check-input jumlah" type="radio" id="t_03_tidakteratur" value="1" name="t_03"></td>
                      </tr>


                      <tr>
                        <td rowspan="2">TANGAN</td>
                        <td>Rileks, otot tangan tidak kaku, kadang bergerak tidak beraturan</td>
                        <td style="text-align: center;">0</td>
                        <td><input class="form-check-input jumlah" type="radio" id="t_04_tangantidakkaku" value="0" name="t_04"></td>
                      </tr>

                      <tr>
                        <td>Fleksi/ekstensi yang kaku, meluruskan tangan tapi dengan cepat melakukan fleksi, ekstensi yang kaku</td>
                        <td style="text-align: center;">1</td>
                        <td><input class="form-check-input jumlah" type="radio" id="t_04_fleksi" value="1" name="t_04"></td>
                      </tr>


                      <tr>
                        <td rowspan="2">KAKI</td>
                        <td>Rileks, otot tangan tidak kaku, kadang kaki bergerak tidak beraturan</td>
                        <td style="text-align: center;">0</td>
                        <td><input class="form-check-input jumlah" type="radio" id="t_05_tidakkaku" value="0" name="t_05"></td>
                      </tr>

                      <tr>
                        <td>Fleksi/ekstensi yang kaku, meluruskan kaki tapi dengan cepat melakukan fleksi, ekstensi yang kaku</td>
                        <td style="text-align: center;">1</td>
                        <td><input class="form-check-input jumlah" type="radio" id="t_05_fleksi" value="1" name="t_05"></td>
                      </tr>

                      <tr>
                        <td rowspan="2">KESADARAN</td>
                        <td>Tidur pulas atau cepat bangun, alert dan tenang</td>
                        <td style="text-align: center;">0</td>
                        <td><input class="form-check-input jumlah" type="radio" id="t_06_pulas" value="0" name="t_06"></td>
                      </tr>

                      <tr>
                        <td>Rewel, gelisah dan meronta-ronta</td>
                        <td style="text-align: center;">1</td>
                        <td><input class="form-check-input jumlah" type="radio" id="t_06_rewel" value="1" name="t_06"></td>
                      </tr>


                      <tr style="text-align: center;">
                        <td colspan="2"><b>NILAI TOTAL SKOR 1-7</b></td>
                        <td colspan="2">
                          <input style="width: 50px" type="text" id="t_07" readonly> /7
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
                          <br><br><label for="">2.  Apakah terdapat penurunan BB selama satu bulan terakhir? (berdasarkan penilaian objektif data BB bila ada/penilaian subjektif dari orangtua pasien ATAU untuk bayi < 1 tahun : BB naik selama 3 bulan terakhir)</label>
                          <br><label for="">a. Tidak</label>
                          <br><label for="">b. Ya</label>
                          <br><br><label for="">3.  Apakah terdapat salah satu dari kondisi berikut?</label>
                          <br><label for="">• Diare ≥ 5x sehari dan atau muntah lebih dari 3x sehari dalam seminggu terakhir</label>
                          <br><label for="">• Asupan makanan berkurang selama satu minggu terakhir</label>
                          <br><label for="">a. Tidak</label>
                          <br><label for="">b. Ya</label>
                          <br><br><label for="">4.  Apakah terdapat penyakit atau keadaan yang mengakibatkan pasien berisiko mengalami malnutrisi ? (lihat tabel di bawah)</label>
                          <br><label for="">a. Tidak</label>
                          <br><label for="">b. Ya</label>
                        </td>
                        <td>
                          <label for=""></label>
                          <br><label for="">0</label>
                          <br><label for="">1</label>
                          <br><label for=""></label>
                          <br><label for=""></label>
                          <br><br><label for="">0</label>
                          <br><label for="">1</label>
                          <br><label for=""></label>
                          <br><label for=""></label>
                          <br><label for=""></label>
                          <br><br><label for="">0</label>
                          <br><label for="">1</label>
                          <br><label for=""></label>
                          <br><br><label for="">0</label>
                          <br><label for="">2</label>
                        </td>
                        <td>
                          <label for=""></label>
                          <br><div class="form-check">
                                                <input class="form-check-input jumlah" type="radio" value="0" id="t_08_tidak" name="t_08">
                                            </div>
                          <div class="form-check">
                                                <input class="form-check-input jumlah" type="radio" value="1" id="t_08_ya" name="t_08">
                                            </div>
                          <br><label for=""></label>
                          <br><label for=""></label>
                          <br><div class="form-check">
                                                <input class="form-check-input jumlah" type="radio" value="0" id="t_09_tidak" name="t_09">
                                            </div>
                          <div class="form-check">
                                                <input class="form-check-input jumlah" type="radio" value="1" id="t_09_ya" name="t_09">
                                            </div>
                          <br><label for=""></label>
                          <br><label for=""></label>
                          <br><br><div class="form-check">
                                                <input class="form-check-input jumlah" type="radio" value="0" id="t_010_tidak" name="t_010">
                                            </div>
                          <div class="form-check">
                                                <input class="form-check-input jumlah" type="radio" value="1" id="t_010_ya" name="t_010">
                                            </div>
                          <br><label for=""></label>
                          <br><div class="form-check">
                                                <input class="form-check-input jumlah" type="radio" value="0" id="t_011_tidak" name="t_011">
                                            </div>
                          <div class="form-check">
                                                <input class="form-check-input jumlah" type="radio" value="2" id="t_011_ya" name="t_011">
                                            </div>
                        </td>
                      </tr>


                      <tr>
                        <td style="text-align: right;"><b>Total Skor </b></td>
                        <td colspan="2" style="text-align: center;"><input style="width: 50px" type="text" id="t_012" readonly />
                        </td>
                      </tr>
          
                    </tbody>
                  </table>




                  <br><div class="mb-1">Daftar penyakit/ keadaan yang berisiko mengakibatkan malnutrisi:</div>
                  <table class="table table-bordered mb-0" style="border: 1px solid black;">
                    <tbody>
                      
                      <tr>
                        <td>
                          <label for="">• Diare kronik (lebih dari 2 minggu)</label>
                          <br><label for="">• (Tersangka) penyakit jantung bawaan</label>
                          <br><label for="">• (Tersangka) infeksi HIV</label>
                          <br><label for="">• (Tersangka) kanker</label>
                          <br><label for="">• Penyakit hatik ronik</label>
                          <br><label for="">• Penyakit ginjal kronik</label>
                          <br><label for="">• TB Paru</label>
                          <br><label for="">• Luka Bakar Luas</label>
                          <br><label for="">• Lain-lain  (berdasarkan pertimbangan dokter)</label>
                          <input type="text" id="v_01" name="v_01" style="width: 300px">
                        </td>

                        <td>
                          <label for="">• Kelainan anatomi daerah mulut yang mengakibatkan kesulitan makan (misal: bibir sumbing)</label>
                          <br><label for="">• Trauma </label>
                          <br><label for="">• Kelainan metabolic bawaan (inborn error metabolism)</label>
                          <br><label for="">• Retardasi mental</label>
                          <br><label for="">• Keterlambatan perkembangan</label>
                          <br><label for="">• Rencana/ paska operasi mayor (misalnya laparatomi, torakotomi)</label>
                          <br><label for="">• Terpasang stoma</label>
                        </td>
                      </tr>
                    </tbody>
                  </table>




                  <div class="mb-1">Interpretasi Skor:</div>
                  <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_013" id="t_013_rendah" value="0">
                                        <label class="form-check-label" for="t_013_rendah"><b>0 Risiko Rendah</b></label>
                                    </div>
                                     <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_013" id="t_013_sedang" value="1">
                                        <label class="form-check-label" for="t_013_sedang"><b>1-3 Risiko Sedang</b></label>
                                    </div>
                                     <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_013" id="t_013_berat" value="2">
                                        <label class="form-check-label" for="t_013_berat"><b>4-5 Risiko Berat</b></label>
                                    </div>
                  <div class="mb-1">(Bila pasien berisiko malnutrisi sedang dan berat, selanjutnya dilakukan pengkajian lanjut oleh ahli gizi)</div>
                  <div class="mb-4">
                                <div>
                                   <label class="col-4" for="">Sudah dibaca dan diketahui oleh Nutrisionis </label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_014" id="t_014_ya" value="0">
                                        <label class="form-check-label" for="t_014_ya">Ya, tanggal&jam</label>
                                        <input type="date" id="v_02" name="v_02"> <input type="time" id="v_03" name="v_03">
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="t_014" id="t_014_tidak" value="1">
                                        <label class="form-check-label" for="t_014_tidak">Tidak</label>
                                        Nama/paraf Dietisen: <input type="text" id="v_04" name="v_04" style="width: 100px"> 
                                    </div>
                                    </div>
                                </div>





                  <div class="mb-1">DOWN SCORE</div>
                  <table class="table table-bordered mb-0" style="border: 1px solid black;">
                    <tbody>

                      <tr style="text-align: center;">
                        <td>Nilai</td>
                        <td>0</td>
                        <td>1</td>
                        <td>2</td>
                      </tr>



                      <tr>
                        <td>Frekuensi napas</td>
                        <td>
                          <label>< 60 x/menit</label>
                          <input type="radio" class="form-check-input jumlah" name="t_015" id="t_015_<60" for="t_015_<60" value="0" >                          
                        </td>
                        <td>
                          <label>60-80 x/menit</label>
                          <input type="radio" class="form-check-input jumlah" name="t_015" id="t_015_6080" for="t_015_6080" value="1" >                          
                        </td>
                        <td>
                          <label>>80 x/menit</label>
                          <input type="radio" class="form-check-input jumlah" name="t_015" id="t_015_>80" for="t_015_>80" value="2" >                          
                        </td>
                      </tr>




                      <tr>
                        <td>Retraksi</td>
                        <td>
                          <label>Tidak ada</label>
                          <input type="radio" class="form-check-input jumlah" name="t_016" id="t_016_tidakada" for="t_016_tidakada" value="0" >                          
                        </td>
                        <td>
                          <label>Retraksi ringan</label>
                          <input type="radio" class="form-check-input jumlah" name="t_016" id="t_016_ringan" for="t_016_ringan" value="1" >                          
                        </td>
                        <td>
                          <label>Retraksi berat</label>
                          <input type="radio" class="form-check-input jumlah" name="t_016" id="t_016_berat" for="t_016_berat" value="2" >                          
                        </td>
                      </tr>
                      



                      <tr>
                        <td>Sianosis</td>
                        <td>
                          <label>Tidak ada</label>
                          <input type="radio" class="form-check-input jumlah" name="t_017" id="t_017_tidakada" for="t_017_tidakada" value="0" >                          
                        </td>
                        <td>
                          <label>Hilang dengan O2</label>
                          <input type="radio" class="form-check-input jumlah" name="t_017" id="t_017_hilang" for="t_017_hilang" value="1" >                          
                        </td>
                        <td>
                          <label>Menetap dengan O2</label>
                          <input type="radio" class="form-check-input jumlah" name="t_017" id="t_017_menetap" for="t_017_menetap" value="2" >                          
                        </td>
                      </tr>



                      <tr>
                        <td>Air entry (udara masuk)</td>
                        <td>
                          <label>Ada</label>
                          <input type="radio" class="form-check-input jumlah" name="t_018" id="t_018_ada" for="t_018_ada" value="0">                          
                        </td>
                        <td>
                          <label>Menurun</label>
                          <input type="radio" class="form-check-input jumlah" name="t_018" id="t_018_menurun" for="t_018_menurun" value="1">                          
                        </td>
                        <td>
                          <label>Tidak terdengar</label>
                          <input type="radio" class="form-check-input jumlah" name="t_018" id="t_018_tidak" for="t_018_tidak" value="2">                          
                        </td>
                      </tr>




                      <tr>
                        <td>Merintih</td>
                        <td>
                          <label>Tidak ada</label>
                          <input type="radio" class="form-check-input jumlah" name="t_019" id="t_019_tidak" for="t_019_tidak" value="0">                          
                        </td>
                        <td>
                          <label>Terdengar dengan stetoskop</label>
                          <input type="radio" class="form-check-input jumlah" name="t_019" id="t_019_stetoskop" for="t_019_stetoskop" value="1">                          
                        </td>
                        <td>
                          <label>Terdengar tanpa alat bantu</label>
                          <input type="radio" class="form-check-input jumlah" name="t_019" id="t_019_alatbantu" for="t_019_alatbantu" value="2">                          
                        </td>
                      </tr>




                      <tr>
                        <td colspan="4">
                          <label for="">Skor </label> <input style="width: 50px" type="text" id="t_020" readonly>
                          <br><label for="">Keterangan  :</label>
                          <br><label for="">Skor < 4  : gangguan pernapasan ringan</label>
                          <br><label for="">Skor 4-5 : gangguan pernapasan sedang</label>
                          <br><label for="">Skor  ≥ 6 : gangguan pernapasan berat (pemeriksaan AGD harus dilakukan)</label>
                        </td>
                      </tr>

                    </tbody>
                  </table>





                  <table class="table table-bordered mt-5" style="border: 1px solid black;">
                    <tbody>


                      <tr style="text-align: center;">
                        <td><b>Parameter</b></td>
                        <td><b>Kriteria</b></td>
                        <td><b>Skor</b></td>
                        <td><b>Ceklis</b></td>
                        <td><b>Parameter</b></td>
                        <td><b>Kriteria</b></td>
                        <td><b>Skor</b></td>
                        <td><b>Ceklis</b></td>
                      </tr>


                      <tr>
                        <td>Umur</td>
                        <td>
                          <label for="">< 3 Tahun</label>
                          <br><label for="">3 – 7 Tahun</label>
                          <br><label for="">8 – 13 Tahun</label>
                          <br><label for="">14 – 18 Tahun</label>
                        </td>
                        <td style="text-align: center;">
                          <label for="">4</label>
                          <br><label for="">3</label>
                          <br><label for="">2</label>
                          <br><label for="">1</label>
                        </td>
                        <td>
                          <div class="form-check">
                                                <input class="form-check-input jumlah" type="radio" value="4" id="t_021_<3" name="t_021">
                                            </div>
                          <div class="form-check">
                                                <input class="form-check-input jumlah" type="radio" value="3" id="t_021_3-7" name="t_021">
                                            </div>
                          <div class="form-check">
                                                <input class="form-check-input jumlah" type="radio" value="2" id="t_021_8-13" name="t_021">
                                            </div>
                          <div class="form-check">
                                                <input class="form-check-input jumlah" type="radio" value="1" id="t_021_14-18" name="t_021">
                                            </div>
                        </td>
                        <td>Jenis Kelamin</td>
                        <td>
                          <label for="">Laki-laki</label>
                          <br><label for="">Perempuan</label>
                        </td>
                        <td style="text-align: center;">
                          <label for="">2</label>
                          <br><label for="">1</label>
                        </td>
                        <td>
                         <div class="form-check">
                                                <input class="form-check-input jumlah" type="radio" value="2" id="t_022_lakilaki" name="t_022">
                                            </div>
                          <div class="form-check">
                                                <input class="form-check-input jumlah" type="radio" value="1" id="t_022_perempuan" name="t_022">
                                            </div></td>
                      </tr>



                      <tr>
                        <td rowspan="4">Diagnosis</td>
                        <td>Kelainan neurologi</td>
                        <td style="text-align: center;">4</td>
                        <td><div class="form-check">
                                                <input class="form-check-input jumlah" type="radio" value="4" id="t_023_kelainan" name="t_023">
                                            </div></td>
                        <td rowspan="4">Gangguan Kognitif</td>
                        <td>Tidak memahami keterbatasan</td>
                        <td style="text-align: center;">3</td>
                        <td><div class="form-check">
                                                <input class="form-check-input jumlah" type="radio" value="3" id="t_024_tidakmemahami" name="t_024">
                                            </div></td>
                      </tr>



                      <tr>
                        <td>Gangguan oksigenasi</td>
                        <td style="text-align: center;">3</td>
                        <td><div class="form-check">
                                                <input class="form-check-input jumlah" type="radio" value="3" id="t_023_oksigenasi" name="t_023">
                                            </div></td>
                        <td>Lupa keterbatasan</td>
                        <td style="text-align: center;">2</td>
                        <td><div class="form-check">
                                                <input class="form-check-input jumlah" type="radio" value="2" id="t_024_lupaketerbatasan" name="t_024">
                                            </div></td>
                      </tr>



                      <tr>
                        <td>Kelemahan fisik kelainan psikis</td>
                        <td style="text-align: center;">2</td>
                        <td><div class="form-check">
                                                <input class="form-check-input jumlah" type="radio" value="2" id="t_023_kelemahanfisik" name="t_023">
                                            </div></td>
                        <td rowspan="2">Orientasi terhadap kelemahan</td>
                        <td rowspan="2" style="text-align: center;">1</td>
                        <td rowspan="2"><div class="form-check">
                                                <input class="form-check-input jumlah" type="radio" value="1" id="t_024_orientasi" name="t_024">
                                            </div></td>
                      </tr>


                      <tr>
                        <td>Diagnosis lain</td>
                        <td style="text-align: center;">1</td>
                        <td><div class="form-check">
                                                <input class="form-check-input jumlah" type="radio" value="1" id="t_023_diagnosislain" name="t_023">
                                            </div></td>
                      </tr>




                      <tr>
                        <td rowspan="4">Lingkungan</td>
                        <td>Riwayat jatuh dari tempat tidur saat Bayi-Anak</td>
                        <td style="text-align: center;">4</td>
                        <td><div class="form-check">
                                                <input class="form-check-input jumlah" type="radio" value="4" id="t_025_jatuh" name="t_025">
                                            </div></td>
                        <td rowspan="4">Respon  thd operasi/obat penenang</td>
                        <td>< 24 jam</td>
                        <td style="text-align: center;">3</td>
                        <td><div class="form-check">
                                                <input class="form-check-input jumlah" type="radio" value="3" id="t_026_<24" name="t_026">
                                            </div></td>
                      </tr>



                      <tr>
                        <td>Menggunakan alat bantu</td>
                        <td style="text-align: center;">3</td>
                        <td><div class="form-check">
                                                <input class="form-check-input jumlah" type="radio" value="3" id="t_025_alatbantu" name="t_025">
                                            </div></td>
                        <td>< 48 jam </td>
                        <td style="text-align: center;">2</td>
                        <td><div class="form-check">
                                                <input class="form-check-input jumlah" type="radio" value="2" id="t_026_<48" name="t_026">
                                            </div></td>
                      </tr>




                      <tr>
                        <td>Pasien berada di tempat tidur</td>
                        <td style="text-align: center;">2</td>
                        <td><div class="form-check">
                                                <input class="form-check-input jumlah" type="radio" value="2" id="t_025_tempattidur" name="t_025">                                 </div></td>
                        <td rowspan="2">>  48 jam</td>
                        <td rowspan="2" style="text-align: center;">1</td>
                        <td rowspan="2"><div class="form-check">
                                                <input class="form-check-input jumlah" type="radio" value="1" id="t_026_>48" name="t_026">
                                            </div></td>
                      </tr>


                      <tr>
                        <td>Pasien berada diluar area ruang perawatan</td>
                        <td style="text-align: center;">1</td>
                        <td><div class="form-check">
                                                <input class="form-check-input jumlah" type="radio" value="1" id="t_025_diluararea" name="t_025">
                                            </div></td>
                      </tr>




                      <tr>
                        <td rowspan="3">Penggunaan Obat</td>
                        <td>Obat sedative, hipnotik, barbiturat, phenotiazin</td>
                        <td>3</td>
                        <td><div class="form-check">
                                                <input class="form-check-input jumlah" type="radio" value="3" id="t_027_sedative" name="t_027">
                                            </div></td>
                        <td rowspan="3" colspan="4">
                          <label style="text-align: center;"><b>Jumlah Skor</b></label>
                          <input style="width: 50px" type="text" id="t_028" disabled="disabled"/>
                          <br><label for="">Kriteria Penilaian</label>
                          <br><label for="">• Bila skor 7-11 : risiko rendah</label>
                          <br><label for="">• Bila skor ≥ 12 : risiko tinggi</label>
                        </td>
                      </tr>



                      <tr>
                        <td>Salah satu obat diatas</td>
                        <td>2</td>
                        <td><div class="form-check">
                                                <input class="form-check-input jumlah" type="radio" value="2" id="t_027_diatas" name="t_027">
                                            </div></td>
                      </tr>




                      <tr>
                        <td>Penggunaan obat lain</td>
                        <td>1</td>
                        <td><div class="form-check">
                                                <input class="form-check-input jumlah" type="radio" value="1" id="t_027_obatlain" name="t_027">
                                            </div></td>
                      </tr>

                      
                    </tbody>
                  </table>




                   <table class="table table-bordered mt-5" style="border: 1px solid black;">
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
                                  <label>Hambatan Pelajaran :</label>
                                  <div class="mb-1 form-check">
                                      <input  type="checkbox" class="form-check-input" name="t_029" id="t_029_tidakada">
                                      <label class="form-check-label" for="t_029_tidakada" >Tidak ada</label>
                                    </div>
                                    <div class="mb-1 form-check">
                                      <input  type="checkbox" class="form-check-input" name="t_030" id="t_030_emosi">
                                      <label class="form-check-label" for="t_030_emosi" >Emosi</label>
                                    </div>
                                </div>
                              </div>
                        <div class="col-3">
                        <div class="mb-1 form-check">
                                      <input  type="checkbox" class="form-check-input" name="t_031" id="t_031_pendengaran">
                                      <label class="form-check-label" for="t_031_pendengaran">Pendengaran</label>
                                    </div>
                                    <div class="mb-1 form-check">
                                      <input  type="checkbox" class="form-check-input" name="t_032" id="t_032_budaya">
                                      <label class="form-check-label" for="t_032_budaya" >Budaya/kepercayaan</label>
                                    </div>
                                  </div>
                                  <div class="col-3">
                                    <div class="mb-1 form-check">
                                      <input  type="checkbox" class="form-check-input" name="t_033" id="t_033_penglihatan">
                                      <label class="form-check-label" for="t_033_penglihatan">Penglihatan</label>
                                    </div>
                                    <div class="mb-1 form-check">
                                      <input  type="checkbox" class="form-check-input" name="t_034" id="t_034_bahasa">
                                      <label class="form-check-label" for="t_034_bahasa" >Bahasa</label>
                                    </div>
                                  </div>
                                  <div class="col-3">
                                    <div class="mb-1 form-check">
                                      <input  type="checkbox" class="form-check-input" name="t_035" id="t_035_kognitif">
                                      <label class="form-check-label" for="t_035_kognitif" >Kognitif</label>
                                    </div>
                                    <div class="mb-3 form-check">
                                      <input type="checkbox" class="form-check-input" name="t_036" id="t_036_lainlain">
                                      <label class="form-check-label" for="t_036_lainlain" >Lain-lain</label>
                                  </div>
                                </div>
                                </div>
                              </div>





                              <div class="mb-3">
                                <div class="row">
                                  <div class="col-4">
                                  <label>Edukasi yang dibutuhkan :</label>
                                  <div class="mb-1 form-check">
                                      <input  type="checkbox" class="form-check-input" name="t_037" id="t_037_stimulasi">
                                      <label class="form-check-label" for="t_037_stimulasi">Stimulasi tumbuh kembang</label>
                                    </div>
                                    <div class="mb-1 form-check">
                                      <input  type="checkbox" class="form-check-input" name="t_038" id="t_038_asi">
                                      <label class="form-check-label" for="t_038_asi">Pemberian ASI/teknik menyusui</label>
                                    </div>
                                    <div class="mb-1 form-check">
                                      <input  type="checkbox" class="form-check-input" name="t_039" id="t_039_rehabilitasi">
                                      <label class="form-check-label" for="t_039_rehabilitasi">Rehabilitasi</label>
                                    </div>
                                  </div>


                                    <div class="col-4">
                                    <div class="mb-1 form-check">
                                      <input  type="checkbox" class="form-check-input" name="t_040" id="t_040_nutrisi">
                                      <label class="form-check-label" for="t_040_nutrisi" >Nutrisi</label>
                                    </div>
                                    <div class="mb-1 form-check">
                                      <input type="checkbox" class="form-check-input" name="t_041" id="t_041_manajemen">
                                      <label class="form-check-label" for="t_041_manajemen" >Manajemen nyeri</label>
                                    </div>
                                    <div class="mb-1 form-check">
                                      <input type="checkbox" class="form-check-input" name="t_042" id="t_042_jaminan">
                                      <label class="form-check-label" for="t_042_jaminan" >Jaminan finansial</label>
                                    </div>
                                  </div>

                                    <div class="col-4">
                                    <div class="mb-1 form-check">
                                      <input  type="checkbox" class="form-check-input" name="t_043" id="t_043_perawatanluka">
                                      <label class="form-check-label" for="t_043_perawatanluka">Perawatan luka</label>
                                    </div>
                                    <div class="mb-1 form-check">
                                      <input  type="checkbox" class="form-check-input" name="t_044" id="t_044_medikasi">
                                      <label class="form-check-label" for="t_044_medikasi" >Medikasi</label>
                                    </div>
                                    <div class="mb-1 form-check">
                                      <input  type="checkbox" class="form-check-input" name="t_045" id="t_045_lainlain">
                                      <label class="form-check-label" for="t_045_lainlain">Lain-lain</label>
                                      <input type="text" id="v_05" name="v_05"  style="width: 200px">
                                    </div>
                                  </div>

                                  </div>
                                </div>


                          </td>
                        </tr>


                      </tbody>
                    </table>



 <div class="mb-5">
               <div class="d-grid gap-2">
                 <input class="btn btn-primary" type="submit" name="submit" value="Simpan">
              </div>



    </div>
  </div>
</td>
</tr>
</div>
</td>
</tr>
</tbody>
</table>
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