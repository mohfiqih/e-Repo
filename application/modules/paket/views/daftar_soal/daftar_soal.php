<head>
     <title>Daftar Pertanyaan | Sistem e-Repo</title>
</head>
<div>
     <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
          aria-label="breadcrumb">
          <ol class="breadcrumb bg-primary">
               <li class="breadcrumb-item"><a href="<?php echo base_url('dasbor'); ?>">Home</a>
               </li>
               <li class="breadcrumb-item" aria-current="page"><a href="<?php echo base_url('paket'); ?>">Paket
                         Kuesioner</a>
               </li>
               <li class="breadcrumb-item active" aria-current="page">Daftar Pertanyaan
               </li>
          </ol>
     </nav>
</div>
<div class="card">
     <!-- Start Content-->
     <div class="container-fluid">
          <input type="hidden" name="id_paket" value="<?php echo uri(2) == "edit" ? enkrip($d->id_paket) : ""; ?>">
          <?php
               $no = 0 + 1;
               if ($data_paket) {
                foreach ($data_paket as $d) {
          ?>
          <div class="card">
               <div style="margin-left: 20px;margin-top: 20px;">
                    <a style="decoration: none;"
                         href="<?php echo base_url('export/print_pertanyaan/') . enkrip($d->id_paket); ?>">
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
                              href="<?php echo base_url('export/export_pertanyaan_pdf/') . enkrip($d->id_paket); ?>">PDF</a>
                         <a class="dropdown-item"
                              href="<?php echo base_url('export/export_pertanyaan_excel/') . enkrip($d->id_paket); ?>">Excel</a>
                    </div>
                    <!-- <a href="<?php echo base_url('paket'); ?>">
                         <button type="button" class="btn btn-warning text-white"><i class=" fas fa-backward"></i>
                              Kembali</button>
                    </a> -->
               </div>
               <div class="card-body">
                    <div class="row">
                         <div class="col-md-6" style="overflow: auto;">
                              <br />
                              <div class="box-header with-border">
                                   <h4 class="box-title" style="margin-left: 10px;">Paket Kuesioner</h4>
                              </div><br />

                              <table class="table table-hover mb-0">
                                   <tbody>
                                        <tr style="overflow-x: auto;">
                                             <th width="150">Nama Paket</th>
                                             <th width="20">:</th>
                                             <td><?php echo $d->nama_paket; ?>
                                                  v<?php echo $d->versi_apl_paket; ?>
                                             </td>
                                        </tr>
                                        <tr style="overflow-x: auto;">
                                             <th width="150">Aplikasi</th>
                                             <th width="20">:</th>
                                             <td>
                                                  <?php echo $d->aplikasi; ?>
                                                  v<?php echo $d->versi_apl_paket; ?>
                                             </td>
                                        </tr>
                                        <tr>
                                             <th>Responden</th>
                                             <th>:</th>
                                             <td><?php echo $d->responden; ?>
                                             </td>
                                        </tr>
                                   </tbody>
                              </table>
                         </div>

                         <div class="col-md-6" style="overflow: auto;">
                              <br />
                              <div class="box-header with-border">
                                   <h4 class="box-title" style="margin-left: 10px;">Data Lain</h4>
                              </div>
                              <br />

                              <table class="table table-hover mb-0">
                                   <tbody>
                                        <tr style="overflow-x: auto;">
                                             <th width="150">Jumlah Pertanyaan</th>
                                             <th width="20">:</th>
                                             <td><?php echo $total_pertanyaan; ?> Soal
                                             </td>
                                        </tr>
                                        <tr style="overflow-x: auto;">
                                             <th width="150">Tanggal</th>
                                             <th width="20">:</th>
                                             <td>
                                                  <?php echo $d->tgl_kuesioner; ?>
                                             </td>
                                        </tr>
                                        <tr style="overflow-x: auto;">
                                             <th>Link Kuesioner</th>
                                             <th>:</th>
                                             <td> <a
                                                       href="<?php echo base_url('kuesioner/skala/') . enkrip($d->id_paket); ?>">Link
                                                       Kuesioner
                                                  </a>
                                             </td>
                                        </tr>
                                   </tbody>
                              </table>
                         </div>
                    </div>
               </div>
          </div>
          <?php }
          } else { ?>
          <td class="text-center" colspan="8">Tidak ada data</td>
          <?php } ?>

          </form>
     </div>
</div><br />



