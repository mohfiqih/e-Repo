 <!DOCTYPE html>
 <html lang="en">

 <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <title>Form Kuesioner Sistem | e-Repo</title>

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

      <?php
          $no = 0 + 1;
          $found = false; 
                         
          if ($data_jawaban) {
                         foreach ($data_jawaban as $d) {
                              if ($this->username_id == $d->id_identitas) {
                                   $found = true;
                                   break;
                              }
                         }
          }
     ?>

      <?php if (!$found) { ?>
      <header id="header-wrap">
           <div id="hero-area" class="hero-area-bg">
                <div class="container">
                     <div class="row">
                          <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                               <div style="margin-left: 5px;">
                                    <a class="navbar-brand brand-logo mr-0" href="#"><img
                                              src="https://lh3.googleusercontent.com/-aoLSrb6TeHI/YbrrKzobSbI/AAAAAAAATyM/XNO_H8YC2pQmM2V4jhekgFENULk_-hsUgCNcBGAsYHQ/Poltek%2BHarber.png"
                                              style="width: 70px;height: 50px;margin-bottom: 10px;" /></a>
                                    <a class="navbar-brand brand-logo mr-2" href="#"><img
                                              src="<?php echo base_url('assets/auth/images/logo-long.png') ?>"
                                              style="width: 150px;height: 50px;margin-bottom: 10px;" /></a>

                               </div>
                               <br />
                               <div class="contents" style="margin-left: 20px;margin-right: 20px;">
                                    <?php
                                        $no=0+1;
                                        if ($data_paket){
                                        foreach ($data_paket as $d){ 
                                   ?>

                                    <!--<p class="mb-3">Kuesioner Peningkatan Sistem</p>-->
                                    <h2 class="head-title"><?php echo $d->nama_paket; ?></h2>
                                    <p class="mb-3" style="text-align: justify;color: black;">Testing |
                                         <?php echo $d->nama_paket; ?> | Metode
                                         Skala Likert & Text Mining</p>
                                    <p style="text-align: justify;color: black;">e-Repo merupakan sebuah website yang
                                         digunakan untuk Bidang TIK Politeknik Harapan Bersama yang dijadikan sebagai
                                         platform untuk mengevaluasi sebuah sistem yang ada di Politeknik, yaitu Oase
                                         dan Syncnau. Didalam web e-Repo ini terdapat dua metode yaitu Skala Likert dan
                                         Text Classification. 💫</p>
                                    <!--<p style="text-align: justify;color: black;">Assalamualaikum, Perkenalkan nama saya Moh. Fiqih Erinsyah dari Prodi DIV Teknik Informatika, untuk teman-teman mohon bantuannya untuk mengisi form kuesioner Usability Testing ini untuk pengujian sistem yang telah saya buat tentang Evaluasi Sistem Syncnau dan Oase yang ada di Politeknik Harapan Bersama. Mohon masukan ulasan sesuai yang anda rasakan selama menggunakan sistem. Terimakasih ðŸ‘ŒðŸ«¡-->
                                    <!--</p>-->
                                    <?php }} else { ?>
                                    <td class="text-center" colspan="6">Tidak ada data</td>
                                    <?php } ?>
                                    <div class="header-button">
                                         <a href="<?php echo base_url('kuesioner/skala/') . uri(3) ?>"
                                              class="btn text-white" style="background-color: #4747A1;">Isi
                                              Kuesioner</a>
                                         <a href="#" class="btn btn-border video-popup" data-toggle="modal"
                                              data-target="#addModal">About <i class="lni lni-reply"></i></a>
                                    </div>
                                    <div class="modal fade" id="addModal" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                         <div class="modal-dialog" role="document">
                                              <div class="modal-content">
                                                   <div class="modal-header">
                                                        <p class="modal-title" style="color: black;margin-left: 20px;"
                                                             id="exampleModalLabel">
                                                             <b>About e-Repo</b>
                                                        </p>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                             aria-label="Close">
                                                             <span aria-hidden="true">&times;</span>
                                                        </button>
                                                   </div>
                                                   <div class="modal-body">
                                                        <div class="row">
                                                             <div class="col-md-12"
                                                                  style="overflow-x: auto;margin: 20px;">
                                                                  <img width="430px" height="260px"
                                                                       src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhvRbMXm6jjeEPH6QhC4v0hCSnxh32-TzDB_R-80UObGjeJ6NZxZG_1qUGmgzjeJrX3-nrNEfkfZHVeh5xz2bhgFux51wf4h2Rz4ZnLJypKSTHdvRCm6qscmq8e93c5tIjAGmWzrZ72g-mlJohjJFAyUExXmAtglI_wE-xJkqI4pbemilMxfE1GD7qVR1M/s1133/Desain%20tanpa%20judul%20(3).gif"
                                                                       alt="people">
                                                             </div>
                                                             <div class="col-md-12">
                                                                  <p
                                                                       style="text-align: justify;color: black;margin-left: 20px;margin-right: 20px;">
                                                                       <b>e-Repo</b> merupakan sebuah website yang
                                                                       digunakan untuk Bidang TIK Politeknik Harapan
                                                                       Bersama yang dijadikan sebagai platform untuk
                                                                       mengevaluasi sebuah sistem yang ada di
                                                                       Politeknik, yaitu Oase dan Syncnau. Didalam web
                                                                       e-Repo ini terdapat dua metode yaitu Skala Likert
                                                                       dan Text Classification, dimana skala likert
                                                                       digunakan untuk menghitung persentase kepuasan
                                                                       user dalam menggunakan sistem oase atau syncnau,
                                                                       dan Text Classification digunakan untuk
                                                                       mengklasifikasikan komentar / ulasan Baik dan
                                                                       Kurang dari sistem tersebut, dan hasil akhir dari
                                                                       sistem adalah menyimpan data evaluasi persentase
                                                                       Kuesioner dan hasil komentar yang telah
                                                                       diklasifikasikan kedalam dua label. Dari dua
                                                                       metode tersebut dapat memudahkan untuk
                                                                       menganalisis hasil kuesioner tersebut, apakah
                                                                       syncnau atau oase perlu pengembangan dibagian
                                                                       mana saja.
                                                                  </p>
                                                                  <br />
                                                             </div>
                                                        </div>
                                                   </div>
                                              </div>
                                         </div>
                                    </div>
                               </div>
                          </div>
                          <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 wow fadeInRight">
                               <div class="intro-img">
                                    <img style="margin-top: 0px;" class="img-fluid"
                                         src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhAIhPBcvBLUEuUqURlRv0RzXyNGLRJK3yMxo7fR2A7SQRRfReU7wkxd8rf684Ylsko6O5bDTcBERZiFfiw5aBm9d0KdmMFQ87-P59RZoY4Ts0fkf_D66pc4AxST-i61S-xbTmrFmqoLysoYYEnWBymQWJwiFWG_fjuPH2fhb_Rh_RY6crMbKiUMhklWQg/w568-h568/Desain%20tanpa%20judul%20(1).gif"
                                         alt="">
                               </div>
                          </div>
                     </div>
                </div>
           </div>
           <!-- Hero Area End -->

      </header>
      <?php } else { ?>
      <center>
           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wow fadeInRight">
                <div class="intro-img">
                     <img style="margin-top: 50px;" class="img-fluid"
                          src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgRRCLb4wXtnNbMzBCJpZezz2jsvueKE-Z3QvFVXOVYdCNFKFK1x77guUMFEfX_9mswPSjwwiUgjXRvApyNHRdDRy21NKy7aVIIv2huy_Zw_XhNa5sSG9T7pKKLUuA4A6TGE3olXn-S2u_JHQX8nAejuofPgCcD7I-QNuXJyZc4psNikWmLyeght1PlRGo/w575-h575/Anda%20Sudah%20Mengisi%20Kuesioner%20ini.jpg"
                          alt="">
                </div>
           </div>
      </center>
      <?php } ?>

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

 </body>

 </html>