<head>
     <title>Manajerial | Sistem e-Repo</title>
</head>

<!-- Berhasil Tambah -->
<?php if ($this->session->flashdata('notifikasi_tambah')){ ?>
<div class="alert alert-success alert-dismissible fade show" data-dismiss="alert" aria-label="Close" role="alert">
     <span class="btn-label"></span><?php echo $this->session->flashdata('notifikasi_tambah'); ?>
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
     </button>
</div>
<?php } ?>
<!-- Gagal Tambah -->
<?php if ($this->session->flashdata('notifikasi_gagal_tambah')){ ?>
<div class="alert alert-danger alert-dismissible fade show" data-dismiss="alert" aria-label="Close" role="alert">
     <span class="btn-label"></span><?php echo $this->session->flashdata('notifikasi_gagal_tambah'); ?>
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
     </button>
</div>
<?php } ?>

<!-- Berhasil Hapus -->
<?php if ($this->session->flashdata('notifikasi_hapus')){ ?>
<div class="alert alert-success alert-dismissible fade show" data-dismiss="alert" aria-label="Close" role="alert">
     <span class="btn-label"></span><?php echo $this->session->flashdata('notifikasi_hapus'); ?>
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
     </button>
</div>
<?php } ?>

<!-- Berhasil Update -->
<?php if ($this->session->flashdata('notifikasi_update')){ ?>
<div class="alert alert-success alert-dismissible fade show" data-dismiss="alert" aria-label="Close" role="alert">
     <span class="btn-label"></span><?php echo $this->session->flashdata('notifikasi_update'); ?>
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
     </button>
</div>
<?php } ?>
<!-- Gagal Update -->
<?php if ($this->session->flashdata('notifikasi_gagal_update')){ ?>
<div class="alert alert-danger alert-dismissible fade show" data-dismiss="alert" aria-label="Close" role="alert">
     <span class="btn-label"></span><?php echo $this->session->flashdata('notifikasi_gagal_update'); ?>
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
     </button>
</div>
<?php } ?>


<div class="alert alert-danger alert-dismissible fade show" role="alert">
     <strong>Informasi!</strong> Kapasitas upload data maksimal 10 MB hanya untuk data berukuran teks, untuk data besar
     sertakan link pada tambah data!<br />
     <!-- Untuk alternatif lain pilih
     <a href="https://drive.google.com/drive/folders/1udx98AEdXhqiCj9yV-KQu7GAlRNm2tHV?usp=sharing" target="_blank">Klik
          Drive</a> -->
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
     </button>
</div>
<div>
     <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
          aria-label="breadcrumb">
          <ol class="breadcrumb bg-primary">
               <li class="breadcrumb-item"><a href="<?php echo base_url('dasbor'); ?>">Home</a>
               </li>
               <li class="breadcrumb-item active" aria-current="page">Manajerial
               </li>
          </ol>
     </nav>
</div>

