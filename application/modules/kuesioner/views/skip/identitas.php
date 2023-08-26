<!doctype html>
<html>

<head>
     <meta charset='utf-8'>
     <meta name='viewport' content='width=device-width, initial-scale=1'>
     <title>Kuesioner Aplikasi | Repository</title>
     <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
     <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
     <link rel="shortcut icon" href="<?php echo base_url('assets/backend'); ?>/images/phb.png">
     <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
     <style>
     ::-webkit-scrollbar {
          width: 8px;
     }

     /* Track */
     ::-webkit-scrollbar-track {
          background: #fff;
     }

     /* Handle */
     ::-webkit-scrollbar-thumb {
          background: #888;
     }

     /* Handle on hover */
     ::-webkit-scrollbar-thumb:hover {
          background: #555;
     }

     html,
     body {
          height: 100%
     }

     @media screen and (max-width:680px) {
          body {
               background-color: #4052e4;
               display: grid;
               place-items: center
          }
     }

     .card {
          padding: 0px 15px;
          border-radius: 20px
     }

     .c1 {
          background-color: #fff;
          border-radius: 20px
     }

     a {
          margin: 0px;
          font-size: 13px;
          border-radius: 7px;
          text-decoration: none;
          color: black
     }

     a:hover {
          color: #e0726c;
          background-color: #fff2f1
     }

     .nav-link {
          padding: 1rem 1.4rem;
          margin: 0rem 0.7rem
     }

     .ac {
          font-weight: bold;
          color: #e0726c;
          font-size: 12px
     }

     input,
     button {
          width: 96%;
          background-color: #fff;
          border-radius: 8px;
          padding: 8px 17px;
          font-size: 13px;
          border: 1px solid #f5f0ef;
     }

     input: {
          text-decoration: none
     }

     .bt {
          background-color: #ff4133;
          border: 1px solid rgb(300, 200, 200)
     }

     form {
          margin-top: 70px
     }

     form>* {
          margin: 10px 0px
     }

     #forgot {
          margin: 0px -60px
     }

     #register {
          text-align: center
     }

     img {
          background-color: #fff
     }

     .wlcm {
          font-size: 30px
     }

     .sp1 {
          font-size: 5px
     }

     .sp1>span {
          background-color: #f0c3be
     }
     </style>
</head>

