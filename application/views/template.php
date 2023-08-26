<!-- <!DOCTYPE html> -->
<html lang="en">

<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- <title>Kuesioner Evaluasi Sistem</title> -->
     <link rel="stylesheet"
          href="<?php echo base_url('assets/template_sky/template/vendors/feather/feather.css'); ?>" />
     <link rel="stylesheet"
          href="<?php echo base_url('assets/template_sky/template/vendors/ti-icons/css/themify-icons.css'); ?>" />
     <link rel="stylesheet"
          href="<?php echo base_url('assets/template_sky/template/vendors/css/vendor.bundle.base.css'); ?>" />

     <!-- Font Awesome -->
     <link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/fontawesome.min.css'); ?>" />
     <link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.min.css'); ?>">

     <link rel="stylesheet"
          href="<?php echo base_url('assets/template_sky/template/css/vertical-layout-light/style.css'); ?>" />

     <!-- <link rel="stylesheet" href="<?php echo base_url('assets/popup/style.css'); ?>" /> -->
     <link rel="shortcut icon" href="<?php echo base_url('assets/backend'); ?>/images/phb.png" />

     <!-- Data Table -->
     <link rel="stylesheet"
          href="<?php echo base_url('assets/template_sky/template/vendors/datatables.net-bs4/dataTables.bootstrap4.css'); ?>" />
     <link rel="stylesheet" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" />
     <link rel="stylesheet" src="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css" />


</head>

