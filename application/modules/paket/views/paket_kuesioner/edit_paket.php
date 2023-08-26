<head>
     <title>Paket Kuesioner | Sistem e-Repo</title>
</head>
<div>
     <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
          aria-label="breadcrumb">
          <ol class="breadcrumb bg-primary">
               <li class="breadcrumb-item"><a href="<?php echo base_url('dasbor'); ?>">Home</a>
               </li>
               <li class="breadcrumb-item"><a href="<?php echo base_url('paket'); ?>">Paket
                         Kuesioner</a>
               </li>
               <li class="breadcrumb-item active" aria-current="page">Edit
               </li>
          </ol>
     </nav>
</div>
<div class="card">
     <!-- Tambah -->
     <div class="container-fluid">
          <?php
				if ($edit_paket){
				foreach ($edit_paket as $d){ 
                    $responden = explode(',', $d->responden);        
		?>
          <form action="<?php echo uri(2) == "edit_paket" ? url(1, "update_paket") : url(1, "tambah"); ?>"
               method="POST">
               <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>"
                    value="<?php echo $this->security->get_csrf_hash(); ?>">
               <input type="hidden" name="id_paket"
                    value="<?php echo uri(2) == "edit_paket" ? enkrip($d->id_paket) : ""; ?>">
               <div class="row">
                    <div class="col-md-6">
                         <div class="card">
                              <div class="card-body">
                                   <div class="">
                                        <div class="form-floating mb-3">
                                             <label>Nama Paket</label>
                                             <input type="text"
                                                  value="<?php echo uri(2) == "edit_paket" ? ($d->nama_paket) : ""; ?>"
                                                  class="form-control" name="nama_paket"
                                                  placeholder="Nama Paket Kuesioner" autocomplete="off" required>

                                        </div>
                                        <div class="form-floating mb-3">
                                             <label>Nama Sistem</label>
                                             <select type="text" class="form-control" name="aplikasi"
                                                  placeholder="Nama Sistem" autocomplete="off" required>>
                                                  <option value="">Pilih Sistem</option>
                                                  <option value="Oase"
                                                       <?php if (uri(2) == "edit_paket") echo $d->aplikasi == 'Oase' ? "selected" : ""; ?>>
                                                       Oase</option>
                                                  <option value="Syncnau"
                                                       <?php if (uri(2) == "edit_paket") echo $d->aplikasi == 'Syncnau' ? "selected" : ""; ?>>
                                                       Syncnau</option>

                                             </select>

                                        </div>
                                        <div class="form-floating mb-3">
                                             <label>Versi Sistem</label>
                                             <input type="text"
                                                  value="<?php echo uri(2) == "edit_paket" ? ($d->versi_apl_paket) : ""; ?>"
                                                  class="form-control" name="versi_apl_paket" placeholder="Versi Sistem"
                                                  autocomplete="off" required>

                                        </div>
                                        <div class="form-floating mb-3">
                                             <label>Jumlah Pertanyaan</label>
                                             <input type="text"
                                                  value="<?php echo uri(2) == "edit_paket" ? ($d->jumlah_soal) : ""; ?>"
                                                  class="form-control" name="jumlah_soal"
                                                  placeholder="Jumlah Pertanyaan" autocomplete="off" required>

                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <div class="col-md-6">
                         <div class="card">
                              <div class="card-body">
                                   <div class="form-floating mb-3">
                                        <label>Tanggal Kuesioner</label>
                                        <input value="<?php echo uri(2) == "edit_paket" ? ($d->tgl_kuesioner) : ""; ?>"
                                             type="datetime-local" class="form-control flatpickr-input active"
                                             name="tgl_kuesioner" placeholder="Tanggal" autocomplete="off" required>

                                   </div>
                                   <div class="card" style="border: 1px solid #CED4DA;">
                                        <div class="card-body">
                                             <label>Pilih Responden :</label><br /><br />
                                             <div class="col-md-6">
                                                  <input <?= (in_array("Dosen", $responden)) ? "checked" : ""; ?>
                                                       class="checkbox" type="checkbox" name="responden[]" value="Dosen"
                                                       id="flexCheckDefault">
                                                  <label class="form-check-label" for="flexCheckDefault">
                                                       Dosen
                                                  </label>
                                             </div>
                                             <div class="col-md-6">
                                                  <input <?= (in_array("Mahasiswa", $responden)) ? "checked" : ""; ?>
                                                       class="checkbox" type="checkbox" name="responden[]"
                                                       value="Mahasiswa" id="flexCheckDefault">
                                                  <label class="form-check-label" for="flexCheckDefault">
                                                       Mahasiswa
                                                  </label>
                                             </div>
                                             <div class="col-md-6">
                                                  <input <?= (in_array("Tendik", $responden)) ? "checked" : ""; ?>
                                                       class="checkbox" type="checkbox" name="responden[]"
                                                       value="Tendik" id="flexCheckDefault">
                                                  <label class="form-check-label" for="flexCheckDefault">
                                                       Tendik
                                                  </label>
                                             </div>
                                             <!--<div class="col-md-6">-->
                                             <!--     <input <?= (in_array("Maba", $responden)) ? "checked" : ""; ?>-->
                                             <!--          class="checkbox" type="checkbox" name="responden[]"-->
                                             <!--          value="Maba" id="flexCheckDefault">-->
                                             <!--     <label class="form-check-label" for="flexCheckDefault">-->
                                             <!--          Maba-->
                                             <!--     </label>-->
                                             <!--</div>-->
                                        </div>
                                   </div>
                                   <br />
                                   <div class="text-center">
                                        <button type="submit" class="btn btn-success third">Update</button>
                                        <a href="<?php echo base_url("paket"); ?>">
                                             <button type="button" class="btn btn-danger">Batal</button>
                                        </a>
                                   </div>
                              </div>
                         </div>
                         <?php echo form_close(); ?>
                    </div>
               </div>
               <?php }} else { ?>
               <td class="text-center" colspan="6">Tidak ada data</td>
               <?php } ?>
     </div>
</div>
<!-- End Tambah -->