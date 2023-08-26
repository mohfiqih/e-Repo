<head>
     <title>Data Users | Sistem e-Repo</title>
</head>

<!-- Berhasil Tambah -->
<?php if ($this->session->flashdata('notif_add')){ ?>
<div class="alert alert-success alert-dismissible fade show" data-dismiss="alert" aria-label="Close" role="alert">
     <span class="btn-label"></span><?php echo $this->session->flashdata('notif_add'); ?>
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
     </button>
</div>
<?php } ?>

<!-- Gagal Tambah -->
<?php if ($this->session->flashdata('notif_wrong')){ ?>
<div class="alert alert-danger alert-dismissible fade show" data-dismiss="alert" aria-label="Close" role="alert">
     <span class="btn-label"></span><?php echo $this->session->flashdata('notif_wrong'); ?>
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
     </button>
</div>
<?php } ?>

<!-- Success Hapus -->
<?php if ($this->session->flashdata('notif_delete')){ ?>
<div class="alert alert-success alert-dismissible fade show" data-dismiss="alert" aria-label="Close" role="alert">
     <span class="btn-label"></span><?php echo $this->session->flashdata('notif_delete'); ?>
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
     </button>
</div>
<?php } ?>

<!-- Wrong Hapus -->
<?php if ($this->session->flashdata('notif_wrong_delete')){ ?>
<div class="alert alert-danger alert-dismissible fade show" data-dismiss="alert" aria-label="Close" role="alert">
     <span class="btn-label"></span><?php echo $this->session->flashdata('notif_wrong_delete'); ?>
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
     </button>
</div>
<?php } ?>

<!-- Update Berhasil -->
<?php if ($this->session->flashdata('notif_update')){ ?>
<div class="alert alert-success alert-dismissible fade show" data-dismiss="alert" aria-label="Close" role="alert">
     <span class="btn-label"></span><?php echo $this->session->flashdata('notif_update'); ?>
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
     </button>
</div>
<?php } ?>