<body>
     <!-- ---------------------------------------- LEVEL SUPER ADMIN ------------------------------------------->
     <!-- ---------------------------------------- LEVEL SUPER ADMIN ------------------------------------------->
     <!-- ---------------------------------------- LEVEL SUPER ADMIN ------------------------------------------->
     <?php if ($this->user_level == "Super Admin"):?>
     <div class="container-scroller">
          <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row "
               style="box-shadow: 0px 5px 21px -5px #grey!important;">
               <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo mr-5" href="#"><img
                              src="<?php echo base_url('assets/auth/images/logo-long.png') ?>"
                              style="width: 150px;height: 50px;margin-left: 40px;" /></a>
                    <a class="navbar-brand brand-logo-mini" href="#"><img src="assets/auth/images/logo-short.png" /></a>
               </div>
               <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                         data-toggle="minimize">
                         <span class="icon-menu"></span>
                    </button>
                    <ul class="navbar-nav navbar-nav-right">
                         <li class="nav-item dropdown">
                              <!--<a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"-->
                              <!--     data-toggle="dropdown">-->
                              <!--     <i class="icon-bell mx-0"></i>-->
                              <!--     <span class="count"></span>-->
                              <!--</a>-->
                              <!-- <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                                   aria-labelledby="notificationDropdown">
                                   <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                                   <a class="dropdown-item preview-item">
                                        <div class="preview-thumbnail">
                                             <div class="preview-icon bg-success">
                                                  <i class="ti-info-alt mx-0"></i>
                                             </div>
                                        </div>
                                        <div class="preview-item-content">
                                             <h6 class="preview-subject font-weight-normal">Application Error</h6>
                                             <p class="font-weight-light small-text mb-0 text-muted">
                                                  Just now
                                             </p>
                                        </div>
                                   </a>
                                   <a class="dropdown-item preview-item">
                                        <div class="preview-thumbnail">
                                             <div class="preview-icon bg-warning">
                                                  <i class="ti-settings mx-0"></i>
                                             </div>
                                        </div>
                                        <div class="preview-item-content">
                                             <h6 class="preview-subject font-weight-normal">Settings</h6>
                                             <p class="font-weight-light small-text mb-0 text-muted">
                                                  Private message
                                             </p>
                                        </div>
                                   </a>
                                   <a class="dropdown-item preview-item">
                                        <div class="preview-thumbnail">
                                             <div class="preview-icon bg-info">
                                                  <i class="ti-user mx-0"></i>
                                             </div>
                                        </div>
                                        <div class="preview-item-content">
                                             <h6 class="preview-subject font-weight-normal">New user registration</h6>
                                             <p class="font-weight-light small-text mb-0 text-muted">
                                                  2 days ago
                                             </p>
                                        </div>
                                   </a>
                              </div> -->
                         </li>
                         <li class="nav-item nav-profile dropdown">
                              <div class="u-text">
                                   <h5 id="profileDropdown" style="margin-top: 10px;height: 30px;"
                                        class="btn btn-xs btn-primary btn-sm">
                                        <?php echo $user->user_namalengkap;?>
                                   </h5>

                              </div>
                              <a style="margin-left: 10px;" class="nav-link dropdown-toggle" href="#"
                                   data-toggle="dropdown" id="profileDropdown">
                                   <img style="width: 30px;height: 30px;"
                                        src="<?php echo base_url().'assets/images/'.$user->user_foto;?>"
                                        alt="profile" />
                              </a>

                              <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                                   aria-labelledby="profileDropdown" style="width: 250px;">
                                   <a class="dropdown-item">
                                        <img style="width: 40px;height: 40px;margin-right: 10px;"
                                             src="<?php echo base_url().'assets/images/'.$user->user_foto;?>"
                                             alt="profile" class="avatar-img rounded" />
                                        <?php echo $user->user_namalengkap;?>
                                   </a>
                                   <a href="<?php echo base_url('profil/view'); ?>" class="dropdown-item">
                                        <i class="fas fa-image text-primary"></i>
                                        Lihat Profil
                                   </a>
                                   <a href="<?php echo base_url('profil'); ?>" class="dropdown-item">
                                        <i class="ti-settings text-primary"></i>
                                        Edit Profil
                                   </a>
                                   <?php if ($this->user_level == "Super Admin" or $this->user_level == "Pengevaluasi"):?>
                                   <a onclick="return confirm('Yakin logout?')" class="dropdown-item"
                                        href="<?php echo base_url('logout'); ?>">
                                        <i class="ti-power-off text-primary"></i>
                                        Logout
                                   </a>
                                   <?php elseif ($this->user_level == "Mahasiswa"): ?>
                                   <a onclick="return confirm('Yakin logout?')" class="dropdown-item"
                                        href="<?php echo base_url('logoutUser'); ?>">
                                        <i class="ti-power-off text-primary"></i>
                                        Logout
                                   </a>
                                   <?php else: ?>
                                   <a onclick="return confirm('Yakin logout?')" class="dropdown-item"
                                        href="<?php echo base_url('logout'); ?>">
                                        <i class="ti-power-off text-primary"></i>
                                        Logout
                                   </a>
                                   <?php endif; ?>
                              </div>
                         </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                         data-toggle="offcanvas">
                         <span class="icon-menu"></span>
                    </button>
               </div>
          </nav>
          <div class="container-fluid page-body-wrapper">
               <nav class="sidebar sidebar-offcanvas" id="sidebar">
                    <ul class="nav">

                         <li class="nav-item active">
                              <a class="nav-link active" href="<?php echo base_url('dasbor'); ?>">
                                   <i class="fas fa-home menu-icon"></i>
                                   <span class="menu-title">Dashboard</span>
                              </a>
                         </li>
                         <li class="nav-item" style="margin-left: 17px;margin-top: 20px;">
                              <span class="menu-title" style="color: grey;">Menu Data</span>
                         </li>

                         <li class="nav-item">
                              <a class="nav-link" href="<?php echo base_url('manajerial'); ?>">
                                   <i class="fas fa-list menu-icon"></i>
                                   <span class="menu-title">Data Manajerial</span>
                              </a>
                         </li>
                         <!-- <li class="nav-item">
                              <a class="nav-link" href="<?php echo base_url('berkas'); ?>">
                                   <i class="fa-solid fa-file menu-icon"></i>
                                   <span class="menu-title">Data Berkas</span>
                              </a>
                         </li> -->

                         <li class="nav-item">
                              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                                   aria-controls="ui-basic">
                                   <i class="fas fa-book menu-icon"></i>
                                   <span class="menu-title">Data Paket</span>
                                   <i class="menu-arrow"></i>
                              </a>
                              <div class="collapse" id="ui-basic">
                                   <ul class="nav flex-column sub-menu">
                                        <li class="nav-item"> <a class="nav-link"
                                                  href="<?php echo base_url('paket') ?>">Paket Kuesioner</a>
                                        </li>
                                        <li class="nav-item"> <a class="nav-link"
                                                  href="<?php echo base_url('link_kuesioner') ?>">Link Kuesioner</a>
                                        </li>
                                        <!--<li class="nav-item"> <a class="nav-link"-->
                                        <!--          href="<?php echo base_url('link_kuesioner/testing') ?>">Link-->
                                        <!--          Testing</a>-->
                                        <!--</li>-->
                                        <li class="nav-item"> <a class="nav-link"
                                                  href="<?php echo base_url('link_kuesioner/shared') ?>">Share Link</a>
                                        </li>
                                   </ul>
                              </div>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false"
                                   aria-controls="charts">
                                   <i class="fas fa-calendar menu-icon"></i>
                                   <span class="menu-title">Report Kuesioner</span>
                                   <i class="menu-arrow"></i>
                              </a>
                              <div class="collapse" id="charts">
                                   <ul class="nav flex-column sub-menu">
                                        <li class="nav-item"> <a class="nav-link"
                                                  href="<?php echo base_url('report') ?>">Skala Likert</a>
                                        </li>
                                        <li class="nav-item"> <a class="nav-link"
                                                  href="<?php echo base_url('report/komentar') ?>">
                                                  Komentar</a></li>
                                   </ul>
                              </div>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link" href="<?php echo base_url('diagram'); ?>">
                                   <i class="fas fa-chart-line menu-icon"></i>
                                   <span class="menu-title">Grafik</span>
                              </a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link" data-toggle="collapse" href="#export" aria-expanded="false"
                                   aria-controls="export">
                                   <i class="fa-solid fa-file-export menu-icon"></i>
                                   <span class="menu-title">Export Data</span>
                                   <i class="menu-arrow"></i>
                              </a>
                              <div class="collapse" id="export">
                                   <ul class="nav flex-column sub-menu">
                                        <li class="nav-item">
                                             <a class="nav-link" href="<?php echo base_url('export/pdf') ?>">Export
                                                  PDF</a>
                                        </li>
                                        <li class="nav-item">
                                             <a class="nav-link" href="<?php echo base_url('export/excel') ?>">
                                                  Export Excel</a>
                                        </li>
                                   </ul>
                              </div>
                         </li>
                         <li class="nav-item" style="margin-left: 17px;margin-top: 20px;">
                              <span class="menu-title" style="color: grey;">Master Data</span>
                         </li>

                         <li class="nav-item">
                              <a class="nav-link" href="<?php echo base_url('users'); ?>">
                                   <i class="fa-solid fa-user menu-icon"></i>
                                   <span class="menu-title">Data User</span>
                              </a>
                         </li>

                         <li class="nav-item">
                              <a class="nav-link" href="<?php echo base_url('rating'); ?>">
                                   <i class="fa-solid fa-star menu-icon"></i>
                                   <span class="menu-title">Rating e-Repo</span>
                              </a>
                         </li>
                    </ul>
               </nav>

               <!-- partial -->
               <div class="main-panel">
                    <div class="content-wrapper">

                         <!-- ============================================================== -->
                         <!-- Start Page Content here -->
                         <!-- ============================================================== -->

                         <?php $this->load->view($view); ?>

                         <!-- ============================================================== -->
                         <!-- End Page content -->
                         <!-- ============================================================== -->

                    </div>
                    <footer class="footer">
                         <div class="d-sm-flex justify-content-center justify-content-sm-between">
                              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright ©
                                   2022. Moh. Fiqih |
                                   <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">| Tugas
                                        Akhir Teknik Informatika</span>
                         </div>
                    </footer>
               </div>
          </div>
     </div>

     <!-- ---------------------------------------- LEVEL PENGEVALUASI  ------------------------------------------->
     <!-- ---------------------------------------- LEVEL PENGEVALUASI ------------------------------------------->
     <!-- ---------------------------------------- LEVEL PENGEVALUASI ------------------------------------------->
     <?php elseif ($this->user_level == "Pengevaluasi"):?>
     <div class="container-scroller">
          <!-- partial:partials/_navbar.html -->
          <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row "
               style="box-shadow: 0px 5px 21px -5px #grey!important;">
               <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo mr-5" href="#"><img
                              src="<?php echo base_url('assets/auth/images/logo-long.png') ?>"
                              style="width: 150px;height: 50px;margin-left: 40px;" /></a>
                    <a class="navbar-brand brand-logo-mini" href="#"><img src="assets/auth/images/logo-short.png" /></a>

               </div>
               <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                         data-toggle="minimize">
                         <span class="icon-menu"></span>
                    </button>
                    <ul class="navbar-nav navbar-nav-right">
                         <li class="nav-item dropdown">
                              <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                                   data-toggle="dropdown">
                                   <i class="icon-bell mx-0"></i>
                                   <span class="count"></span>
                              </a>
                         </li>
                         <li class="nav-item nav-profile dropdown">
                              <div class="u-text">

                                   <h5 id="profileDropdown" style="margin-top: 10px;height: 30px;"
                                        class="btn btn-xs btn-primary btn-sm">
                                        <?php echo $user->user_namalengkap;?>
                                   </h5>

                              </div>
                              <a style="margin-left: 10px;" class="nav-link dropdown-toggle" href="#"
                                   data-toggle="dropdown" id="profileDropdown">
                                   <img style="width: 30px;height: 30px;"
                                        src="<?php echo base_url().'assets/images/'.$user->user_foto;?>"
                                        alt="profile" />
                              </a>

                              <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                                   aria-labelledby="profileDropdown" style="width: 250px;">

                                   <a class="dropdown-item">
                                        <img style="width: 30px;height: 30px;"
                                             src="<?php echo base_url().'assets/images/'.$user->user_foto;?>"
                                             alt="profile" />
                                        <?php echo $user->user_namalengkap;?>
                                   </a>
                                   <a href="<?php echo base_url('profil/view'); ?>" class="dropdown-item">
                                        <i class="fas fa-image text-primary"></i>
                                        Lihat Profil
                                   </a>
                                   <a href="<?php echo base_url('profil'); ?>" class="dropdown-item">
                                        <i class="ti-settings text-primary"></i>
                                        Edit Profil
                                   </a>
                                   <a class="dropdown-item" href="<?php echo base_url('logout'); ?>">
                                        <i class="ti-power-off text-primary"></i>
                                        Logout
                                   </a>
                              </div>
                         </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                         data-toggle="offcanvas">
                         <span class="icon-menu"></span>
                    </button>
               </div>
          </nav>
          <div class="container-fluid page-body-wrapper">

               <nav class="sidebar sidebar-offcanvas" id="sidebar">
                    <ul class="nav">

                         <li class="nav-item active">
                              <a class="nav-link active" href="<?php echo base_url('dasbor'); ?>">
                                   <i class="fas fa-home menu-icon"></i>
                                   <span class="menu-title">Dashboard</span>
                              </a>
                         </li>
                         <li class="nav-item" style="margin-left: 17px;margin-top: 20px;">
                              <span class="menu-title" style="color: grey;">Menu Data</span>
                         </li>

                         <li class="nav-item">
                              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                                   aria-controls="ui-basic">
                                   <i class="fas fa-book menu-icon"></i>
                                   <span class="menu-title">Bank Pertanyaan</span>
                                   <i class="menu-arrow"></i>
                              </a>
                              <div class="collapse" id="ui-basic">
                                   <ul class="nav flex-column sub-menu">
                                        <li class="nav-item"> <a class="nav-link"
                                                  href="<?php echo base_url('paket') ?>">Paket
                                                  Kuesioner</a>
                                        </li>
                                        <li class="nav-item"> <a class="nav-link"
                                                  href="<?php echo base_url('link_kuesioner') ?>">Link
                                                  Kuesioner</a>
                                        </li>
                                        <!--<li class="nav-item"> <a class="nav-link"-->
                                        <!--          href="<?php echo base_url('link_kuesioner/testing') ?>">Link-->
                                        <!--          Testing</a>-->
                                        <!--</li>-->
                                        <li class="nav-item"> <a class="nav-link"
                                                  href="<?php echo base_url('link_kuesioner/shared') ?>">Share Link</a>
                                        </li>
                                   </ul>
                              </div>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false"
                                   aria-controls="charts">
                                   <i class="fas fa-calendar menu-icon"></i>
                                   <span class="menu-title">Report Kuesioner</span>
                                   <i class="menu-arrow"></i>
                              </a>
                              <div class="collapse" id="charts">
                                   <ul class="nav flex-column sub-menu">
                                        <li class="nav-item"> <a class="nav-link"
                                                  href="<?php echo base_url('report') ?>">Skala Likert</a>
                                        </li>
                                        <li class="nav-item"> <a class="nav-link"
                                                  href="<?php echo base_url('report/komentar') ?>">
                                                  Komentar</a></li>

                                   </ul>
                              </div>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link" data-toggle="collapse" href="#export" aria-expanded="false"
                                   aria-controls="export">
                                   <i class="fa-solid fa-file-export menu-icon"></i>
                                   <span class="menu-title">Export Data</span>
                                   <i class="menu-arrow"></i>
                              </a>
                              <div class="collapse" id="export">
                                   <ul class="nav flex-column sub-menu">
                                        <li class="nav-item">
                                             <a class="nav-link" href="<?php echo base_url('export/pdf') ?>">Export
                                                  PDF</a>
                                        </li>
                                        <li class="nav-item">
                                             <a class="nav-link" href="<?php echo base_url('export/excel') ?>">
                                                  Export Excel</a>
                                        </li>
                                   </ul>
                              </div>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link" href="<?php echo base_url('diagram'); ?>">
                                   <i class="fas fa-chart-line menu-icon"></i>
                                   <span class="menu-title">Grafik</span>
                              </a>
                         </li>
                    </ul>
               </nav>

               <div class="main-panel">
                    <div class="content-wrapper">

                         <!-- ============================================================== -->
                         <!-- Start Page Content here -->
                         <!-- ============================================================== -->

                         <?php $this->load->view($view); ?>

                         <!-- ============================================================== -->
                         <!-- End Page content -->
                         <!-- ============================================================== -->

                    </div>
                    <footer class="footer">
                         <div class="d-sm-flex justify-content-center justify-content-sm-between">
                              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright
                                   ©
                                   2022. Moh. Fiqih |
                                   <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">| Tugas
                                        Akhir Teknik Informatika</span>
                         </div>
                    </footer>
               </div>
          </div>
     </div>


     <!-- ---------------------------------------- LEVEL DOSEN & MAHASISWA ------------------------------------------->
     <!-- ---------------------------------------- LEVEL DOSEN & MAHASISWA ------------------------------------------->
     <!-- ---------------------------------------- LEVEL DOSEN & MAHASISWA ------------------------------------------->
     <?php else: ?>
     <div class="container-scroller">
          <!-- partial:partials/_navbar.html -->
          <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row "
               style="box-shadow: 0px 5px 21px -5px #grey!important;">
               <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo mr-5" href="#"><img
                              src="<?php echo base_url('assets/auth/images/logo-long.png') ?>"
                              style="width: 150px;height: 50px;margin-left: 40px;" /></a>
                    <a class="navbar-brand brand-logo-mini" href="#"><img src="assets/auth/images/logo-short.png" /></a>

               </div>
               <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                         data-toggle="minimize">
                         <span class="icon-menu"></span>
                    </button>
                    <ul class="navbar-nav navbar-nav-right">
                         <!--<li class="nav-item dropdown">-->
                         <!--     <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"-->
                         <!--          data-toggle="dropdown">-->
                         <!--          <i class="icon-bell mx-0"></i>-->
                         <!--          <span class="count"></span>-->
                         <!--     </a>-->
                         <!--</li>-->
                         <li class="nav-item nav-profile dropdown">
                              <div class="u-text">
                                   <h5 id="profileDropdown" style="margin-top: 10px;height: 30px;"
                                        class="btn btn-xs btn-primary btn-sm">
                                        <?php echo $user->user_namalengkap;?>
                                   </h5>
                              </div>
                              <a style="margin-left: 10px;" class="nav-link dropdown-toggle" href="#"
                                   data-toggle="dropdown" id="profileDropdown">
                                   <img style="width: 30px;height: 30px;"
                                        src="<?php echo base_url().'assets/images/'.$user->user_foto;?>"
                                        alt="profile" />
                              </a>

                              <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                                   aria-labelledby="profileDropdown" style="width: 250px;">

                                   <a class="dropdown-item">
                                        <img style="width: 30px;height: 30px;"
                                             src="<?php echo base_url().'assets/images/'.$user->user_foto;?>"
                                             alt="profile" />
                                        <?php echo $user->user_namalengkap;?>
                                   </a>
                                   <a href="<?php echo base_url('profil/view'); ?>" class="dropdown-item">
                                        <i class="fas fa-image text-primary"></i>
                                        Lihat Profil
                                   </a>
                                   <a href="<?php echo base_url('profil'); ?>" class="dropdown-item">
                                        <i class="ti-settings text-primary"></i>
                                        Edit Profil
                                   </a>
                                   <a class="dropdown-item" href="<?php echo base_url('logout'); ?>">
                                        <i class="ti-power-off text-primary"></i>
                                        Logout
                                   </a>
                              </div>
                         </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                         data-toggle="offcanvas">
                         <span class="icon-menu"></span>
                    </button>
               </div>
               <!-- <div class="popup">
                    <div class="popup-content">
                         <h3 style="float: right;margin-top: 15px;margin-right: 20px;">x</h3>
                         <h4>Informasi Sistem!</h4><br />

                         <p style="text-align: justify;">Dalam rangka untuk pengembangan sistem kedepannya, mohon untuk
                              pengguna
                              sistem bisa memberikan ulasan pada
                              kuesioner berikut ini, isi dengan jujur selama anda menggunakan sistem tersebut. Jika ada
                              kendala sampaikan dalam kolom komentar. Terimakasih.
                         </p>
                         <br />
                         <div style="overflow-x: auto;">
                              <p>Link Kuesioner :<br />
                                   <a style="text-align: justify;"
                                        href="https://localhost/web_skripsi/kuesioner/index/VUpCaWQvTEdhWGNWRGh6YUxWdUlIZw">Klik
                                        Link Kuesioner</a>
                              </p>
                         </div>
                         <br />

                    </div>
               </div> -->
          </nav>
          <!-- partial -->
          <div class="container-fluid page-body-wrapper">
               <!-- partial:partials/_settings-panel.html -->

               <!-- partial -->
               <!-- partial:partials/_sidebar.html -->

               <nav class="sidebar sidebar-offcanvas" id="sidebar">
                    <ul class="nav">

                         <li class="nav-item active">
                              <a class="nav-link active" href="<?php echo base_url('dasbor'); ?>">
                                   <i class="fas fa-home menu-icon"></i>
                                   <span class="menu-title">Dashboard</span>
                              </a>

                         </li>
                         <!-- <li class="nav-item">
                              <a class="nav-link" href="<?php echo base_url('profil'); ?>">
                                   <i class="fas fa-book menu-icon"></i>
                                   <span class="menu-title">Perkuliahan</span>
                              </a>
                         </li> -->
                    </ul>
               </nav>

               <!-- partial -->
               <div class="main-panel">

                    <div class="content-wrapper">

                         <!-- ============================================================== -->
                         <!-- Start Page Content here -->
                         <!-- ============================================================== -->

                         <?php $this->load->view($view); ?>

                         <!-- ============================================================== -->
                         <!-- End Page content -->
                         <!-- ============================================================== -->

                    </div>
                    <!-- content-wrapper ends -->
                    <!-- partial:partials/_footer.html -->
                    <footer class="footer">
                         <div class="d-sm-flex justify-content-center justify-content-sm-between">
                              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright
                                   ©
                                   2022. Moh. Fiqih |
                                   <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">| Tugas
                                        Akhir Teknik Informatika</span>
                         </div>
                    </footer>
                    <!-- partial -->
               </div>
               <!-- main-panel ends -->
          </div>

          <!-- page-body-wrapper ends -->
     </div>
     <?php endif; ?>
     <!-- container-scroller -->

     <!-- plugins:js -->
     <script src="<?php echo base_url('assets/template_sky/template/vendors/js/vendor.bundle.base.js'); ?>">
     </script>
     <!-- End plugin js for this page -->
     <!-- inject:js -->
     <script src="<?php echo base_url('assets/template_sky/template/js/off-canvas.js'); ?>"></script>
     <script src="<?php echo base_url('assets/template_sky/template/js/hoverable-collapse.js'); ?>"></script>
     <script src="<?php echo base_url('assets/template_sky/template/js/template.js'); ?>"></script>
     <script src="<?php echo base_url('assets/template_sky/template/js/settings.js'); ?>"></script>
     <script src="<?php echo base_url('assets/template_sky/template/js/todolist.js'); ?>"></script>
     <!-- endinject -->
     <!-- Custom js for this page-->
     <script src="<?php echo base_url('assets/template_sky/template/js/dashboard.js'); ?>"></script>
     <script src="<?php echo base_url('assets/template_sky/template/js/Chart.roundedBarCharts.js'); ?>"></script>
     <!-- End custom js for this page-->
     <!-- Datatables -->
     <!-- <script src="assets/template_new/assets/js/plugin/datatables/datatables.min.js"></script> -->

     <!-- tinyMCE 6 -->
     <!-- TinyMCE Textarea -->
     <script src="https://cdn.tiny.cloud/1/yhd64lts0infdae4tlek33kemrzm6zgj59efv818k4r2oy2o/tinymce/6/tinymce.min.js"
          referrerpolicy="origin"></script>
     <script>
     tinymce.init({
          selector: 'textarea',
          plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
          toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
          tinycomments_mode: 'embedded',
          tinycomments_author: 'Author name',
          mergetags_list: [{
                    value: 'First.Name',
                    title: 'First Name'
               },
               {
                    value: 'Email',
                    title: 'Email'
               },
          ]
     });
     </script>

     <!-- Datepicker -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
     <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
     <script>
     config = {
          enableTime = true,
          dateFormat: "Y-m-d H:i",
     }
     flatpickr("input[type=datetime-local]", {});
     </script>

     <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
     <link rel="stylesheet" href="/resources/demos/style.css">
     <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
     <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
     <script>
     $(function() {
          $("#datepicker").datepicker();
     });
     </script> -->

     <!-- Jam dan Tanggal Dashboard -->
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

     <!-- Data Tabel -->
     <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
     <script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
     <script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
     <script>
     $(document).ready(function() {
          $('#myTable').DataTable();
     });
     </script>

     <script>
     $(document).ready(function() {
          $('#cari_skala').DataTable({
               dom: '<"top"<"pull-left"f><"pull-left"l>>rt<"bottom"<"pull-left"i><"pull-left"p>>',
               paging: false,
               ordering: false,
               info: false,
          });
     });
     </script>
     <script>
     $(document).ready(function() {
          $('#cari_klasifikasi').DataTable({
               dom: '<"top"<"pull-left"f><"pull-left"l>>rt<"bottom"<"pull-left"i><"pull-left"p>>',
               paging: false,
               ordering: false,
               info: false,
          });
     });
     </script>

     <script>
     $(document).ready(function() {
          $('#TableJawaban').DataTable();
     });
     </script>

     <script src="https://code.highcharts.com/highcharts.js"></script>
     <!-- Diagram Analisis -->
     <script type="text/javascript">
     Highcharts.chart('total_responden', {
          chart: {
               plotBackgroundColor: null,
               plotBorderWidth: null,
               plotShadow: false,
               type: 'pie'
          },
          title: {
               text: 'Grafik Total Responden',
               align: 'left'
          },
          subtitle: {
               text: 'Source: <a ' +
                    'href="https://www.highcharts.com/"' +
                    'target="_blank">Highchart.com</a>',
               align: 'left'
          },
          tooltip: {
               pointFormat: '{series.name}: <b>{point.y:1f} Responden</b>'
          },
          accessibility: {
               point: {
                    valueSuffix: '%'
               }
          },
          plotOptions: {
               pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                         enabled: false
                    },
                    showInLegend: true
               }
          },
          series: [{
               name: 'Total',
               colorByPoint: true,
               data: [
                    <?php
                         if(is_array($data_pie)){
                         foreach ($data_pie as $d) {
                              $seb = $d->sebagai;
                              $jml = $d->Jumlah;
                              echo "{name: '$seb',y: $jml},";
                         }
                    }  
                    ?>
               ]
          }]
     });
     </script>
     <!-- End Pie Responden -->

     <!-- Grafik Manajerial -->
     <script type="text/javascript">
     Highcharts.chart('manajerial', {
          chart: {
               type: 'bar'
          },
          title: {
               text: 'Grafik Total Manajerial Data',
               align: 'left'
          },
          subtitle: {
               text: 'Source: <a ' +
                    'href="https://www.highcharts.com/"' +
                    'target="_blank">Highchart.com</a>',
               align: 'left'
          },
          xAxis: {
               categories: ['Oase', 'Syncnau'],
               title: {
                    text: null
               }
          },
          yAxis: {
               min: 0,
               title: {
                    text: 'Total Data',
                    align: 'high'
               },
               labels: {
                    overflow: 'justify'
               }
          },
          tooltip: {
               valueSuffix: ' Data'
          },
          plotOptions: {
               bar: {
                    dataLabels: {
                         enabled: true
                    }
               }
          },
          legend: {
               layout: 'vertical',
               align: 'right',
               verticalAlign: 'top',
               x: -40,
               y: 80,
               floating: true,
               borderWidth: 1,
               backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
               shadow: true
          },
          credits: {
               enabled: false
          },
          series: [{
               name: 'Total Data',
               data: [
                    <?php
                         if(is_array($data_manajerial)){
                         foreach ($data_manajerial as $d) {
                              $nama = $d->nama_apl;
                              $jml = $d->Jumlah;
                              echo "{name: '$nama',y: $jml},";
                         }
                    }  
               ?>
               ]
          }]
     });
     </script>

     <script type="text/javascript">
     Highcharts.chart('grafik_aplikasi', {

          title: {
               text: 'Grafik Kualitas Sistem',
               align: 'left'
          },

          subtitle: {
               text: 'Source: <a href="https://irecusa.org/programs/solar-jobs-census/" target="_blank">IREC</a>',
               align: 'left'
          },

          yAxis: {
               title: {
                    text: 'Number of Employees'
               }
          },

          legend: {
               layout: 'vertical',
               align: 'right',
               verticalAlign: 'middle'
          },

          plotOptions: {
               series: {
                    label: {
                         connectorAllowed: false
                    },
                    pointStart: 2010
               }
          },

          series: [{
               name: 'Installation & Developers',
               data: [10, 80, 30, 40, 100]
          }, {
               name: 'Manufacturing',
               data: [20, 40, 70, 100, 110]
          }, ],

          responsive: {
               rules: [{
                    condition: {
                         maxWidth: 500
                    },
                    chartOptions: {
                         legend: {
                              layout: 'horizontal',
                              align: 'center',
                              verticalAlign: 'bottom'
                         }
                    }
               }]
          }

     });
     </script>


     <!-- Kesimpulan Chart -->
     <script type="text/javascript">
     // Create the chart
     Highcharts.chart('kesimpulan_chart', {
          chart: {
               type: 'column'
          },
          title: {
               text: 'Grafik Persentase Kuesioner',
               align: 'left'
          },
          subtitle: {
               text: 'Source: <a ' +
                    'href="https://www.highcharts.com/"' +
                    'target="_blank">Highchart.com</a>',
               align: 'left'
          },
          accessibility: {
               announceNewData: {
                    enabled: true
               }
          },
          xAxis: {
               type: 'category'
          },
          yAxis: {
               title: {
                    text: 'Persentase'
               }

          },
          legend: {
               enabled: false
          },
          plotOptions: {
               series: {
                    borderWidth: 0,
                    dataLabels: {
                         enabled: true,
                         format: '{point.y:1f} %'
                    }
               }
          },

          tooltip: {
               headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
               pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:2f} Persen</b><br/>'
          },

          series: [{
               name: "Persentase",
               colorByPoint: true,
               data: [
                    <?php
                    $this->load->model('M_Universal');
                         if(is_array($data_paket)){
                         foreach ($data_paket as $d) {
                              $id = $d->nama_paket;
                              $total_id	   = "id_paket_jawaban='" . $d->id_paket . "' ";
                              $tertinggi    = $this->M_Universal->total_soal($total_id)*4;
                              $terendah     = $this->M_Universal->total_soal($total_id)*1;

                              $jml = (($this->M_Universal->total_ss_p($total_id))*4)+
                                             (($this->M_Universal->total_s_p($total_id))*3)+
                                             (($this->M_Universal->total_ts_p($total_id))*2)+
                                             (($this->M_Universal->total_sts_p($total_id))*1);
                                             
                              $nilai = substr(($jml / $tertinggi) * (100), 0, 4);
                              
                              echo "{name: '$id',y: $nilai},";
                         }
                    }  
                    ?>
               ]
          }],
          drilldown: {
               breadcrumbs: {
                    position: {
                         align: 'right'
                    }
               },
               series: [{
                    name: "Chrome",
                    id: "Chrome",
                    data: [
                         [
                              "v65.0",
                              0.1
                         ]
                    ]
               }, ]
          }
     });
     </script>
     <!-- End Kesimpulan -->

     <!-- <script>
     const popup = document.querySelector('.popup');
     const x = document.querySelector('.popup-content h3')

     window.addEventListener('load', () => {
          popup.classList.add('showPopup');
          popup.childNodes[1].classList.add('showPopup');
     })
     x.addEventListener('click', () => {
          popup.classList.remove('showPopup');
          popup.childNodes[1].classList.remove('showPopup');
     })
     </script> -->


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
                    url: 'http://api.e-repository.my.id/',
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

</body>

</html>