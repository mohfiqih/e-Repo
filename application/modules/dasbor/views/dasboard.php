<head>
     <title>Dashboard | Sistem e-Repo</title>
</head>

<!-- Notif Salah Username Password -->
<?php if ($this->session->flashdata('notif_login')){ ?>
<div class="alert alert-success alert-dismissible fade show" data-dismiss="alert" aria-label="Close" role="alert">
     <span class="btn-label"></span><?php echo $this->session->flashdata('notif_login'); ?>
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
     </button>
</div>
<?php } ?>

<!-- ---------------------------------------- LEVEL SUPER ADMIN ------------------------------------------->
<!-- ---------------------------------------- LEVEL SUPER ADMIN ------------------------------------------->
<!-- ---------------------------------------- LEVEL SUPER ADMIN ------------------------------------------->

<?php if ($this->user_level == "Super Admin"):?>
<div class="row">
     <div class="col-md-12 grid-margin">
          <div class="row">
               <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <h3 class="font-weight-bold">Selamat Datang <?php echo $user->user_namalengkap; ?></h3>
                    <h6 class="font-weight-normal mb-0">Di Repository Evaluasi (e-Repo) sebagai
                         <span class="text-primary"><?php echo $user->user_level; ?></span>
                    </h6>

               </div>
               <div class="col-12 col-xl-4">
                    <div class="justify-content-end d-flex">
                         <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
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
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>
<div class="row">
     <div class="col-md-6 grid-margin stretch-card">
          <div class="card tale-bg"
               style="background-image: url(https://thumbs.dreamstime.com/b/blue-abstract-background-geometry-shine-layer-element-blue-abstract-background-geometry-shine-layer-element-vector-102937226.jpg)">
               <div class="card-people mt-auto">
                    <img src="<?php echo base_url('assets/auth/images/dashboard.png') ?>" alt="people">
                    <div class="weather-info">
                    </div>
               </div>
          </div>
     </div>
     <div class="col-md-6 grid-margin transparent">
          <div class="row">
               <div class="col-md-6 mb-4 stretch-card transparent">
                    <div class="card card-tale">
                         <div class="card-body">
                             <center>
                                  <p class="mb-4">Paket Kuesioner</p>
                                  <p class="fs-30 mb-2"><?php echo $jml_paket; ?></p>
                                  <p>Paket</p>
                              </center>
                         </div>
                    </div>
               </div>
               <div class="col-md-6 mb-4 stretch-card transparent">
                    <div class="card card-dark-blue">
                         <div class="card-body">
                             <center>
                                  <p class="mb-4">Data Manajerial</p>
                                  <p class="fs-30 mb-2"><?php echo $jml_apl; ?></p>
                                  <p>Data</p>
                              </center>
                         </div>
                    </div>
               </div>
          </div>
          <div class="row">
               <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                    <div class="card card-light-blue">
                         <div class="card-body">
                             <center>
                              <p class="mb-4">Data User</p>
                              <p class="fs-30 mb-2"><?php echo $jml_user; ?></p>
                              <p>Users</p>
                             </center>
                         </div>
                    </div>
               </div>
               <div class="col-md-6 stretch-card transparent">
                    <div class="card card-light-danger">
                         <div class="card-body">
                             <center>
                              <p class="mb-4">Pertanyaan</p>
                              <p class="fs-30 mb-2"><?php echo $jml_soal; ?></p>
                              <p>Pertanyaan</p>
                             </center>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>
<div class="row">
     <div class="col-md-3 mb-4 stretch-card transparent">
          <div class="card card-tale">
               <div class="card-body">
                    <center>
                         <p class="mb-4">Label Baik</p><br />
                         <p class="fs-30 mb-2"><?php echo $jml_baik; ?></p>
                         <p>Baik</p>
                    </center>
               </div>
          </div>
     </div>
     <div class="col-md-3 mb-4 stretch-card transparent">
          <div class="card card-dark-blue">
               <div class="card-body">
                    <center>
                         <p class="mb-4">Label Kurang</p><br />
                         <p class="fs-30 mb-2"><?php echo $jml_kurang; ?></p>
                         <p>Paket</p>
                    </center>
               </div>
          </div>
     </div>
     <div class="col-md-3 mb-4 stretch-card transparent">
          <div class="card card-light-blue">
               <div class="card-body">
                    <center>
                         <p class="mb-4">Jumlah Saran</p><br />
                         <p class="fs-30 mb-2"><?php echo $jml_saran; ?></p>
                         <p>Saran</p>
                    </center>
               </div>
          </div>
     </div>
     <div class="col-md-3 mb-4 stretch-card transparent">
          <div class="card card-light-danger">
               <div class="card-body">
                    <center>
                         <p class="mb-4">Total Prodi</p><br />
                         <p class="fs-30 mb-2">11</p>
                         <p>Prodi</p>
                    </center>
               </div>
          </div>
     </div>
     <!--<div class="col-md-2 mb-4 stretch-card transparent">-->
     <!--     <div class="card card-dark-blue">-->
     <!--          <div class="card-body">-->
     <!--               <center>-->
     <!--                    <p class="mb-4">Label Kurang</p><br />-->
     <!--                    <p class="fs-30 mb-2"><?php echo $jml_kurang; ?></p>-->
     <!--                    <p>Paket</p>-->
     <!--               </center>-->
     <!--          </div>-->
     <!--     </div>-->
     <!--</div>-->
     <!--<div class="col-md-2 mb-4 stretch-card transparent">-->
     <!--     <div class="card card-light-blue">-->
     <!--          <div class="card-body">-->
     <!--               <center>-->
     <!--                    <p class="mb-4">Jumlah Saran</p><br />-->
     <!--                    <p class="fs-30 mb-2"><?php echo $jml_saran; ?></p>-->
     <!--                    <p>Saran</p>-->
     <!--               </center>-->
     <!--          </div>-->
     <!--     </div>-->
     <!--</div>-->
