<head>
     <title>Paket Kuesioner | Sistem e-Repo</title>
</head>
<!-- Berhasil Tambah -->
<?php if ($this->session->flashdata('notif_share_success')){ ?>
<div class="alert alert-success alert-dismissible fade show" data-dismiss="alert" aria-label="Close" role="alert">
     <span class="btn-label"></span><?php echo $this->session->flashdata('notif_share_success'); ?>
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
     </button>
</div>
<?php } ?>
<!-- Gagal Tambah -->
<?php if ($this->session->flashdata('notif_share_gagal')){ ?>
<div class="alert alert-danger alert-dismissible fade show" data-dismiss="alert" aria-label="Close" role="alert">
     <span class="btn-label"></span><?php echo $this->session->flashdata('notif_share_gagal'); ?>
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
     </button>
</div>
<?php } ?>

<!-- Berhasil Hapus -->
<?php if ($this->session->flashdata('hapus_share_success')){ ?>
<div class="alert alert-success alert-dismissible fade show" data-dismiss="alert" aria-label="Close" role="alert">
     <span class="btn-label"></span><?php echo $this->session->flashdata('hapus_share_success'); ?>
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
     </button>
</div>
<?php } ?>
<!-- Gagal Tambah -->
<?php if ($this->session->flashdata('hapus_share_gagal')){ ?>
<div class="alert alert-danger alert-dismissible fade show" data-dismiss="alert" aria-label="Close" role="alert">
     <span class="btn-label"></span><?php echo $this->session->flashdata('hapus_share_gagal'); ?>
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
               <li class="breadcrumb-item active" aria-current="page">Share Link
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
                              <button style="height: 43px;margin-left: 5px;margin-top: 5px;" type="button"
                                   class="btn btn-success" data-toggle="modal" data-target="#addModal"><span
                                        class="btn-label"><i class="fa fa-plus"></i></span>
                                   Shared</button>
                         </div> -->

                         <!-- Add Data -->
                         <?php echo form_open_multipart(uri(2) == "edit" ? url(1, "update") : url(1, "tambah_link")); ?>
                         <div class="modal fade" id="addModal" tabindex="-1" role="dialog"
                              aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                   <div class="modal-content">
                                        <div class="modal-header">
                                             <h5 class="modal-title" id="exampleModalLabel">Shared Link</h5>
                                             <button type="button" class="close" data-dismiss="modal"
                                                  aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                             </button>
                                        </div>
                                        <div class="modal-body">
                                             <div class="row">
                                                  <div class="col-md-12">
                                                       <div class="form-floating mb-3">
                                                            <label>Link Kueisoner</label>
                                                            <input type="text" class="form-control"
                                                                 name="link_kuesioner"
                                                                 placeholder="Ketikan Link Kuesioner" autocomplete="off"
                                                                 required>
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
                                             <th class="align-middle" scope="col">Kuesioner
                                             </th>
                                             <th class="align-middle" scope="col">Link Kueisoner
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
                                             if ($data_shared){
                                             foreach ($data_shared as $d){ 
                                        ?>
                                        <tr class="fw-normal">
                                             <th class="align-middle">
                                                  <?php echo $no++; ?>
                                             </th>
                                             <td class="align-middle">
                                                  <?php echo $d->nama_kuesioner; ?>
                                             </td>
                                             <td class="align-middle">
                                                  <?php echo $d->link_kuesioner; ?>
                                             </td>
                                             <td class="align-middle">
                                                  <?php echo $d->responden; ?>
                                             </td>
                                             <td class="align-middle">
                                                  <a style="margin-left: 10px;text-decoration: none;"
                                                       href="<?php echo url(1) .'/hapus_link/'. enkrip($d->id); ?>"
                                                       data-mdb-toggle="tooltip" title="Remove"
                                                       onclick="return confirm('Yakin hapus link?')"><i
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