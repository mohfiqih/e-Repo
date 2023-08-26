<head>
     <title>Hasil Kuesioner | Sistem e-Repo</title>
</head>
<!-- Berhasil Hapus -->
<?php if ($this->session->flashdata('notif_berhasil_hapus_responden')){ ?>
<div class="alert alert-success alert-dismissible fade show" data-dismiss="alert" aria-label="Close" role="alert">
     <span class="btn-label"></span><?php echo $this->session->flashdata('notif_berhasil_hapus_responden'); ?>
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
     </button>
</div>
<?php } ?>
<!-- Gagal Hapus -->
<?php if ($this->session->flashdata('notif_gagal_hapus_responden')){ ?>
<div class="alert alert-danger alert-dismissible fade show" data-dismiss="alert" aria-label="Close" role="alert">
     <span class="btn-label"></span><?php echo $this->session->flashdata('notif_gagal_hapus_responden'); ?>
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
     </button>
</div>
<?php } ?>
<div>
     <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
          aria-label="breadcrumb">
          <ol class="breadcrumb bg-primary">
               <li class="breadcrumb-item"><a href="<?php echo base_url('dasbor'); ?>">Home</a>
               </li>
               <li class="breadcrumb-item active" aria-current="page">Data Skala Likert
               </li>
          </ol>
     </nav>
</div>
<div class="card">
     <!-- Start Content-->
     <div class="container-fluid">
          <div class="card">
               <div class="card-body">
                    <div class="row">
                         <!-- <div class="col-md-6">
                              <a style="decoration: none;"
                                   href="<?php echo base_url('export/print_hasil_kuesioner'); ?>">
                                   <button style="height: 43px;margin-left: 5px;margin-top: 5px;"
                                        class="btn btn-danger aves-effect waves-light" type="button">
                                        <i class="fa fa-print"></i>
                                        Print
                                   </button>
                              </a>
                              <button style="height: 43px;margin-left: 5px;margin-top: 5px;"
                                   class="btn btn-warning dropdown-toggle aves-effect waves-light" type="button"
                                   id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">
                                   <i class="fa fa-download"></i> Export
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                   <a class="dropdown-item"
                                        href="<?php echo base_url('export/export_hasil_pdf'); ?>">PDF</a>
                                   <a class="dropdown-item"
                                        href="<?php echo base_url('export/export_hasil_excel'); ?>">Excel</a>
                              </div>
                         </div> -->
                         <div class="card-body" data-mdb-perfect-scrollbar="true" style="overflow-x: auto;">
                              <table id="myTable" class="table table-hover mb-0">
                                   <thead>
                                        <tr>
                                             <th class="align-middle" scope="col" style="width: 5px;">No
                                             </th>
                                             <th class="align-middle" scope="col">Nama Paket
                                             </th>
                                             <th class="align-middle" scope="col">Sistem
                                             </th>
                                             <th class="align-middle" scope="col">Responden
                                             </th>
                                             <th class="align-middle" scope="col">Persentase
                                             </th>
                                             <th class="align-middle" scope="col" style="width: 5px;">
                                                  Action
                                             </th>
                                        </tr>
                                   </thead>
                                   <tbody>
                                        <?php
                                             $no = 0 + 1;
                                             $this->load->model('M_report');
                                             if ($data_paket) {
                                                  foreach ($data_paket as $d) {
                                        ?>
                                        <tr class="fw-normal">
                                             <th class="align-middle">
                                                  <?php echo $no++; ?>
                                             </th>
                                             <th class="align-middle">
                                                  <?php echo $d->nama_paket; ?>
                                                  v<?php echo $d->versi_apl_paket; ?>
                                             </th>
                                             <td class="align-middle">
                                                  <?php echo $d->aplikasi; ?>
                                             </td>
                                             <td class="align-middle">
                                                  <?php echo $d->responden; ?>
                                             </td>
                                             <td class="align-middle">
                                                  <?php

                                                $total_id	  = "id_paket_jawaban='" . $d->id_paket . "' ";
                                                $tertinggi    = $this->M_report->total_soal($total_id)*4;
                                                $terendah     = $this->M_report->total_soal($total_id)*1;
 
                                                $total = (($this->M_report->total_ss_p($total_id))*4)+
                                                (($this->M_report->total_s_p($total_id))*3)+
                                                (($this->M_report->total_ts_p($total_id))*2)+
                                                (($this->M_report->total_sts_p($total_id))*1);
                                                       
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
                                             <td class="align-middle">
                                                  <a style="margin-left: 10px;text-decoration: none;"
                                                       href="<?php echo url(1) .'/data_responden/'. enkrip($d->id_paket); ?>"
                                                       data-mdb-toggle="tooltip" class="fas fa-eye text-success me-3"
                                                       title="Soal">
                                                  </a>
                                             </td>

                                        </tr>
                                        <?php }} else { ?>
                                        <td class="text-center" colspan="8">Tidak ada data</td>
                                        <?php } ?>
                                   </tbody>
                              </table>
                         </div>
                         <!-- End Tabel -->
                    </div>
               </div>
          </div>
          </form>
     </div>
</div>
<?php echo $this->session->flashdata('notifikasi'); ?>