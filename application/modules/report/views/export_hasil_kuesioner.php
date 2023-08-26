<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- App favicon -->
     <link rel="shortcut icon" href="<?php echo base_url('assets/backend'); ?>/images/phb.png">
     <title>Laporan Daftar Paket Kuesioner</title>
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
                    <!-- <h3 style="line-height: 70%;">Program Studi DIII Teknik Komputer</h3> -->
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
          if ($data_paket) {
          foreach ($data_paket as $d) {
          ?>
          <div class="row">
               <div class="col-md-6">
                    <table>
                         <thead>
                              <td style="border: 1px solid white;line-height: 70%;" width="150px">
                                   Nama Paket
                              </td>
                              <td style="border: 1px solid white;line-height: 70%;" width="5px">
                                   :
                              </td>
                              <td style="border: 1px solid white;line-height: 70%;" width="200px">
                                   <?php echo $d->nama_paket; ?>
                                   v<?php echo $d->versi_apl_paket; ?>
                              </td>

                              <td style="border: 1px solid white;line-height: 70%;padding-left: 20px;" width="150px">
                                   Jumlah Responden
                              </td>
                              <td style="border: 1px solid white;line-height: 70%;" width="5px">
                                   :
                              </td>
                              <td style="border: 1px solid white;line-height: 70%;" width="200px">
                                   <?php echo $total_responden; ?>
                              </td>
                         </thead>
                    </table>
               </div>

               <div class="col-md-6">
                    <table>
                         <thead>
                              <td style="border: 1px solid white;line-height: 70%;" width="150px">
                                   Aplikasi
                              </td>
                              <td style="border: 1px solid white;line-height: 70%;" width="5px">
                                   :
                              </td>
                              <td style="border: 1px solid white;line-height: 70%;" width="200px">
                                   <?php echo $d->aplikasi; ?>
                                   v<?php echo $d->versi_apl_paket; ?>
                              </td>
                              <td style="border: 1px solid white;line-height: 70%;padding-left: 20px;" width="150px">
                                   Jumlah Jawaban
                              </td>
                              <td style="border: 1px solid white;line-height: 70%;" width="5px">
                                   :
                              </td>
                              <td style="border: 1px solid white;line-height: 70%;" width="200px">
                                   <?php echo $total_soal; ?>
                              </td>
                         </thead>
                    </table>
               </div>

               <div class="col-md-6">
                    <table>
                         <thead>
                              <td style="border: 1px solid white;line-height: 70%;" width="150px">
                                   Responden
                              </td>
                              <td style="border: 1px solid white;line-height: 70%;" width="5px">
                                   :
                              </td>
                              <td style="border: 1px solid white;line-height: 70%;" width="200px">
                                   <?php echo $d->responden; ?>
                              </td>
                              <td style="border: 1px solid white;line-height: 70%;" width="150px">
                                   Persentase
                              </td>
                              <td style="border: 1px solid white;line-height: 70%;" width="5px">
                                   :
                              </td>
                              <td style="border: 1px solid white;line-height: 70%;" width="200px">
                                   <!-- <?php
                                   $nilai = substr(($total / $tertinggi) * (100), 0, 5);
                                   if ($nilai <= 100 && $nilai >= 80) { ?>
                                   <span class="badge bg-success">
                                        <?php echo $nilai ?>%
                                   </span>
                                   <?php } else if ($nilai <= 79.9 && $nilai >= 60) { ?>
                                   <span class="badge bg-success">
                                        <?php echo $nilai ?>%
                                   </span>
                                   <?php } else if ($nilai <= 59.9 && $nilai >= 40) { ?>
                                   <span class="badge bg-warning">
                                        <?php echo $nilai ?>%
                                   </span>
                                   <?php } else if ($nilai <= 39.9 && $nilai >= 20) { ?>
                                   <span class="badge bg-danger">
                                        <?php echo $nilai ?>%
                                   </span>
                                   <?php } else if ($nilai <= 19.9) { ?>
                                   <span class="badge bg-danger">
                                        <?php echo $nilai ?>%
                                   </span>
                                   <?php } ?> -->
                              </td>

                         </thead>
                    </table>
               </div>
               <div class="col-md-6">
                    <table>
                         <thead>
                              <td style="border: 1px solid white;line-height: 70%;" width="150px">
                                   Tanggal Kuesioner
                              </td>
                              <td style="border: 1px solid white;line-height: 70%;" width="5px">
                                   :
                              </td>
                              <td style="border: 1px solid white;line-height: 70%;" width="200px">
                                   <?php echo $d->tgl_kuesioner; ?>
                              </td>
                              <td style="border: 1px solid white;line-height: 70%;padding-left: 20px;" width="150px">
                                   Kategori
                              </td>
                              <td style="border: 1px solid white;line-height: 70%;" width="5px">
                                   :
                              </td>
                              <td style="border: 1px solid white;line-height: 70%;" width="200px">
                                   <!-- <?php
                                      $nilai = ($total / $tertinggi) * (100);
                                      if ($nilai <= 100 && $nilai >= 80) { ?>
                                   <span class="badge bg-success">
                                        Sangat Setuju
                                   </span>
                                   <?php } else if ($nilai <= 79.9 && $nilai >= 60) { ?>
                                   <span class="badge bg-success">
                                        Setuju
                                   </span>
                                   <?php } else if ($nilai <= 59.9 && $nilai >= 40) { ?>
                                   <span class="badge bg-warning">
                                        Cukup
                                   </span>
                                   <?php } else if ($nilai <= 39.9 && $nilai >= 20) { ?>
                                   <span class="badge bg-danger">
                                        Tidak Setuju
                                   </span>
                                   <?php } else if ($nilai <= 19.9) { ?>
                                   <span class="badge bg-danger">
                                        Sangat Tidak Setuju
                                   </span>
                                   <?php } ?> -->
                              </td>
                         </thead>
                    </table>
               </div><br />
          </div>
          <?php }
          } else { ?>
          <td class="text-center" colspan="8">Tidak ada data</td>
          <?php } ?>

          <div class="card">
               <div class="card-body">
                    <div class="row">
                         <div class="card-body" data-mdb-perfect-scrollbar="true">
                              <h4 style="line-height: 70%;">Data Skor :</h4>
                              <table id="myTable">
                                   <thead>
                                        <tr>
                                             <th scope="col">Kategori
                                             </th>
                                             <th scope="col">
                                                  Sangat Setuju
                                             </th>
                                             <th scope="col">Setuju
                                             </th>
                                             <th scope="col">Cukup/Netral
                                             </th>
                                             <th scope="col">Tidak Setuju
                                             </th>
                                             <th scope="col">
                                                  Sangat Tidak Setuju
                                             </th>

                                        </tr>
                                   </thead>
                                   <tbody>
                                        <tr>
                                             <td scope="col">Pertanyaan Positif
                                             </td>
                                             <td scope="col">
                                                  <?php echo $ss_positif; ?>
                                             </td>
                                             <td scope="col"><?php echo $s_positif; ?>
                                             </td>
                                             <td scope="col"><?php echo $c_positif; ?>
                                             </td>
                                             <td scope="col"><?php echo $ts_positif; ?>
                                             </td>
                                             <td scope="col">
                                                  <?php echo $sts_positif; ?>
                                             </td>
                                        </tr>
                                        <tr>
                                             <td scope="col">Pertanyaan Negatif
                                             </td>
                                             <td scope="col">
                                                  <?php echo $ss_negatif; ?>
                                             </td>
                                             <td scope="col"><?php echo $s_negatif; ?>
                                             </td>
                                             <td scope="col"><?php echo $c_negatif; ?>
                                             </td>
                                             <td scope="col"><?php echo $ts_negatif; ?>
                                             </td>
                                             <td scope="col">
                                                  <?php echo $sts_negatif; ?>
                                             </td>
                                        </tr>
                                        <tr>
                                             <td scope="col">Total Skor
                                             </td>
                                             <td scope="col">
                                                  <?php echo $ss; ?>
                                             </td>
                                             <td scope="col"> <?php echo $s; ?>
                                             </td>
                                             <td scope="col"><?php echo $c; ?>
                                             </td>
                                             <td scope="col"><?php echo $ts; ?>
                                             </td>
                                             <td scope="col">
                                                  <?php echo $sts; ?>
                                             </td>
                                        </tr>

                                   </tbody>
                              </table>
                              <table>
                                   <thead>
                                        <!-- <tr>
                                             <th>Nama</th>
                                        </tr> -->
                                        <tr>
                                             <th style="width: 133px;text-align: left;">Total</th>
                                             <th><?php echo $total; ?></th>
                                        </tr>
                                   </thead>
                              </table>
                         </div>
                    </div>
               </div>
          </div><br />
          <div class="card">
               <div class="card-body">
                    <div class="row">
                         <div class="card-body" data-mdb-perfect-scrollbar="true">
                              <h4 style="line-height: 70%;">Data Responden :</h4>
                              <table id="myTable" class="table">
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
                                             <td class="align-middle">
                                                  <?php echo $no++; ?>
                                             </td>
                                             <td class="align-middle">
                                                  <?php echo $d->id_identitas; ?>
                                             </td>
                                             <td class="align-middle">
                                                  <?php echo $d->nama_lengkap; ?>
                                             </td>
                                             <td class="align-middle">
                                                  <?php echo $d->sebagai; ?>
                                             </td>
                                             <td class="align-middle">
                                                  <?php echo $d->gender; ?>
                                             </td>
                                             <!-- <td class="align-middle">

                                             </td> -->
                                             <?php }
                                                  } else { ?>
                                             <td class="text-center" colspan="8">Tidak ada data</td>
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
               <u style="line-height: 70%;"></u>
               <p style="line-height: 70%;">NIPY.</p>
          </div>
     </div>
     </div>
</body>

</html>