</div>
<div class="row">
     <div class="col-xl-6 col-md-6" style="margin-top: 20px;">
          <div class="card">
               <div class="card-body">
                    <div class="card" style="margin-left: 20px;margin-top: 20px;">
                         <h5>Analisis Skala Likert</h5>
                         <p style="width: 250px;">Berikut hasil analisis dari skala likert setiap paket kuesioner</p>
                    </div>
                    <br />
                    <div class="table-responsive" style="overflow-x: auto;">
                         <table id="cari_skala" class="table table-hover mb-0">
                              <thead>
                                   <tr>
                                        <!-- <th>No</th> -->
                                        <th>Nama Paket</th>
                                        <th>Persentase</th>
                                        <th>Kategori</th>
                                   </tr>
                              </thead>
                              <tbody>
                                   <?php
                                        $no = 0 + 1;
                                        $this->load->model('M_dasbor');
                                        if ($data_paket) {
                                             foreach ($data_paket as $d) {
                                   ?>
                                   <tr>
                                        <!-- <th><?php echo $no++; ?></th> -->
                                        <td><?php echo $d->nama_paket; ?> v.<?php echo $d->versi_apl_paket; ?></td>
                                        <td>
                                             <?php
                                                $total_id	  = "id_paket_jawaban='" . $d->id_paket . "' ";
                                                $tertinggi    = $this->M_dasbor->total_soal($total_id)*4;
                                                $terendah     = $this->M_dasbor->total_soal($total_id)*1;
 
                                                $total = (($this->M_dasbor->total_ss_p($total_id))*4)+
                                                (($this->M_dasbor->total_s_p($total_id))*3)+
                                                (($this->M_dasbor->total_ts_p($total_id))*2)+
                                                (($this->M_dasbor->total_sts_p($total_id))*1);
                                                       
                                                $nilai = substr(($total!=0)?($total / $tertinggi) * 100:0, 0, 5);
                                                
                                          if ($nilai <= 100 && $nilai >= 80) { ?>
                                             <!-- Sangat Setuju -->
                                             <span class="badge bg-success text-white">
                                                  <?php echo $nilai ?>%
                                             </span>
                                             <!-- Setuju -->
                                             <?php } else if ($nilai <= 79.9 && $nilai >= 60) { ?>
                                             <span class="badge bg-success text-white">
                                                  <?php echo $nilai ?>%
                                             </span>
                                             <!-- Tidak Setuju -->
                                             <?php } else if ($nilai <= 59.9 && $nilai >= 40) { ?>
                                             <span class="badge bg-danger text-white">
                                                  <?php echo $nilai ?>%
                                             </span>
                                             <!-- Sangat Tidak Setuju -->
                                             <?php } else if ($nilai <= 40) { ?>
                                             <span class="badge bg-danger text-white">
                                                  <?php echo $nilai ?>%
                                             </span>
                                             <?php } else if ($nilai == 0) { ?>
                                             <span class="badge bg-danger text-white">
                                                  <?php echo $nilai ?>%
                                             </span>
                                             <?php } ?>
                                        </td>
                                        <td>
                                             <!-- $rata=($totalnilai!=0)?($totalnilai/$jumlah) * 100:0; -->
                                             <?php
                                             $total_id	   = "id_paket_jawaban='" . $d->id_paket . "' ";
                                             $tertinggi    = $this->M_dasbor->total_soal($total_id)*4;
                                             $terendah     = $this->M_dasbor->total_soal($total_id)*1;

                                             $total = (($this->M_dasbor->total_ss_p($total_id))*4)+
                                             (($this->M_dasbor->total_s_p($total_id))*3)+
                                             (($this->M_dasbor->total_ts_p($total_id))*2)+
                                             (($this->M_dasbor->total_sts_p($total_id))*1);
                                                                    
                                             $nilai = substr(($total!=0)?($total / $tertinggi) * 100:0, 0, 5);
                                             
                                                                      
                                             if ($nilai <= 100 && $nilai >= 80) { ?>
                                             <span class="badge bg-success text-white">
                                                  Sangat Setuju
                                             </span>
                                             <?php } else if ($nilai <= 79.9 && $nilai >= 60) { ?>
                                             <span class="badge bg-success text-white">
                                                  Setuju
                                             </span>
                                             <?php } else if ($nilai <= 59.9 && $nilai >= 40) { ?>
                                             <span class="badge bg-danger text-white">
                                                  Tidak Setuju
                                             </span>
                                             <?php } else if ($nilai <= 59.9 && $nilai >= 1) { ?>
                                             <span class="badge bg-danger text-white">
                                                  Sangat Tidak Setuju
                                             </span>
                                             <?php } else if ($nilai==0) { ?>
                                             <span class="badge bg-warning text-white">
                                                  Kosong
                                             </span>
                                             <?php } ?>
                                        </td>
                                   </tr>

                                   <?php }} else { ?>
                                   <td class="text-center" colspan="9">No Data</td>
                                   <?php } ?>
                              </tbody>
                         </table>
                    </div>
               </div>
          </div>

          <div class="card" style="margin-top: 15px;">
               <div class="card-body">
                    <div class="card" style="margin-right: 12px;margin-top: 15px;">
                         <div class="card-body">
                              <div class="table-responsive">
                                   <figure class="highcharts-figure">
                                        <div id="kesimpulan_chart"></div>
                                   </figure>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>

     <div class="col-xl-6 col-md-6" style="margin-top: 20px;">
          <div class="card">
               <div class="card-body">
                    <div class="card" style="margin-left: 20px;margin-top: 20px;">
                         <h5>Analisis Klasifikasi Komentar</h5>
                         <p style="width: 250px;">Berikut hasil analisis dari klasifikasi komentar setiap paket
                              kuesioner</p>
                    </div>

                    <br />
                    <div class="table-responsive" style="overflow-x: auto;">
                         <table id="cari_klasifikasi" class="table table-hover mb-0">
                              <thead>
                                   <tr>
                                        <!-- <th>No</th> -->
                                        <th>Nama Paket</th>
                                        <th>Baik</th>
                                        <th>Kurang</th>
                                        <th>Hasil</th>
                                   </tr>
                              </thead>
                              <tbody>
                                   <?php
                                        $no = 0 + 1;
                                        $this->load->model('M_dasbor');
                                        if ($data_klasifikasi) {
                                             foreach ($data_klasifikasi as $d) {
                                   ?>
                                   <tr>
                                        <!-- <th><?php echo $no++; ?></th> -->
                                        <td><?php echo $d->nama_paket; ?> v.<?php echo $d->versi_apl_paket; ?></td>
                                        <td>
                                             <p class="text-success">
                                                  <?php 
                                                  $total_id	   = "id_paket_jawaban='" . $d->id_paket . "' ";

                                                  $Baik = $this->M_dasbor->label_baik($total_id, "klasifikasi");
                                                  $Kurang = $this->M_dasbor->label_kurang($total_id, "klasifikasi");
                                                  
                                                  echo $Baik;
                                                  ?>
                                             </p>
                                        </td>
                                        <td>
                                             <p class="text-danger">
                                                  <?php 
                                                  $total_id	   = "id_paket_jawaban='" . $d->id_paket . "' ";

                                                  $Baik = $this->M_dasbor->label_baik($total_id, "klasifikasi");
                                                  $Kurang = $this->M_dasbor->label_kurang($total_id, "klasifikasi");
                                                  
                                                  echo $Kurang;
                                                  ?>
                                             </p>
                                        </td>
                                        <td>
                                             <?php 
                                             $total_id	   = "id_paket_jawaban='" . $d->id_paket . "' ";

                                             $Baik = $this->M_dasbor->label_baik($total_id, "klasifikasi");
                                             $Kurang = $this->M_dasbor->label_kurang($total_id, "klasifikasi");

                                             if ($Baik > $Kurang) { ?>
                                             <span class="badge bg-success text-white">
                                                  Baik
                                             </span>
                                             <?php } else if ($Baik < $Kurang) { ?>
                                             <span class="badge bg-danger text-white">
                                                  Kurang
                                             </span>
                                             <?php } else if ($Baik==$Kurang) { ?>
                                             <span class="badge bg-warning text-white">
                                                  Jumlah Data Sama
                                             </span>
                                             <?php } ?>
                                        </td>
                                   </tr>

                                   <?php }} else { ?>
                                   <td class="text-center" colspan="9">No Data</td>
                                   <?php } ?>
                              </tbody>
                         </table>
                    </div>
               </div>
          </div>

          <div class="card" style="margin-top: 15px;">
               <div class="card-body">
                    <div class="card" style="margin-right: 12px;margin-top: 15px;">
                         <div class="card-body">
                              <div class="table-responsive">
                                   <figure class="highcharts-figure">
                                        <div id="manajerial"></div>
                                   </figure>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>
