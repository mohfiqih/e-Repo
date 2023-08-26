<head>
     <title>Hasil Kuesioner | Sistem e-Repo</title>
</head>
<div>
     <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
          aria-label="breadcrumb">
          <ol class="breadcrumb bg-primary">
               <li class="breadcrumb-item"><a href="<?php echo base_url('dasbor'); ?>">Home</a>
               </li>
               <li class="breadcrumb-item active" aria-current="page">Data Kuesioner
               </li>
          </ol>
     </nav>
</div>
<div class="card">
     <div class="container-fluid">

          <form action="<?php echo uri(2) == "evaluasi_soal" ? url(1, "hapus") : url(1, "hapus_identitas"); ?>"
               method="POST">
               <input type="hidden" name="id_paket" value="<?php echo uri(2) == "edit" ? enkrip($d->id_paket) : ""; ?>">
               <?php
                    $no = 0 + 1;
                    $this->load->model('M_report');
                    if ($data_paket) {
                    foreach ($data_paket as $d) {
               ?>
               <div class="card">
                    <div style="margin-left: 20px;margin-top: 20px;">
                         <a style="decoration: none;" href="<?php echo base_url('export/print_jawaban/') . uri(3); ?>">
                              <button style="height: 43px;margin-left: 5px;margin-top: 5px;"
                                   class="btn btn-danger aves-effect waves-light" type="button">
                                   <i class="fa fa-print"></i>
                                   Print
                              </button>
                         </a>
                         <button style="height: 43px;margin-left: 5px;margin-top: 5px;"
                              class="btn btn-warning dropdown-toggle aves-effect waves-light" type="button"
                              id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fa fa-download"></i> Export
                         </button>
                         <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item"
                                   href="<?php echo base_url('export/export_hasil_pdf/') . uri(3); ?>">PDF</a>
                              <a class="dropdown-item"
                                   href="<?php echo base_url('export/export_hasil_excel/') . uri(3); ?>">Excel</a>
                         </div>
                         <!-- <a href="<?php echo base_url('report'); ?>">
                              <button type="button" class="btn btn-warning"><i class=" fas fa-backward"></i>
                                   Kembali</button>
                         </a> -->
                    </div>
                    <div class="card-body">
                         <div class="row">
                              <div class="col-md-6" style="overflow: auto;">
                                   <br />
                                   <div class="box-header with-border">
                                        <h4 class="box-title" style="margin-left: 20px;">Paket Soal</h4>
                                   </div>
                                   <div style="overflow: auto;">
                                        <table class="table table-hover mb-0">
                                             <tbody>
                                                  <tr>
                                                       <th width="150">Nama Paket</th>
                                                       <th width="20">:</th>
                                                       <td><?php echo $d->nama_paket; ?>
                                                            v<?php echo $d->versi_apl_paket; ?>
                                                       </td>
                                                  </tr>
                                                  <tr>
                                                       <th>Sistem</th>
                                                       <th>:</th>
                                                       <td> <?php echo $d->aplikasi; ?></td>
                                                  </tr>
                                                  <tr>
                                                       <th>Responden</th>
                                                       <th>:</th>
                                                       <td>
                                                            <?php echo $d->responden; ?>
                                                       </td>
                                                  </tr>
                                                  <tr>
                                                       <th width="150">Tanggal</th>
                                                       <th width="20">:</th>
                                                       <td>
                                                            <?php echo $d->tgl_kuesioner; ?>
                                                       </td>
                                                  </tr>
                                                  <tr>
                                                       <th width="150">Total Jawaban</th>
                                                       <th width="20">:</th>
                                                       <td>
                                                            <?php echo $total_responden; ?> Jawaban
                                                       </td>
                                                  </tr>

                                             </tbody>
                                        </table>
                                   </div>
                              </div>

                              <div class="col-md-6" style="overflow: auto;margin-top: 10px;">
                                   <div class="box-header with-border">
                                        <h4 class="box-title" style="margin-left: 20px;margin-top: 10px;">Data
                                             Kesimpulan</h4>
                                   </div>
                                   <div style="overflow: auto;">
                                        <table class="table table-hover mb-0">
                                             <tbody>
                                                  <tr>
                                                       <th width="150">
                                                            Skor
                                                       </th>
                                                       <th width="20">:</th>
                                                       <th>SS</th>
                                                       <th>S</th>
                                                       <th>TS</th>
                                                       <th>STS</th>
                                                  </tr>
                                                  <tr>
                                                       <td>

                                                       </td>
                                                       <td>

                                                       </td>
                                                       <td>
                                                            <?php echo $ss; ?>
                                                       </td>
                                                       <td>
                                                            <?php echo $s; ?>
                                                       </td>
                                                       <td>
                                                            <?php echo $ts; ?>
                                                       </td>
                                                       <td>
                                                            <?php echo $sts; ?>
                                                       </td>
                                                  </tr>
                                             </tbody>
                                        </table>
                                        <!-- Total Kesimpulan -->
                                        <table class="table table-hover mb-0">
                                             <thead>
                                                  <tr>
                                                       <th>
                                                            Total
                                                       </th>

                                                       <th>
                                                            Y
                                                       </th>
                                                       <th>
                                                            X
                                                       </th>
                                                       <!--<th>-->
                                                       <!--     Interval-->
                                                       <!--</th>-->
                                                       <th>
                                                            Hasil (%)
                                                       </th>
                                                  </tr>
                                             </thead>
                                             <tbody>
                                                  <tr>
                                                       <td class="align-middle">
                                                            <?php
                         
                                                                 echo $total; ?>
                                                       </td>

                                                       <td>
                                                            <?php
                                                                 echo $tertinggi; ?>
                                                       </td>

                                                       <td>
                                                            <?php
                                                                 echo $terendah; ?>
                                                       </td>

                                                       <!--<td>-->
                                                       <!--     <?php echo $interval; ?>-->
                                                       <!--</td>-->

                                                       <td>
                                                            <?php
                                                            $total_id = "id_paket_jawaban='" . $d->id_paket . "' ";
                                                            $tertinggi = $this->M_report->total_soal($total_id) * 4;
                                                            $terendah = $this->M_report->total_soal($total_id) * 1;
                                                            
                                                            // Check if $tertinggi is zero to prevent division by zero
                                                            if ($tertinggi !== 0) {
                                                                $total = (($this->M_report->total_ss_p($total_id)) * 4) +
                                                                    (($this->M_report->total_s_p($total_id)) * 3) +
                                                                    (($this->M_report->total_ts_p($total_id)) * 2) +
                                                                    (($this->M_report->total_sts_p($total_id)) * 1);
                                                            
                                                                $nilai = substr(($total / $tertinggi) * 100, 0, 5);
                                                            } else {
                                                                // Set $nilai to 0 if $tertinggi is zero to avoid division by zero
                                                                $nilai = 0;
                                                            }
                                                            
                                                            if ($nilai <= 100 && $nilai >= 80) {
                                                            ?>
                                                            <span class="badge bg-success text-white">
                                                                 <?php echo $nilai ?>%
                                                            </span>
                                                            <?php
                                                            } else if ($nilai <= 79.9 && $nilai >= 60) {
                                                            ?>
                                                            <span class="badge bg-success text-white">
                                                                 <?php echo $nilai ?>%
                                                            </span>
                                                            <?php
                                                            } else if ($nilai <= 59.9 && $nilai >= 40) {
                                                            ?>
                                                            <span class="badge bg-warning text-white">
                                                                 <?php echo $nilai ?>%
                                                            </span>
                                                            <?php
                                                            } else if ($nilai <= 39.9 && $nilai >= 20) {
                                                            ?>
                                                            <span class="badge bg-danger text-white">
                                                                 <?php echo $nilai ?>%
                                                            </span>
                                                            <?php
                                                            } else if ($nilai <= 19.9) {
                                                            ?>
                                                            <span class="badge bg-danger text-white">
                                                                 <?php echo $nilai ?>%
                                                            </span>
                                                            <?php
                                                            }
                                                            ?>

                                                       </td>
                                                  </tr>
                                             </tbody>

                                        </table>
                                        <table style="margin-left: 20px;margin-top: 10px;">
                                             <tbody>
                                                  <tr>
                                                       <th width="150">Kategori</th>
                                                       <th width="20">:</th>
                                                       <td>
                                                            <?php
                                                             $total_id	   = "id_paket_jawaban='" . $d->id_paket . "' ";
                                                             $tertinggi    = $this->M_report->total_soal($total_id)*4;
                                                             $terendah     = $this->M_report->total_soal($total_id)*1;
                
                                                             $total = (($this->M_report->total_ss_p($total_id))*4)+
                                                             (($this->M_report->total_s_p($total_id))*3)+
                                                             (($this->M_report->total_ts_p($total_id))*2)+
                                                             (($this->M_report->total_sts_p($total_id))*1);
                                                                                    
                                                             $nilai = substr(($total!=0)?($total / $tertinggi) * 100:0, 0, 5);
                                                             
                                                                                      
                                                             if ($nilai <= 100 && $nilai >= 80) { ?>
                                                            <span class="badge bg-success text-white">
                                                                 Sangat Setuju
                                                            </span>
                                                            <?php } else if ($nilai <= 79.9 && $nilai >= 60) { ?>
                                                            <span class="badge bg-success text-white">
                                                                 Setuju
                                                            </span>
                                                            <?php } else if ($nilai <= 59.9 && $nilai >= 40) { ?>
                                                            <span class="badge bg-danger text-white">
                                                                 Tidak Setuju
                                                            </span>
                                                            <?php } else if ($nilai <= 59.9 && $nilai >= 1) { ?>
                                                            <span class="badge bg-danger text-white">
                                                                 Sangat Tidak Setuju
                                                            </span>
                                                            <?php } else if ($nilai==0) { ?>
                                                            <span class="badge bg-warning text-white">
                                                                 Kosong
                                                            </span>
                                                            <?php } ?>
                                                       </td>
                                                  </tr>
                                             </tbody>
                                        </table>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
               <?php }
               } else { ?>
               <td class="text-center" colspan="8">Tidak ada data</td>
               <?php } ?>

               <div class="card">
                    <div class="card-body">
                         <div class="row">
                              <div class="card-body" data-mdb-perfect-scrollbar="true"
                                   style="position: relative; overflow-x: auto;">
                                   <h4>Data Responden</h4>
                                   <table id="myTable" class="table table-hover mb-0" style="overflow-x: auto;">
                                        <thead>
                                             <tr>
                                                  <th scope="col" style="width: 5px;">No
                                                  </th>
                                                  <th scope="col">
                                                       NIM/NIPY
                                                  </th>

                                                  <th scope="col">Nama
                                                       Lengkap
                                                  </th>
                                                  <th scope="col">Prodi
                                                  </th>
                                                  <th scope="col">Sebagai
                                                  </th>
                                                  <th scope="col">Jenis Kelamin
                                                  </th>
                                                  <th scope="col">
                                                       Action
                                                  </th>

                                             </tr>
                                        </thead>
                                        <tbody>
                                             <?php
                                                            $no = 0 + 1;
                                                            if ($data_identitas) {
                                                                 foreach ($data_identitas as $d) {
                                             ?>
                                             <tr class="fw-normal">
                                                  <th class="align-middle">
                                                       <?php echo $no++; ?>
                                                  </th>
                                                  <th class="align-middle">
                                                       <?php echo $d->id_identitas; ?>
                                                  </th>
                                                  <td class="align-middle">
                                                       <?php echo $d->nama_lengkap; ?>
                                                  </td>
                                                  <td class="align-middle">
                                                       <?php echo $d->prodi; ?>
                                                  </td>
                                                  <td class="align-middle">
                                                       <?php echo $d->sebagai; ?>
                                                  </td>
                                                  <td class="align-middle">
                                                       <?php echo $d->gender; ?>
                                                  </td>
                                                  <td class="align-middle">
                                                       <a style="margin-left: 10px;text-decoration: none;"
                                                            href="<?php echo url(1) . '/lihat_responden/' . enkrip($d->id_identitas) . '/' . uri(3); ?>"
                                                            data-mdb-toggle="tooltip"
                                                            class="fas fa-eye text-success me-3" title="Soal">
                                                       </a>
                                                       <a style="margin-left: 10px;text-decoration: none;"
                                                            href="<?php echo url(1) . '/hapus/' . enkrip($d->id_identitas); ?>"
                                                            data-mdb-toggle="tooltip" title="Remove"
                                                            onclick="return confirm('Yakin hapus data?')"><i
                                                                 class="fas fa-trash-alt text-danger"></i></a>
                                                  </td>
                                                  <?php }
                                                  } else { ?>
                                                  <td class="text-center" colspan="8">
                                                       Tidak ada data</td>
                                                  <?php } ?>
                                             </tr>
                                        </tbody>
                                   </table>
                              </div>
                         </div>
                    </div>
               </div>

          </form>
     </div>
