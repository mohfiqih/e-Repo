<head>
     <title>Kuesioner | Repository & Kuesioner Online</title>
</head>

<div class="card">
     <div class="container-fluid">
          <div class="card">
               <div class="card-body">
                    <div class="row">
                         <div class="card-body" data-mdb-perfect-scrollbar="true"
                              style="position: relative; overflow-x: auto;">
                              <?php echo form_open(uri(2) == "edit" ? url(1, "update") : url(1, "tambah_soal/") . uri(3)); ?>
                              <form action="<?php echo uri(2) == "tambah_soal" ? url(1, "edit_soal") : url(1, "tambah_soal"); ?>"
                                   method="POST">

                                   <div class="row">
                                        <div class="col-md-6" style="overflow: auto;">
                                             <table class="table table-hover mb-0">
                                                  <tbody>
                                                       <!-- <?php if ($this->user_level == "Super Admin"):?>
                                                       <tr style="overflow-x: auto;">
                                                            <th width="150">ID</th>
                                                            <th width="20">:</th>
                                                            <td value="<?php echo $user->user_id; ?>"
                                                                 name="id_identitas">
                                                                 <?php echo $user->user_id; ?>
                                                            </td>
                                                       </tr>
                                                       <?php elseif ($this->user_level == "Dosen"):?>
                                                       <tr style="overflow-x: auto;">
                                                            <th width="150">NIPY</th>
                                                            <th width="20">:</th>
                                                            <td value="<?php echo $user->user_nama; ?>"
                                                                 name="id_identitas">
                                                                 <?php echo $user->user_nama; ?>
                                                            </td>
                                                       </tr>
                                                       <?php elseif ($this->user_level == "Mahasiswa"):?>
                                                       <tr style="overflow-x: auto;">
                                                            <th width="150">NIM</th>
                                                            <th width="20">:</th>
                                                            <td value="<?php echo $user->user_nama; ?>"
                                                                 name="id_identitas">
                                                                 <?php echo $user->user_nama; ?>
                                                            </td>
                                                       </tr>
                                                       <?php else: ?>
                                                       <tr style="overflow-x: auto;">
                                                            <th width="150">ID Evaluator</th>
                                                            <th width="20">:</th>
                                                            <td value="<?php echo $user->user_id; ?>"
                                                                 name="id_identitas">
                                                                 <?php echo $user->user_id; ?>
                                                            </td>
                                                       </tr>
                                                       <?php endif; ?> -->

                                                       <tr style="overflow-x: auto;">
                                                            <th width="150">ID</th>
                                                            <th width="20">:</th>
                                                            <td value="<?php echo $user->user_id; ?>"
                                                                 name="id_identitas">
                                                                 <?php echo $user->user_id; ?>
                                                            </td>
                                                       </tr>
                                                       <tr style="overflow-x: auto;">
                                                            <th width="150">Nama Lengkap</th>
                                                            <th width="20">:</th>
                                                            <td value="<?php echo $user->user_namalengkap; ?>"
                                                                 name="nama_lengkap">
                                                                 <?php echo $user->user_namalengkap; ?>
                                                            </td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>
                                        <div class="col-md-6" style="overflow: auto;">
                                             <table class="table table-hover mb-0">
                                                  <tbody>
                                                       <tr style="overflow-x: auto;">
                                                            <th width="150">Prodi</th>
                                                            <th width="20">:</th>
                                                            <td value="<?php echo $user->user_prodi; ?>" name="prodi">
                                                                 <?php echo $user->user_prodi; ?>
                                                            </td>
                                                       </tr>
                                                       <tr style="overflow-x: auto;">
                                                            <th width="150">Responden</th>
                                                            <th width="20">:</th>
                                                            <td value="<?php echo $user->user_level; ?>" name="sebagai">
                                                                 <?php echo $user->user_level; ?>
                                                            </td>
                                                       </tr>
                                                       <!-- <tr style="overflow-x: auto;" type="hidden">
                                                            <th width="150">Gender</th>
                                                            <th width="20">:</th>
                                                            <td value="<?php echo $user->user_gender; ?>" name="gender">
                                                                 <?php echo $user->user_gender; ?>
                                                            </td>
                                                       </tr>
                                                       <tr style="overflow-x: auto;" type="hidden">
                                                            <th width="150">Nama Paket</th>
                                                            <th width="20">:</th>
                                                            <td value="<?php echo $d->nama_paket; ?>"
                                                                 name="id_paket_jawaban">
                                                                 <?php echo $d->nama_paket; ?>
                                                            </td>
                                                       </tr>
                                                       <tr style="overflow-x: auto;" type="hidden">
                                                            <th width="150">ID Soal</th>
                                                            <th width="20">:</th>
                                                            <td value="<?php echo $d->id_soal; ?>"
                                                                 name="id_soal_jawaban">
                                                                 <?php echo $d->id_soal; ?>
                                                            </td>
                                                       </tr>
                                                       <tr style="overflow-x: auto;" type="hidden">
                                                            <th width="150">Type Soal</th>
                                                            <th width="20">:</th>
                                                            <td value="<?php echo $d->type_soal; ?>" name="type_soal">
                                                                 <?php echo $d->type_soal; ?>
                                                            </td>
                                                       </tr> -->
                                                  </tbody>
                                             </table>
                                        </div>
                                   </div><br />

                                   <br />
                                   <div style="margin-left: 20px;">
                                        <hr>
                                        <div class="d-flex">
                                             <h4 class="font-weight-bold">Kuesioner Pengembangan
                                             </h4>
                                        </div>
                                        <p style="color: gray;">Isi pilihan kuesioner dibawah ini!</p>
                                        <hr>

                                        <?php
                                        $no = 0 + 1;
                                        if ($data_soal) {
                                        foreach ($data_soal as $d) {
                                        ?>
                                        <input style="width: 375px;" name="id_identitas"
                                             value="<?php echo $user->user_id; ?>" hidden>
                                        <input style="width: 375px;" name="nama_lengkap"
                                             value="<?php echo $user->user_namalengkap; ?>" hidden>
                                        <input style="width: 375px;" name="prodi"
                                             value="<?php echo $user->user_prodi; ?>" hidden>
                                        <input style="width: 375px;" name="sebagai"
                                             value="<?php echo $user->user_level; ?>" hidden>
                                        <input style="width: 375px;" name="gender"
                                             value="<?php echo $user->user_gender; ?>" hidden>
                                        <input style="width: 375px;" name="id_paket_jawaban"
                                             value="<?php echo $d->id_paket; ?>" hidden>
                                        <input style="width: 375px;" name="id_soal_kuesioner"
                                             value="<?php echo $d->id_soal; ?>" hidden>
                                        <input style="width: 375px;" name="type_soal"
                                             value="<?php echo $d->type_soal; ?>" hidden>
                                        <br />
                                        <div class="form-items mb-2">
                                             <td class="title"><?php echo $no++; ?>.
                                                  <?php echo $d->soal; ?>
                                             </td>
                                        </div>
                                        <table>
                                             <tbody>
                                                  <tr>

                                                       <!-- <td class="align-middle"
                                                            style="width: 70px; text-align: center;">
                                                            <div
                                                                 class="clearfix prettyradio labelright  blue has-pretty-child">
                                                                 <center>
                                                                      <input class="radio the_input_element"
                                                                           name="<?php echo "jawaban" . $d->id_soal; ?>"
                                                                           id=" radio3" for="radio3"
                                                                           value="<?php echo $d->cukup; ?>"
                                                                           style="display: block !important; color: rgb(50, 55, 60);"
                                                                           autocomplete="off" type="radio" required />
                                                                 </center>
                                                            </div>
                                                            <div
                                                                 class="clearfix prettyradio labelright  blue has-pretty-child">
                                                                 <h5 style="margin-top: 5px;">3</h5>
                                                            </div>
                                                       </td> -->
                                                       <td class="align-middle"
                                                            style="width: 70px; text-align: center;">
                                                            <div
                                                                 class="clearfix prettyradio labelright  blue has-pretty-child">
                                                                 <center>
                                                                      <input class="radio5 the_input_element"
                                                                           name="<?php echo "jawaban" . $d->id_soal; ?>"
                                                                           id="concern"
                                                                           value="<?php echo $d->sangat_tidak_setuju; ?>"
                                                                           style="display: block !important; color: rgb(50, 55, 60);"
                                                                           autocomplete="off" type="radio" required />
                                                                 </center>
                                                            </div>
                                                            <div
                                                                 class="clearfix prettyradio labelright  blue has-pretty-child">
                                                                 <h5 style="margin-top: 5px;">1
                                                                 </h5>
                                                            </div>
                                                       </td>

                                                       <td class="align-middle"
                                                            style="width: 70px; text-align: center;">
                                                            <div
                                                                 class="clearfix prettyradio labelright  blue has-pretty-child">
                                                                 <center>
                                                                      <input class="radio the_input_element"
                                                                           name="<?php echo "jawaban" . $d->id_soal; ?>"
                                                                           id="radio4"
                                                                           value="<?php echo $d->tidak_setuju; ?>"
                                                                           style="display: block !important; color: rgb(50, 55, 60);"
                                                                           autocomplete="off" type="radio" required />
                                                                 </center>
                                                            </div>
                                                            <div
                                                                 class="clearfix prettyradio labelright  blue has-pretty-child">
                                                                 <h5 style="margin-top: 5px;">2</h5>
                                                            </div>
                                                       </td>

                                                       <td class="align-middle"
                                                            style="width: 70px; text-align: center;">
                                                            <div
                                                                 class="clearfix prettyradio labelright  blue has-pretty-child">
                                                                 <center>
                                                                      <input class="radio the_input_element"
                                                                           name="<?php echo "jawaban" . $d->id_soal; ?>"
                                                                           id="radio2" for="radio2"
                                                                           value="<?php echo $d->setuju; ?>"
                                                                           style="display: block !important; color: rgb(50, 55, 60);"
                                                                           autocomplete="off" type="radio" required />
                                                                 </center>
                                                            </div>
                                                            <div
                                                                 class="clearfix prettyradio labelright  blue has-pretty-child">
                                                                 <h5 style="margin-top: 5px;">3</h5>
                                                            </div>
                                                       </td>

                                                       <td class="align-middle"
                                                            style="width: 70px; text-align: center;">
                                                            <div
                                                                 class="clearfix prettyradio labelright  blue has-pretty-child">
                                                                 <center>
                                                                      <input class="radio the_input_element"
                                                                           name="<?php echo "jawaban" . $d->id_soal; ?>"
                                                                           value="<?php echo $d->sangat_setuju; ?>"
                                                                           style="display: block !important; color: rgb(50, 55, 60);"
                                                                           autocomplete="off" type="radio" required />
                                                                 </center>
                                                            </div>
                                                            <div
                                                                 class="clearfix prettyradio labelright  blue has-pretty-child">
                                                                 <h5 style="margin-top: 5px;">4</h5>
                                                            </div>
                                                       </td>
                                                  </tr>
                                             </tbody>
                                        </table>
                                        <?php }
                                        } else { ?>
                                        <div class="logo">
                                             <h5><a><span>Tidak Ada Pertanyaan Kuesioner</span></a></h5>
                                        </div>
                                        <?php } ?>

                                   </div>
                                   <br />
                                   <button type="submit" style="height: 43px;margin-left: 20px;"
                                        class="btn btn-success">
                                        Next
                                   </button>

                              </form>
                         </div>
                         <?php echo form_close(); ?>
                    </div>
               </div>
          </div>
     </div>
</div>