<div class="row">
     <div class="col-xl-6 col-md-6" style="margin-top: 15px;">
          <div class="card"><br />
               <div class="card-body" style="overflow: auto;">
                    <h4 class="header-title mt-0 mb-3">Total Responden
                         Berdasarkan
                         Kategori</h4><br />
                    <div class="table-responsive">
                         <table class="table table-hover mb-0">
                              <thead>
                                   <tr>
                                        <th>No</th>
                                        <th>Kategori Responden</th>
                                        <th>Responden</th>
                                   </tr>
                              </thead>
                              <tbody>
                                   <tr>
                                        <th>1</th>
                                        <td>Dosen</td>
                                        <td><?php echo $jml_dosen; ?></td>
                                   </tr>
                                   <tr>
                                        <th>2</th>
                                        <td>Mahasiswa</td>
                                        <td><?php echo $jml_mahasiswa; ?>
                                        </td>
                                   </tr>
                                   <!-- <tr>
                                        <th>3</th>
                                        <td>Super Admin</td>
                                        <td><?php echo $jml_mahasiswa; ?>
                                        </td>
                                   </tr>
                                   <tr>
                                        <th>4</th>
                                        <td>Pengevaluasi</td>
                                        <td><?php echo $jml_mahasiswa; ?>
                                        </td>
                                   </tr> -->
                              </tbody>
                         </table>
                    </div>
               </div>
          </div>
          <div class="card" style="margin-top: 20px;">
               <div class="card-body" style="overflow: auto;">
                    <h4 class="header-title mt-0 mb-3">Total Responden Prodi
                    </h4>
                    <div class="table-responsive">
                         <table class="table table-hover mb-0">
                              <thead>
                                   <tr>
                                        <th>No</th>
                                        <th>Prodi</th>
                                        <th>Total</th>
                                   </tr>
                              </thead>
                              <tbody>
                                   <tr>
                                        <th>1</th>
                                        <td>DIV Teknik Informatika</td>
                                        <td><?php echo $jml_TI; ?></td>
                                   </tr>
                                   <tr>
                                        <th>2</th>
                                        <td>DIV Akuntansi Sektor Publik</td>
                                        <td><?php echo $jml_ASP; ?>
                                        </td>
                                   </tr>
                                   <tr>
                                        <th>3</th>
                                        <td>DIII Teknik Komputer</td>
                                        <td><?php echo $jml_KOM; ?>
                                        </td>
                                   </tr>
                                   <tr>
                                        <th>4</th>
                                        <td>DIII Akuntansi</td>
                                        <td><?php echo $jml_AK; ?>
                                        </td>
                                   </tr>
                                   <tr>
                                        <th>5</th>
                                        <td>DIII Farmasi</td>
                                        <td><?php echo $jml_FARM; ?>
                                        </td>
                                   </tr>

                                   <tr>
                                        <th>6</th>
                                        <td>DIII Perhotelan</td>
                                        <td><?php echo $jml_PER; ?>
                                        </td>
                                   </tr>
                                   <tr>
                                        <th>7</th>
                                        <td>DIII Kebidanan</td>
                                        <td><?php echo $jml_BID; ?>
                                        </td>
                                   </tr>
                                   <tr>
                                        <th>8</th>
                                        <td>DIII Teknik Mesin</td>
                                        <td><?php echo $jml_MSN; ?>
                                        </td>
                                   </tr>
                                   <tr>
                                        <th>9</th>
                                        <td>DIII Desain Komunikasi Visual</td>
                                        <td><?php echo $jml_DKV; ?>
                                        </td>
                                   </tr>
                                   <tr>
                                        <th>10</th>
                                        <td>DIII Keperawatan</td>
                                        <td><?php echo $jml_PRWT; ?>
                                        </td>
                                   </tr>
                                   <tr>
                                        <th>11</th>
                                        <td>DIII Teknik Eletkro</td>
                                        <td><?php echo $jml_ELKTR; ?>
                                        </td>
                                   </tr>
                              </tbody>
                         </table>
                    </div>
               </div>
          </div>
          <!--<div class="card" style="margin-top: 20px;">-->
          <!--     <div class="card-body">-->
          <!--          <div class="col-xl-12 col-md-12" style="margin-top: 15px;">-->
          <!--               <div class="card">-->
          <!--                    <div class="card-body">-->
          <!--                         <div class="table-responsive">-->
          <!--                              <figure class="highcharts-figure">-->
          <!--                                   <div id="grafik_aplikasi"></div>-->
          <!--                              </figure>-->
          <!--                         </div>-->
          <!--                    </div>-->
          <!--               </div>-->
          <!--          </div>-->
          <!--     </div>-->
          <!--</div>-->
     </div>
     <div class="col-xl-6 col-md-6">
          <div class="card" style="margin-top: 15px;">
               <div class="card-body">
                    <div class="col-xl-12 col-md-12" style="margin-top: 15px;">
                         <div class="card">
                              <div class="card-body">
                                   <div class="table-responsive">
                                        <figure class="highcharts-figure">
                                             <div id="total_responden"></div>
                                        </figure>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          
     </div>
