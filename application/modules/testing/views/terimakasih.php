<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- App favicon -->
     <link rel="shortcut icon" href="<?php echo base_url('assets/backend'); ?>/images/phb.png">
     <title>Kuesioner Aplikasi | Repository</title>

     <!-- Font Icon -->
     <link rel="stylesheet"
          href="<?php echo base_url('assets'); ?>/frontend/template/fonts/material-icon/css/material-design-iconic-font.min.css" />
     <!-- Main css -->
     <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/frontend/template/css/style.css" />
     <!-- <link rel="stylesheet" href="assets/frontend/template/css/navbar.css" /> -->
     <!-- Font Awesome -->
     <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet" />
     <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/frontend/font-awesome/css/font-awesome.min.css" />
     <!-- Bootstrap  -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>
     <!-- kuesioner form -->
     <!-- <?php
          $no = 0 + 1;
          if ($data_paket) {
               foreach ($data_paket as $d) {
          ?>
          <nav class="navbar navbar-expand-lg navbar-light bg-dark" style="background-color: #fff;">
               <div class="container-fluid">
                    <a class="navbar-brand" style="color: #fff;text-align: center;"><i data-width="70" data-height="70"
                              class="zmdi zmdi-collection-text"></i> <?php echo $d->nama_paket; ?>
                         v<?php echo $d->versi_apl_paket; ?></a>
                    <img style="width: 50px; height: 50px; float: right;"
                         src="<?php echo base_url('assets') ?>/frontend/template/images/logo.png" alt="poltek" />

               </div>
          </nav>
          <?php }
          } else { ?>

          <nav class="navbar navbar-expand-lg navbar-light bg-dark" style="background-color: #fff;">
               <div class="container-fluid col-md-6">
                    <a class="navbar-brand" style="color: #fff;text-align: center;float: left;"></a>
               </div>
          </nav>
          <?php } ?> -->
     <div class="container">
          <div class="signup-content">
               <center>
                    <!-- Berhasil Tambah -->
                    <?php if ($this->session->flashdata('notif_berhasil_soal')){ ?>
                    <div class="alert alert-success alert-dismissible fade show" data-dismiss="alert" aria-label="Close"
                         role="alert">
                         <span class="btn-label"></span><?php echo $this->session->flashdata('notif_berhasil_soal'); ?>
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                         </button>
                    </div>
                    <?php } ?>
                    <!-- Gagal Tambah -->
                    <?php if ($this->session->flashdata('notif_gagal_soal')){ ?>
                    <div class="alert alert-danger alert-dismissible fade show" data-dismiss="alert" aria-label="Close"
                         role="alert">
                         <span class="btn-label"></span><?php echo $this->session->flashdata('notif_gagal_soal'); ?>
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                         </button>
                    </div>
                    <?php } ?>
                    <div class="signup-image">
                         <figure>
                              <img src="<?php echo base_url('assets') ?> /frontend/template/images/kuesioner.png"
                                   alt="kuesioner" />
                         </figure>
                    </div>
                    <p style="padding-top: 20px;font-size:20px;">Terimakasih Anda Telah Mengisi Kuesioner Ini</hp>
               </center>
          </div>
     </div>

     <!-- JS -->
     <script src="assets/frontend/template/vendor/jquery/jquery.min.js"></script>
     <script src="assets/frontend/template/js/main.js"></script>
</body>

</html>