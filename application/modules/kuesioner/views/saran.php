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
                                    <img class="img-fluid"
                                         src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgM94CsYI3dmsniIYIwjvxpKWqQkcgbpqoeXch-9Wqnk7Xto1TiuNzSq9FFjI2MFyWKn7DKvZTQwKmil6KX9bS0sQu8vCqgp0ZLTZyMK8K1YbyFEjvWniwKk3ifBUteDkHyciWxNW989k3H4RkY1HwHjrr0BIut-dk1wKwfntJ4MNedzkN4yH3FU6V0M3c/w574-h574/Desain%20tanpa%20judul%20(2).gif"
                                         alt="">
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

                                    <?php
                                        $no = 0 + 1;
                                        if ($data_paket) {
                                        foreach ($data_paket as $d) {
                                        ?>
                                    <div class="d-flex">
                                         <h4 class="font-weight-bold">Saran Pengembangan
                                         </h4>
                                    </div>
                                    <p style="text-align: justify;color: black;" class="mb-3">Testing |
                                         <b><?php echo $d->nama_paket; ?></b> | Metode Skala Likert & Text Mining
                                    </p>
                                    <p style="color: black;text-align: justify;">Mohon berikan ulasan untuk
                                         <b><?php echo $d->nama_paket; ?></b>
                                         dibawah
                                         ini! isi
                                         ulasan
                                         dengan jujur
                                         selama
                                         anda menggunakannya, jika ada trouble pada sistem tuliskan pada kolom
                                         dibawah
                                         ini. Terimakasih
                                    </p><br />

                                    <form role="form">

                                         <input id="inputIdentitas" name="id_identitas"
                                              value="<?php echo $user->username_id; ?>" hidden>
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
                                         <button id="myButton" type="submit"
                                              style="border-radius: 10px;background-color: #4747A1;"
                                              class="btn btn-block">Berikan Ulasan <span class="btn-label"></button>
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


      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

      <script type="text/javascript">
      $(document).ready(function() {
           $('#myButton').click(function(event) {
                event.preventDefault();

                var identitas = $('#inputIdentitas').val();
                var nama = $('#inputNama').val();
                var jawaban = $('#inputJawaban').val();
                var paket = $('#inputPaket').val();
                var prodi = $('#inputProdi').val();
                var sebagai = $('#inputSebagai').val();
                var gender = $('#inputGender').val();

                if (identitas && nama && jawaban && paket && prodi && sebagai && gender) {
                     $.ajax({
                          url: 'https://api.e-repository.my.id/',
                          data: $('form').serialize(),
                          type: 'POST',
                          complete: function(response) {
                               handleSuccess();
                               playSuccessSound();
                          },
                          error: function(error) {
                               console.log(error);
                          }
                     });
                } else {
                     // Handle case when any input field is empty
                     alert('Mohon isikan kolom ulasan terlebih dahulu!');
                }
           });
      });

      function handleSuccess() {
           Swal.fire('Sukses', 'Ulasan anda berhasil dikirim! Klik OK untuk menyelesaikan! Terimakasih 😉👌', 'success')
                .then(function() {
                     setTimeout(function() {
                          redirectToThankYouPage();
                     }, 1000); // 7000 milliseconds (7 seconds) delay before redirecting
                });
      }

      function redirectToThankYouPage() {
           window.location.href = 'https://sistem-evaluasi.e-repository.my.id/kuesioner/rating';
      }

      function playSuccessSound() {
           // Define the URL of the sound file
           var soundURL = 'assets/kuesioner/sound_end.mp3';
           var successSound = new Audio(soundURL);
           successSound.play();
      }
      </script>
 </body>

 </html>