<div class="card">
     <div class="content">
          <div class="container-fluid">
               <div class="card">
                    <div class="card-body">
                         <div class="row">
                              <div class="col-md-6">
                                   <button style="height: 43px;margin-left: 5px;margin-top: 5px;" type="button"
                                        class="btn btn-success waves-effect waves-light" data-toggle="modal"
                                        data-target="#addModal"><span class="btn-label"><i
                                                  class="fa fa-plus"></i></span>
                                        <?php echo (uri(2) == 'edit') ? 'Edit Data' : 'Tambah'; ?></button>
                                   <a style="decoration: none;"
                                        href="<?php echo base_url('export/print_manajerial'); ?>">
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
                                             href="<?php echo base_url('export/export_manajerial_pdf'); ?>">PDF</a>
                                        <a class="dropdown-item"
                                             href="<?php echo base_url('export/export_manajerial_excel'); ?>">Excel</a>
                                   </div>
                              </div>

                              <!-- Tambah Data -->
                              <?php echo form_open_multipart(uri(2) == "edit" ? url(1, "update") : url(1, "tambah")); ?>
                              <div class="modal fade" id="addModal" tabindex="-1" role="dialog"
                                   aria-labelledby="exampleModalLabel" aria-hidden="true">
                                   <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                             <div class="modal-header">
                                                  <h5 class="modal-title" id="exampleModalLabel">
                                                       <?php echo (uri(2) == 'edit') ? 'Edit Data' : 'Tambah Data'; ?>
                                                  </h5>
                                                  <button type="button" class="close" data-dismiss="modal"
                                                       aria-label="Close">
                                                       <span aria-hidden="true">&times;</span>
                                                  </button>
                                             </div>
                                             <form action="<?php echo uri(2) == "edit" ? url(1, "update") : url(1, "tambah"); ?>"
                                                  method="POST">
                                                  <input type="hidden"
                                                       name="<?php echo $this->security->get_csrf_token_name(); ?>"
                                                       value="<?php echo $this->security->get_csrf_hash(); ?>">
                                                  <input type="hidden" name="id_m"
                                                       value="<?php echo uri(2) == "edit" ? enkrip($edit->id_m) : ""; ?>">
                                                  <div class="modal-body">
                                                       <div class="row">
                                                            <div class="col-md-6">
                                                                 <div class="form-floating mb-2">
                                                                      <label for="example-select-floating">Nama
                                                                           Sistem</label>
                                                                      <select class="form-control" name="nama_apl"
                                                                           aria-label="Floating label select example"
                                                                           required>
                                                                           <option value="">Pilih Sistem
                                                                           </option>
                                                                           <option value="Oase"
                                                                                <?php if (uri(2) == 'edit') echo $edit->nama_apl == "Oase" ? "selected" : ""; ?>
                                                                                <?php if (uri(1) == "tambah") ?>>
                                                                                Oase</option>
                                                                           <option value="Syncnau"
                                                                                <?php if (uri(2) == 'edit') echo $edit->nama_apl == "Syncnau" ? "selected" : ""; ?>
                                                                                <?php if (uri(1) == "tambah"); ?>>
                                                                                Syncnau</option>
                                                                      </select>
                                                                 </div>
                                                                 <div class="form-floating mb-2">
                                                                      <label>Versi Sistem</label>
                                                                      <input type="text" name="versi_apl"
                                                                           placeholder="Versi Sistem"
                                                                           class="form-control flatpickr-input active"
                                                                           autocomplete="off"
                                                                           value="<?php echo uri(2) == "edit" ? $edit->versi_apl : ""; ?>"
                                                                           required>
                                                                 </div>
                                                                 <div class="form-floating mb-2">
                                                                      <label for="example-select-floating">Penyedia
                                                                           Sistem</label>
                                                                      <select class="form-control" name="penyedia_apl"
                                                                           aria-label="Floating label select example"
                                                                           required>
                                                                           <option value="">Pilih Penyedia
                                                                           </option>
                                                                           <option value="TIK"
                                                                                <?php if (uri(2) == 'edit') echo $edit->penyedia_apl == "TIK" ? "selected" : ""; ?>
                                                                                <?php if (uri(1) == "tambah") ?>>
                                                                                TIK</option>
                                                                           <option value="Vendor"
                                                                                <?php if (uri(2) == 'edit') echo $edit->penyedia_apl == "Vendor" ? "selected" : ""; ?>
                                                                                <?php if (uri(1) == "tambah"); ?>>
                                                                                Vendor</option>
                                                                      </select>
                                                                 </div>

                                                            </div>
                                                            <div class="col-md-6">
                                                                 <div class="form-floating mb-3">
                                                                      <label>Tanggal Publish</label>
                                                                      <input
                                                                           value="<?php echo uri(2) == "edit" ? $edit->tgl_publish : ""; ?>"
                                                                           type="datetime-local" class="form-control"
                                                                           name="tgl_publish"
                                                                           placeholder="Tanggal Publish" required>
                                                                 </div>
                                                                 <div class="form-floating mb-2">
                                                                      <label>Link Berkas</label>
                                                                      <input
                                                                           value="<?php echo uri(2) == "edit" ? $edit->link_berkas : ""; ?>"
                                                                           type="text"
                                                                           class="form-control flatpickr-input active"
                                                                           name="link_berkas" placeholder="Drive Berkas"
                                                                           autocomplete="off">
                                                                 </div>
                                                                 <!-- <label for="example-select-floating">Berkas Kecil</label>
                                                            <input class="form-control flatpickr-input active"
                                                                 value="<?php echo uri(2) == "edit" ? $edit->judul : ""; ?>"
                                                                 type="text" name="file" placeholder="Edit File"
                                                                 readonly><br />
                                                            <div class="form-control" style="height: 150px;">

                                                                 <input type="file" name="file">
                                                                 <div class="dz-message needsclick">
                                                                      <i
                                                                           class="h1 text-muted dripicons-cloud-upload"></i><br />
                                                                      <h5>Max. kapasitas upload
                                                                           10 MB.</h5>
                                                                      <span class="text-muted font-13">(Type
                                                                           berkas jpg, png,
                                                                           pdf,
                                                                           doc,
                                                                           docx,
                                                                           xlsx)
                                                                 </div>
                                                            </div> -->
                                                            </div>
                                                       </div>
                                                  </div>
                                             </form>
                                             <div class="modal-footer">
                                                  <button type=" submit" class="btn btn-success">
                                                       <?php echo (uri(2) == 'edit') ? 'Update' : 'Tambah'; ?></button>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                              <?php echo form_close(); ?>

                              <!-- Tabel Data -->
                              <div class="card-body" style="overflow-x: auto;">
                                   <table id="myTable" class="table table-hover mb-0">
                                        <thead>
                                             <tr>
                                                  <th class="align-middle" scope="col" style="width: 10px;">No
                                                  </th>
                                                  <th class="align-middle" scope="col" style="width: 160px;">
                                                       Kode
                                                       Aplikasi</th>
                                                  <th class="align-middle" scope="col">Nama Sistem</th>
                                                  <th class="align-middle" scope="col">Versi Sistem</th>
                                                  <th class="align-middle" scope="col" style="width: 10px;">
                                                       Action
                                                  </th>
                                             </tr>
                                        </thead>
                                        <tbody>
                                             <?php
                                                       $no=0+1;
                                                       if ($data_manajemen){
                                                       foreach ($data_manajemen as $d){ 
                                             ?>
                                             <tr class="fw-normal">
                                                  <th class="align-middle">
                                                       <?php echo $no++; ?>
                                                  </th>
                                                  <td class="align-middle">
                                                       <?php $inisial = substr($d->nama_apl,0,3);
                                                        echo $inisial;?><?php echo $d->versi_apl; ?>
                                                  </td>
                                                  <td class="align-middle">
                                                       <?php echo $d->nama_apl; ?>
                                                  </td>
                                                  <td class="align-middle">
                                                       v<?php echo $d->versi_apl; ?>
                                                  </td>
                                                  <td class="align-middle">
                                                       <a style="margin-right: 10px;text-decoration: none;"
                                                            href="<?php echo url(1) .'/lihat/'. enkrip($d->id_m); ?>"
                                                            data-mdb-toggle="tooltip"
                                                            class="fas fa-eye text-success me-3" title="Detail">
                                                       </a>
                                                       <a href="<?php echo url(1) .'/edit/'. enkrip($d->id_m); ?>"
                                                            style="margin-right: 10px;text-decoration: none;"
                                                            data-mdb-toggle="tooltip"
                                                            class="fas fa-pen text-warning me-3" title="Edit">
                                                       </a>
                                                       <a href="<?php echo url(1) .'/hapus/'. enkrip($d->id_m); ?>"
                                                            data-mdb-toggle="tooltip" title="Remove"
                                                            onclick="return confirm('Yakin hapus data <?php echo $d->nama_apl; ?> v<?php echo $d->versi_apl; ?>?')"><i
                                                                 class="fas fa-trash-alt text-danger"
                                                                 onclick="hapus()"></i></a>
                                                  </td>

                                                  <?php }} else { ?>
                                                  <td class="text-center" colspan="6">Tidak ada data</td>
                                                  <?php } ?>
                                             </tr>
                                        </tbody>
                                   </table>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>