<head>
     <title>Manajerial | Sistem e-Repo</title>
</head>
<div>
     <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
          aria-label="breadcrumb">
          <ol class="breadcrumb bg-primary">
               <li class="breadcrumb-item">
                    <a href="<?php echo base_url('dasbor'); ?>">Home
                    </a>
               </li>
               <li class="breadcrumb-item" aria-current="page">
                    <a href="<?php echo base_url('manajerial'); ?>">Manajerial
                    </a>
               </li>
               <li class="breadcrumb-item active" aria-current="page">Detail
               </li>
          </ol>
     </nav>
</div>
<div class="card">
     <div class="container-fluid">
          <div class="card">
               <div class="card-body">
                    <form action="<?php echo uri(2) == "edit" ? url(1, "update") : url(1, "edit"); ?>" method="POST">
                         <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>"
                              value="<?php echo $this->security->get_csrf_hash(); ?>">
                         <?php
                                   if ($data_manajemen){
                                   foreach ($data_manajemen as $d){ 
                              ?>

                         <div class="row">
                              <form action="<?php echo uri(2) == "edit" ? url(1, "update") : url(1, "edit"); ?>"
                                   method="POST">
                                   <input type="hidden" name="id_m"
                                        value="<?php echo uri(2) == "edit" ? enkrip($d->id_m) : ""; ?>">
                                   <div class="col-md-12">
                                        <div class="box-header with-border">
                                             <h4 class="box-title" style="margin-left: 10px;">Data
                                                  Sistem</h4>
                                        </div><br />
                                        <div style="overflow: auto;">
                                             <table class="table table-hover mb-0">
                                                  <tbody>
                                                       <tr>
                                                            <td width="150">Kode Sistem</td>
                                                            <td width="20">:</td>
                                                            <td><?php $inisial = substr($d->nama_apl,0,3);
                                                        echo $inisial;?>_<?php echo $d->id_m; ?>_<?php echo $d->versi_apl; ?>
                                                            </td>
                                                       </tr>
                                                       <tr>
                                                            <td width="150">Nama Sistem</td>
                                                            <td width="20">:</td>
                                                            <td><?php echo $d->nama_apl; ?>
                                                                 v<?php echo $d->versi_apl; ?>
                                                            </td>
                                                       </tr>
                                                       <tr>
                                                            <td>Versi Sistem</td>
                                                            <td>:</td>
                                                            <td>v <?php echo $d->versi_apl; ?>
                                                            </td>
                                                       </tr>
                                                       <tr>
                                                            <td>Link Berkas</td>
                                                            <td>:</td>
                                                            <td><a style="text-decoration: none;"
                                                                      href="#"><?php echo $d->link_berkas; ?>
                                                                 </a>
                                                            </td>
                                                       </tr>
                                                       <tr>
                                                            <td>Penyedia</td>
                                                            <td>:</td>
                                                            <td><?php echo $d->penyedia_apl; ?>
                                                            </td>
                                                       </tr>
                                                       <tr>
                                                            <td>Tanggal Terbit</td>
                                                            <td>:</td>
                                                            <td><?php echo $d->tgl_publish; ?>
                                                            </td>
                                                       </tr>
                                                       <tr>
                                                            <td>Lihat Berkas</td>
                                                            <td>:</td>
                                                            <td>
                                                                 <a style="text-decoration: none;"
                                                                      href="<?php echo base_url('berkas/lihat/'). uri(3); ?>">Lihat
                                                                      Berkas</a>
                                                            </td>
                                                       </tr>
                                                       <!-- <tr>
                                                            <td>Download File</td>
                                                            <td>:</td>
                                                            <td>
                                                                 <a
                                                                      href="<?php echo base_url().'assets/upload/'.$d->id_m; ?>">
                                                                      <span class="badge bg-success">
                                                                           <i class="fas fa-download"></i> Download
                                                                      </span>
                                                                 </a>
                                                            </td>
                                                       </tr> -->
                                                  </tbody>
                                             </table>

                                        </div><br />
                                        <div style="margin-left: 10px;">
                                             <!-- <a href="<?php echo url(1) .'/edit/'. enkrip($d->id_m); ?>">
                                                  <button style="height: 43px;" type="button"
                                                       class="btn btn-danger"><span class="btn-label"><i
                                                                 class=" fas fa-edit"></i></span>
                                                       Edit</button>
                                             </a> -->
                                             <a href="<?php echo base_url('manajerial'); ?>">
                                                  <button style="height: 43px;margin-left: 5px;" type="button"
                                                       class="btn btn-warning"><span class="btn-label"><i
                                                                 class=" fas fa-backward"></i></span>
                                                       Kembali</button>
                                             </a>
                                        </div>
                                   </div>
                              </form>
                              <?php }} else { ?>
                              <td class="text-center" colspan="6">Tidak ada data</td>
                              <?php } ?>
                    </form>
               </div>
          </div>
     </div>
</div>
</div>