</div>
<br />
<div class="card">
     <div class="container-fluid">
          <form>
               <div class="card">
                    <div class="card-body">
                         <div class="row">
                              <div class="card-body" data-mdb-perfect-scrollbar="true"
                                   style="position: relative; overflow-x: auto;">
                                   <h4>Data Jawaban</h4>
                                   <table id="TableJawaban" class="table table-hover mb-0" style="overflow-x: auto;">
                                        <thead>
                                             <tr>
                                                  <th scope="col" style="width: 5px;">No</th>
                                                  <th scope="col">NIM/NIPY</th>
                                                  <th scope="col">Nama Responden</th>
                                                  <?php for ($i = 1; $i <= $total_pertanyaan; $i++) { ?>
                                                  <th>P-<?php echo $i; ?></th>
                                                  <?php } ?>
                                             </tr>
                                        </thead>
                                        <tbody>
                                             <?php
                                             $no = 0 + 1;
                                             if ($data_jawaban) {
                                                  foreach ($data_jawaban as $d) {
                                                       $jawaban_array = explode(",", $d->jawaban);
                                             ?>
                                             <tr>
                                                  <td class="align-middle"><?php echo $no++; ?></td>
                                                  <td class="align-middle"><?php echo $d->id_identitas; ?></td>
                                                  <td class="align-middle"><?php echo $d->nama_lengkap; ?></td>
                                                  <?php foreach ($jawaban_array as $jawaban) { ?>
                                                  <td>
                                                       <?php echo $d->soal; ?>
                                                       <?php echo trim($jawaban); ?>
                                                  </td>
                                                  <?php } ?>
                                             </tr>
                                             <?php
                                                  }
                                             } else {
                                             ?>
                                             <tr>
                                                  <td class="text-center"
                                                       colspan="<?php echo $total_pertanyaan + $total_pertanyaan; ?>">
                                                       Tidak ada data
                                                  </td>
                                             </tr>
                                             <?php
                                                  }
                                             ?>
                                        </tbody>
                                   </table>

                              </div>
                         </div>
                    </div>
               </div>
          </form>
     </div>
</div>