</div>

<!-- ---------------------------------------- LEVEL PENGEVALUASI (P2M) ------------------------------------------->
<!-- ---------------------------------------- LEVEL PENGEVALUASI (P2M) ------------------------------------------->
<!-- ---------------------------------------- LEVEL PENGEVALUASI (P2M) ------------------------------------------->

<?php elseif ($this->user_level == "Pengevaluasi"):?>
<div class="row">
     <div class="col-md-12 grid-margin">
          <div class="row">
               <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <h3 class="font-weight-bold">Selamat Datang <?php echo $user->user_namalengkap; ?></h3>
                    <h6 class="font-weight-normal mb-0">Di Repository Evaluasi (e-Repo) sebagai
                         <span class="text-primary"><?php echo $user->user_level; ?></span>
                    </h6>

               </div>
               <div class="col-12 col-xl-4">
                    <div class="justify-content-end d-flex">
                         <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
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
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>
<div class="row">
     <div class="col-md-6 grid-margin stretch-card">
          <div class="card tale-bg"
               style="background-image: url(https://thumbs.dreamstime.com/b/blue-abstract-background-geometry-shine-layer-element-blue-abstract-background-geometry-shine-layer-element-vector-102937226.jpg)">
               <div class="card-people mt-auto">
                    <img src="<?php echo base_url('assets/auth/images/dashboard.png') ?>" alt="people">
                    <div class="weather-info">
                    </div>
               </div>
          </div>
     </div>
     <div class="col-md-6 grid-margin transparent">
          <div class="row">
               <div class="col-md-6 mb-3 stretch-card transparent">
                    <div class="card card-tale">
                         <div class="card-body">
                              <center>
                                   <p class="mb-2">Paket Kuesioner</p><br />
                                   <p class="fs-30 mb-2"><?php echo $jml_paket; ?></p>
                                   <p>Paket</p>
                              </center>
                         </div>
                    </div>
               </div>
               <div class="col-md-6 mb-3 stretch-card transparent">
                    <div class="card card-tale">
                         <div class="card-body">
                              <center>
                                   <p class="mb-2">Label Baik</p><br />
                                   <p class="fs-30 mb-2"><?php echo $jml_baik; ?></p>
                                   <p>Baik</p>
                              </center>
                         </div>
                    </div>
               </div>
          </div>
          <div class="row">
               <div class="col-md-6 mb-3 stretch-card transparent">
                    <div class="card card-dark-blue">
                         <div class="card-body">
                              <center>
                                   <p class="mb-2">Label Kurang</p><br />
                                   <p class="fs-30 mb-2"><?php echo $jml_kurang; ?></p>
                                   <p>Kurang</p>
                              </center>
                         </div>
                    </div>
               </div>
               <div class="col-md-6 mb-3 stretch-card transparent">
                    <div class="card card-light-danger">
                         <div class="card-body">
                              <center>
                                   <p class="mb-2">Pertanyaan</p><br />
                                   <p class="fs-30 mb-2"><?php echo $jml_soal; ?></p>
                                   <p>Pertanyaan</p>
                              </center>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>
<div class="row">
     <!-- <div class="col-md-2 mb-4 stretch-card transparent">
          <div class="card card-light-blue">
               <div class="card-body">
                    <center>
                         <p class="mb-4">Jumlah Saran</p><br />
                         <p class="fs-30 mb-2"><?php echo $jml_saran; ?></p>
                         <p>Saran</p>
                    </center>
               </div>
          </div>
     </div>
     <div class="col-md-2 mb-4 stretch-card transparent">
          <div class="card card-light-danger">
               <div class="card-body">
                    <center>
                         <p class="mb-4">Total Prodi</p><br />
                         <p class="fs-30 mb-2"><?php echo $jml_prodi; ?></p>
                         <p>Prodi</p>
                    </center>
               </div>
          </div>
     </div> -->
     <!-- <div class="col-md-2 mb-4 stretch-card transparent">
          <div class="card card-dark-blue">
               <div class="card-body">
                    <center>
                         <p class="mb-4">Label Kurang</p><br />
                         <p class="fs-30 mb-2"><?php echo $jml_kurang; ?></p>
                         <p>Paket</p>
                    </center>
               </div>
          </div>
     </div>
     <div class="col-md-2 mb-4 stretch-card transparent">
          <div class="card card-light-blue">
               <div class="card-body">
                    <center>
                         <p class="mb-4">Jumlah Saran</p><br />
                         <p class="fs-30 mb-2"><?php echo $jml_saran; ?></p>
                         <p>Saran</p>
                    </center>
               </div>
          </div>
     </div> -->
