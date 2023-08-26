<head>
     <title>Link Kuesioner | Sistem e-Repo</title>
</head>
<div>
     <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
          aria-label="breadcrumb">
          <ol class="breadcrumb bg-primary">
               <li class="breadcrumb-item"><a href="<?php echo base_url('dasbor'); ?>">Home</a>
               </li>
               <li class="breadcrumb-item active" aria-current="page">Link Testing
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
                                   <a style="decoration: none;" href="<?php echo base_url('export/print_link'); ?>">
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
                                             href="<?php echo base_url('export/export_link_pdf'); ?>">PDF</a>
                                        <a class="dropdown-item"
                                             href="<?php echo base_url('export/export_link_excel'); ?>">Excel</a>
                                   </div>
                              </div>

                              <div class="card-body" data-mdb-perfect-scrollbar="true" style="overflow-x: auto;">
                                   <table id="myTable" class="table table-hover mb-0">
                                        <thead>
                                             <tr>
                                                  <th class="align-middle" scope="col" style="width: 10px;">No
                                                  </th>
                                                  <th class="align-middle" scope="col" style="width: 160px;">
                                                       Kode
                                                       Sistem</th>
                                                  <th class="align-middle" scope="col">Nama Kuesioner</th>
                                                  <th class="align-middle" scope="col">Sistem</th>
                                                  <th class="align-middle" scope="col">Versi Sistem</th>
                                                  <th class="align-middle" scope="col" style="width: 10px;">
                                                       Link
                                                  </th>
                                                  <!-- <th>Share Link</th> -->
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
                                                  </td>
                                                  <td class="align-middle">
                                                       <?php echo $d->aplikasi; ?>
                                                  </td>
                                                  <td class="align-middle">
                                                       <?php echo $d->versi_apl_paket; ?>
                                                  </td>
                                                  <td class="align-middle">
                                                       <a target="_blank" style="text-decoration: none;"
                                                            href="<?php echo base_url('testing/form_testing/') . enkrip($d->id_paket); ?>">Klik
                                                            Link
                                                       </a>
                                                  </td>
                                                  <!-- <td>
                                                       <?php echo form_open_multipart(uri(2) == "edit" ? url(1, "update") : url(1, "tambah_link")); ?>
                                                       
                                                       <input
                                                            value="<?php echo base_url('testing/form_testing/') . enkrip($d->id_paket); ?>"
                                                            name="<?php echo "link_kuesioner" . $d->id_soal; ?>"
                                                            hidden />
                                                       <button type="submit" class="btn btn-success"
                                                            style="height: 20px;"><i
                                                                 class="fa-solid fa-share-from-square text-white"></i></button>
                                                       <?php echo form_close(); ?>
                                                  </td> -->
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