<!----------------------------------- Form Login Super Admin ------------------------------------>
<!----------------------------------- Form Login Super Admin ------------------------------------>

<!doctype html>
<html lang="en">

<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

     <link rel="stylesheet" href="<?php echo base_url('assets/auth/login-form/fonts/icomoon/style.css') ?>">

     <link rel="stylesheet" href="<?php echo base_url('assets/auth/login-form/css/owl.carousel.min.css') ?>">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="<?php echo base_url('assets/auth/login-form/css/bootstrap.min.css') ?>">

     <!-- Style -->
     <link rel="stylesheet" href="<?php echo base_url('assets/auth/login-form/css/style.css') ?>">

     <!-- Font Awesome -->
     <link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/fontawesome.min.css'); ?>" />
     <link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.min.css'); ?>">

     <link rel="shortcut icon" href="<?php echo base_url('assets/backend'); ?>/images/phb.png">

     <title>Form Kuesioner | e-Repo</title>

     <script>
     $(window).load(function() {
          $("#preloader").delay(3000).fadeOut("slow");
     });
     </script>
     <script type="text/javascript">
     function myFunction() {
          var x = document.getElementById("inputPassword");
          if (x.type === "password") {
               x.type = "text";
          } else {
               x.type = "password";
          }
     }
     </script>
</head>

