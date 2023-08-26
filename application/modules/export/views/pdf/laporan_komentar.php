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
                    <h3>DATA KOMENTAR & SARAN</h3>
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
                                   <th width="150"> Komentar Baik</th>
                                   <th width="20">:</th>
                                   <td>
                                        <p class="text-success">
                                             <?php 
                                                  $total_id	   = "id_paket_jawaban='" . $d->id_paket . "' ";

                                                  $Baik = $this->M_export->label_baik($total_id, "klasifikasi");
                                                  $Kurang = $this->M_export->label_kurang($total_id, "klasifikasi");
                                                  
                                                  echo $Baik;
                                             ?>
                                        </p>
                                   </td>
                              </tr>
                              <tr>
                                   <th> Komentar Kurang</th>
                                   <th width="20">:</th>
                                   <td>
                                        <p class="text-danger">
                                             <?php 
                                                  $total_id	   = "id_paket_jawaban='" . $d->id_paket . "' ";

                                                  $Baik = $this->M_export->label_baik($total_id, "klasifikasi");
                                                  $Kurang = $this->M_export->label_kurang($total_id, "klasifikasi");
                                                  
                                                  echo $Kurang;
                                                  ?>
                                        </p>
                                   </td>
                              </tr>
                              <tr>
                                   <th width="150">Label</th>
                                   <th width="20">:</th>
                                   <td>
                                        <?php 
                                             $total_id	   = "id_paket_jawaban='" . $d->id_paket . "' ";

                                             $Baik = $this->M_export->label_baik($total_id, "klasifikasi");
                                             $Kurang = $this->M_export->label_kurang($total_id, "klasifikasi");

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
                         </tbody>
                    </table>
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
                                                  <th scope="col">Komentar
                                                  </th>
                                                  <th scope="col">Label
                                                  </th>
                                             </tr>
                                        </thead>
                                        <tbody>
                                             <?php
                                                  $no = 0 + 1;
                                                  if ($data_komentar) {
                                                  foreach ($data_komentar as $d) {
                                             ?>
                                             <tr class="fw-normal">
                                                  <td class="align-middle">
                                                       <?php echo $no++; ?>
                                                  </td>
                                                  <td class="align-middle">
                                                       <?php echo $d->jawaban; ?>
                                                  </td>
                                                  <td class="align-middle">
                                                       <?php echo $d->label; ?>
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