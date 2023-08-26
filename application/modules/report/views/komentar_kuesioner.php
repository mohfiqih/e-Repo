<head>
     <title>Hasil Kuesioner | Sistem e-Repo</title>
</head>
<!-- Berhasil Hapus -->
<?php if ($this->session->flashdata('notif_berhasil_hapus')){ ?>
<div class="alert alert-success alert-dismissible fade show" data-dismiss="alert" aria-label="Close" role="alert">
     <span class="btn-label"></span><?php echo $this->session->flashdata('notif_berhasil_hapus'); ?>
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
     </button>
</div>
<?php } ?>
<!-- Gagal Hapus -->
<?php if ($this->session->flashdata('notif_gagal_hapus')){ ?>
<div class="alert alert-danger alert-dismissible fade show" data-dismiss="alert" aria-label="Close" role="alert">
     <span class="btn-label"></span><?php echo $this->session->flashdata('notif_gagal_hapus'); ?>
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
               <li class="breadcrumb-item active" aria-current="page">Data Klasifikasi
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
                                             <th class="align-middle" scope="col">Hasil
                                             </th>
                                             <th class="align-middle" scope="col" style="width: 5px;">
                                                  Action
                                             </th>
                                        </tr>
                                   </thead>
                                   <tbody>
                                        <?php
                                             $no=0+1;
									if ($data_paket){
									foreach ($data_paket as $d){ 
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
                                             <td>
                                                  <?php 
                                                  $total_id	   = "id_paket_jawaban='" . $d->id_paket . "' ";

                                                  $Baik = $this->report->label_baik($total_id, "klasifikasi");
                                                  $Kurang = $this->report->label_kurang($total_id, "klasifikasi");

                                                  // $kosong = 0;

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
                                                       Data Sama
                                                  </span>
                                                  <?php } ?>
                                             </td>
                                             <td class="align-middle">
                                                  <a style="margin-left: 10px;text-decoration: none;"
                                                       href="<?php echo url(1) .'/data_komentar/'. enkrip($d->id_paket); ?>"
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
<!-- <?php echo $this->session->flashdata('notifikasi'); ?> -->