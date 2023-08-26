<head>
     <title>Diagram Anaisis | Sistem e-Repo</title>
</head>
<div>
     <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
          aria-label="breadcrumb">
          <ol class="breadcrumb bg-primary">
               <li class="breadcrumb-item"><a href="<?php echo base_url('dasbor'); ?>">Home</a>
               </li>
               <li class="breadcrumb-item active" aria-current="page">Chart
               </li>
          </ol>
     </nav>
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
                                        $this->load->model('M_chart');
                                        if ($data_paket) {
                                             foreach ($data_paket as $d) {
                                   ?>
                                   <tr>
                                        <!-- <th><?php echo $no++; ?></th> -->
                                        <td><?php echo $d->nama_paket; ?> v.<?php echo $d->versi_apl_paket; ?></td>
                                        <td>
                                             <?php
                                                $total_id	  = "id_paket_jawaban='" . $d->id_paket . "' ";
                                                $tertinggi    = $this->M_chart->total_soal($total_id)*4;
                                                $terendah     = $this->M_chart->total_soal($total_id)*1;
 
                                                $total = (($this->M_chart->total_ss_p($total_id))*4)+
                                                (($this->M_chart->total_s_p($total_id))*3)+
                                                (($this->M_chart->total_ts_p($total_id))*2)+
                                                (($this->M_chart->total_sts_p($total_id))*1);
                                                       
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
                                             $tertinggi    = $this->M_chart->total_soal($total_id)*4;
                                             $terendah     = $this->M_chart->total_soal($total_id)*1;

                                             $total = (($this->M_chart->total_ss_p($total_id))*4)+
                                             (($this->M_chart->total_s_p($total_id))*3)+
                                             (($this->M_chart->total_ts_p($total_id))*2)+
                                             (($this->M_chart->total_sts_p($total_id))*1);
                                                                    
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
                                        $this->load->model('M_chart');
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

                                                  $Baik = $this->M_chart->label_baik($total_id, "klasifikasi");
                                                  $Kurang = $this->M_chart->label_kurang($total_id, "klasifikasi");
                                                  
                                                  echo $Baik;
                                                  ?>
                                             </p>
                                        </td>
                                        <td>
                                             <p class="text-danger">
                                                  <?php 
                                                  $total_id	   = "id_paket_jawaban='" . $d->id_paket . "' ";

                                                  $Baik = $this->M_chart->label_baik($total_id, "klasifikasi");
                                                  $Kurang = $this->M_chart->label_kurang($total_id, "klasifikasi");
                                                  
                                                  echo $Kurang;
                                                  ?>
                                             </p>
                                        </td>
                                        <td>
                                             <?php 
                                             $total_id	   = "id_paket_jawaban='" . $d->id_paket . "' ";

                                             $Baik = $this->M_chart->label_baik($total_id, "klasifikasi");
                                             $Kurang = $this->M_chart->label_kurang($total_id, "klasifikasi");

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
<!-- <div class="col-xl-6 col-md-6" style="margin-top: 15px;">
          <div class="card">
               <div class="card-body" style="height: 260px;overflow: auto;">
                    <h4 class="header-title mt-0 mb-3">
                         <center>Total Responden</center>
                    </h4>
                    <div class="table-responsive">
                         <table class="table table-hover mb-0">
                              <thead>
                                   <tr>
                                        <th>No</th>
                                        <th>Kategori Responden</th>
                                        <th>Jumlah Responden</th>
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
                              </tbody>
                         </table>
                    </div>
               </div>
          </div>
     </div>
      -->