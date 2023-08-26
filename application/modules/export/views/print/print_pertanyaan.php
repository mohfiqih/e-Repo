<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- App favicon -->
     <link rel="shortcut icon" href="<?php echo base_url('assets/backend'); ?>/images/phb.png">
     <title>Laporan Pertanyaan</title>
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
                    <!-- <h3 style="line-height: 70%;">Program Studi DIV Teknik Informatika</h3> -->
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
                    <h3>DAFTAR PERTANYAAN KUESIONER</h3>
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
                              <td style="border: 1px solid white;line-height: 70%;margin-left: 50px;" width="150px">
                                   Jumlah Pertanyaan
                              </td>
                              <td style="border: 1px solid white;line-height: 70%;" width="5px">
                                   :
                              </td>
                              <td style="border: 1px solid white;line-height: 70%;" width="200px">
                                   <?php echo $d->jumlah_soal; ?>
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
                              <td style="border: 1px solid white;line-height: 70%;margin-left: 50px;" width="150px">
                                   Tanggal
                              </td>
                              <td style="border: 1px solid white;line-height: 70%;" width="5px">
                                   :
                              </td>
                              <td style="border: 1px solid white;line-height: 70%;" width="200px">
                                   <?php echo $d->tgl_kuesioner; ?>
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

                              </td>
                              <td style="border: 1px solid white;line-height: 70%;" width="5px">

                              </td>
                              <td style="border: 1px solid white;line-height: 70%;" width="200px">

                              </td>
                         </thead>
                    </table>
               </div><br />
               <div class="col-md-6">
                    <table style="line-height: 70%;">
                         <thead>
                              <td style="border: 1px solid white;line-height: 100%;" width="50px">
                                   Link :
                              </td>
                              <td target="_blank" style="border: 1px solid white;line-height: 70%;" width="50px">
                                   <a target="_blank"
                                        href="<?php echo base_url('kuesioner/form/') . enkrip($d->id_paket); ?>"><?php echo base_url('kuesioner/form/') . enkrip($d->id_paket); ?>
                                   </a>
                              </td>
                         </thead>
                    </table>
               </div>
          </div>
          <?php }
          } else { ?>
          <td class="text-center" colspan="8">Tidak ada data</td>
          <?php } ?>
          <br />


          <div class="card-body" data-mdb-perfect-scrollbar="true" style="overflow-x: auto;">
               <table id="myTable" class="table table-hover mb-0">
                    <thead>
                         <tr>
                              <td class="align-middle" scope="col" style="width: 5px;">No</td>
                              <td class="align-middle" scope="col">Pertanyaan Kuesioner</td>
                              <td class="align-middle" scope="col">Kategori Pertanyaan</td>
                              <td class="align-middle" scope="col" style="width: 5px;">SS</td>
                              <td class="align-middle" scope="col" style="width: 5px;">S</td>
                              <td class="align-middle" scope="col" style="width: 5px;">TS</td>
                              <td class="align-middle" scope="col" style="width: 5px;">STS</td>
                         </tr>
                    </thead>

                    <tbody>
                         <?php
                         $no = 0 + 1;
                         if ($data_soal) {
                         foreach ($data_soal as $d) {
                         ?>
                         <tr class="fw-normal">
                              <td class="align-middle">
                                   <?php echo $no++; ?>
                              </td>
                              <td class="align-middle">
                                   <?php echo $d->soal; ?>
                              </td>
                              <td class="align-middle">
                                   <?php echo $d->type_soal; ?>
                              </td>
                              <td class="align-middle">
                                   <?php echo $d->sangat_setuju; ?>
                              </td>
                              <td class="align-middle">
                                   <?php echo $d->setuju; ?>
                              </td>
                              <td class="align-middle">
                                   <?php echo $d->tidak_setuju; ?>
                              </td>
                              <td class="align-middle">
                                   <?php echo $d->sangat_tidak_setuju; ?>
                              </td>
                              <?php }
                              } else { ?>
                              <td class="text-center" colspan="6">Tidak ada data</td>
                              <?php } ?>
                         </tr>
                    </tbody>

               </table>
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