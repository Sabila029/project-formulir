
<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Neonatus</title>


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="js/jquery.signature.js"></script>

   

    <script>
        $(function() {
            fungsi1_disabled();
            $("#t_01_pasien, #t_01_keluarga").click(fungsi1_disabled);
        });
        $(function() {
            fungsi1_enable();
            $("#t_01_lainlain").click(fungsi1_enable);
        });

        function fungsi1_disabled() {
            if (this.click) {
                $("#v_01").attr("disabled", true);
                $("#v_01").val("");
            } else {
                $("#v_01").removeAttr("disabled");
            }
        }

        function fungsi1_enable() {
            $("#v_01").attr("disabled", true);
            if (this.click) {
                $("#v_01").removeAttr("disabled");
                $("#v_01").focus();
            } else {
                $("#v_01").attr("disabled", true);
            }
        }
    </script>

    <script>
        $(function() {
            fungsi2_disabled();
            $("#t_010_tidak").click(fungsi2_disabled);
        });
        $(function() {
            fungsi2_enable();
            $("#t_010_ada").click(fungsi2_enable);
        });

        function fungsi2_disabled() {
            if (this.click) {
                $("#v_22").attr("disabled", true);
                $("#v_22").val("");
            } else {
                $("#v_22").removeAttr("disabled");
            }
        }

        function fungsi2_enable() {
            $("#v_22").attr("disabled", true);
            if (this.click) {
                $("#v_22").removeAttr("disabled");
                $("#v_22").focus();
            } else {
                $("#v_22").attr("disabled", true);
            }
        }
    </script>


    <script>
        $(function() {
            fungsi3_disabled();
            $("#t_011_tidak").click(fungsi3_disabled);
        });
        $(function() {
            fungsi3_enable();
            $("#t_011_ada").click(fungsi3_enable);
        });

        function fungsi3_disabled() {
            if (this.click) {
                $("#v_23").attr("disabled", true);
                $("#v_23").val("");
            } else {
                $("#v_23").removeAttr("disabled");
            }
        }

        function fungsi3_enable() {
            $("#v_23").attr("disabled", true);
            if (this.click) {
                $("#v_23").removeAttr("disabled");
                $("#v_23").focus();
            } else {
                $("#v_23").attr("disabled", true);
            }
        }
    </script>




    <script>
        $(function() {
            fungsi4_disabled();
            $("#t_012_mandiri, #t_012_bpjs").click(fungsi4_disabled);
        });
        $(function() {
            fungsi4_enable();
            $("#t_012_lainnya").click(fungsi4_enable);
        });

        function fungsi4_disabled() {
            if (this.click) {
                $("#v_24").attr("disabled", true);
                $("#v_24").val("");
            } else {
                $("#v_24").removeAttr("disabled");
            }
        }

        function fungsi4_enable() {
            $("#v_24").attr("disabled", true);
            if (this.click) {
                $("#v_24").removeAttr("disabled");
                $("#v_24").focus();
            } else {
                $("#v_24").attr("disabled", true);
            }
        }
    </script>



    <script>
        $(function() {
            fungsi5_disabled();
            $("#t_014_rumah, #t_014_panti").click(fungsi5_disabled);
        });
        $(function() {
            fungsi5_enable();
            $("#t_014_lainlain").click(fungsi5_enable);
        });

        function fungsi5_disabled() {
            if (this.click) {
                $("#v_25").attr("disabled", true);
                $("#v_25").val("");
            } else {
                $("#v_25").removeAttr("disabled");
            }
        }

        function fungsi5_enable() {
            $("#v_25").attr("disabled", true);
            if (this.click) {
                $("#v_25").removeAttr("disabled");
                $("#v_25").focus();
            } else {
                $("#v_25").attr("disabled", true);
            }
        }
    </script>



    <script>
        $(function() {
            fungsi6_disabled();
            $("#t_015_kandung, #t_015_tiri, #t_015_anggotalain").click(fungsi6_disabled);
        });
        $(function() {
            fungsi6_enable();
            $("#t_015_lain").click(fungsi6_enable);
        });

        function fungsi6_disabled() {
            if (this.click) {
                $("#v_26").attr("disabled", true);
                $("#v_26").val("");
            } else {
                $("#v_26").removeAttr("disabled");
            }
        }

        function fungsi6_enable() {
            $("#v_26").attr("disabled", true);
            if (this.click) {
                $("#v_26").removeAttr("disabled");
                $("#v_26").focus();
            } else {
                $("#v_26").attr("disabled", true);
            }
        }
    </script>




    <script>
        $(function() {
            fungsi7_disabled();
            $("#t_016_tidak").click(fungsi7_disabled);
        });
        $(function() {
            fungsi7_enable();
            $("#t_016_ya").click(fungsi7_enable);
        });

        function fungsi7_disabled() {
            if (this.click) {
                $("#v_27").attr("disabled", true);
                $("#v_27").val("");
            } else {
                $("#v_27").removeAttr("disabled");
            }
        }

        function fungsi7_enable() {
            $("#v_27").attr("disabled", true);
            if (this.click) {
                $("#v_27").removeAttr("disabled");
                $("#v_27").focus();
            } else {
                $("#v_27").attr("disabled", true);
            }
        }
    </script>