</div>
<div class="row">
     <div class="col-xl-6 col-md-6" style="margin-top: 20px;">
          <div class="card">
               <div class="card-body">
                    <div class="card" style="margin-left: 20px;margin-top: 20px;">
                         <h5>Analisis Skala Likert</h5>
                         <p style="width: 250px;">Berikut hasil analisis dari skala likert setiap paket kuesioner</p>
                    </div>
                    <br />
                    <div class="table-responsive" style="overflow-x: auto;">
                         <table id="cari_skala" class="table table-hover mb-0">
                              <thead>
                                   <tr>
                                        <!-- <th>No</th> -->
                                        <th>Nama Paket</th>
                                        <th>Persentase</th>
                                        <th>Kategori</th>
                                   </tr>
                              </thead>
                              <tbody>
                                   <?php
                                        $no = 0 + 1;
                                        $this->load->model('M_dasbor');
                                        if ($data_paket) {
                                             foreach ($data_paket as $d) {
                                   ?>
                                   <tr>
                                        <!-- <th><?php echo $no++; ?></th> -->
                                        <td><?php echo $d->nama_paket; ?> v.<?php echo $d->versi_apl_paket; ?></td>
                                        <td>
                                             <?php
                                                $total_id	  = "id_paket_jawaban='" . $d->id_paket . "' ";
                                                $tertinggi    = $this->M_dasbor->total_soal($total_id)*4;
                                                $terendah     = $this->M_dasbor->total_soal($total_id)*1;
 
                                                $total = (($this->M_dasbor->total_ss_p($total_id))*4)+
                                                (($this->M_dasbor->total_s_p($total_id))*3)+
                                                (($this->M_dasbor->total_ts_p($total_id))*2)+
                                                (($this->M_dasbor->total_sts_p($total_id))*1);
                                                       
                                                $nilai = substr(($total!=0)?($total / $tertinggi) * 100:0, 0, 5);
                                                
                                          if ($nilai <= 100 && $nilai >= 80) { ?>
                                             <!-- Sangat Setuju -->
                                             <span class="badge bg-success text-white">
                                                  <?php echo $nilai ?>%
                                             </span>
                                             <!-- Setuju -->
                                             <?php } else if ($nilai <= 79.9 && $nilai >= 60) { ?>
                                             <span class="badge bg-success text-white">
                                                  <?php echo $nilai ?>%
                                             </span>
                                             <!-- Tidak Setuju -->
                                             <?php } else if ($nilai <= 59.9 && $nilai >= 40) { ?>
                                             <span class="badge bg-danger text-white">
                                                  <?php echo $nilai ?>%
                                             </span>
                                             <!-- Sangat Tidak Setuju -->
                                             <?php } else if ($nilai <= 40) { ?>
                                             <span class="badge bg-danger text-white">
                                                  <?php echo $nilai ?>%
                                             </span>
                                             <?php } else if ($nilai == 0) { ?>
                                             <span class="badge bg-danger text-white">
                                                  <?php echo $nilai ?>%
                                             </span>
                                             <?php } ?>
                                        </td>
                                        <td>
                                             <!-- $rata=($totalnilai!=0)?($totalnilai/$jumlah) * 100:0; -->
                                             <?php
                                             $total_id	   = "id_paket_jawaban='" . $d->id_paket . "' ";
                                             $tertinggi    = $this->M_dasbor->total_soal($total_id)*4;
                                             $terendah     = $this->M_dasbor->total_soal($total_id)*1;

                                             $total = (($this->M_dasbor->total_ss_p($total_id))*4)+
                                             (($this->M_dasbor->total_s_p($total_id))*3)+
                                             (($this->M_dasbor->total_ts_p($total_id))*2)+
                                             (($this->M_dasbor->total_sts_p($total_id))*1);
                                                                    
                                             $nilai = substr(($total!=0)?($total / $tertinggi) * 100:0, 0, 5);
                                             
                                                                      
                                             if ($nilai <= 100 && $nilai >= 80) { ?>
                                             <span class="badge bg-success text-white">
                                                  Sangat Setuju
                                             </span>
                                             <?php } else if ($nilai <= 79.9 && $nilai >= 60) { ?>
                                             <span class="badge bg-success text-white">
                                                  Setuju
                                             </span>
                                             <?php } else if ($nilai <= 59.9 && $nilai >= 40) { ?>
                                             <span class="badge bg-danger text-white">
                                                  Tidak Setuju
                                             </span>
                                             <?php } else if ($nilai <= 59.9 && $nilai >= 1) { ?>
                                             <span class="badge bg-danger text-white">
                                                  Sangat Tidak Setuju
                                             </span>
                                             <?php } else if ($nilai==0) { ?>
                                             <span class="badge bg-warning text-white">
                                                  Kosong
                                             </span>
                                             <?php } ?>
                                        </td>
                                   </tr>

                                   <?php }} else { ?>
                                   <td class="text-center" colspan="9">No Data</td>
                                   <?php } ?>
                              </tbody>
                         </table>
                    </div>
               </div>
          </div>

          <div class="card" style="margin-top: 15px;">
               <div class="card-body">
                    <div class="card" style="margin-right: 12px;margin-top: 15px;">
                         <div class="card-body">
                              <div class="table-responsive">
                                   <figure class="highcharts-figure">
                                        <div id="kesimpulan_chart"></div>
                                   </figure>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>

     <div class="col-xl-6 col-md-6" style="margin-top: 20px;">
          <div class="card">
               <div class="card-body">
                    <div class="card" style="margin-left: 20px;margin-top: 20px;">
                         <h5>Analisis Klasifikasi Komentar</h5>
                         <p style="width: 250px;">Berikut hasil analisis dari klasifikasi komentar setiap paket
                              kuesioner</p>
                    </div>

                    <br />
                    <div class="table-responsive" style="overflow-x: auto;">
                         <table id="cari_klasifikasi" class="table table-hover mb-0">
                              <thead>
                                   <tr>
                                        <!-- <th>No</th> -->
                                        <th>Nama Paket</th>
                                        <th>Baik</th>
                                        <th>Kurang</th>
                                        <th>Hasil</th>
                                   </tr>
                              </thead>
                              <tbody>
                                   <?php
                                        $no = 0 + 1;
                                        $this->load->model('M_dasbor');
                                        if ($data_klasifikasi) {
                                             foreach ($data_klasifikasi as $d) {
                                   ?>
                                   <tr>
                                        <!-- <th><?php echo $no++; ?></th> -->
                                        <td><?php echo $d->nama_paket; ?> v.<?php echo $d->versi_apl_paket; ?></td>
                                        <td>
                                             <p class="text-success">
                                                  <?php 
                                                  $total_id	   = "id_paket_jawaban='" . $d->id_paket . "' ";

                                                  $Baik = $this->M_dasbor->label_baik($total_id, "klasifikasi");
                                                  $Kurang = $this->M_dasbor->label_kurang($total_id, "klasifikasi");
                                                  
                                                  echo $Baik;
                                                  ?>
                                             </p>
                                        </td>
                                        <td>
                                             <p class="text-danger">
                                                  <?php 
                                                  $total_id	   = "id_paket_jawaban='" . $d->id_paket . "' ";

                                                  $Baik = $this->M_dasbor->label_baik($total_id, "klasifikasi");
                                                  $Kurang = $this->M_dasbor->label_kurang($total_id, "klasifikasi");
                                                  
                                                  echo $Kurang;
                                                  ?>
                                             </p>
                                        </td>
                                        <td>
                                             <?php 
                                             $total_id	   = "id_paket_jawaban='" . $d->id_paket . "' ";

                                             $Baik = $this->M_dasbor->label_baik($total_id, "klasifikasi");
                                             $Kurang = $this->M_dasbor->label_kurang($total_id, "klasifikasi");

                                             if ($Baik > $Kurang) { ?>
                                             <span class="badge bg-success text-white">
                                                  Baik
                                             </span>
                                             <?php } else if ($Baik < $Kurang) { ?>
                                             <span class="badge bg-danger text-white">
                                                  Kurang
                                             </span>
                                             <?php } else if ($Baik==$Kurang) { ?>
                                             <span class="badge bg-warning text-white">
                                                  Kosong
                                             </span>
                                             <?php } ?>
                                        </td>
                                   </tr>

                                   <?php }} else { ?>
                                   <td class="text-center" colspan="9">No Data</td>
                                   <?php } ?>
                              </tbody>
                         </table>
                    </div>
               </div>
          </div>

          <div class="card" style="margin-top: 15px;">
               <div class="card-body">
                    <div class="card" style="margin-right: 12px;margin-top: 15px;">
                         <div class="card-body">
                              <div class="table-responsive">
                                   <figure class="highcharts-figure">
                                        <div id="manajerial"></div>
                                   </figure>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>
