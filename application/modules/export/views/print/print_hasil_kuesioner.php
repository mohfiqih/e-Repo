<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- App favicon -->
     <link rel="shortcut icon" href="<?php echo base_url('assets/backend'); ?>/images/phb.png">
     <title>Laporan Hasil Kuesioner</title>
</head>
<style>
table {
     border-collapse: collapse;
     width: 100%;
}

table,
th,
td {
     border: 1px solid black;
}

th,
td {
     padding: 5px;
}

th {
     color: black;
}

tr:hover {
     background-color: #f5f5f5;
}
</style>

<body>
     <!-- <div class="container"> -->
     <div class="row">
          <!-- <div class="col-md-6">
               <img width="50" height="50" src="<?php echo base_url('assets/backend/images/phb.png'); ?>" alt="">
          </div> -->
          <div class="col-md-6">
               <center>
                    <p style="line-height: 70%;">Yayasan Pendidikan Harapan Bersama</p>
                    <h3 style="line-height: 70%;">Politeknik Harapan Bersama</h3>
                    <h3 style="line-height: 70%;">Program Studi DIII Teknik Komputer</h3>
                    <p style="line-height: 70%;">Kampus I: Jl. Mataram No.9 Tegal 52142 Telp. 0283-352000 Fx.
                         0283-353353</p>
                    <p style="line-height: 70%;">Website: <a style="text-decoration:none;color: black;"
                              href="www.poltektegal.ac.id">www.poltektegal.ac.id</a><span
                              style="margin-left: 20px;">Email: <a style="text-decoration:none;color: black;"
                                   href="tik@poltektegal.ac.id">tik@poltektegal.ac.id</a></span></p>
                    <hr>
                    <hr>
               </center>
          </div>

          <div>
               <center>
                    <h3>DATA HASIL KUESIONER</h3>
               </center>
          </div>
          <?php
          $no = 0 + 1;
          $this->load->model('M_export');
          if ($data_paket) {
          foreach ($data_paket as $d) {
          ?>
          <div class="row">
               <div class="col-md-6">
                    <h4>Data Kesimpulan</h4>
                    <table class="table table-hover mb-0">
                         <tbody>
                              <tr>
                                   <th width="150">Nama Paket</th>
                                   <th width="20">:</th>
                                   <td><?php echo $d->nama_paket; ?>
                                        v<?php echo $d->versi_apl_paket; ?>
                                   </td>
                              </tr>
                              <tr>
                                   <th>Sistem</th>
                                   <th>:</th>
                                   <td> <?php echo $d->aplikasi; ?></td>
                              </tr>
                              <tr>
                                   <th>Responden</th>
                                   <th>:</th>
                                   <td>
                                        <?php echo $d->responden; ?>
                                   </td>
                              </tr>
                              <tr>
                                   <th width="150">Tanggal</th>
                                   <th width="20">:</th>
                                   <td>
                                        <?php echo $d->tgl_kuesioner; ?>
                                   </td>
                              </tr>
                              <tr>
                                   <th width="150">Total Responden</th>
                                   <th width="20">:</th>
                                   <td>
                                        <?php echo $total_responden; ?> Responden
                                   </td>
                              </tr>
                              <tr>
                                   <th width="150">Persentase</th>
                                   <th width="20">:</th>
                                   <td>
                                        <?php

                                                $total_id	  = "id_paket_jawaban='" . $d->id_paket . "' ";
                                                $tertinggi    = $this->M_export->total_soal($total_id)*4;
                                                $terendah     = $this->M_export->total_soal($total_id)*1;
 
                                                $total = (($this->M_export->total_ss_p($total_id))*4)+
                                                (($this->M_export->total_s_p($total_id))*3)+
                                                (($this->M_export->total_ts_p($total_id))*2)+
                                                (($this->M_export->total_sts_p($total_id))*1);
                                                       
                                                $nilai = substr(($total / $tertinggi) * (100), 0, 5);
                                                                      
                                          if ($nilai <= 100 && $nilai >= 80) { ?>
                                        <span class="badge bg-success text-white">
                                             <?php echo $nilai ?>%
                                        </span>
                                        <?php } else if ($nilai <= 79.9 && $nilai >= 60) { ?>
                                        <span class="badge bg-success text-white">
                                             <?php echo $nilai ?>%
                                        </span>
                                        <?php } else if ($nilai <= 59.9 && $nilai >= 40) { ?>
                                        <span class="badge bg-warning text-white">
                                             <?php echo $nilai ?>%
                                        </span>
                                        <?php } else if ($nilai <= 39.9 && $nilai >= 20) { ?>
                                        <span class="badge bg-danger text-white">
                                             <?php echo $nilai ?>%
                                        </span>
                                        <?php } else if ($nilai <= 19.9) { ?>
                                        <span class="badge bg-danger text-white">
                                             <?php echo $nilai ?>%
                                        </span>
                                        <?php } ?>
                                   </td>
                              </tr>
                              <tr>
                                   <th width="150">Kategori</th>
                                   <th width="20">:</th>
                                   <td>
                                        <?php
                                             $total_id	   = "id_paket_jawaban='" . $d->id_paket . "' ";
                                             $tertinggi    = $this->M_export->total_soal($total_id)*4;
                                             $terendah     = $this->M_export->total_soal($total_id)*1;

                                             $total = (($this->M_export->total_ss_p($total_id))*4)+
                                             (($this->M_export->total_s_p($total_id))*3)+
                                             (($this->M_export->total_ts_p($total_id))*2)+
                                             (($this->M_export->total_sts_p($total_id))*1);
                                                                    
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
                         </tbody>
                    </table>
               </div>
               <div class="col-md-6" style="margin-top: 20px;">
                    <table class="table table-hover mb-0">
                         <tbody>
                              <tr>
                                   <th width="150">
                                        Skor
                                   </th>
                                   <th width="20">:</th>
                                   <th>SS</th>
                                   <th>S</th>
                                   <th>TS</th>
                                   <th>STS</th>
                              </tr>
                              <tr>
                                   <td>

                                   </td>
                                   <td>

                                   </td>
                                   <td>
                                        <?php echo $ss; ?>
                                   </td>
                                   <td>
                                        <?php echo $s; ?>
                                   </td>
                                   <td>
                                        <?php echo $ts; ?>
                                   </td>
                                   <td>
                                        <?php echo $sts; ?>
                                   </td>
                              </tr>
                         </tbody>
                    </table>

                    <div class="col-md-6" style="margin-top: 20px;">
                         <table class="table table-hover mb-0">
                              <thead>
                                   <tr>
                                        <th>
                                             Total
                                        </th>

                                        <th>
                                             Y
                                        </th>
                                        <th>
                                             X
                                        </th>
                                        <th>
                                             Interval
                                        </th>
                                   </tr>
                              </thead>
                              <tbody>
                                   <tr>
                                        <td class="align-middle">
                                             <?php echo $total; ?>
                                        </td>

                                        <td>
                                             <?php echo $tertinggi; ?>
                                        </td>

                                        <td>
                                             <?php echo $terendah; ?>
                                        </td>

                                        <td>
                                             <?php echo $interval; ?>
                                        </td>
                                   </tr>
                              </tbody>

                         </table>
                    </div>
               </div>
               <?php }
          } else { ?>
               <td class="text-center" colspan="8">Tidak ada data</td>
               <?php } ?>

               <div class="card">
                    <div class="card-body">
                         <div class="row">
                              <div class="card-body" data-mdb-perfect-scrollbar="true"
                                   style="position: relative; overflow-x: auto;">
                                   <h4>Data Jawaban</h4>
                                   <table id="myTable" class="table table-hover mb-0" style="overflow-x: auto;">
                                        <thead>
                                             <tr>
                                                  <th scope="col" style="width: 5px;">No
                                                  </th>
                                                  <th scope="col">
                                                       Id
                                                       Identitas
                                                  </th>

                                                  <th scope="col">Nama
                                                       Lengkap
                                                  </th>
                                                  <th scope="col">Prodi
                                                  </th>
                                                  <th scope="col">Sebagai
                                                  </th>
                                                  <th scope="col">Jenis Kelamin
                                                  </th>
                                             </tr>
                                        </thead>
                                        <tbody>
                                             <?php
                                                            $no = 0 + 1;
                                                            if ($data_identitas) {
                                                                 foreach ($data_identitas as $d) {
                                             ?>
                                             <tr class="fw-normal">
                                                  <th class="align-middle">
                                                       <?php echo $no++; ?>
                                                  </th>
                                                  <th class="align-middle">
                                                       <?php echo $d->id_identitas; ?>
                                                  </th>
                                                  <td class="align-middle">
                                                       <?php echo $d->nama_lengkap; ?>
                                                  </td>
                                                  <td class="align-middle">
                                                       <?php echo $d->prodi; ?>
                                                  </td>
                                                  <td class="align-middle">
                                                       <?php echo $d->sebagai; ?>
                                                  </td>
                                                  <td class="align-middle">
                                                       <?php echo $d->gender; ?>
                                                  </td>
                                                  <?php }
                                                  } else { ?>
                                                  <td class="text-center" colspan="8">
                                                       Tidak ada data</td>
                                                  <?php } ?>
                                             </tr>
                                        </tbody>
                                   </table>
                              </div>
                         </div>
                    </div>
               </div>
               <br /><br />
               <div style="margin-left: 550px;">
                    <p style="line-height: 70%;">Tegal,</p>
                    <p style="line-height: 70%;">Ka. Prodi</p><br /><br />
                    <u style="line-height: 70%;">Rais, S.Pd,M.Kom.</u>
                    <p style="line-height: 70%;">NIPY.</p>
               </div>
          </div>
     </div>
</body>

</html>