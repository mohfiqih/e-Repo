 <!DOCTYPE html>
 <html lang="en">

 <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <title>Form Kuesioner Sistem</title>

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
                          <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                               <div class="intro-img wow fadeInRight" style="margin-right: 20px;">
                                    <br />
                                    <img style="margin-top: 20px;" class="img-fluid"
                                         src="<?php echo base_url(''); ?>assets/kuesioner/img/21430.jpg" alt="">
                               </div>
                          </div>
                          <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12 wow fadeInRight">
                               <div class="contetn" style="margin-left: 20px;margin-right: 20px;margin-top: 10px;">
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
                                    <div class="d-flex">
                                         <h4 class="font-weight-bold">Saran Pengembangan
                                         </h4>
                                    </div>
                                    <p style="color: gray;text-align: justify;">Mohon bantuan berikan ulasan anda
                                         dibawah
                                         ini! isi
                                         ulasan
                                         dengan jujur
                                         selama
                                         anda menggunakannya, jika ada trouble pada sistem tuliskan pada kolom
                                         dibawah
                                         ini. Terimakasih 👌🫡</p><br />
                                    <form role="form">
                                         <?php
                                        $no = 0 + 1;
                                        if ($data_paket) {
                                        foreach ($data_paket as $d) {
                                        ?>
                                         <input id="inputIdentitas" name="id_identitas"
                                              value="<?php echo $user->user_id; ?>" hidden>
                                         <input id="inputNama" name="nama_lengkap"
                                              value="<?php echo $user->user_namalengkap; ?>" hidden>
                                         <input id="inputProdi" name="prodi" value="<?php echo $user->user_prodi; ?>"
                                              hidden>
                                         <input id="inputSebagai" name="sebagai"
                                              value="<?php echo $user->user_level; ?>" hidden>
                                         <input id="inputGender" name="gender" value="<?php echo $user->user_gender; ?>"
                                              hidden>
                                         <input id="inputPaket" name="id_paket_jawaban"
                                              value="<?php echo $d->id_paket; ?>" hidden>

                                         <div class="form-floating mb-3">
                                              <textarea style="height: 150px;border-color: black;" class="form-control"
                                                   id="inputJawaban" name="jawaban" placeholder="Ketik Jawaban Anda"
                                                   rows="15" required></textarea>
                                         </div>
                                         <button id="submitBtn" type="submit"
                                              style="border-radius: 10px;background-color: #4747A1;"
                                              class="btn btn-block">Kirim
                                              Jawaban <span class="btn-label"></button>
                                         <?php }
                                        } else { ?>
                                         <div class="logo">
                                              <h5><a><span>Tidak Ada Pertanyaan</span></a></h5>
                                         </div>
                                         <?php } ?>
                                    </form>
                               </div>
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

      <!-- AJAX JQUERY API CLASSIFICATION -->
      <script type="text/javascript">
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
                     success: function(data) {
                          //  '<a href="https://localhost/web_skripsi/testing/terimakasih"></a>'
                          //  console.log(response);
                          //  window.location =
                          //       'https://localhost/web_skripsi/testing/terimakasih';
                     },
                     error: function(error) {
                          console.log(error);
                     }
                });
           });
      });
      </script>
 </body>

 </html>