<!-- Update Gagal -->
<?php if ($this->session->flashdata('notif_wrong_update')){ ?>
<div class="alert alert-danger alert-dismissible fade show" data-dismiss="alert" aria-label="Close" role="alert">
     <span class="btn-label"></span><?php echo $this->session->flashdata('notif_wrong_update'); ?>
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
               <li class="breadcrumb-item active" aria-current="page">Data User
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
                                   <button style="height: 43px;margin-top: 5px;margin-left: 5px;" type="button"
                                        class=" btn btn-success waves-effect waves-light" data-toggle="modal"
                                        data-target="#addModal">
                                        <span class="btn-label"><i class="fa fa-plus"></i></span>
                                        <?php echo (uri(2) == 'edit') ? 'Edit Data' : 'Tambah'; ?> </button>
                                   <a style="decoration: none;" href="<?php echo base_url('export/print_user'); ?>">
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
                                             href="<?php echo base_url('export/export_user_pdf'); ?>">PDF</a>
                                        <a class="dropdown-item"
                                             href="<?php echo base_url('export/export_user_excel'); ?>">Excel</a>
                                   </div>
                              </div>

                              <!-- Tambah Data -->
                              <?php echo form_open_multipart(uri(2) == "edit" ? url(1, "update") : url(1, "tambah")); ?>
                              <div class="modal fade" id="addModal" tabindex="-1" role="dialog"
                                   aria-labelledby="exampleModalLabel" aria-hidden="true">
                                   <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                             <div class="modal-header">
                                                  <h5 class="modal-title" id="exampleModalLabel">Users</h5>
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
                                                  <input type="hidden" name="user_id"
                                                       value="<?php echo uri(2) == "edit" ? enkrip($edit->user_id) : ""; ?>">
                                                  <div class="modal-body">
                                                       <div class="row">
                                                            <div class="col-md-6">
                                                                 <div class="form-floating mb-3">
                                                                      <label>Username</label>
                                                                      <input type="text" class="form-control"
                                                                           name="email"
                                                                           value="<?php echo uri(2) == "edit" ? $edit->email : ""; ?>"
                                                                           placeholder="Email" required>

                                                                 </div>
                                                                 <div class="form-floating mb-3">
                                                                      <label>NIPY/NIDN/NIM</label>
                                                                      <input type="text" class="form-control"
                                                                           name="username_id"
                                                                           value="<?php echo uri(2) == "edit" ? $edit->username_id : ""; ?>"
                                                                           placeholder="Masukan id username"
                                                                           autocomplete="off" required>

                                                                 </div>
                                                                 <div class="form-floating mb-3">
                                                                      <label>Password</label>
                                                                      <input type="password" class="form-control"
                                                                           name="user_password"
                                                                           value="<?php echo uri(2) == "edit" ? $edit->user_password : ""; ?>"
                                                                           placeholder="Password" id="inputPassword"
                                                                           for="inputPassword" required>

                                                                 </div>
                                                                 <!-- <div class="d-flex mb-2 align-items-center">
                                                                      <label
                                                                           class="control control--checkbox mb-3 mb-sm-0">
                                                                           <input style="margin-left: 5px;"
                                                                                type="checkbox" class="form-check-input"
                                                                                id="showpw" onclick="myFunction()" />
                                                                           <div class="control__indicator"></div>
                                                                      </label>
                                                                 </div><br /> -->
                                                                 <div class="form-floating mb-3">
                                                                      <label>Nama Lengkap</label>
                                                                      <input type="text" class="form-control"
                                                                           name="user_namalengkap"
                                                                           value="<?php echo uri(2) == "edit" ? $edit->user_namalengkap : ""; ?>"
                                                                           placeholder="Nama Lengkap" autocomplete="off"
                                                                           required>
                                                                 </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                 <div class="form-floating mb-3">
                                                                      <label
                                                                           for="example-select-floating">Level</label><br />
                                                                      <select class="form-control" name="user_level"
                                                                           aria-label="Floating label select example"
                                                                           required>
                                                                           <option value="">Pilih Sebagai</option>
                                                                           <option value="Super Admin"
                                                                                <?php if (uri(2) == 'edit') echo $edit->user_level == "Super Admin" ? "selected" : ""; ?>>
                                                                                Super Admin</option>
                                                                           <option value="Pengevaluasi"
                                                                                <?php if (uri(2) == 'edit') echo $edit->user_level == "Pengevaluasi" ? "selected" : ""; ?>>
                                                                                Pengevaluasi
                                                                           </option>
                                                                           <option value="Dosen"
                                                                                <?php if (uri(2) == 'edit') echo $edit->user_level == "Dosen" ? "selected" : ""; ?>>
                                                                                Dosen
                                                                           </option>
                                                                           <option value="Mahasiswa"
                                                                                <?php if (uri(2) == 'edit') echo $edit->user_level == "Mahasiswa" ? "selected" : ""; ?>>
                                                                                Mahasiswa
                                                                           </option>
                                                                           <option value="Sisfo"
                                                                                <?php if (uri(2) == 'edit') echo $edit->user_level == "Sisfo" ? "selected" : ""; ?>>
                                                                                Sisfo
                                                                           </option>
                                                                           <option value="TIK"
                                                                                <?php if (uri(2) == 'edit') echo $edit->user_level == "TIK" ? "selected" : ""; ?>>
                                                                                TIK
                                                                           </option>

                                                                      </select>
                                                                 </div>
                                                                 <div class="form-floating mb-3">
                                                                      <label for="example-select-floating">Program
                                                                           Studi
                                                                           / Bidang</label><br />
                                                                      <select class="form-control" name="user_prodi"
                                                                           aria-label="Floating label select example"
                                                                           required>
                                                                           <option value="">Pilih Prodi / Bidang
                                                                           </option>
                                                                           <option value="TI"
                                                                                <?php if (uri(2) == 'edit') echo $edit->user_prodi == "TI" ? "selected" : ""; ?>>
                                                                                DIV Teknik Informatika</option>
                                                                           <option value="ASP"
                                                                                <?php if (uri(2) == 'edit') echo $edit->user_prodi == "ASP" ? "selected" : ""; ?>>
                                                                                DIV Akuntansi Sektor Publik
                                                                           </option>
                                                                           <option value="TKOM"
                                                                                <?php if (uri(2) == 'edit') echo $edit->user_prodi == "TKOM" ? "selected" : ""; ?>>
                                                                                DIII Teknik Komputer
                                                                           </option>
                                                                           <option value="AK"
                                                                                <?php if (uri(2) == 'edit') echo $edit->user_prodi == "AK" ? "selected" : ""; ?>>
                                                                                DIII Akuntansi
                                                                           </option>
                                                                           <option value="FARM"
                                                                                <?php if (uri(2) == 'edit') echo $edit->user_prodi == "FARM" ? "selected" : ""; ?>>
                                                                                DIII Farmasi
                                                                           </option>

                                                                           <option value="PER"
                                                                                <?php if (uri(2) == 'edit') echo $edit->user_prodi == "PER" ? "selected" : ""; ?>>
                                                                                DIII Perhotelan
                                                                           </option>
                                                                           <option value="BID"
                                                                                <?php if (uri(2) == 'edit') echo $edit->user_prodi == "BID" ? "selected" : ""; ?>>
                                                                                DIII Kebidanan
                                                                           </option>
                                                                           <option value="MSN"
                                                                                <?php if (uri(2) == 'edit') echo $edit->user_prodi == "MSN" ? "selected" : ""; ?>>
                                                                                DIII Teknik Mesin
                                                                           </option>
                                                                           <option value="DKV"
                                                                                <?php if (uri(2) == 'edit') echo $edit->user_prodi == "DKV" ? "selected" : ""; ?>>
                                                                                DIII Desain Komunikasi Visual
                                                                           </option>
                                                                           <option value="PRWT"
                                                                                <?php if (uri(2) == 'edit') echo $edit->user_prodi == "PRWT" ? "selected" : ""; ?>>
                                                                                DIII Keperawatan
                                                                           </option>
                                                                           <option value="ELKTR"
                                                                                <?php if (uri(2) == 'edit') echo $edit->user_prodi == "ELKTR" ? "selected" : ""; ?>>
                                                                                DIII Teknik Elektronika
                                                                           </option>


                                                                           <!-- Bidang -->
                                                                           <option value="TIK"
                                                                                <?php if (uri(2) == 'edit') echo $edit->user_prodi == "TIK" ? "selected" : ""; ?>>
                                                                                Bidang TIK
                                                                           </option>
                                                                           <option value="SPMI"
                                                                                <?php if (uri(2) == 'edit') echo $edit->user_prodi == "SPMI" ? "selected" : ""; ?>>
                                                                                Bidang SPMI
                                                                           </option>

                                                                           <!-- Admin -->
                                                                           <option value="ADM_TI"
                                                                                <?php if (uri(2) == 'edit') echo $edit->user_prodi == "ADM_TI" ? "selected" : ""; ?>>
                                                                                Admin Teknik Informatika
                                                                           </option>
                                                                           <option value="ADM_TKOM"
                                                                                <?php if (uri(2) == 'edit') echo $edit->user_prodi == "ADM_TKOM" ? "selected" : ""; ?>>
                                                                                Admin Teknik Komputer
                                                                           </option>
                                                                           <option value="ADM_AK"
                                                                                <?php if (uri(2) == 'edit') echo $edit->user_prodi == "ADM_AK" ? "selected" : ""; ?>>
                                                                                Admin Akuntansi
                                                                           </option>

                                                                      </select>
                                                                 </div>
                                                                 <div class="form-floating mb-3">
                                                                      <label for="example-select-floating">Pilih
                                                                           Gender</label><br />
                                                                      <select class="form-control" name="user_gender"
                                                                           aria-label="Floating label select example"
                                                                           required>
                                                                           <option value="">Pilih Gender</option>
                                                                           <option value="L"
                                                                                <?php if (uri(2) == 'edit') echo $edit->user_gender == "L" ? "selected" : ""; ?>>
                                                                                Laki-Laki</option>
                                                                           <option value="P"
                                                                                <?php if (uri(2) == 'edit') echo $edit->user_gender == "P" ? "selected" : ""; ?>>
                                                                                Perempuan
                                                                           </option>
                                                                      </select>
                                                                 </div>
                                                                 <div class="form-floating mb-3">
                                                                      <label for="example-select-floating">Pilih
                                                                           Status</label><br />
                                                                      <select class="form-control" name="user_status"
                                                                           aria-label="Floating label select example"
                                                                           required>
                                                                           <option value="">Pilih Status</option>
                                                                           <option value="Aktif"
                                                                                <?php if (uri(2) == 'edit') echo $edit->user_status == "Aktif" ? "selected" : ""; ?>>
                                                                                Aktif</option>
                                                                           <option value="Nonaktif"
                                                                                <?php if (uri(2) == 'edit') echo $edit->user_status == "Nonaktif" ? "selected" : ""; ?>>
                                                                                Nonaktif
                                                                           </option>
                                                                      </select>
                                                                 </div>
                                                            </div>

                                                       </div><br />
                                                       <div style="float: right;">
                                                            <button type="submit" class="btn btn-success">
                                                                 <?php echo (uri(2) == 'edit') ? 'Update' : 'Tambah'; ?></button>

                                                            <button type="button" class="btn btn-danger"
                                                                 data-dismiss="modal" aria-label="Close">Batal</button>
                                                       </div>
                                                  </div>
                                             </form>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <?php echo form_close(); ?>

                    <!-- Tabel Data -->
                    <div class="card-body" style="overflow-x: auto;">
                         <table id="myTable" class="table table-striped table-hover table-vcenter"
                              style="border-top:2px solid #eee;">
                              <thead>
                                   <tr>
                                        <th>NIM/NIPY</th>
                                        <th>Email</th>
                                        <th>Nama Lengkap</th>
                                        <th>Sebagai</th>
                                        <th>Bidang</th>
                                        <!-- <th>Gender</th> -->
                                        <th>Status</th>
                                        <th>Action</th>
                                   </tr>
                              </thead>
                              <tbody>
                                   <?php
                                        if ($data_user){
                                        foreach ($data_user as $d){
                                        ?>
                                   <tr style="vertical-align:middle">
                                        <td><?php echo $d->username_id; ?></td>
                                        <td><?php echo $d->email; ?></td>
                                        <td><?php echo $d->user_namalengkap; ?></td>
                                        <td><?php echo level_user($d->user_level); ?></td>
                                        <td><?php echo $d->user_prodi; ?></td>
                                        <td>
                                             <?php 
                                             $status	   = $d->user_status;

                                             if ($status=="Aktif") { ?>
                                             <span class="badge bg-success text-white">
                                                  Aktif
                                             </span>
                                             <?php } else if ($status=="Nonaktif") { ?>
                                             <span class="badge bg-danger text-white">
                                                  Nonaktif
                                             </span>
                                             <?php } ?>
                                        </td>
                                        <td>
                                             <div class="btn-group">
                                                  <a style="margin-right: 10px;text-decoration: none;"
                                                       href="<?php echo url(1) .'/edit/'. enkrip($d->user_id); ?>"
                                                       data-mdb-toggle="tooltip" class="fas fa-edit text-warning me-3"
                                                       title="Edit">
                                                  </a>

                                                  <a style="margin-right: 10px;text-decoration: none;"
                                                       href="<?php echo url(1) .'/hapus/'. enkrip($d->user_id); ?>"
                                                       data-mdb-toggle="tooltip" class="fas fa-trash text-danger me-3"
                                                       title="Hapus" onclick="return confirm('Yakin hapus dta user?')">
                                                  </a>

                                                  <!-- <?php if ($this->user_email != $d->user_email){ ?>
                                                  <a style="margin-right: 10px;text-decoration: none;"
                                                       href="<?php echo url(1) .'/hapus/'. enkrip($d->user_id); ?>"
                                                       onclick="return confirm('Yakin hapus user')"
                                                       data-mdb-toggle="tooltip" class="fas fa-trash text-danger me-3"
                                                       title="Hapus">
                                                  </a>
                                                  <?php } ?> -->
                                             </div>
                                        </td>

                                   </tr>
                                   <?php }} else { ?>
                                   <tr>
                                        <td class="text-center" colspan="4">No Data</td>
                                   </tr>
                                   <?php } ?>
                              </tbody>
                         </table>
                    </div>
               </div>
          </div>
     </div>
</div>
<script>
$(window).load(function() {
     $("#preloader").delay(3000).fadeOut("slow");
});
</script>
<script type="text/javascript">
function myFunction() {
     var x = document.getElementById("inputPassword");
     if (x.type === "password") {
          x.type = "text";
     } else {
          x.type = "password";
     }
}
</script>