<div class="row">
     <div class="col-xl-6 col-md-6" style="margin-top: 15px;">
          <div class="card"><br />
               <div class="card-body" style="overflow: auto;">
                    <h4 class="header-title mt-0 mb-3">Total Responden
                         Berdasarkan
                         Kategori</h4><br />
                    <div class="table-responsive">
                         <table class="table table-hover mb-0">
                              <thead>
                                   <tr>
                                        <th>No</th>
                                        <th>Kategori Responden</th>
                                        <th>Responden</th>
                                   </tr>
                              </thead>
                              <tbody>
                                   <tr>
                                        <th>1</th>
                                        <td>Dosen</td>
                                        <td><?php echo $jml_dosen; ?></td>
                                   </tr>
                                   <tr>
                                        <th>2</th>
                                        <td>Mahasiswa</td>
                                        <td><?php echo $jml_mahasiswa; ?>
                                        </td>
                                   </tr>
                                   <!-- <tr>
                                        <th>3</th>
                                        <td>Super Admin</td>
                                        <td><?php echo $jml_mahasiswa; ?>
                                        </td>
                                   </tr>
                                   <tr>
                                        <th>4</th>
                                        <td>Pengevaluasi</td>
                                        <td><?php echo $jml_mahasiswa; ?>
                                        </td>
                                   </tr> -->
                              </tbody>
                         </table>
                    </div>
               </div>
          </div>
          <div class="card" style="margin-top: 20px;">
               <div class="card-body">
                    <div class="col-xl-12 col-md-12" style="margin-top: 15px;">
                         <div class="card">
                              <div class="card-body">
                                   <div class="table-responsive">
                                        <figure class="highcharts-figure">
                                             <div id="grafik_aplikasi"></div>
                                        </figure>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
     <div class="col-xl-6 col-md-6">
          <div class="card" style="margin-top: 15px;">
               <div class="card-body">
                    <div class="col-xl-12 col-md-12" style="margin-top: 15px;">
                         <div class="card">
                              <div class="card-body">
                                   <div class="table-responsive">
                                        <figure class="highcharts-figure">
                                             <div id="total_responden"></div>
                                        </figure>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          <div class="card" style="margin-top: 20px;">
               <div class="card-body" style="overflow: auto;">
                    <h4 class="header-title mt-0 mb-3">Total Responden Prodi
                    </h4>
                    <div class="table-responsive">
                         <table class="table table-hover mb-0">
                              <thead>
                                   <tr>
                                        <th>No</th>
                                        <th>Prodi</th>
                                        <th>Total</th>
                                   </tr>
                              </thead>
                              <tbody>
                                   <tr>
                                        <th>1</th>
                                        <td>DIV Teknik Informatika</td>
                                        <td><?php echo $jml_TI; ?></td>
                                   </tr>
                                   <tr>
                                        <th>2</th>
                                        <td>DIV Akuntansi Sektor Publik</td>
                                        <td><?php echo $jml_ASP; ?>
                                        </td>
                                   </tr>
                                   <tr>
                                        <th>3</th>
                                        <td>DIII Teknik Komputer</td>
                                        <td><?php echo $jml_KOM; ?>
                                        </td>
                                   </tr>
                                   <tr>
                                        <th>4</th>
                                        <td>DIII Akuntansi</td>
                                        <td><?php echo $jml_AK; ?>
                                        </td>
                                   </tr>
                                   <tr>
                                        <th>5</th>
                                        <td>DIII Farmasi</td>
                                        <td><?php echo $jml_FARM; ?>
                                        </td>
                                   </tr>

                                   <tr>
                                        <th>6</th>
                                        <td>DIII Perhotelan</td>
                                        <td><?php echo $jml_PER; ?>
                                        </td>
                                   </tr>
                                   <tr>
                                        <th>7</th>
                                        <td>DIII Kebidanan</td>
                                        <td><?php echo $jml_BID; ?>
                                        </td>
                                   </tr>
                                   <tr>
                                        <th>8</th>
                                        <td>DIII Teknik Mesin</td>
                                        <td><?php echo $jml_MSN; ?>
                                        </td>
                                   </tr>
                                   <tr>
                                        <th>9</th>
                                        <td>DIII Desain Komunikasi Visual</td>
                                        <td><?php echo $jml_DKV; ?>
                                        </td>
                                   </tr>
                                   <tr>
                                        <th>10</th>
                                        <td>DIII Keperawatan</td>
                                        <td><?php echo $jml_PRWT; ?>
                                        </td>
                                   </tr>
                                   <tr>
                                        <th>11</th>
                                        <td>DIII Teknik Eletkro</td>
                                        <td><?php echo $jml_ELKTR; ?>
                                        </td>
                                   </tr>
                              </tbody>
                         </table>
                    </div>
               </div>
          </div>
     </div>
