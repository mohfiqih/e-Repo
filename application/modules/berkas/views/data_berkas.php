<head>
     <title>Data Berkas | Sistem e-Repo</title>
</head>
<div>
     <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
          aria-label="breadcrumb">
          <ol class="breadcrumb bg-primary">
               <li class="breadcrumb-item"><a href="<?php echo base_url('dasbor'); ?>">Home</a>
               </li>
               <li class="breadcrumb-item active" aria-current="page">Bank Berkas
               </li>
          </ol>
     </nav>
</div>
<div class="card">
     <div class="container-fluid">

          <div class="card">
               <div class="card-body">
                    <div class="row">
                         <div class="col-md-6">
                              <a style="decoration: none;" href="<?php echo base_url('export/print_berkas'); ?>">
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
                                        href="<?php echo base_url('export/export_berkas_pdf'); ?>">PDF</a>
                                   <a class="dropdown-item"
                                        href="<?php echo base_url('export/export_berkas_excel'); ?>">Excel</a>
                              </div>
                         </div>

                         <div class="card-body" data-mdb-perfect-scrollbar="true"
                              style="position: relative; overflow-x: auto;">
                              <table id="myTable" class="table table-hover mb-0">
                                   <thead>
                                        <tr>
                                             <th class="align-middle" scope="col" style="width: 10px;">No
                                             </th>
                                             <th class="align-middle" scope="col">Nama Sistem</th>
                                             <th class="align-middle" scope="col">Link Berkas</th>
                                             <th class="align-middle" scope="col" style="width: 10px;">
                                                  Action</th>
                                        </tr>
                                   </thead>
                                   <tbody>
                                        <?php
                                             $no=0+1;
									if ($data_berkas){
									foreach ($data_berkas as $d){ 
								?>
                                        <tr class="fw-normal">
                                             <th class="align-middle">
                                                  <?php echo $no++; ?>
                                             </th>
                                             <td class="align-middle">
                                                  <?php echo $d->nama_apl; ?>
                                             </td>
                                             <td class="align-middle">
                                                  <a target="_blank" href="<?php echo $d->link_berkas; ?>">Lihat
                                                       Berkas</a>
                                             </td>
                                             <td class="align-middle">
                                                  <a style="text-decoration: none;"
                                                       href="<?php echo url(1) .'/lihat/'. enkrip($d->id_m); ?>"
                                                       data-mdb-toggle="tooltip" class="fas fa-eye text-success me-3"
                                                       title="Detail">
                                                  </a>
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