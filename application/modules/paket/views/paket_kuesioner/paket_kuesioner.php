<head>
     <title>Paket Kuesioner | Sistem e-Repo</title>
</head>
<!-- Berhasil Tambah -->
<?php if ($this->session->flashdata('notif_tambah_paket')){ ?>
<div class="alert alert-success alert-dismissible fade show" data-dismiss="alert" aria-label="Close" role="alert">
     <span class="btn-label"></span><?php echo $this->session->flashdata('notif_tambah_paket'); ?>
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
     </button>
</div>
<?php } ?>
<!-- Gagal Tambah -->
<?php if ($this->session->flashdata('notif_gagal_paket')){ ?>
<div class="alert alert-danger alert-dismissible fade show" data-dismiss="alert" aria-label="Close" role="alert">
     <span class="btn-label"></span><?php echo $this->session->flashdata('notif_gagal_paket'); ?>
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
     </button>
</div>
<?php } ?>
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
<!-- Berhasil Tambah Soal -->
<?php if ($this->session->flashdata('notif_berhasil_soal')){ ?>
<div class="alert alert-success alert-dismissible fade show" data-dismiss="alert" aria-label="Close" role="alert">
     <span class="btn-label"></span><?php echo $this->session->flashdata('notif_berhasil_soal'); ?>
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
     </button>
</div>
<?php } ?>
<!-- Gagal Tambah Soal -->
<?php if ($this->session->flashdata('notif_gagal_soal')){ ?>
<div class="alert alert-danger alert-dismissible fade show" data-dismiss="alert" aria-label="Close" role="alert">
     <span class="btn-label"></span><?php echo $this->session->flashdata('notif_gagal_soal'); ?>
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
               <li class="breadcrumb-item active" aria-current="page">Paket Kuesioner
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
                         <div class="col-md-6">
                              <button style="height: 43px;margin-left: 5px;margin-top: 5px;" type="button"
                                   class="btn btn-success" data-toggle="modal" data-target="#addModal"><span
                                        class="btn-label"><i class="fa fa-plus"></i></span>
                                   Kuesioner</button>
                              <a style="decoration: none;" href="<?php echo base_url('export/print_paket'); ?>">
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
                                        href="<?php echo base_url('export/export_paket_pdf'); ?>">PDF</a>
                                   <a class="dropdown-item"
                                        href="<?php echo base_url('export/export_paket_excel'); ?>">Excel</a>
                              </div>
                         </div>

                         <!-- Add Data -->
                         <?php echo form_open_multipart(uri(2) == "edit" ? url(1, "update") : url(1, "tambah")); ?>
                         <div class="modal fade" id="addModal" tabindex="-1" role="dialog"
                              aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                   <div class="modal-content">
                                        <div class="modal-header">
                                             <h5 class="modal-title" id="exampleModalLabel">Tambah Paket</h5>
                                             <button type="button" class="close" data-dismiss="modal"
                                                  aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                             </button>
                                        </div>
                                        <div class="modal-body">
                                             <div class="row">
                                                  <div class="col-md-6">
                                                       <div class="form-floating mb-3">
                                                            <label>Nama Paket</label>
                                                            <input type="text" class="form-control" name="nama_paket"
                                                                 placeholder="Nama Paket" autocomplete="off" required>
                                                       </div>
                                                       <div class="form-floating mb-3">
                                                            <label>Nama Sistem</label>
                                                            <select type="text" class="form-control" name="aplikasi"
                                                                 placeholder="Nama Aplikasi" autocomplete="off"
                                                                 required>
                                                                 <option value="">Pilih Sistem</option>
                                                                 <option value="Oase" <?php if (uri(1) == "tambah") ?>>
                                                                      Oase</option>
                                                                 <option value="Syncnau"
                                                                      <?php if (uri(1) == "tambah"); ?>>
                                                                      Syncnau</option>
                                                            </select>
                                                       </div>
                                                       <div class="form-floating mb-3">
                                                            <label>Versi Sistem</label>
                                                            <input type="text" class="form-control"
                                                                 name="versi_apl_paket" placeholder="Versi Sistem"
                                                                 autocomplete="off" required>

                                                       </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                       <div class="form-floating mb-3">
                                                            <label>Jumlah Pertanyaan</label>
                                                            <input type="text" class="form-control" name="jumlah_soal"
                                                                 placeholder="Jumlah Pertanyaan" autocomplete="off"
                                                                 required>
                                                       </div>
                                                       <div class="form-floating mb-3">
                                                            <label>Tanggal Kuesioner</label>
                                                            <input type="datetime-local" class="form-control"
                                                                 name="tgl_kuesioner" placeholder="Tanggal Kuesioner"
                                                                 required>
                                                       </div>
                                                       <div class="card" style="border: 1px solid #CED4DA;">
                                                            <div class="card-body" required>
                                                                 <label>Pilih Responden :</label><br />
                                                                 <div style="margin-left: 5px;">
                                                                      <div class="col-md-6">
                                                                           <input class="form-check-input"
                                                                                type="checkbox" name="responden[]"
                                                                                value="Dosen" id="flexCheckDefault">
                                                                           <label class="form-check-label"
                                                                                for="flexCheckDefault">
                                                                                Dosen
                                                                           </label>
                                                                      </div>
                                                                      <div class="col-md-6">
                                                                           <input class="form-check-input"
                                                                                type="checkbox" name="responden[]"
                                                                                value="Mahasiswa" id="flexCheckDefault">
                                                                           <label class="form-check-label"
                                                                                for="flexCheckDefault">
                                                                                Mahasiswa
                                                                           </label>
                                                                      </div>
                                                                      <div class="col-md-6">
                                                                           <input class="form-check-input"
                                                                                type="checkbox" name="responden[]"
                                                                                value="Tendik" id="flexCheckDefault">
                                                                           <label class="form-check-label"
                                                                                for="flexCheckDefault">
                                                                                Tendik
                                                                           </label>
                                                                      </div>
                                                                      <!--<div class="col-md-6">-->
                                                                      <!--     <input class="form-check-input"-->
                                                                      <!--          type="checkbox" name="responden[]"-->
                                                                      <!--          value="Maba" id="flexCheckDefault">-->
                                                                      <!--     <label class="form-check-label"-->
                                                                      <!--          for="flexCheckDefault">-->
                                                                      <!--          Maba-->
                                                                      <!--     </label>-->
                                                                      <!--</div>-->
                                                                 </div>

                                                            </div>
                                                       </div>
                                                  </div>
                                             </div><br />
                                             <div class="modal-footer">
                                                  <button type="submit" class="btn btn-success"
                                                       style="height: 43px;">Tambah</button>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <?php echo form_close(); ?>

                         <!-- Tabel Data -->
                         <div class="card-body" data-mdb-perfect-scrollbar="true" style="overflow-x: auto;">
                              <table id="myTable" class="table table-hover mb-0">
                                   <thead>
                                        <tr>
                                             <th class="align-middle" scope="col" style="width: 5px;">No
                                             </th>
                                             <th class="align-middle" scope="col">Kode Paket
                                             </th>
                                             <th class="align-middle" scope="col">Nama Paket
                                             </th>
                                             <th class="align-middle" scope="col">Sistem
                                             </th>
                                             <th class="align-middle" scope="col">Versi
                                             </th>
                                             <th class="align-middle" scope="col">Responden
                                             </th>
                                             <th class="align-middle" scope="col" style="width: 100px;">
                                                  Action</th>
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
                                                  <?php $inisial = substr($d->aplikasi,0,3);
                                                        echo $inisial;?>_v<?php echo $d->versi_apl_paket; ?>
                                             </th>
                                             <td class="align-middle">
                                                  <?php echo $d->nama_paket; ?>
                                                  v<?php echo $d->versi_apl_paket; ?>
                                             </td>
                                             <td class="align-middle">
                                                  <?php echo $d->aplikasi; ?>
                                             </td>
                                             <td class="align-middle">
                                                  <?php echo $d->versi_apl_paket; ?>
                                             </td>
                                             <td class="align-middle">
                                                  <?php echo $d->responden; ?>
                                             </td>
                                             <td class="align-middle">
                                                  <a style="margin-left: 10px;text-decoration: none;"
                                                       href="<?php echo url(1) .'/daftar_soal/'. enkrip($d->id_paket); ?>"
                                                       data-mdb-toggle="tooltip" class="fas fa-eye text-success me-3"
                                                       title="Soal">
                                                  </a>

                                                  <a style="margin-left: 10px;text-decoration: none;"
                                                       href="<?php echo url(1) .'/edit_paket/'. enkrip($d->id_paket); ?>"
                                                       data-mdb-toggle="tooltip" title="Edit"><i
                                                            class="fas fa-edit text-warning me-3"></i></a>

                                                  <a style="margin-left: 10px;text-decoration: none;"
                                                       href="<?php echo url(1) .'/hapus_paket/'. enkrip($d->id_paket); ?>"
                                                       data-mdb-toggle="tooltip" title="Remove"
                                                       onclick="return confirm('Yakin hapus paket <?php echo $d->nama_paket; ?> v<?php echo $d->versi_apl_paket; ?>?')"><i
                                                            class="fas fa-trash-alt text-danger"></i></a>
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

     </div>
</div>