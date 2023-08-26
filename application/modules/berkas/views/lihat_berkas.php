<head>
     <title>Data Berkas | Sistem e-Repo</title>
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
                    <a href="<?php echo base_url('berkas'); ?>">Bank Berkas
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
                    <form action="<?php echo uri(2) == "edit" ? url(1, "update") : url(1, "tambah"); ?>" method="POST">
                         <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>"
                              value="<?php echo $this->security->get_csrf_hash(); ?>">
                         <?php
                              $no=0+1;
                              if ($data_berkas){
                              foreach ($data_berkas as $d){ 
                         ?>

                         <div class="row">
                              <form action="<?php echo uri(2) == "edit" ? url(1, "update") : url(1, "tambah"); ?>"
                                   method="POST">
                                   <input type="hidden" name="id_m"
                                        value="<?php echo uri(2) == "edit" ? enkrip($d->id) : ""; ?>">
                                   <div class="col-md-12" style="overflow: auto;">
                                        <div class="box-header with-border">
                                             <h4 class="box-title" style="margin-left: 10px;">Data Berkas
                                             </h4>
                                        </div><br />
                                        <table class="table table-hover mb-0">
                                             <tbody>
                                                  <!-- <tr>
                                                       <td width="150">Kode Berkas</td>
                                                       <td width="20">:</td>
                                                       <td><?php $inisial = substr($d->judul,0,4);
                                                                      echo $inisial;?>_<?php echo $d->id_m; ?>
                                                       </td>
                                                  </tr>
                                                  <tr>
                                                       <td width="150">Nama Berkas</td>
                                                       <td width="20">:</td>
                                                       <td style="overflow-x: auto;">
                                                            <?php echo $d->judul; ?>
                                                       </td>
                                                  </tr> -->
                                                  <tr>
                                                       <td width="150">Manajerial</td>
                                                       <td width="20">:</td>
                                                       <td><a style="text-decoration: none;"
                                                                 href="<?php echo base_url('manajerial/lihat/') . uri(3); ?>">Lihat
                                                                 Manajerial</a>
                                                       </td>
                                                  </tr>
                                                  <tr>
                                                       <td>Nama Sistem</td>
                                                       <td>:</td>
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
                                                       <td>Tanggal</td>
                                                       <td>:</td>
                                                       <td><?php echo $d->tgl_publish; ?>
                                                       </td>
                                                  </tr>
                                                  <tr>
                                                       <td>Link Berkas</td>
                                                       <td>:</td>
                                                       <td>
                                                            <a target="_blank"
                                                                 href="<?php echo $d->link_berkas; ?>">Klik
                                                                 Berkas</a>
                                                       </td>
                                                  </tr>
                                                  <!-- <tr>
                                                       <td>Download</td>
                                                       <td>:</td>
                                                       <td>
                                                            <a
                                                                 href="<?php echo base_url().'berkas/download/'.$d->id_m; ?>">
                                                                 <span class="badge bg-success">
                                                                      <i class="fas fa-download text-white">
                                                                      </i>
                                                                      <span>
                                                                      </span>
                                                                 </span>
                                                            </a>
                                                       </td>
                                                  </tr> -->
                                             </tbody>

                                        </table>
                                   </div>
                              </form>
                              <div class=""><br />
                                   <a href="<?php echo base_url('berkas'); ?>">
                                        <button style="margin-left: 35px;" type="button" class="btn btn-warning"><span
                                                  class="btn-label"><i class=" fas fa-backward"></i></span>
                                             Kembali</button>
                                   </a>
                              </div><br />
                         </div>

                         <?php }} else { ?>
                         <td class="text-center" colspan="6">Tidak ada data</td>
                         <?php } ?>
               </div>
          </div>
     </div>
</div>
</div>
</div>
</div>