<body className='snippet-body'>

     <div class="container-fluid">
          <div class="row justify-content-center">
               <div class="col-12 col-sm-10">
                    <div class="card d-flex mx-auto my-5">
                         <!-- <?php
                         $no = 0 + 1;
                         if ($data_paket) {
                              foreach ($data_paket as $d) {
                         ?> -->
                         <div class="row">
                              <div class="col-md-5 col-sm-12 col-xs-12 c1 p-2">
                                   <div class="row mb-2 m-4" style="padding-left: 20px;">
                                        <img src="<?php echo base_url('assets/backend'); ?>/images/phb.png" width="40px"
                                             height="40px" style="margin-top: 15px;">
                                        <img src="<?php echo base_url('assets/auth/images/bg-repo.jpg') ?>"
                                             width="150px" height="70px" style="padding-left: 5px;" alt="">
                                   </div> <img
                                        src="https://jasastatistikbandung.com/wp-content/uploads/2020/04/Validitas-dan-Reliabilitas.jpg"
                                        width="350px" height="250px" class="mx-auto d-flex" alt="Teacher">
                                   <div class="row justify-content-center">
                                        <div class="w-75 mx-md-5 mx-1 mx-sm-2 mb-5 mt-4 px-sm-5 px-md-2 px-xl-1 px-2">
                                             <!-- <h1 class="wlcm"><?php echo $d->nama_paket; ?>
                                                  v.<?php echo $d->versi_apl_paket; ?></h1> -->
                                             <!-- <h2>Kuesioner Responden</h2> -->
                                             <p>Isi Identitas terlebih dahulu!</p> <span class="sp1"> <span
                                                       class="px-3 bg-danger rounded-pill"></span> <span
                                                       class="ml-2 px-1 rounded-circle"></span> <span
                                                       class="ml-2 px-1 rounded-circle"></span> </span>

                                        </div>
                                   </div>
                              </div>
                              <!-- 
                              <?php }
                              } else { ?>
                              <div class="logo">
                                   <h1><a><span>Tidak Ada Pertanyaan</span></a></h1>
                              </div>
                              <?php } ?> -->

                              <?php echo form_open(uri(2) == "edit" ? url(1, "update") : url(1, "tambah")); ?>
                              <form action="<?php echo uri(2) == "evaluasi_soal" ? url(1, "edit_soal") : url(1, "tambah/"); ?>"
                                   method="POST">
                                   <div class="col-md-12">
                                        <div style="margin:20px;margin-bottom: 100px;">
                                             <div class="d-flex">
                                                  <h4 class="font-weight-bold">Masukan Identitas Anda</h4>
                                             </div>
                                             <!-- <p style="color: gray;">Masukan data diri anda untuk Kuesioner
                                             <?php echo $d->nama_paket; ?>
                                             v<?php echo $d->versi_apl_paket; ?></p> -->
                                             <p style="color: gray;">Isi data identitas terlebih dahulu!</p>
                                             <br />
                                             <div class="input-group mb-3">
                                                  <input class="form-control" type="text" name="id_identitas"
                                                       placeholder="ID Identitas" required>
                                             </div>
                                             <div class="input-group mb-3">
                                                  <input class="form-control" type="text" name="nama_lengkap"
                                                       placeholder="Nama Lengkap" required>
                                             </div>
                                             <div class="input-group mb-3">
                                                  <select class="form-control" name="prodi"
                                                       style="background-color: white;" required>
                                                       <option>Pilih Prodi</option>
                                                       <option value="TI" <?php if (uri(1) == "tambah") ?>>
                                                            DIV Teknik Informatika</option>
                                                       <option value="KOM" <?php if (uri(1) == "tambah"); ?>>
                                                            DIII Teknik Komputer</option>
                                                       <option value="AK" <?php if (uri(1) == "tambah"); ?>>
                                                            DIII Akuntansi</option>
                                                       <option value="FARM" <?php if (uri(1) == "tambah"); ?>>
                                                            DIII Farmasi</option>
                                                       <option value="ASP" <?php if (uri(1) == "tambah"); ?>>
                                                            DIV Akuntansi Sektor Public</option>
                                                       <option value="PH" <?php if (uri(1) == "tambah"); ?>>
                                                            DIII Perhotelan</option>
                                                       <option value="BID" <?php if (uri(1) == "tambah"); ?>>
                                                            DIII Kebidanan</option>
                                                       <option value="PRW" <?php if (uri(1) == "tambah"); ?>>
                                                            DIII Perawat</option>
                                                  </select>
                                             </div>
                                             <div class="input-group mb-3">
                                                  <select class="form-control" name="sebagai"
                                                       style="background-color: white;" required>
                                                       <option>Pilih Sebagai</option>
                                                       <option value="Dosen" <?php if (uri(1) == "tambah"); ?>>
                                                            Dosen</option>
                                                       <option value="Mahasiswa" <?php if (uri(1) == "tambah") ?>>
                                                            Mahasiswa</option>
                                                       <!-- <option value="Admin Prodi" <?php if (uri(1) == "tambah"); ?>>
                                                            Admin Prodi</option>
                                                       <option value="Admin Keuangan" <?php if (uri(1) == "tambah"); ?>>
                                                            Admin Keuangan</option> -->
                                                  </select>
                                             </div>
                                             <div class="input-group mb-3">
                                                  <select class="form-control" name="gender"
                                                       style="background-color: white;" required>
                                                       <option>Pilih Gender</option>
                                                       <option value="L" <?php if (uri(1) == "tambah") ?>>
                                                            Laki-Laki</option>
                                                       <option value="P" <?php if (uri(1) == "tambah"); ?>>
                                                            Perempuan</option>
                                                  </select>
                                             </div><br />
                                             <div class="d-flex">
                                                  <h4 class="font-weight-bold">Pertanyaan</h4>
                                             </div>
                                             <p style="color: gray;">Isi pertanyan kuesioner dibawah ini!</p>
                                             <?php
                                             $no = 0 + 1;
                                             if ($data_soal) {
                                                  foreach ($data_soal as $d) {
                                             ?>
                                             <input style="width: 375px;" id="id_paket_jawaban" name="id_paket_jawaban"
                                                  value="<?php echo $d->id_paket; ?>" type="hidden">
                                             <input style="width: 375px;" id="id_soal_jawaban" name="id_soal_jawaban"
                                                  value="<?php echo $d->id_soal; ?>" type="hidden">
                                             <input style="width: 375px;" id="hasil" name="hasil" value="['Baik']"
                                                  type="hidden">

                                             <div class="form-items">
                                                  <td class="title"><?php echo $no++; ?>.
                                                       <?php echo $d->soal; ?>
                                                  </td>
                                                  <br />
                                                  <td>
                                             </div>

                                             <table>
                                                  <tbody>
                                                       <tr>
                                                            <td class="align-middle">
                                                                 <div>
                                                                      <input id="jawaban" class="from-control"
                                                                           style="height: 40px; width: 375px;border-radius: 6px;"
                                                                           name="<?php echo "jawaban" . $d->id_soal; ?>"
                                                                           rows="15" placeholder="Ketik Jawaban Anda.."
                                                                           required></input>
                                                                 </div>
                                                            </td>
                                                       </tr>
                                                  </tbody>
                                             </table><br />

                                             <?php }
                                             } else { ?>
                                             <div class="logo">
                                                  <h1><a><span>Tidak Ada Pertanyaan</span></a></h1>
                                             </div>
                                             <?php } ?>

                                             <button class="form-control btn-success">Kirim Jawaban</button>
                                        </div>

                                   </div>
                              </form>
                              <?php echo form_close(); ?>
                         </div>
                    </div>
               </div>
          </div>
     </div>

     <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'>
     </script>
     <script type='text/javascript' src='#'></script>
     <script type='text/javascript' src='#'></script>
     <script type='text/javascript' src='#'></script>
     <script type='text/javascript'>
     #
     </script>
     <script type='text/javascript'>
     var myLink = document.querySelector('a[href="#"]');
     myLink.addEventListener('click', function(e) {
          e.preventDefault();
     });
     </script>
</body>

</html>