</div>

<!-- ---------------------------------------- LEVEL DOSEN & MAHASISWA ------------------------------------------->
<!-- ---------------------------------------- LEVEL DOSEN & MAHASISWA ------------------------------------------->
<?php elseif ($this->user_level == "Dosen"):?>
<div class="container-fluid">
     <div class="row">
          <div class="col-md-12 grid-margin">
               <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                         <h3 class="font-weight-bold">Selamat Datang <?php echo $user->user_namalengkap; ?></h3>
                         <h6 class="font-weight-normal mb-0">Di Repository Evaluasi (e-Repo) sebagai
                              <span class="text-primary"><?php echo $user->user_level; ?></span>
                         </h6>

                    </div>
                    <div class="col-12 col-xl-4">
                         <div class="justify-content-end d-flex">
                              <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
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
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
     <div class="row">
         <div class="col-md-6 grid-margin stretch-card">
          <div class="card tale-bg"
               style="background-image: url(https://thumbs.dreamstime.com/b/blue-abstract-background-geometry-shine-layer-element-blue-abstract-background-geometry-shine-layer-element-vector-102937226.jpg)">
               <div class="card-people mt-auto">
                    <img src="<?php echo base_url('assets/auth/images/dashboard.png') ?>" alt="people">
                    <div class="weather-info">
                    </div>
               </div>
          </div>
          
     </div>
        <div class="col-md-6 stretch-card transparent">
                   <div class="card tale-bg stretch-card transparent" style="">
                        <div class="alert alert-dark" role="alert">
                             <h4 class="alert-heading">Info Kuesioner Sistem!</h4>
                             <hr>
                             <!--<p>Dalam rangka untuk pengembangan sistem kedepannya, mohon untuk-->
                             <!--     pengguna-->
                             <!--     sistem bisa memberikan ulasan pada-->
                             <!--     kuesioner berikut ini, isi dengan jujur selama anda menggunakan sistem tersebut. Terimakasih.</p>-->
                             <!--<hr>-->
                             
                             <?php
                                $no = 0 + 1;
                                if ($data_shared) {
                                    foreach ($data_shared as $d) {
                                        $responden = $d->responden;
                                        if ($responden == "Dosen") {
                                            echo '<b><p class="mb-0">' . $d->nama_kuesioner . '<br /></p></b>';
                                            echo '<b><p class="mb-0">' . $d->responden . '<br /></p></b>';
                                            echo '<p class="mb-0">Link Kuesioner :<br />';
                                            echo '<a target="_blank" style="text-align: justify;text-decoration: none;" href="' . $d->link_kuesioner . '">' . $d->link_kuesioner . '</a>';
                                            echo '</p><br />';
                                        } elseif ($responden == "Mahasiswa,Dosen,Tendik" || $responden == "Mahasiswa,Dosen" || $responden == "Tendik,Dosen") {
                                            echo '<b><p class="mb-0">' . $d->nama_kuesioner . '<br /></p></b>';
                                            echo '<b><p class="mb-0">' . $d->responden . '<br /></p></b>';
                                            echo '<p class="mb-0">Link Kuesioner :<br />';
                                            echo '<a target="_blank" style="text-align: justify;text-decoration: none;" href="' . $d->link_kuesioner . '">' . $d->link_kuesioner . '</a>';
                                            echo '</p><br />';
                                        }
                                        $no++;
                                    }
                                } else {
                                    echo '<td class="text-center" colspan="6">Tidak Ada Evaluasi</td>';
                                }
                                ?>
                        </div>
    
                   </div>
              </div>
    </div>
    
            </div>
    </div>