<div class="card">
     <div class="container-fluid">
          <div class="card" style="margin-top: 15px;">
               <div class="card-body" style="overflow: auto;">
                    <div class="row">
                         <div class="col-md-12">
                              <button style="margin-left: 10px;" type="button" class="btn btn-success"
                                   data-toggle="modal" data-target="#addModal"><span class="btn-label"><i
                                             class="fa fa-plus"></i></span>
                                   Pertanyaan</button>
                         </div>
                         <!-- Add Data -->
                         <?php echo form_open_multipart(uri(2) == "edit" ? url(1, "tambah_soal") : url(1, "tambah_soal")); ?>
                         <div class="modal fade" id="addModal" tabindex="-1" role="dialog"
                              aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                   <div class="modal-content">
                                        <div class="modal-header">
                                             <h5 class="modal-title" id="exampleModalLabel">Tambah Soal</h5>
                                             <button type="button" class="close" data-dismiss="modal"
                                                  aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                             </button>
                                        </div>
                                        <div class="modal-body">
                                             <div class="row">
                                                  <div class="col-md-12">
                                                       <?php
                                                            if ($data_paket) {
                                                            foreach ($data_paket as $d) {
                                                       ?>
                                                       <div class="form-floating mb-3">
                                                            <label for="example-select-floating">Nama Paket</label>

                                                            <input type="text" class="form-control" name="paket_id"
                                                                 placeholder="Paket ID" autocomplete="off"
                                                                 value="<?php echo $d->id_paket; ?>" hidden>
                                                            </input>

                                                            <input type="text" class="form-control"
                                                                 placeholder="Paket KUesioner" autocomplete="off"
                                                                 value="<?php echo $d->nama_paket; ?> v.<?php echo $d->versi_apl_paket; ?>"
                                                                 readonly>

                                                            </input>
                                                       </div>
                                                       <?php }
                                                       } else { ?>
                                                       <div class="logo">
                                                            <h1><a><span>Tidak Ada Paket Kuesioner</span></a></h1>
                                                       </div>
                                                       <?php } ?>
                                                       <div class="form-floating mb-3">
                                                            <label>Type Pertanyaan</label>
                                                            <select class="form-control" name="type_soal"
                                                                 style="background-color: white;" required>
                                                                 <option>Type Pertanyaan</option>
                                                                 <option value="Skala Likert"
                                                                      <?php if (uri(1) == "tambah") ?>>
                                                                      Skala Likert</option>
                                                                 <!-- <option value="Teks Singkat"
                                                                      <?php if (uri(1) == "tambah"); ?>>
                                                                      Teks Singkat</option> -->
                                                            </select>
                                                       </div>
                                                       <div class="form-floating mb-3">
                                                            <label>Pertanyaan</label>
                                                            <textarea style="height: 150px;" class="form-control"
                                                                 name="soal" rows="15"
                                                                 placeholder="Ketikkan Pertanyaan.."></textarea>
                                                       </div>
                                                       <!-- SS -->
                                                       <div class="form-group" hidden>
                                                            <label for="kets" class="control-label col-sm-6">Sangat
                                                                 Setuju</label>
                                                            <div class="col-sm-12">
                                                                 <input type="text" value="4" class="form-control"
                                                                      name="sangat_setuju" placeholder="Pekerjaan"
                                                                      autocomplete="off" readonly hidden>
                                                            </div>
                                                       </div>
                                                       <!-- S -->
                                                       <div class="form-group" hidden>
                                                            <label for="kets"
                                                                 class="control-label col-sm-6">Setuju</label>
                                                            <div class="col-sm-12">
                                                                 <input type="text" value="3" class="form-control"
                                                                      name="setuju" placeholder="Pekerjaan"
                                                                      autocomplete="off" readonly hidden>
                                                            </div>
                                                       </div>
                                                       <!-- C -->
                                                       <!-- <div class="form-group" hidden>
                                                            <label for="kets"
                                                                 class="control-label col-sm-6">Cukup</label>
                                                            <div class="col-sm-12">
                                                                 <input type="text" value="3" class="form-control"
                                                                      name="cukup" placeholder="Pekerjaan"
                                                                      autocomplete="off" readonly hidden>
                                                            </div>
                                                       </div> -->
                                                       <!-- TS -->
                                                       <div class="form-group" hidden>
                                                            <label for="kets" class="control-label col-sm-6">Tidak
                                                                 Setuju</label>
                                                            <div class="col-sm-12">
                                                                 <input type="text" value="2" class="form-control"
                                                                      name="tidak_setuju" placeholder="Pekerjaan"
                                                                      autocomplete="off" readonly hidden>
                                                            </div>
                                                       </div>
                                                       <!-- STS -->
                                                       <div class="form-group" hidden>
                                                            <label for="kets" class="control-label col-sm-6">Sangat
                                                                 Tidak
                                                                 Setuju</label>
                                                            <div class="col-sm-12">
                                                                 <input type="text" value="1" class="form-control"
                                                                      name="sangat_tidak_setuju" placeholder="Pekerjaan"
                                                                      autocomplete="off" readonly hidden>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div><br />
                                             <div class="modal-footer">
                                                  <button type="submit" class="btn btn-success">Tambah</button>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <?php echo form_close(); ?>

                         <!-- Edit Soal -->
                         <!-- <?php echo form_open_multipart(uri(2) == "edit" ? url(1, "tambah_soal") : url(1, "tambah_soal")); ?>
                         <div class="modal fade" id="editModal<?php echo $data_soal['id_soal']; ?>" tabindex="-1"
                              role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                   <div class="modal-content">
                                        <div class="modal-header">
                                             <h5 class="modal-title" id="exampleModalLabel">Edit Soal</h5>
                                             <button type="button" class="close" data-dismiss="modal"
                                                  aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                             </button>
                                        </div>
                                        <div class="modal-body">
                                             <div class="row">
                                                  <div class="col-md-12">
                                                       <?php
                                                            if ($data_paket) {
                                                            foreach ($data_paket as $d) {
                                                       ?>
                                                       <div class="form-floating mb-3">
                                                            <label for="example-select-floating">Nama Paket</label>

                                                            <input type="text" class="form-control" name="paket_id"
                                                                 placeholder="Paket ID" autocomplete="off"
                                                                 value="<?php echo uri(2) == "edit_soal" ? ($d->id_paket) : ""; ?>"
                                                                 hidden>
                                                            </input>

                                                            <input type="text" class="form-control"
                                                                 placeholder="Paket KUesioner" autocomplete="off"
                                                                 value="<?php echo $d->nama_paket; ?> v.<?php echo $d->versi_apl_paket; ?>"
                                                                 readonly>
                                                            </input>
                                                       </div>
                                                       <?php }
                                                       } else { ?>
                                                       <div class="logo">
                                                            <h1><a><span>Tidak Ada Paket Kuesioner</span></a></h1>
                                                       </div>
                                                       <?php } ?>

                                                       <?php
                                                            if ($data_soal) {
                                                            foreach ($data_soal as $d) {
                                                       ?>
                                                       <div class="form-floating mb-3">
                                                            <label>Tipe Pertanyaan</label>
                                                            <select class="form-control" name="type_soal"
                                                                 style="background-color: white;" required>
                                                                 <option>Pilih Tipe Pertanyaan</option>
                                                                 <option value="Skala Likert"
                                                                      <?php if (uri(2) == "daftar_soal") echo $d->skala_likert == 'Skala Likert' ? "selected" : ""; ?>>
                                                                      Skala Likert</option>
                                                                 <option value="Teks Singkat"
                                                                      <?php if (uri(2) == "daftar_soal") echo $d->teks_singkat == 'Teks Singkat' ? "selected" : ""; ?>>
                                                                      Teks Singkat</option>
                                                            </select>
                                                       </div>
                                                       <div class="form-floating mb-3">
                                                            <label>Pertanyaan</label>
                                                            <textarea style="height: 200px;" class="form-control"
                                                                 name="soal" rows="15"
                                                                 value="<?php echo $data_soal['soal']; ?>"
                                                                 placeholder="Ketikkan Pertanyaan.."></textarea>
                                                       </div>
                                                       <?php }
                                                       } else { ?>
                                                       <div class="logo">
                                                            <h1><a><span>Tidak Ada Soal</span></a></h1>
                                                       </div>
                                                       <?php } ?>
                                                       <div class="form-group" hidden>
                                                            <label for="kets" class="control-label col-sm-6">Sangat
                                                                 Setuju</label>
                                                            <div class="col-sm-12">
                                                                 <input type="text" value="5" class="form-control"
                                                                      name="sangat_setuju" placeholder="Pekerjaan"
                                                                      autocomplete="off" readonly hidden>
                                                            </div>
                                                       </div>
                                                       <div class="form-group" hidden>
                                                            <label for="kets"
                                                                 class="control-label col-sm-6">Setuju</label>
                                                            <div class="col-sm-12">
                                                                 <input type="text" value="4" class="form-control"
                                                                      name="setuju" placeholder="Pekerjaan"
                                                                      autocomplete="off" readonly hidden>
                                                            </div>
                                                       </div>
                                                       <div class="form-group" hidden>
                                                            <label for="kets"
                                                                 class="control-label col-sm-6">Cukup</label>
                                                            <div class="col-sm-12">
                                                                 <input type="text" value="3" class="form-control"
                                                                      name="cukup" placeholder="Pekerjaan"
                                                                      autocomplete="off" readonly hidden>
                                                            </div>
                                                       </div>
                                                       <div class="form-group" hidden>
                                                            <label for="kets" class="control-label col-sm-6">Tidak
                                                                 Setuju</label>
                                                            <div class="col-sm-12">
                                                                 <input type="text" value="2" class="form-control"
                                                                      name="tidak_setuju" placeholder="Pekerjaan"
                                                                      autocomplete="off" readonly hidden>
                                                            </div>
                                                       </div>
                                                       <div class="form-group" hidden>
                                                            <label for="kets" class="control-label col-sm-6">Sangat
                                                                 Tidak
                                                                 Setuju</label>
                                                            <div class="col-sm-12">
                                                                 <input type="text" value="1" class="form-control"
                                                                      name="sangat_tidak_setuju" placeholder="Pekerjaan"
                                                                      autocomplete="off" readonly hidden>
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
                         <?php echo form_close(); ?> -->

                         <!-- Tabel Soal -->
                         <div class="col-md-12">
                              <?php echo form_open(uri(2) == "edit" ? url(1, "hapus_soal") : url(1, "edit_soal/"). uri(3)); ?>
                              <div class="card-body" style="overflow: auto;">
                                   <table id="myTable" class="table table-hover mb-0">
                                        <thead>
                                             <tr>
                                                  <th class="align-middle" scope="col" style="width: 5px;">No
                                                  </th>
                                                  <th class="align-middle" scope="col">Pertanyaan Kuesioner
                                                  </th>
                                                  <th class="align-middle" scope="col">Tipe Soal
                                                  </th>
                                                  <th class="align-middle" scope="col">SS
                                                  </th>
                                                  <th class="align-middle" scope="col">S
                                                  </th>
                                                  <!-- <th class="align-middle" scope="col">C
                                                  </th> -->
                                                  <th class="align-middle" scope="col">TS
                                                  </th>
                                                  <th class="align-middle" scope="col">STS
                                                  </th>
                                                  <th class="align-middle" scope="col" style="width: 10px;">
                                                       Action</th>
                                             </tr>
                                        </thead>

                                        <tbody>
                                             <?php
                                                  $no = 0 + 1;
                                                  if ($data_soal) {
                                                  foreach ($data_soal as $d) {
                                             ?>
                                             <tr class="fw-normal">
                                                  <th class="align-middle">
                                                       <?php echo $no++; ?>
                                                  </th>
                                                  <td class="align-middle" style="width: 10px;">
                                                       <?php echo $d->soal; ?>
                                                  </td>
                                                  <td class="align-middle">
                                                       <?php echo $d->type_soal; ?>
                                                  </td>
                                                  <td class="align-middle">
                                                       <?php echo $d->sangat_setuju; ?>
                                                  </td>
                                                  <td class="align-middle">
                                                       <?php echo $d->setuju; ?>
                                                  </td>
                                                  <!-- <td class="align-middle">
                                                       <?php echo $d->cukup; ?>
                                                  </td> -->
                                                  <td class="align-middle">
                                                       <?php echo $d->tidak_setuju; ?>
                                                  </td>
                                                  <td class="align-middle">
                                                       <?php echo $d->sangat_tidak_setuju; ?>
                                                  </td>
                                                  <td class="align-middle">
                                                       <!-- <a style="margin-left: 10px;text-decoration: none;"
                                                            href="<?php echo url(1) . '/edit_soal/' . enkrip($d->id_soal); ?>"
                                                            data-mdb-toggle="tooltip" title="Edit"><i
                                                                 class="fas fa-edit text-warning"></i></a> -->
                                                       <!-- <i class="fas fa-edit text-warning" data-toggle="modal"
                                                            data-target="#editModal<?php echo $data_soal['id_soal']; ?>"></i> -->
                                                       <a style="margin-left: 10px;text-decoration: none;"
                                                            href="<?php echo url(1) . '/hapus_soal/' . enkrip($d->id_soal); ?>"
                                                            data-mdb-toggle="tooltip" title="Remove"
                                                            onclick="return confirm('Yakin hapus soal?')"><i
                                                                 class="fas fa-trash-alt text-danger"></i></a>
                                                  </td>
                                                  <?php }
                                                       } else { ?>
                                                  <td class="text-center" colspan="6">Tidak ada data</td>
                                                  <?php } ?>
                                             </tr>
                                        </tbody>

                                   </table>
                              </div>
                              <?php echo form_close(); ?>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>