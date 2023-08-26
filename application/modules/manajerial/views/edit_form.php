<head>
     <title>Manajerial | Sistem e-Repo</title>
</head>
<div>
     <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
          aria-label="breadcrumb">
          <ol class="breadcrumb bg-primary">
               <li class="breadcrumb-item">
                    <a href="<?php echo base_url('dasbor'); ?>">Home
                    </a>
               </li>
               <li class="breadcrumb-item" aria-current="page">
                    <a href="<?php echo base_url('manajerial'); ?>">Manajerial
                    </a>
               </li>
               <li class="breadcrumb-item active" aria-current="page">Edit
               </li>
          </ol>
     </nav>
</div>
<div class="content">
     <!-- Tambah -->
     <div class="container-fluid">
          <?php
                    if ($data_edit){
                    foreach ($data_edit as $d){ 
		?>
          <form action="<?php echo base_url('manajerial/update_manajerial'); ?>" method="POST"
               enctype="multipart/form-data">
               <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>"
                    value="<?php echo $this->security->get_csrf_hash(); ?>">
               <input type="hidden" name="id_m" value="<?php echo uri(2) == "edit" ? enkrip($d->id_m) : ""; ?>">

               <div class="row">
                    <div class="col-md-6">
                         <div class="card">
                              <div class="card-body">
                                   <div class="form-floating mb-3">
                                        <label>Nama Sistem</label>
                                        <input value="<?php echo uri(2) == "edit" ? ($d->nama_apl) : ""; ?>" type="text"
                                             class="form-control" name="nama_apl" placeholder="Nama Sistem"
                                             autocomplete="off" readonly>
                                   </div>
                                   <div class="form-floating mb-3">
                                        <label>Versi Sistem</label>
                                        <input value="<?php echo uri(2) == "edit" ? ($d->versi_apl) : ""; ?>"
                                             type="text" class="form-control" name="versi_apl"
                                             placeholder="Versi Sistem" autocomplete="off" required>

                                   </div>
                                   <div class="form-floating mb-3">
                                        <label>Tanggal Publish</label>
                                        <input value="<?php echo uri(2) == "edit" ? ($d->tgl_publish) : ""; ?>"
                                             type="text" id="basic-datepicker"
                                             class="form-control flatpickr-input active" name="tgl_publish"
                                             placeholder="Tanggal Publish" autocomplete="off">

                                   </div>
                                   <div class="form-floating mb-3">
                                        <label for="example-select-floating">Penyedia</label>
                                        <select class="form-control" name="penyedia_apl"
                                             aria-label="Floating label select example" required>
                                             <option value="">Penyedia</option>
                                             <option value="TIK"
                                                  <?php if (uri(2) == "edit") echo $d->penyedia_apl == 'TIK' ? "selected" : ""; ?>>
                                                  TIK</option>
                                             <option value="Vendor"
                                                  <?php if (uri(2) == "edit") echo $d->penyedia_apl == 'Vendor' ? "selected" : ""; ?>>
                                                  Vendor</option>
                                        </select>
                                   </div>
                                   <div class="form-floating mb-3">
                                        <label>Link Berkas</label>
                                        <input value="<?php echo uri(2) == "edit" ? ($d->link_berkas) : ""; ?>"
                                             type="text" class="form-control flatpickr-input active" name="link_berkas"
                                             placeholder="Tanggal Publish" autocomplete="off">

                                   </div>
                              </div>
                         </div>
                    </div>
                    <div class="col-md-6">
                         <div class="card">
                              <div class="card-body">
                                   <label>Nama File</label>
                                   <input type="text" class="form-control" value="<?php echo ($d->judul); ?>"><br>
                                   <label>Ubah File</label>
                                   <div class="form-control" style="height: 200px;">
                                        <input type="file" class="form-control" name="file_foto"
                                             value="<?php echo ($d->judul); ?>">
                                        <center>
                                             <div class="dz-message needsclick">
                                                  <i class="h1 text-muted dripicons-cloud-upload"></i><br />
                                                  <h5>Max. kapasitas upload
                                                       10 MB.</h5>
                                                  <span class="text-muted font-13">(Type
                                                       berkas jpg, png,
                                                       pdf,
                                                       doc,
                                                       docx,
                                                       xlsx)
                                             </div>
                                        </center>
                                   </div><br />
                                   <div class="text-center">
                                        <button type="submit" class="btn btn-success third">Update</button>
                                        <a href="<?php echo base_url("manajerial"); ?>">
                                             <button type="button" class="btn btn-danger">Batal</button>
                                        </a>
                                   </div>
                              </div>

                         </div>
                    </div>
               </div>
          </form>
          <?php }} else { ?>
          <td class="text-center" colspan="6">Tidak ada data</td>
          <?php } ?>
     </div>
</div>