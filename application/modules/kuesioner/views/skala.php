 <!DOCTYPE html>
 <html lang="en">

 <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <title>Kuesioner | e-Repo</title>

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
                          <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                               <div class="team-item wow fadeInRight">
                                    <div class="team-img">
                                         <?php if ($user_foto && file_exists('assets/images/' . $user->$user_foto)): ?>
                                         <!-- Tampilkan foto pengguna jika foto tersedia -->
                                         <img class="img-fluid"
                                              src="<?php echo base_url().'assets/images/'.$user->user_foto;?>"
                                              alt="Foto Profil">
                                         <?php else: ?>
                                         <!-- Tampilkan foto alternatif jika foto tidak tersedia -->
                                         <img class="img-fluid"
                                              src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEi0lIoGp50oO6nlDyji-5a-E6e6Iz097KNsJjl_vWaCvx-Gc8bFMyn07UNfls3yAtr00L1PKKDEU0hZKImQqd95qaOSpvQdGYJcVng6wn9Od5ndPWshU6SbcR9cqjfeaKtsmKhqyA88VDt2SEgDT_fR2sknaNgLD2UwnZ_6uR92FL_RCt507-Ci5VaNuv8/w429-h429/Terimakasih%20anda%20telah%20mengisi%20kuesioner%20ini%20dengan%20jujur!%20)%20(1).gif"
                                              alt="Foto Profil Alternatif">
                                         <?php endif; ?>
                                    </div>
                                    <div class="contetn">
                                         <div class="info-text">
                                              <p class="mb-3" style="color: grey;">Data Responden :</p>
                                              <h3><a href="#"><?php echo $user->user_namalengkap; ?></a></h3>
                                              <p>NIM : <?php echo $user->username_id; ?></p>
                                              <!--<p>Sebagai : <?php echo $user->user_level; ?></p>-->
                                              <p>Prodi : <?php echo $user->user_prodi; ?></p>
                                         </div>
                                    </div>
                               </div>
                          </div>
                          <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12 wow fadeInRight">
                               <div class="contetn" style="margin-left: 20px;margin-right: 20px;margin-top: 10px;">
                                    <?php
                                        $no=0+1;
                                        if ($data_paket){
                                        foreach ($data_paket as $d){ 
                                   ?>


                                    <h2 class="head-title"><?php echo $d->nama_paket; ?></h2>
                                    <p style="text-align: justify;color: black;" class="mb-3">Testing |
                                         <?php echo $d->nama_paket; ?> | Metode Skala Likert & Text Mining</p>
                                    <p style="text-align: justify;color: black;">Mohon isikan kuesioner dibawah ini,
                                         kuesioner ini dijadikan sebagai bahan untuk pengembangan sistem kedepannya.
                                         Kuesioner ini menggunakan pilihan angka, dengan metode skala likert. 🤓<br />1
                                         = Sangat Tidak Setuju<br />2 = Tidak Setuju<br />3 = Setuju<br />4 = Sangat
                                         Setuju</p>

                                    <!--<p style="text-align: justify;color: grey;">Assalamualaikum, Perkenalkan nama saya Moh. Fiqih Erinsyah dari Prodi DIV Teknik Informatika, untuk teman-teman mohon bantuannya untuk mengisi form kuesioner Usability Testing ini untuk pengujian sistem yang telah saya buat tentang Evaluasi Sistem Syncnau dan Oase yang ada di Politeknik Harapan Bersama. Mohon masukan ulasan sesuai yang anda rasakan selama menggunakan sistem. Terimakasih ðŸ‘ŒðŸ«¡</p>-->
                                    <?php }} else { ?>
                                    <td class="text-center" colspan="6">Tidak ada data</td>
                                    <?php } ?>
                                    <br />
                                    <div class="header-button">
                                         <div>
                                              <input data-toggle="modal" data-target="#isiKuesioner" type="submit"
                                                   id="submitBtn" style="border-radius: 10px;background-color: #4747A1;"
                                                   value="Isi Kuesioner" class="btn btn-block btn-success">
                                         </div>
                                    </div>
                                    <!-- Isi Kuesioner -->


                               </div>
                          </div>
                     </div>
                     <div class="modal fade" id="isiKuesioner" tabindex="-1" role="dialog"
                          aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                               <div class="modal-content">
                                    <div class="modal-header">
                                         <p class="modal-title" style="color: black;margin-left: 15px;"
                                              id="exampleModalLabel">
                                              <strong>Form Kuesioner</strong>
                                         </p>
                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                         </button>
                                    </div>
                                    <div class="modal-body" style="margin-bottom: 20px;">
                                         <?php echo form_open(uri(2) == "edit" ? url(1, "update") : url(1, "tambah_soal/") . uri(3)); ?>
                                         <!-- <form role="form"> -->
                                         <div class="row">
                                              <div class="col-md-12">

                                                   <div class="col-md-12">
                                                        <?php
                                                                      $no = 0 + 1;
                                                                      if ($data_soal) {
                                                                      foreach ($data_soal as $d) {
                                                                      ?>

                                                        <input id="inputIdentitas" name="id_identitas"
                                                             value="<?php echo $user->username_id; ?>" hidden>
                                                        <input id="inputNama" name="nama_lengkap"
                                                             value="<?php echo $user->user_namalengkap; ?>" hidden>
                                                        <input id="inputProdi" name="prodi"
                                                             value="<?php echo $user->user_prodi; ?>" hidden>
                                                        <input id="inputSebagai" name="sebagai"
                                                             value="<?php echo $user->user_level; ?>" hidden>
                                                        <input id="inputGender" name="gender"
                                                             value="<?php echo $user->user_gender; ?>" hidden>
                                                        <input id="inputPaket" style="width: 375px;"
                                                             name="id_paket_jawaban" value="<?php echo $d->id_paket; ?>"
                                                             hidden>
                                                        <input style="width: 375px;" name="id_soal_kuesioner"
                                                             value="<?php echo $d->id_soal; ?>" hidden>
                                                        <input style="width: 375px;" name="type_soal"
                                                             value="<?php echo $d->type_soal; ?>" hidden>
                                                        <div class="form-items mb-2">
                                                             <td class="title">
                                                                  <table class="table table-hover mb-0">
                                                                       <tbody>
                                                                            <tr>
                                                                                 <td class="align-middle"
                                                                                      style="width: 1px;">
                                                                                      <p style="color: black;">
                                                                                           <?php echo $no++; ?>.

                                                                                      </p>
                                                                                 </td>
                                                                                 <td class="align-middle">
                                                                                      <p style="color: black;">
                                                                                           <?php echo $d->soal; ?>
                                                                                      </p>
                                                                                 </td>
                                                                                 <table style="margin-left: 25px;">
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
                                                                                 <!--<td>-->
                                                                                 <!--    <p style="color: black;">-->

                                                                                 <!--    </p>-->
                                                                                 <!--</td>-->
                                                                            </tr>
                                                                       </tbody>
                                                                  </table>

                                                             </td>
                                                        </div>


                                                        <?php }
                                                                           } else { ?>
                                                        <div class="logo">
                                                             <h5><a><span>Tidak Ada Pertanyaan
                                                                            Kuesioner</span></a>
                                                             </h5>
                                                        </div>
                                                        <?php } ?>
                                                        <br />
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

      <!-- Data Tabel -->
      <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
      <script>
      $(document).ready(function() {
           $('#myTable').DataTable();
      });
      </script> -->

 </body>

 </html>