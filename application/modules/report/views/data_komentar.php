<head>
     <title>Hasil Kuesioner | Sistem e-Repo</title>
</head>
<div>
     <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
          aria-label="breadcrumb">
          <ol class="breadcrumb bg-primary">
               <li class="breadcrumb-item"><a href="<?php echo base_url('dasbor'); ?>">Home</a>
               </li>
               <li class="breadcrumb-item active" aria-current="page">Data Jawaban
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
                              <a style="decoration: none;"
                                   href="<?php echo base_url('export/print_komentar/') . uri(3); ?>">
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
                                        href="<?php echo base_url('export/export_komentar_pdf/') . uri(3); ?>">PDF</a>
                                   <a class="dropdown-item"
                                        href="<?php echo base_url('export/export_komentar_excel/') . uri(3); ?>">Excel</a>
                              </div>
                         </div>
                         <div class="card-body" data-mdb-perfect-scrollbar="true" style="overflow-x: auto;">
                              <table id="myTable" class="table table-hover mb-0">
                                   <thead>
                                        <tr>
                                             <th class="align-middle" scope="col" style="width: 5px;">No
                                             </th>
                                             <th class="align-middle" scope="col">Jawaban</th>
                                             <th class="align-middle" scope="col">Label
                                             </th>
                                             <!--<th class="align-middle" scope="col">Tanggal-->
                                             <!--</th>-->
                                             <th class="align-middle" scope="col" style="width: 5px;">
                                                  Action
                                             </th>
                                        </tr>
                                   </thead>
                                   <tbody>
                                        <?php
                                             $no=0+1;
									if ($data_klasifikasi){
									foreach ($data_klasifikasi as $d){ 
									?>
                                        <tr class="fw-normal">
                                             <th class="align-middle">
                                                  <?php echo $no++; ?>
                                             </th>
                                             <td class="align-middle">
                                                  <?php echo $d->jawaban; ?>
                                             </td>

                                             <td class="align-middle">
                                                  <!-- <?php echo $d->label; ?> -->
                                                  <?php 

                                                  $label = $d->label;
                                                  
                                                  if ($label=='Baik') { ?>
                                                  <span class="badge bg-success text-white">
                                                       Baik
                                                  </span>
                                                  <?php } else if ($label=='Kurang') { ?>
                                                  <span class="badge bg-danger text-white">
                                                       Kurang
                                                  </span>
                                                  <?php } ?>
                                             </td>
                                             <!--<td class="align-middle">-->
                                             <!--     <?php echo $d->date_created; ?>-->
                                             <!--</td>-->
                                             <td>
                                                  <a style="margin-left: 10px;text-decoration: none;"
                                                       href="<?php echo url(1) . '/hapus_komentar/' . enkrip($d->id); ?>"
                                                       data-mdb-toggle="tooltip" title="Remove"
                                                       onclick="return confirm('Yakin hapus data?')"><i
                                                            class="fas fa-trash-alt text-danger"></i></a>
                                             </td>
                                        </tr>
                                        <?php }} else { ?>
                                        <td class="text-center" colspan="4">Tidak ada data</td>
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