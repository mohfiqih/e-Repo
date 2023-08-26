 <!DOCTYPE html>
 <html lang="en">

 <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <title>Form Kuesioner | e-Repo</title>

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="<?php echo base_url(''); ?>assets/kuesioner/css/bootstrap.min.css">
      <!-- Icon -->
      <link rel="stylesheet" href="<?php echo base_url(''); ?>assets/kuesioner/fonts/line-icons.css">
      <!-- Owl carousel -->
      <link rel="stylesheet" href="<?php echo base_url(''); ?>assets/kuesioner/css/owl.carousel.min.css">
      <link rel="stylesheet" href="<?php echo base_url(''); ?>assets/kuesioner/css/owl.theme.css">

      <!-- Animate -->
      <link rel="stylesheet" href="<?php echo base_url(''); ?>assets/kuesioner/css/animate.css">
      <!-- Main Style -->
      <link rel="stylesheet" href="<?php echo base_url(''); ?>assets/kuesioner/css/main.css">
      <!-- Responsive Style -->
      <link rel="stylesheet" href="<?php echo base_url(''); ?>assets/kuesioner/css/responsive.css">
      <link rel="shortcut icon" href="<?php echo base_url('assets/backend'); ?>/images/phb.png" />

 </head>

 <body>

      <header id="header-wrap">

           <div id="hero-area" class="hero-area-bg">
                <div class="container">
                     <div class="row">
                          <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 wow fadeInRight">
                               <div class="intro-img" style="margin-right: 20px;">
                                    <br />
                                    <img style="margin-top: 20px;" class="img-fluid"
                                         src="<?php echo base_url(''); ?>assets/kuesioner/img/21430.jpg" alt="">
                               </div>
                               <!-- <div class="intro-img" style="margin-right: 20px;">
                                    <?php
                                   date_default_timezone_set("Asia/jakarta");
                                   ?>
                                    <h5 class="btn btn-sm btn-light bg-white"><i class="fa-solid fa-clock"></i>
                                         <span id="jam"><button class="btn btn-sm btn-light bg-white" type="button">
                                         </span>
                                    </h5>
                                    /
                                    <h5 class="btn btn-sm btn-light bg-white"><i class="fa-solid fa-calendar"></i>
                                         <span id="tanggal"><button class="btn btn-sm btn-light bg-white" type="button">
                                         </span>
                                    </h5>
                                    </button>
                               </div> -->
                          </div>
                          <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                               <div class="contents" style="margin-left: 20px;margin-right: 20px;margin-top: 30px;">
                                    <?php
                                        $no=0+1;
                                        if ($data_paket){
                                        foreach ($data_paket as $d){ 
                                   ?>
                                    <!-- <a class="navbar-brand brand-logo mr-5" href="#">
                                         <img src="<?php echo base_url('assets/auth/images/logo-long.png') ?>"
                                              style="width: 150px;height: 50px;margin-bottom: 10px;" /></a> -->

                                    <h2 class="head-title">Kuesioner <?php echo $d->nama_paket; ?>
                                         v.<?php echo $d->versi_apl_paket; ?></h2>
                                    <p class="mb-3">Pengujian Metode | Kuesioner <?php echo $d->nama_paket; ?> | Metode
                                         Skala Likert & Text Mining</p>
                                    <p style="text-align: justify;color: grey;">Assalamualaikum, Perkenalkan nama saya
                                         Moh. Fiqih Erinsyah dari Prodi DIV Teknik Informatika, untuk teman-teman mohon
                                         bantuannya untuk mengisi form kuesioner Usability Testing ini untuk pengujian
                                         sistem yang telah saya buat tentang Evaluasi Sistem Syncnau dan Oase yang ada
                                         di Politeknik Harapan Bersama. <strong>Mohon masukan ulasan sesuai yang anda
                                              rasakan selama menggunakan sistem.
                                         </strong> Terimakasih 👌🫡</p>

                                    <?php }} else { ?>
                                    <td class="text-center" colspan="6">Tidak ada data</td>
                                    <?php } ?>
                                    <div class="header-button">

                                         <div>
                                              <!-- <a href="#" data-toggle="modal" data-target="#isiKuesioner"
                                                   class="btn text-white" style="background-color: #4747A1;">
                                                   Isi Kuesioner </a> -->
                                              <input data-toggle="modal" data-target="#isiKuesioner" type="submit"
                                                   id="submitBtn" style="border-radius: 10px;background-color: #4747A1;"
                                                   value="Isi Kuesioner" class="btn btn-block btn-success">
                                         </div>
                                         <!-- <a href="#" class="btn btn-border video-popup" data-toggle="modal"
                                              data-target="#addModal">About <i class="lni lni-reply"></i></a> -->
                                    </div>
                                    <!-- Isi Kuesioner -->

                                    <div class="modal fade" id="isiKuesioner" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                         <div class="modal-dialog" role="document">
                                              <div class="modal-content">
                                                   <div class="modal-header">
                                                        <p class="modal-title" style="color: black;margin-left: 15px;"
                                                             id="exampleModalLabel">
                                                             <strong>Form Kuesioner</strong>
                                                        </p>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                             aria-label="Close">
                                                             <span aria-hidden="true">&times;</span>
                                                        </button>
                                                   </div>
                                                   <div class="modal-body" style="margin-bottom: 20px;">
                                                        <?php echo form_open(uri(2) == "edit" ? url(1, "update") : url(1, "tambah_data/") . uri(3)); ?>
                                                        <!-- <form role="form"> -->
                                                        <div class="row">
                                                             <div class="col-md-12">

                                                                  <div class="mb-4">
                                                                       <div class="row" style="margin: 5px;">
                                                                            <div class="col-md-6">
                                                                                 <div class="form-group mb-2">
                                                                                      <label
                                                                                           for="example-select-floating">NIM
                                                                                           / NIPY</label>
                                                                                      <!-- <input id="inputIdentitas"
                                                                                           name="id_identitas"
                                                                                           value="<?php echo $user->user_id; ?>"
                                                                                           hidden> -->
                                                                                      <input id="inputIdentitas"
                                                                                           name="id_identitas"
                                                                                           class="form-control"
                                                                                           placeholder="Masukan NIM / NIPY"
                                                                                           required>
                                                                                 </div>
                                                                                 <div class="form-group mb-2">
                                                                                      <label
                                                                                           for="example-select-floating">Nama
                                                                                           Lengkap</label>
                                                                                      <input id="inputNama"
                                                                                           name="nama_lengkap"
                                                                                           class="form-control"
                                                                                           placeholder="Masukan Nama Lengkap"
                                                                                           required>
                                                                                 </div>
                                                                                 <div class="form-group mb-2">
                                                                                      <label
                                                                                           for="example-select-floating">Pilih
                                                                                           Prodi</label>
                                                                                      <select id="inputProdi"
                                                                                           class="form-control"
                                                                                           style="background-color: #EDF2F5;"
                                                                                           name="prodi"
                                                                                           aria-label="Floating label select example"
                                                                                           required>
                                                                                           <option value=""
                                                                                                style="color: grey;">
                                                                                                Pilih Program Studi
                                                                                           </option>
                                                                                           <option value="TI"
                                                                                                <?php if (uri(1) == "tambah_data") ?>>
                                                                                                DIV Teknik
                                                                                                Informatika
                                                                                           </option>
                                                                                           <option value="ASP"
                                                                                                <?php if (uri(1) == "tambah_data") ?>>
                                                                                                DIV Akuntansi
                                                                                                Sektor
                                                                                                Publik
                                                                                           </option>
                                                                                           <option value="TKOM"
                                                                                                <?php if (uri(1) == "tambah_data") ?>>
                                                                                                DIII Teknik
                                                                                                Komputer
                                                                                           </option>
                                                                                           <option value="AK"
                                                                                                <?php if (uri(1) == "tambah_data") ?>>
                                                                                                DIII Akuntansi
                                                                                           </option>
                                                                                           <option value="FARM"
                                                                                                <?php if (uri(1) == "tambah_data") ?>>
                                                                                                DIII Farmasi
                                                                                           </option>

                                                                                           <option value="PER"
                                                                                                <?php if (uri(1) == "tambah_data") ?>>
                                                                                                DIII Perhotelan
                                                                                           </option>
                                                                                           <option value="BID"
                                                                                                <?php if (uri(1) == "tambah_data") ?>>
                                                                                                DIII Kebidanan
                                                                                           </option>
                                                                                           <option value="MSN"
                                                                                                <?php if (uri(1) == "tambah_data") ?>>
                                                                                                DIII Teknik Mesin
                                                                                           </option>
                                                                                           <option value="DKV"
                                                                                                <?php if (uri(1) == "tambah_data") ?>>
                                                                                                DIII Desain
                                                                                                Komunikasi
                                                                                                Visual
                                                                                           </option>
                                                                                           <option value="PRWT"
                                                                                                <?php if (uri(1) == "tambah_data") ?>>
                                                                                                DIII Keperawatan
                                                                                           </option>
                                                                                           <option value="ELKTR"
                                                                                                <?php if (uri(1) == "tambah_data") ?>>
                                                                                                DIII Teknik
                                                                                                Elektronika
                                                                                           </option>
                                                                                      </select>
                                                                                 </div>

                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                 <div class="form-group mb-2">
                                                                                      <label
                                                                                           for="example-select-floating">Pilih
                                                                                           Sebagai</label>
                                                                                      <select id="inputSebagai"
                                                                                           class="form-control"
                                                                                           style="background-color: #EDF2F5;"
                                                                                           name="sebagai"
                                                                                           aria-label="Floating label select example"
                                                                                           required>
                                                                                           <option value="">Pilih
                                                                                                Sebagai</option>
                                                                                           <option value="Dosen"
                                                                                                <?php if (uri(1) == "tambah_data") ?>>
                                                                                                Dosen
                                                                                           </option>
                                                                                           <option value="Mahasiswa"
                                                                                                <?php if (uri(1) == "tambah_data") ?>>
                                                                                                Mahasiswa
                                                                                           </option>
                                                                                      </select>
                                                                                 </div>
                                                                                 <div class="form-group mb-2">
                                                                                      <label
                                                                                           for="example-select-floating">Pilih
                                                                                           Gender</label>
                                                                                      <select id="inputGender"
                                                                                           class="form-control"
                                                                                           style="background-color: #EDF2F5;"
                                                                                           name="gender"
                                                                                           aria-label="Floating label select example"
                                                                                           required>
                                                                                           <option value="">Pilih
                                                                                                Gender
                                                                                           </option>
                                                                                           <option value="L"
                                                                                                <?php if (uri(1) == "tambah_data") ?>>
                                                                                                Laki-Laki</option>
                                                                                           <option value="P"
                                                                                                <?php if (uri(1) == "tambah_data") ?>>
                                                                                                Perempuan
                                                                                           </option>
                                                                                      </select>
                                                                                 </div>
                                                                                 <!-- <div class="form-group mb-2">
                                                                                      <label
                                                                                           for="example-select-floating">
                                                                                           Paket Kuesioner</label>
                                                                                      <input
                                                                                           value="<?php echo $d->nama_paket; ?>"
                                                                                           class="form-control"
                                                                                           placeholder="Masukan Nama Lengkap"
                                                                                           readonly>
                                                                                 </div> -->

                                                                            </div>
                                                                       </div>
                                                                  </div>
                                                                  <div class="col-md-12" style="margin: 10px;">
                                                                       <?php
                                                                 $no = 0 + 1;
                                                                 if ($data_soal) {
                                                                 foreach ($data_soal as $d) {
                                                                 ?>

                                                                       <input id="inputPaket" style="width: 375px;"
                                                                            name="id_paket_jawaban"
                                                                            value="<?php echo $d->id_paket; ?>" hidden>
                                                                       <input style="width: 375px;"
                                                                            name="id_soal_kuesioner"
                                                                            value="<?php echo $d->id_soal; ?>" hidden>
                                                                       <input style="width: 375px;" name="type_soal"
                                                                            value="<?php echo $d->type_soal; ?>" hidden>
                                                                       <div class="form-items mb-2">
                                                                            <td class="title">
                                                                                 <p style="color: black;">
                                                                                      <?php echo $no++; ?>.
                                                                                      <?php echo $d->soal; ?></p>
                                                                            </td>
                                                                       </div>
                                                                       <table>
                                                                            <tbody>
                                                                                 <tr>
                                                                                      <td class="align-middle"
                                                                                           style="width: 70px; text-align: center;">
                                                                                           <div
                                                                                                class="clearfix prettyradio labelright  blue has-pretty-child">
                                                                                                <center>
                                                                                                     <input
                                                                                                          class="radio5 the_input_element"
                                                                                                          name="<?php echo "jawaban" . $d->id_soal; ?>"
                                                                                                          id="concern"
                                                                                                          value="<?php echo $d->sangat_tidak_setuju; ?>"
                                                                                                          style="display: block !important; color: rgb(50, 55, 60);"
                                                                                                          autocomplete="off"
                                                                                                          type="radio"
                                                                                                          required />
                                                                                                </center>
                                                                                           </div>
                                                                                           <div
                                                                                                class="clearfix prettyradio labelright  blue has-pretty-child">
                                                                                                <h5
                                                                                                     style="margin-top: 5px;color: black;">
                                                                                                     1
                                                                                                </h5>
                                                                                           </div>
                                                                                      </td>

                                                                                      <td class="align-middle"
                                                                                           style="width: 70px; text-align: center;">
                                                                                           <div
                                                                                                class="clearfix prettyradio labelright  blue has-pretty-child">
                                                                                                <center>
                                                                                                     <input
                                                                                                          class="radio the_input_element"
                                                                                                          name="<?php echo "jawaban" . $d->id_soal; ?>"
                                                                                                          id="radio4"
                                                                                                          value="<?php echo $d->tidak_setuju; ?>"
                                                                                                          style="display: block !important; color: rgb(50, 55, 60);"
                                                                                                          autocomplete="off"
                                                                                                          type="radio"
                                                                                                          required />
                                                                                                </center>
                                                                                           </div>
                                                                                           <div
                                                                                                class="clearfix prettyradio labelright  blue has-pretty-child">
                                                                                                <h5
                                                                                                     style="margin-top: 5px;color: black;">
                                                                                                     2</h5>
                                                                                           </div>
                                                                                      </td>

                                                                                      <td class="align-middle"
                                                                                           style="width: 70px; text-align: center;">
                                                                                           <div
                                                                                                class="clearfix prettyradio labelright  blue has-pretty-child">
                                                                                                <center>
                                                                                                     <input
                                                                                                          class="radio the_input_element"
                                                                                                          name="<?php echo "jawaban" . $d->id_soal; ?>"
                                                                                                          id="radio2"
                                                                                                          for="radio2"
                                                                                                          value="<?php echo $d->setuju; ?>"
                                                                                                          style="display: block !important; color: rgb(50, 55, 60);"
                                                                                                          autocomplete="off"
                                                                                                          type="radio"
                                                                                                          required />
                                                                                                </center>
                                                                                           </div>
                                                                                           <div
                                                                                                class="clearfix prettyradio labelright  blue has-pretty-child">
                                                                                                <h5
                                                                                                     style="margin-top: 5px;color: black;">
                                                                                                     3</h5>
                                                                                           </div>
                                                                                      </td>

                                                                                      <td class="align-middle"
                                                                                           style="width: 70px; text-align: center;">
                                                                                           <div
                                                                                                class="clearfix prettyradio labelright  blue has-pretty-child">
                                                                                                <center>
                                                                                                     <input
                                                                                                          class="radio the_input_element"
                                                                                                          name="<?php echo "jawaban" . $d->id_soal; ?>"
                                                                                                          value="<?php echo $d->sangat_setuju; ?>"
                                                                                                          style="display: block !important; color: rgb(50, 55, 60);"
                                                                                                          autocomplete="off"
                                                                                                          type="radio"
                                                                                                          required />
                                                                                                </center>
                                                                                           </div>
                                                                                           <div
                                                                                                class="clearfix prettyradio labelright  blue has-pretty-child">
                                                                                                <h5
                                                                                                     style="margin-top: 5px;color: black;">
                                                                                                     4</h5>
                                                                                           </div>
                                                                                      </td>
                                                                                 </tr>
                                                                            </tbody>
                                                                       </table>

                                                                       <?php }
                                                                           } else { ?>
                                                                       <div class="logo">
                                                                            <h5><a><span>Tidak Ada Pertanyaan
                                                                                           Kuesioner</span></a>
                                                                            </h5>
                                                                       </div>
                                                                       <?php } ?>
                                                                       <br />

                                                                       <!-- <div class="form-items mb-2">
                                                                            <td class="title">
                                                                                 <p style="color: black;">Berikan
                                                                                      Ulasan
                                                                                      Anda
                                                                            </td>
                                                                       </div>
                                                                       <div class="form-floating mb-3"
                                                                            style="margin-right: 12px;">
                                                                            <textarea
                                                                                 style="height: 150px;border-color: black;"
                                                                                 class="form-control" id="inputJawaban"
                                                                                 name="jawaban"
                                                                                 placeholder="Ketik Ulasan" rows="15"
                                                                                 required></textarea>
                                                                       </div> -->
                                                                       <div style="margin-right: 10px;">
                                                                            <input type="submit" id="submitBtn"
                                                                                 style="border-radius: 10px;background-color: #4747A1;"
                                                                                 value="Kirim Jawaban"
                                                                                 class="btn btn-block btn-success">
                                                                       </div>
                                                                  </div>
                                                             </div>
                                                        </div>
                                                        <?php echo form_close(); ?>
                                                   </div>
                                              </div>
                                         </div>
                                         <!-- About Kuesioner -->
                                         <!-- <div class="modal fade" id="addModal" tabindex="-1" role="dialog"
                                              aria-labelledby="exampleModalLabel" aria-hidden="true">
                                              <div class="modal-dialog" role="document">
                                                   <div class="modal-content">
                                                        <div class="modal-header">
                                                             <p class="modal-title" style="color: black;"
                                                                  id="exampleModalLabel">
                                                                  About Kuesioner
                                                             </p>
                                                             <button type="button" class="close" data-dismiss="modal"
                                                                  aria-label="Close">
                                                                  <span aria-hidden="true">&times;</span>
                                                             </button>
                                                        </div>
                                                        <div class="modal-body">
                                                             <div class="row">
                                                                  <div class="col-md-12">

                                                                  </div>
                                                             </div>
                                                        </div>
                                                   </div>
                                              </div>
                                         </div> -->
                                    </div>

                               </div>

                          </div>
                     </div>
                </div>
                <!-- Hero Area End -->

      </header>
      <!-- Header Area wrapper End -->

      <!-- Go to Top Link -->
      <a href="#" class="back-to-top">
           <i class="lni-arrow-up"></i>
      </a>

      <!-- Preloader -->
      <div id="preloader">
           <div class="loader" id="loader-1"></div>
      </div>
      <!-- End Preloader -->

      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="<?php echo base_url(''); ?>assets/kuesioner/js/jquery-min.js"></script>
      <script src="<?php echo base_url(''); ?>assets/kuesioner/js/popper.min.js"></script>
      <script src="<?php echo base_url(''); ?>assets/kuesioner/js/bootstrap.min.js"></script>
      <script src="<?php echo base_url(''); ?>assets/kuesioner/js/owl.carousel.min.js"></script>
      <script src="<?php echo base_url(''); ?>assets/kuesioner/js/wow.js"></script>
      <script src="<?php echo base_url(''); ?>assets/kuesioner/js/jquery.nav.js"></script>
      <script src="<?php echo base_url(''); ?>assets/kuesioner/js/scrolling-nav.js"></script>
      <script src="<?php echo base_url(''); ?>assets/kuesioner/js/jquery.easing.min.js"></script>
      <script src="<?php echo base_url(''); ?>assets/kuesioner/js/main.js"></script>
      <script src="<?php echo base_url(''); ?>assets/kuesioner/js/form-validator.min.js"></script>
      <script src="<?php echo base_url(''); ?>assets/kuesioner/js/contact-form-script.min.js"></script>

      <script>
      var dt = new Date();
      document.getElementById("tanggal").innerHTML = dt.toLocaleDateString();
      </script>

      <script type="text/javascript">
      window.onload = function() {
           jam();
      }

      function jam() {
           var e = document.getElementById('jam'),
                d = new Date(),
                h, m, s;
           h = d.getHours();
           m = set(d.getMinutes());
           s = set(d.getSeconds());

           e.innerHTML = h + ':' + m + ':' + s;

           setTimeout('jam()', 1000);
      }

      function set(e) {
           e = e < 10 ? '0' + e : e;
           return e;
      }
      </script>
      <!-- AJAX JQUERY API CLASSIFICATION -->
      <!-- <script type="text/javascript">
      $(function() {
           $('button').click(function() {

                var identitas = $('#inputIdentitas').val();
                var nama = $('#inputNama').val();

                var jawaban = $('#inputJawaban').val();
                var paket = $('#inputPaket').val();

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
      </script> -->

 </body>

 </html>