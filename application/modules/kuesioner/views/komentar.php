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
                              <div class="row">
                                   <div class="col-md-6" style="overflow: auto;">
                                        <table class="table table-hover mb-0">
                                             <tbody>
                                                  <?php if ($this->user_level == "Super Admin"):?>
                                                  <tr style="overflow-x: auto;">
                                                       <th width="150">ID Admin</th>
                                                       <th width="20">:</th>
                                                       <td value="<?php echo $user->user_id; ?>" name="id_identitas">
                                                            <?php echo $user->user_id; ?>
                                                       </td>
                                                  </tr>
                                                  <?php elseif ($this->user_level == "Dosen"):?>
                                                  <tr style="overflow-x: auto;">
                                                       <th width="150">NIPY</th>
                                                       <th width="20">:</th>
                                                       <td value="<?php echo $user->user_nama; ?>" name="id_identitas">
                                                            <?php echo $user->user_nama; ?>
                                                       </td>
                                                  </tr>
                                                  <?php elseif ($this->user_level == "Mahasiswa"):?>
                                                  <tr style="overflow-x: auto;">
                                                       <th width="150">NIM</th>
                                                       <th width="20">:</th>
                                                       <td value="<?php echo $user->user_nama; ?>" name="id_identitas">
                                                            <?php echo $user->user_nama; ?>
                                                       </td>
                                                  </tr>
                                                  <?php else: ?>
                                                  <tr style="overflow-x: auto;">
                                                       <th width="150">ID Evaluator</th>
                                                       <th width="20">:</th>
                                                       <td value="<?php echo $user->user_id; ?>" name="id_identitas">
                                                            <?php echo $user->user_id; ?>
                                                       </td>
                                                  </tr>
                                                  <?php endif; ?>

                                                  <!-- <tr style="overflow-x: auto;">
                                                       <th width="150">ID</th>
                                                       <th width="20">:</th>
                                                       <td value="<?php echo $user->user_id; ?>" name="id_identitas">
                                                            <?php echo $user->user_id; ?>
                                                       </td>
                                                  </tr> -->
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
                                                       <th width="150">Sebagai</th>
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
                              <div style="margin-left: 20px;">
                                   <hr>
                                   <div class="d-flex">
                                        <h4 class="font-weight-bold">Saran Pengembangan
                                        </h4>
                                   </div>
                                   <p style="color: gray;width: 510px;">Berikan ulasan anda dibawah ini! isi ulasan
                                        dengan jujur
                                        selama
                                        anda menggunakannya, jika ada trouble pada sistem tuliskan pada kolom dibawah
                                        ini.</p>
                                   <hr>
                                   <form role="form">
                                        <?php
                                        $no = 0 + 1;
                                        if ($data_paket) {
                                        foreach ($data_paket as $d) {
                                        ?>
                                        <input id="inputIdentitas" name="id_identitas"
                                             value="<?php echo $user->user_id; ?>" hidden>
                                        <input id="inputNama" name="nama_lengkap"
                                             value="<?php echo $user->user_namalengkap; ?>" hidden>
                                        <input id="inputProdi" name="prodi" value="<?php echo $user->user_prodi; ?>"
                                             hidden>
                                        <input id="inputSebagai" name="sebagai" value="<?php echo $user->user_level; ?>"
                                             hidden>
                                        <input id="inputGender" name="gender" value="<?php echo $user->user_gender; ?>"
                                             hidden>
                                        <input id="inputPaket" name="id_paket_jawaban"
                                             value="<?php echo $d->id_paket; ?>" hidden>

                                        <div class="form-items mb-2">
                                             <td class="title">
                                                  <p>Berikan ulasan anda untuk sistem, guna pengembangan kedepannya.</p>
                                             </td>
                                        </div>

                                        <div class="form-floating mb-3">
                                             <textarea style="height: 150px;" class="form-control" id="inputJawaban"
                                                  name="jawaban" placeholder="Ketik Jawaban Anda" rows="15"
                                                  required></textarea>
                                        </div>
                                        <button id="submitBtn" type="submit" class="btn btn-success">Kirim
                                             Jawaban <span class="btn-label"> <i class="fa fa-back"></i></span></button>

                                        <?php }
                                        } else { ?>
                                        <div class="logo">
                                             <h5><a><span>Tidak Ada Pertanyaan</span></a></h5>
                                        </div>
                                        <?php } ?>


                                   </form>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>