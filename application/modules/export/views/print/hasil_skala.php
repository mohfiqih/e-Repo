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
                    <h3>DATA JAWABAN</h3>
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
                    <h4>Hasil Kuesioner</h4>
                    <table class="table table-hover mb-0">
                         <tbody>
                              <tr>
                                   <td width="150">Nama Paket</td>
                                   <th width="20">:</td>
                                   <td><?php echo $d->nama_paket; ?>
                                   </td>
                              </tr>
                              <tr>
                                   <td>Sistem</td>
                                   <td>:</td>
                                   <td> <?php echo $d->aplikasi; ?></td>
                              </tr>
                              <tr>
                                   <td>Responden</td>
                                   <td>:</td>
                                   <td>
                                        <?php echo $d->responden; ?>
                                   </td>
                              </tr>
                              <tr>
                                   <td width="150">Tanggal</td>
                                   <td width="20">:</td>
                                   <td>
                                        <?php echo $d->tgl_kuesioner; ?>
                                   </td>
                              </tr>
                              <tr>
                                   <td width="150">Total Jawaban</td>
                                   <td width="20">:</td>
                                   <td>
                                        <?php echo $total_responden; ?> Jawaban
                                   </td>
                              </tr>
                              <tr>
                                   <td width="150">Persentase</td>
                                   <td width="20">:</td>
                                   <td>
                                        <?php
                                                            $total_id = "id_paket_jawaban='" . $d->id_paket . "' ";
                                                            $tertinggi = $this->M_export->total_soal($total_id) * 4;
                                                            $terendah = $this->M_export->total_soal($total_id) * 1;
                                                            
                                                            // Check if $tertinggi is zero to prevent division by zero
                                                            if ($tertinggi !== 0) {
                                                                $total = (($this->M_export->total_ss_p($total_id)) * 4) +
                                                                    (($this->M_export->total_s_p($total_id)) * 3) +
                                                                    (($this->M_export->total_ts_p($total_id)) * 2) +
                                                                    (($this->M_export->total_sts_p($total_id)) * 1);
                                                            
                                                                $nilai = substr(($total / $tertinggi) * 100, 0, 5);
                                                            } else {
                                                                // Set $nilai to 0 if $tertinggi is zero to avoid division by zero
                                                                $nilai = 0;
                                                            }
                                                            
                                                            if ($nilai <= 100 && $nilai >= 80) {
                                                            ?>
                                        <span class="badge bg-success text-white">
                                             <?php echo $nilai ?>%
                                        </span>
                                        <?php
                                                            } else if ($nilai <= 79.9 && $nilai >= 60) {
                                                            ?>
                                        <span class="badge bg-success text-white">
                                             <?php echo $nilai ?>%
                                        </span>
                                        <?php
                                                            } else if ($nilai <= 59.9 && $nilai >= 40) {
                                                            ?>
                                        <span class="badge bg-warning text-white">
                                             <?php echo $nilai ?>%
                                        </span>
                                        <?php
                                                            } else if ($nilai <= 39.9 && $nilai >= 20) {
                                                            ?>
                                        <span class="badge bg-danger text-white">
                                             <?php echo $nilai ?>%
                                        </span>
                                        <?php
                                                            } else if ($nilai <= 19.9) {
                                                            ?>
                                        <span class="badge bg-danger text-white">
                                             <?php echo $nilai ?>%
                                        </span>
                                        <?php
                                                            }
                                                            ?>

                                   </td>
                                   </td>
                              </tr>
                              <tr>
                                   <td width="150">Kategori</td>
                                   <td width="20">:</td>
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
               <br />
               <h4>Keterangan Rumus :</h4>
               <p>1. Total Skor = Jml Skor 4 X Skor 4<br />2. Y = Skor Tetinggi x Jml Jawaban<br />3. X = Skor Terendah
                    x Jml Jawaban<br />4. I = Jml Jawaban / Jml Rentang Likert (4)<br />5. % = (Total Skor / Y) x
                    100%
               </p>
               <div class="col-md-6" style="margin-top: 20px;">
                    <table class="table table-hover mb-0">
                         <tbody>
                              <tr>
                                   <th width="150">
                                        Skor
                                   </th>
                                   <th width="20">:</th>
                                   <th>Sangat Setuju</th>
                                   <th>Setuju</th>
                                   <th>Tidak Setuju</th>
                                   <th>Sangat Tidak Setuju</th>
                              </tr>
                              <tr>
                                   <th>

                                   </th>
                                   <th>

                                   </th>
                                   <th>
                                        <?php echo  $ss, ' x 4 = ', $ss*4; ?>
                                   </th>
                                   <th>
                                        <?php echo $s, ' x 3 = ', $s*3; ?>
                                   </th>
                                   <th>
                                        <?php echo $ts, ' x 2 = ', $ts*2; ?>
                                   </th>
                                   <th>
                                        <?php echo $sts, ' x 1 = ', $sts*1; ?>
                                   </th>
                              </tr>
                         </tbody>
                    </table>

                    <div class="col-md-6" style="margin-top: 20px;">
                         <table class="table table-hover mb-0">
                              <thead>
                                   <tr>
                                        <th>
                                             Total Skor
                                        </th>

                                        <th>
                                             Y
                                        </th>
                                        <th>
                                             X
                                        </th>
                                        <th>
                                             Interval (I)
                                        </th>
                                   </tr>
                              </thead>
                              <tbody>
                                   <tr>
                                        <th class="align-middle">
                                             <?php echo $total; ?>
                                        </th>

                                        <th>
                                             <?php echo 'Jml Jawaban x 4 = <br/>', $tertinggi; ?>
                                        </th>

                                        <th>
                                             <?php echo 'Jml Jawaban x 1 = <br/>', $terendah; ?>
                                        </th>

                                        <th>
                                             <?php echo $interval; ?>
                                        </th>
                                   </tr>
                              </tbody>

                         </table>
                    </div>
               </div>
               <?php }
          } else { ?>
               <td class="text-center" colspan="8">Tidak ada data</td>
               <?php } ?>
               <br />
               <div class="card">
                    <div class="card-body">
                         <div class="row">
                              <div class="card-body" data-mdb-perfect-scrollbar="true"
                                   style="position: relative; overflow-x: auto;">
                                   <table id="myTable" class="table table-hover mb-0" style="overflow-x: auto;">
                                        <thead>
                                             <tr>
                                                  <td scope="col" style="width: 5px;">No</td>
                                                  <td scope="col">NIM/NIPY</td>
                                                  <td scope="col">Nama Responden</td>
                                                  <?php for ($i = 1; $i <= $total_pertanyaan; $i++) { ?>
                                                  <td>P-<?php echo $i; ?></td>
                                                  <?php } ?>
                                             </tr>
                                        </thead>
                                        <tbody>
                                             <?php
                                             $no = 0 + 1;
                                             if ($data_jawaban) {
                                                  foreach ($data_jawaban as $d) {
                                                       $jawaban_array = explode(",", $d->jawaban);
                                             ?>
                                             <tr>
                                                  <td class="align-middle"><?php echo $no++; ?></td>
                                                  <td class="align-middle"><?php echo $d->id_identitas; ?></td>
                                                  <td class="align-middle"><?php echo $d->nama_lengkap; ?></td>
                                                  <?php foreach ($jawaban_array as $jawaban) { ?>
                                                  <td>
                                                       <?php echo $d->soal; ?>
                                                       <?php echo trim($jawaban); ?>
                                                  </td>
                                                  <?php } ?>
                                             </tr>
                                             <?php
                                                  }
                                             } else {
                                             ?>
                                             <tr>
                                                  <td class="text-center"
                                                       colspan="<?php echo $total_pertanyaan + $total_pertanyaan; ?>">
                                                       Tidak ada data
                                                  </td>
                                             </tr>
                                             <?php
                                                  }
                                             ?>
                                        </tbody>
                                   </table>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
     <br />
</body>

</html>