</head>

<body>

    <div class="container mt-3">

        <a href="<?= site_url('dashboard/formulir') ?>" class="btn btn-danger"> ← Back</a>

        <form action="<?php echo site_url('dashboard/simpan') ?>" method="post">
            <input type="hidden" id="FORM" name="FORM" value="F1">

        <br><table class="table table-bordered mb-0" style="border: 1px solid black;">
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


        <form>


            <div class="mb-3">
                <div class="row">
                    <div class="col-4">
                        <div class="col-md-12">
                            <label for="">Tanggal masuk ruangan</label>
                            : <input type="date" id="in_date" name="in_date" readonly>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="col-md-10">
                            <label for="">Pukul</label>
                            : <input type="time" id="in_date" name="in_date" readonly>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="col-md-12">
                            <label for="">Ruang Rawat</label>
                            : <input type="text" id="clinic_id" name="clinic_id" style="width: 30%" readonly>
                        </div>
                    </div>
                </div>
            </div>



            <div class="mb-5">
                <label class="col-2" for="">Sumber Data</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="t_01" id="t_01_pasien" value="0">
                    <label class="form-check-label" for="t_01_pasien">Pasien</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="t_01" id="t_01_keluarga" value="1">
                    <label class="form-check-label" for="t_01_keluarga">Keluarga</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="t_01" id="t_01_lainlain" value="2">
                    <label class="form-check-label" for="t_01_lainlain">Lain-lain</label>
                    <input type="text" id="v_01" name="v_01">
                </div>
            </div>


            <div class="mb-1">
                <label><b>IDENTITAS PENANGGUNG JAWAB (KELUARGA)</b></label>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label><b>Ibu</b></label>
                        </div>
                    </div>
                    <div class="row mb-3">
                                <div class="col-md-4">
                                  <label for="">Umur saat ini</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="v_02" name="v_02" style="width: 250px" autocomplete="off">
                                </div>
                            </div>
          <div class="row mb-3">
                                <div class="col-md-4">
                                  <label for="">Pekerjaan</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="v_03" name="v_03" style="width: 250px" autocomplete="off">
                                </div>
                            </div>
          <div class="row mb-3">
                                <div class="col-md-4">
                                  <label for="">Pendidikan</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="v_04" name="v_04" style="width: 250px" autocomplete="off">
                                </div>
                            </div>
          <div class="row mb-3">
                                <div class="col-md-4">
                                  <label for="">Alamat</label>
                                </div>
                                <div class="col-md-6">
                                  <textarea class="form-control" id="v_05" name="v_05" rows="5" cols="3" autocomplete="off"></textarea>
                                </div>
                            </div>
          <div class="row mb-3">
                                <div class="col-md-4">
                                  <label for="">No. Telepon</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="v_06" name="v_06" style="width: 250px" autocomplete="off">
                                </div>
                            </div>
          <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="">Penghasilan/bulan</label>
                                </div>
                                <div class="col-md-1">
                                <div class="input-group flex-nowrap" style="width: 250px">
                                    <span class="input-group-text" id="addon-wrapping">Rp</span>
                                    <input type="text" id="v_07" name="v_07" class="form-control" autocomplete="off">
                                  </div>
                                </div>
                                </div>
          <div class="row mb-5">
                                <div class="col-md-4">
                                  <label for="">Agama</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="v_08" name="v_08" style="width: 250px" autocomplete="off">
                                </div>
                            </div>
                </div>
                <div class="col-6">
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for=""><b>Ayah</b></label>
                        </div>
                    </div>
                    <div class="row mb-3">
                                <div class="col-md-4">
                                  <label for="">Umur saat ini</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="v_09" name="v_09" style="width: 250px" autocomplete="off">
                                </div>
                            </div>
          <div class="row mb-3">
                                <div class="col-md-4">
                                  <label for="">Pekerjaan</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="v_10" name="v_10" style="width: 250px" autocomplete="off">
                                </div>
                            </div>
          <div class="row mb-3">
                                <div class="col-md-4">
                                  <label for="">Pendidikan</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="v_11" name="v_11" style="width: 250px" autocomplete="off">
                                </div>
                            </div>
          <div class="row mb-3">
                                <div class="col-md-4">
                                  <label for="">Alamat</label>
                                </div>
                                <div class="col-md-6">
                                  <textarea class="form-control" id="v_12" name="v_12" rows="5" cols="3" autocomplete="off"></textarea>
                                </div>
                            </div>
          <div class="row mb-3">
                                <div class="col-md-4">
                                  <label for="">No. Telepon</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="v_13" name="v_13" style="width: 250px" autocomplete="off">
                                </div>
                            </div>
          <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="">Penghasilan/bulan</label>
                                </div>
                                <div class="col-md-1">
                                <div class="input-group flex-nowrap" style="width: 250px">
                                    <span class="input-group-text" id="addon-wrapping">Rp</span>
                                    <input type="text" id="v_14" name="v_14" class="form-control" autocomplete="off">
                                  </div>
                                </div>
                                </div>
          <div class="row mb-5">
                                <div class="col-md-4">
                                  <label for="">Agama</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="v_15" name="v_15" style="width: 250px" autocomplete="off">
                                </div>
                            </div>
                </div>
            </div>


            <div class="mb-3">
                <div class="row mb-3">
                    <div class="col-md-2">
                        <label for=""><b>KELUHAN UTAMA</b></label>
                    </div>
                    <div>
                        <textarea class="form-control" id="v_16" name="v_16" rows="5" cols="7"></textarea>
                    </div>
                </div>
            </div>




            <div class="mb-3">
                <div class="row mb-3">
                    <div class="col-md-5">
                        <label for=""><b>RIWAYAT PENYAKIT SEKARANG</b></label>
                    </div>
                    <div>
                        <textarea class="form-control" id="v_17" name="v_17" rows="5" cols="7"></textarea>
                    </div>
                </div>



                <div class="mb-1">
                    <label><b>RIWAYAT KESEHATAN YANG LALU:</b></label>
                </div>
                <div class="mb-3">
                    <div>
                        <label class="col-3" for="">a. Riwayat MRS sebelumnya ? </label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="t_02" id="t_02_tidak" value="0">
                            <label class="form-check-label" for="t_02_tidak">Tidak</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="t_02" id="t_02_ya" value="1">
                            <label class="form-check-label" for="t_02_ya">Ya, lamanya:</label>
                            <input type="text" id="v_18" name="v_18" style="width: 50px"> hr,
                            alasan: <input type="text" id="v_19" name="v_19" style="width: 200px">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div>
                        <label class="col-3" for="">b. Riwayat dioperasi ?</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="t_03" id="t_03_tidak" value="0">
                            <label class="form-check-label" for="t_03_tidak">Tidak</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="t_03" id="t_03_ya" value="1">
                            <label class="form-check-label" for="t_03_ya">Ya, jenisnya:</label>
                            <input type="text" id="v_20" name="v_20" style="width: 150px">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-3">
                            <label class="col-10" for="">c. Riwayat kelainan bawaan ?</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="t_04" id="t_04_tidak ada gangguan" value="0">
                                <label class="form-check-label" for="t_04_tidak ada gangguan">Tidak ada gangguan</label>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="t_04" id="t_04_ada,yaitu" value="1">
                                <label class="form-check-label" for="t_04_ada,yaitu">Ada, yaitu : </label>
                            </div>
                            <div class="mb-1 form-check">
                                <input type="checkbox" class="form-check-input" name="t_05" id="t_05_down syndrom">
                                <label class="form-check-label" for="t_05_down syndrom">Down syndrome, </label>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-1 form-check">
                                <input type="checkbox" class="form-check-input" name="t_06" id="t_06_cacat fisik">
                                <label class="form-check-label" for="t_06_cacat fisik">Cacat fisik, </label>
                            </div>
                            <div class="mb-1 form-check">
                                <input type="checkbox" class="form-check-input" name="t_07" id="t_07_autis">
                                <label class="form-check-label" for="t_07_autis">Autis, </label>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-1 form-check">
                                <input type="checkbox" class="form-check-input" name="t_08" id="t_08_hiperaktif">
                                <label class="form-check-label" for="t_08_hiperaktif">Hiperaktif, </label>
                            </div>
                            <div class="mb-1 form-check">
                                <input type="checkbox" class="form-check-input" name="t_09" id="t_09_dll">
                                <label class="form-check-label" for="t_09_dll">Dll </label>
                                <input type="text" id="v_21" name="v_21" style="width: 150px">
                            </div>
                        </div>
                    </div>
                </div>




                <div class="mb-1">
                    <label for="alasan" type="text"><b>RIWAYAT MINUM OBAT </b></label>
                    <label for="alasan" type="text">(termasuk obat yang masih digunakan saat ini) :</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="t_010" id="t_010_tidak" value="0">
                    <label class="form-check-label" for="t_010_tidak">Tidak ada</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="t_010" id="t_010_ada" value="1">
                    <label class="form-check-label" for="t_010_ada">Ada, nama obat dan dosis </label>
                    <input type="text" id="v_22" name="v_22" style="width: 300px">
                </div>




                <div class="mb-1">
                    <label for="alasan" type="text"><b>RIWAYAT ALERGI :</b></label>
                </div>
                <div class="mb-5">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="t_011" id="t_011_tidak" value="0">
                        <label class="form-check-label" for="t_011_tidak">Tidak ada</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="t_011" id="t_011_ada" value="1">
                        <label class="form-check-label" for="t_011_ada">Ada, sebutkan</label>
                        <input type="text" id="v_23" name="v_23" style="width: 300px">
                    </div>
                </div>





                <div class="mb-1">
                    <label for="alasan" type="text"><b>RIWAYAT EKONOMI, PSIKOSOSIAL DAN SPIRITUAL</b></label>
                </div>
                <div class="mb-1">
                    <label for="alasan" type="text"><b>Status Ekonomi</b></label>
                </div>
                <div class="mb-2">
                    <div>
                        <label class="col-3" for="">Jaminan kesehatan yang digunakan </label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="t_012" id="t_012_mandiri" value="0">
                            <label class="form-check-label" for="t_012_mandiri">Mandiri</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="t_012" id="t_012_bpjs" value="1">
                            <label class="form-check-label" for="t_012_bpjs">BPJS</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="t_012" id="t_012_lainnya" value="2">
                            <label class="form-check-label" for="t_012_lainnya">Lainnya</label>
                            <input type="text" id="v_24" name="v_24" style="width: 100px">
                        </div>
                    </div>
                </div>




                <div class="mb-1">
                    <label for="alasan" type="text"><b>Status Psikologis</b></label>
                </div>
                <div class="mb-2">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="t_013" id="t_013_tenang,kooperatif" value="0">
                        <label class="form-check-label" for="t_013_tenang,kooperatif">Tenang, kooperatif</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="t_013" id="t_013_gelisah,murung,cengeng" value="1">
                        <label class="form-check-label" for="t_013_gelisah,murung,cengeng">Gelisah, murung, cengeng </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="t_013" id="t_013_ketakutan,agresif,hiperaktif" value="1">
                        <label class="form-check-label" for="t_013_ketakutan,agresif,hiperaktif">Ketakutan, agresif, hiperaktif</label>
                    </div>
                </div>




                <div class="mb-1">
                    <label for="alasan" type="text"><b>Status Sosial</b></label>
                </div>
                <div class="mb-2">
                    <div>
                        <label class="col-2" for="">Tempat tinggal</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="t_014" id="t_014_rumah" value="0">
                            <label class="form-check-label" for="t_014_rumah">Rumah</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="t_014" id="t_014_panti" value="1">
                            <label class="form-check-label" for="t_014_panti">Panti</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="t_014" id="t_014_lainlain" value="2">
                            <label class="form-check-label" for="t_014_lainlain">Lain-lain, sebutkan</label>
                            <input type="text" id="v_25" name="v_25" style="width: 100px">
                        </div>
                    </div>
                </div>




                <div class="mb-2">
                    <div>
                        <label class="col-2" for="">Diasuh/dirawat oleh </label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="t_015" id="t_015_kandung" value="0">
                            <label class="form-check-label" for="t_015_kandung">Orangtua kandung</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="t_015" id="t_015_tiri" value="1">
                            <label class="form-check-label" for="t_015_tiri">Bapak/ibu tiri</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="t_015" id="t_015_anggotalain" value="2">
                            <label class="form-check-label" for="t_015_anggotalain">Anggota keluarga lain</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="t_015" id="t_015_lain" value="3">
                            <label class="form-check-label" for="t_015_lain">Lain-lain</label>
                            <input type="text" id="v_26" name="v_26" style="width: 100px">
                        </div>
                    </div>
                </div>



                <div class="mb-1">
                    <label for="alasan" type="text"><b>Spiritual</b></label>
                </div>
                <div class="mb-2">
                    <div>
                        <label class="col-2" for="">Perlu rohanian </label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="t_016" id="t_016_tidak" value="0">
                            <label class="form-check-label" for="t_016_tidak">Tidak</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="t_016" id="t_016_ya" value="1">
                            <label class="form-check-label" for="t_016_ya">Ya, Jelaskan </label>
                            <input type="text" id="v_27" name="v_27" style="width: 100px">
                        </div>
                    </div>
                </div>



                <div class="mb-1">
                    <label for="alasan" type="text"><b>Kultural</b></label>
                </div>
                <div class="row mb-3">
                                    <div class="col-md-10">
                              <div class="row text-align">
                                <div class="col-md-7">
                                  <label for="">Nilai-nilai kepercayaan/keyakinan tertentu terkait kondisi pasien</label>
                                </div>
                                <div class="col-md-1">
                                  <input type="text" class="form-control" id="v_28" name="v_28" style="width: 500px" autocomplete="off">
                                </div>
                              </div>
                            </div>
                        </div>



                </tbody>
                </table>

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