</div>
<?php elseif ($this->user_level == "Mahasiswa"):?>
<div class="container-fluid">
     <div class="row">
          <div class="col-md-12 grid-margin">
               <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                         <h3 class="font-weight-bold">Selamat Datang <?php echo $user->user_namalengkap; ?></h3>
                         <h6 class="font-weight-normal mb-0">Di Repository Evaluasi (e-Repo) sebagai
                              <span class="text-primary"><?php echo $user->user_level; ?></span>
                         </h6>

                    </div>
                    <div class="col-12 col-xl-4">
                         <div class="justify-content-end d-flex">
                              <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
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
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
     <div class="row">
         <div class="col-md-6 grid-margin stretch-card">
          <div class="card tale-bg"
               style="background-image: url(https://thumbs.dreamstime.com/b/blue-abstract-background-geometry-shine-layer-element-blue-abstract-background-geometry-shine-layer-element-vector-102937226.jpg)">
               <div class="card-people mt-auto">
                    <img src="<?php echo base_url('assets/auth/images/dashboard.png') ?>" alt="people">
                    <div class="weather-info">
                    </div>
               </div>
          </div>
          
     </div>
        <div class="col-md-6 stretch-card transparent">
                   <div class="card tale-bg stretch-card transparent" style="">
                        <div class="alert alert-dark" role="alert">
                             <h4 class="alert-heading">Info Kuesioner Sistem!</h4>
                             <hr>
                             <!--<p>Link Kuesioner</p>-->
                             <!--<hr>-->
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
                             <?php
                                    $no = 0 + 1;
                                    if ($data_shared) {
                                        foreach ($data_shared as $d) {
                                            $responden = $d->responden;
                                            if ($responden == "Mahasiswa") {
                                                echo '<b><p class="mb-0">' . $d->nama_kuesioner . '<br /></p></b>';
                                                // echo '<b><p class="mb-0">' . $d->responden . '<br /></p></b>';
                                                echo '<p class="mb-0">Link Kuesioner :<br />';
                                                echo '<a target="_blank" style="text-align: justify;text-decoration: none;" href="' . $d->link_kuesioner . '">' . $d->link_kuesioner . '</a>';
                                                echo '</p><br />';
                                            } elseif ($responden == "Mahasiswa,Dosen,Tendik" || $responden == "Dosen,Mahasiswa" || $responden == "Mahasiswa,Tendik") {
                                                echo '<b><p class="mb-0">' . $d->nama_kuesioner . '<br /></p></b>';
                                                // echo '<b><p class="mb-0">' . $d->responden . '<br /></p></b>';
                                                echo '<p class="mb-0">Link Kuesioner :<br />';
                                                echo '<a target="_blank" style="text-align: justify;text-decoration: none;" href="' . $d->link_kuesioner . '">' . $d->link_kuesioner . '</a>';
                                                echo '</p><br />';
                                            }
                                            $no++;
                                        }
                                    } else {
                                        echo '<td class="text-center" colspan="6">Tidak Ada Evaluasi</td>';
                                    }
                            ?>
                         <?php } else { ?>
                         <center>
                              <td class="text-center" colspan="6">Tidak Ada Evaluasi</td>
                         </center>
                         <?php } ?>
                             
                        </div>
    
                   </div>
              </div>
    </div>
    
        </div>
    </div>
</div>
<?php else: ?>
<div class="container-fluid">
     <div class="row">
          <div class="col-md-12 grid-margin">
               <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                         <h3 class="font-weight-bold">Selamat Datang <?php echo $user->user_namalengkap; ?></h3>
                         <h6 class="font-weight-normal mb-0">Di Repository Evaluasi (e-Repo) sebagai
                              <span class="text-primary"><?php echo $user->user_level; ?></span>
                         </h6>

                    </div>
                    <div class="col-12 col-xl-4">
                         <div class="justify-content-end d-flex">
                              <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
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
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
     <div class="row">
         <div class="col-md-6 grid-margin stretch-card">
          <div class="card tale-bg"
               style="background-image: url(https://thumbs.dreamstime.com/b/blue-abstract-background-geometry-shine-layer-element-blue-abstract-background-geometry-shine-layer-element-vector-102937226.jpg)">
               <div class="card-people mt-auto">
                    <img src="<?php echo base_url('assets/auth/images/dashboard.png') ?>" alt="people">
                    <div class="weather-info">
                    </div>
               </div>
          </div>
          
     </div>
        <div class="col-md-6 stretch-card transparent">
                   <div class="card tale-bg stretch-card transparent" style="">
                        <div class="alert alert-dark" role="alert">
                             <h4 class="alert-heading">Info Kuesioner Sistem!</h4>
                             <hr>
                             <!--<p>Link Kuesioner</p>-->
                             <!--<hr>-->
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
                             <?php
                                    $no = 0 + 1;
                                    if ($data_shared) {
                                        foreach ($data_shared as $d) {
                                            $responden = $d->responden;
                                            if ($responden == "Tendik") {
                                                echo '<b><p class="mb-0">' . $d->nama_kuesioner . '<br /></p></b>';
                                                // echo '<b><p class="mb-0">' . $d->responden . '<br /></p></b>';
                                                echo '<p class="mb-0">Link Kuesioner :<br />';
                                                echo '<a target="_blank" style="text-align: justify;text-decoration: none;" href="' . $d->link_kuesioner . '">' . $d->link_kuesioner . '</a>';
                                                echo '</p><br />';
                                            } elseif ($responden == "Mahasiswa,Dosen,Tendik" || $responden == "Dosen,Tendik" || $responden == "Mahasiswa,Tendik") {
                                                echo '<b><p class="mb-0">' . $d->nama_kuesioner . '<br /></p></b>';
                                                // echo '<b><p class="mb-0">' . $d->responden . '<br /></p></b>';
                                                echo '<p class="mb-0">Link Kuesioner :<br />';
                                                echo '<a target="_blank" style="text-align: justify;text-decoration: none;" href="' . $d->link_kuesioner . '">' . $d->link_kuesioner . '</a>';
                                                echo '</p><br />';
                                            }
                                            $no++;
                                        }
                                    } else {
                                        echo '<td class="text-center" colspan="6">Tidak Ada Evaluasi</td>';
                                    }
                            ?>
                         <?php } else { ?>
                         <center>
                              <td class="text-center" colspan="6">Tidak Ada Evaluasi</td>
                         </center>
                         <?php } ?>
                             
                        </div>
    
                   </div>
              </div>
    </div>
    
        </div>
    </div>
</div>
<?php endif; ?>