<body>
     <div class="content" style="margin-top: 30px;margin-bottom: 30px;">
          <div class="container">
               <?php echo form_open(uri(2) == "edit" ? url(1, "update") : url(1, "tambah_data/") . uri(3)); ?>

               <div class="row">
                    <div class="col-md-6 contents wow fadeInRight" style="margin-bottom: 30px;">
                         <div class="row justify-content-center">

                              <div class="col-md-10">
                                   <div style="margin-left: 20px;margin-right: 20px;margin-bottom: 40px;">
                                        <br />
                                        <img style="margin-top: 20px;width: 550px;" class="img-fluid"
                                             src="<?php echo base_url(''); ?>assets/kuesioner/img/testing.webp" alt="">
                                   </div>
                                   <div class="mb-4">
                                        <h4> <strong>Isi Data Responden</strong></h4>
                                        <p class="mb-4" style="text-align: justify;color: grey;">Mohon isi terlebih
                                             dahulu data responden berikut!
                                        </p>
                                   </div>

                                   <div class="form-group first mb-3">
                                        <input id="inputIdentitas" type="text" name="id_identitas" class="form-control"
                                             placeholder="Masukan NIM / NIPY" required>

                                   </div>
                                   <div class="form-group last mb-3">
                                        <input id="inputNama" type="text" name="nama_lengkap" class="form-control"
                                             placeholder="Masukan Nama Lengkap" required>
                                   </div>
                                   <div class="form-group mb-3">
                                        <select id="inputProdi" class="form-control" style="background-color: #EDF2F5;"
                                             name="user_prodi" aria-label="Floating label select example" required>
                                             <option value="" style="color: grey;">Pilih Program Studi
                                             </option>
                                             <option value="TI" <?php if (uri(1) == "tambah_data") ?>>
                                                  DIV Teknik Informatika</option>
                                             <option value="ASP" <?php if (uri(1) == "tambah_data") ?>>
                                                  DIV Akuntansi Sektor Publik
                                             </option>
                                             <option value="TKOM" <?php if (uri(1) == "tambah_data") ?>>
                                                  DIII Teknik Komputer
                                             </option>
                                             <option value="AK" <?php if (uri(1) == "tambah_data") ?>>
                                                  DIII Akuntansi
                                             </option>
                                             <option value="FARM" <?php if (uri(1) == "tambah_data") ?>>
                                                  DIII Farmasi
                                             </option>

                                             <option value="PER" <?php if (uri(1) == "tambah_data") ?>>
                                                  DIII Perhotelan
                                             </option>
                                             <option value="BID" <?php if (uri(1) == "tambah_data") ?>>
                                                  DIII Kebidanan
                                             </option>
                                             <option value="MSN" <?php if (uri(1) == "tambah_data") ?>>
                                                  DIII Teknik Mesin
                                             </option>
                                             <option value="DKV" <?php if (uri(1) == "tambah_data") ?>>
                                                  DIII Desain Komunikasi Visual
                                             </option>
                                             <option value="PRWT" <?php if (uri(1) == "tambah_data") ?>>
                                                  DIII Keperawatan
                                             </option>
                                             <option value="ELKTR" <?php if (uri(1) == "tambah_data") ?>>
                                                  DIII Teknik Elektronika
                                             </option>
                                        </select>
                                   </div>

                                   <div class="form-group mb-3">
                                        <select id="inputSebagai" class="form-control"
                                             style="background-color: #EDF2F5;" name="user_level"
                                             aria-label="Floating label select example" required>
                                             <option value="">Pilih Sebagai</option>
                                             <option value="Dosen" <?php if (uri(1) == "tambah_data") ?>>
                                                  Dosen
                                             </option>
                                             <option value="Mahasiswa" <?php if (uri(1) == "tambah_data") ?>>
                                                  Mahasiswa
                                             </option>
                                        </select>
                                   </div>

                                   <div class="form-group mb-3">
                                        <select id="inputGender" class="form-control" style="background-color: #EDF2F5;"
                                             name="user_gender" aria-label="Floating label select example" required>
                                             <option value="">Pilih Gender</option>
                                             <option value="L" <?php if (uri(1) == "tambah_data") ?>>
                                                  Laki-Laki</option>
                                             <option value="P" <?php if (uri(1) == "tambah_data") ?>>
                                                  Perempuan
                                             </option>
                                        </select>
                                   </div>

                                   <input id="inputPaket" style="width: 375px;" name="id_paket_jawaban"
                                        value="<?php echo $d->id_paket; ?>" hidden>
                                   <input style="width: 375px;" name="id_soal_kuesioner"
                                        value="<?php echo $d->id_soal; ?>" hidden>
                                   <input style="width: 375px;" name="type_soal" value="<?php echo $d->type_soal; ?>"
                                        hidden>
                              </div>
                         </div>
                    </div>
                    <div class="col-md-6 contents" style="margin-top: 30px;">
                         <div class="row justify-content-center">

                              <!-- Berhasil Tambah -->
                              <?php if ($this->session->flashdata('notif_berhasil_soal')){ ?>
                              <div class="alert alert-success alert-dismissible fade show" data-dismiss="alert"
                                   aria-label="Close" role="alert">
                                   <span
                                        class="btn-label"></span><?php echo $this->session->flashdata('notif_berhasil_soal'); ?>
                                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                   </button>
                              </div>
                              <?php } ?>
                              <!-- Gagal Tambah -->
                              <?php if ($this->session->flashdata('notif_gagal_soal')){ ?>
                              <div class="alert alert-danger alert-dismissible fade show" data-dismiss="alert"
                                   aria-label="Close" role="alert">
                                   <span
                                        class="btn-label"></span><?php echo $this->session->flashdata('notif_gagal_soal'); ?>
                                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                   </button>
                              </div>
                              <?php } ?>

                              <div class="col-md-12">
                                   <?php
                                        $no=0+1;
                                        if ($data_paket){
                                        foreach ($data_paket as $d){ 
                                   ?>
                                   <div class="mb-4">
                                        <h4> <strong>Kuesioner <?php echo $d->nama_paket; ?>
                                                  v.<?php echo $d->versi_apl_paket; ?></strong></h4>
                                        <p class="mb-3">Pengujian Metode | Kuesioner <?php echo $d->nama_paket; ?>
                                             | Metode
                                             Skala Likert & Text Mining</p>
                                        <p class="mb-4" style="text-align: justify;color: grey;">Dalam rangka untuk
                                             pengembangan sistem
                                             kedepannya,
                                             mohon untuk
                                             pengguna
                                             sistem bisa memberikan ulasan pada
                                             kuesioner berikut ini, isi dengan jujur selama anda menggunakan sistem
                                             tersebut. Jika
                                             ada
                                             kendala sampaikan dalam kolom komentar. Terimakasih</p>
                                   </div>
                                   <?php }} else { ?>
                                   <td class="text-center" colspan="6">Tidak ada data</td>
                                   <?php } ?>
                                   <?php
                                        $no = 0 + 1;
                                        if ($data_soal) {
                                        foreach ($data_soal as $d) {
                                        ?>
                                   <div class="form-items mb-2">
                                        <td class="title"><?php echo $no++; ?>.
                                             <?php echo $d->soal; ?>
                                        </td>
                                   </div>
                                   <table>
                                        <tbody>
                                             <tr>
                                                  <td class="align-middle" style="width: 70px; text-align: center;">
                                                       <div
                                                            class="clearfix prettyradio labelright  blue has-pretty-child">
                                                            <center>
                                                                 <input class="radio5 the_input_element"
                                                                      name="<?php echo "jawaban" . $d->id_soal; ?>"
                                                                      id="concern"
                                                                      value="<?php echo $d->sangat_tidak_setuju; ?>"
                                                                      style="display: block !important; color: rgb(50, 55, 60);"
                                                                      autocomplete="off" type="radio" required />
                                                            </center>
                                                       </div>
                                                       <div
                                                            class="clearfix prettyradio labelright  blue has-pretty-child">
                                                            <h5 style="margin-top: 5px;">1
                                                            </h5>
                                                       </div>
                                                  </td>

                                                  <td class="align-middle" style="width: 70px; text-align: center;">
                                                       <div
                                                            class="clearfix prettyradio labelright  blue has-pretty-child">
                                                            <center>
                                                                 <input class="radio the_input_element"
                                                                      name="<?php echo "jawaban" . $d->id_soal; ?>"
                                                                      id="radio4"
                                                                      value="<?php echo $d->tidak_setuju; ?>"
                                                                      style="display: block !important; color: rgb(50, 55, 60);"
                                                                      autocomplete="off" type="radio" required />
                                                            </center>
                                                       </div>
                                                       <div
                                                            class="clearfix prettyradio labelright  blue has-pretty-child">
                                                            <h5 style="margin-top: 5px;">2</h5>
                                                       </div>
                                                  </td>

                                                  <td class="align-middle" style="width: 70px; text-align: center;">
                                                       <div
                                                            class="clearfix prettyradio labelright  blue has-pretty-child">
                                                            <center>
                                                                 <input class="radio the_input_element"
                                                                      name="<?php echo "jawaban" . $d->id_soal; ?>"
                                                                      id="radio2" for="radio2"
                                                                      value="<?php echo $d->setuju; ?>"
                                                                      style="display: block !important; color: rgb(50, 55, 60);"
                                                                      autocomplete="off" type="radio" required />
                                                            </center>
                                                       </div>
                                                       <div
                                                            class="clearfix prettyradio labelright  blue has-pretty-child">
                                                            <h5 style="margin-top: 5px;">3</h5>
                                                       </div>
                                                  </td>

                                                  <td class="align-middle" style="width: 70px; text-align: center;">
                                                       <div
                                                            class="clearfix prettyradio labelright  blue has-pretty-child">
                                                            <center>
                                                                 <input class="radio the_input_element"
                                                                      name="<?php echo "jawaban" . $d->id_soal; ?>"
                                                                      value="<?php echo $d->sangat_setuju; ?>"
                                                                      style="display: block !important; color: rgb(50, 55, 60);"
                                                                      autocomplete="off" type="radio" required />
                                                            </center>
                                                       </div>
                                                       <div
                                                            class="clearfix prettyradio labelright  blue has-pretty-child">
                                                            <h5 style="margin-top: 5px;">4</h5>
                                                       </div>
                                                  </td>
                                             </tr>
                                        </tbody>
                                   </table>
                                   <br />
                                   <?php }
                                        } else { ?>
                                   <div class="logo">
                                        <p><a><span>Tidak Ada Pertanyaan Kuesioner</span></a></p>
                                   </div>
                                   <br />
                                   <?php } ?>
                                   <!-- <div class="form-items mb-2">
                                        <td class="title">
                                             <p style="color: black;">Berikan Ulasan selama anda menggunakan sistem
                                                  ini!
                                        </td>
                                   </div>
                                   <div class="form-group mb-3">
                                        <textarea style="height: 150px;border-color: black;background-color: #EDF2F5;"
                                             class="form-control" id="inputJawaban" name="jawaban"
                                             placeholder="Ketik Ulasan" rows="15" required></textarea>
                                   </div>
                                   <br /> -->
                                   <input type="submit" id="submitBtn"
                                        style="background-color: #5187FB;border-radius: 30px;" value="Kirim Jawaban"
                                        class="btn btn-block btn-success">

                                   <!-- <span class="d-block text-left my-4 text-muted"> Copyright &copy; Repository
                                             e-Repo PHB</span><br /> -->
                              </div>
                         </div>
                    </div>

               </div>
               <?php echo form_close(); ?>
          </div>
     </div>

     <!-- AJAX JQUERY API CLASSIFICATION -->
     <script type="text/javascript">
     $(function() {
          $('button').click(function() {
               var jawaban = $('#inputJawaban').val();
               var paket = $('#inputPaket').val();
               var identitas = $('#inputIdentitas').val();
               var nama = $('#inputNama').val();
               var prodi = $('#inputProdi').val();
               var sebagai = $('#inputSebagai').val();
               var gender = $('#inputGender').val();

               $.ajax({
                    url: 'http://127.0.0.1:5000/postData',
                    data: $('form').serialize(),
                    type: 'POST',
                    success: function(response) {
                         console.log(response);
                    },
                    error: function(error) {
                         console.log(error);
                    }
               });
          });
     });
     </script>

     <script src="<?php echo base_url('assets/auth/login-form/js/jquery-3.3.1.min.js') ?>"></script>
     <script src="<?php echo base_url('assets/auth/login-form/js/popper.min.js') ?>"></script>
     <script src="<?php echo base_url('assets/auth/login-form/js/bootstrap.min.js') ?>"></script>
     <script src="<?php echo base_url('assets/auth/login-form/js/main.js') ?>"></script>
     <script src="<?php echo base_url(''); ?>assets/kuesioner/js/wow.js"></script>
</body>

</html>