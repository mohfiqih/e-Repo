<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- App favicon -->
     <link rel="shortcut icon" href="<?php echo base_url('assets/backend'); ?>/images/phb.png">
     <title>Laporan Data Berkas</title>
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
     <div class="row" style="margin-left: 30px;margin-right: 30px;margin-top: 100px;">
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
          <br />
          <div>
               <center>
                    <h3>Data Berkas</h3>
               </center>
          </div>
          <div class="card-body" data-mdb-perfect-scrollbar="true" style="overflow-x: auto;">
               <table class="table table-hover mb-0">
                    <thead>
                         <tr>
                              <td scope="col">No</td>
                              <td scope="col">Nama Sistem</td>
                              <td scope="col">Versi Sistem</td>
                              <td scope="col">
                                   Penyedia
                              </td>
                              <td scope="col">
                                   Tanggal Berkas
                              </td>
                              <td scope="col" style="width: 50px;">
                                   Link Berkas
                              </td>
                         </tr>
                    </thead>
                    <tbody>
                         <?php
                         $no=0+1;
					if ($data_berkas){
					foreach ($data_berkas as $d){ 
					?>
                         <tr class="fw-normal">
                              <td>
                                   <?php echo $no++; ?>
                              </td>
                              <td>
                                   <?php echo $d->nama_apl; ?>
                              </td>
                              <td>
                                   <?php echo $d->versi_apl; ?>
                              </td>
                              <td>
                                   <?php echo $d->penyedia_apl; ?>
                              </td>
                              <td>
                                   <?php echo $d->tgl_publish; ?>
                              </td>
                              <td style="width: 50px;">
                                   <a target="_blank"
                                        href="<?php echo $d->link_berkas; ?>"><?php echo $d->link_berkas; ?></a>
                                   <!-- <a target="_blank" style="text-decoration: none;"
                                        href="<?php echo base_url('assets/upload/'); ?><?php echo $d->judul; ?>">
                                        <?php echo $d->judul; ?>
                                   </a> -->
                              </td>
                              <?php }} else { ?>
                              <td class="text-center" colspan="6">Tidak ada data</td>
                              <?php } ?>
                         </tr>
                    </tbody>
               </table>
          </div>
          <br />
          <div style="float: right;">
               <p style="line-height: 70%;">Tegal,</p>
               <p style="line-height: 70%;">Ka. Prodi</p><br /><br />
               <u style="line-height: 70%;"></u>
               <p style="line-height: 70%;">NIPY.</p>
          </div>
     </div>

     <script type="text/javascript">
     window.print
     </script>
</body>

</html>