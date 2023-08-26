<!doctype html>
<html>

<head>
     <meta charset='utf-8'>
     <meta name='viewport' content='width=device-width, initial-scale=1'>
     <title>Pertanyaan Kuesioner Aplikasi | Repository</title>
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
          border: 1px solid #000000;
          color: #000
     }

     input: {
          text-decoration: none
     }

     .bt {
          background-color: #ff4133;
          border: 1px solid rgb(300, 200, 200)
     }

     form {
          margin-top: 10px
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

<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
// $(document).ready(function() {
//      $("#Save").click(function() {
//           var hasil = new Object();
//           hasil.id_respon = $('#id_respon').val();
//           hasil.id_identitas = $('#id_identitas').val();
//           hasil.id_paket_jawaban = $('#id_paket_jawaban').val();
//           hasil.id_soal_jawaban = $('#id_soal_jawaban').val();
//           hasil.jawaban = $('#jawaban').val();
//           hasil.klasifikasi = $('#klasifikasi').val();
//           hasil.tgl = $('#tgl').val();
//           $.post('http://127.0.0.1:5000/klasifikasi', person, function(data) {
//                console.log(data);
//           });
//      });
// });
$(document).ready(function(e) {
     $('#kirim').on('click', function() {
          var form_data = new FormData();

          var id_respon = form_data["ID Respon"];
          var id_identitas = form_data["ID Identitas"];
          var id_paket_jawaban = form_data["ID Paket"];
          var id_soal_jawaban = form_data["ID Soal"];
          var jawaban = form_data["Jawaban"];
          var klasifikasi = form_data["Klasifikasi"];
          var datecreated = form_data["tanggal"];

          // form_data{
          //      'id_respon': form_data.id_respon,
          //      'id_identitas': form_data.id_identitas,
          //      'id_paket_jawaban': form_data.id_paket_jawaban,
          //      'id_soal_jawaban': form_data.id_soal_jawaban,
          //      'jawaban': form_data.jawaban,
          //      'klasifikasi': form_data.klasifikasi,
          //      'datecreated': form_data.datecreated
          // }

          $.ajax({
               type: "POST",
               url: 'http://localhost:5000/klasifikasi',
               dataType: 'json', // what to expect back from server
               cache: false,
               contentType: false,
               processData: false,
               data: form_data,
               success: function(response) { // display success response
                    $('#id_respon').html(response["ID Respon"]);
                    $('#id_identitas').html(response["ID Identitas"]);
                    $('#id_paket_jawaban').html(response["ID Paket"]);
                    $('#id_soal_jawaban').html(response["ID Soal"]);
                    $('#jawaban').html(response["Jawaban"]);
                    $('#klasifikasi').html(response["Klasifikasi"]);
                    $('#datecreated').html(response["Tanggal"]);
               },
               error: function(response) {
                    // $('#loading').hide();
                    $('#msg').html(
                         '<div style="color: red;">Gagal kirim data!</div>'
                    ); // display error response
               }
          });

     });
});
</script>

<!-- <script type="text/javascript">
$(document).ready(function(e) {
     $('#upload').on('click', function() {
          var form_data = new FormData();

          var id_respon = form_data["ID Respon"];
          var id_identitas = form_data["ID Identitas"];
          var id_paket_jawaban = form_data["ID Paket"];
          var id_soal_jawaban = form_data["ID Soal"];
          var jawaban = form_data["Jawaban"];
          var klasifikasi = form_data["Klasifikasi"];
          var datecreated = form_data["Datecreated"];

          // var notif = form_data["message"];
          // var benar = form_data["message_true"];

          form_data.append({
               'id_respon': form_data.id_respon,
               'id_identitas': form_data.id_identitas,
               'id_paket_jawaban': form_data.id_paket_jawaban,
               'id_soal_jawaban': form_data.id_soal_jawaban,
               'jawaban': form_data.jawaban,
               'klasifikasi': form_data.klasifikasi,
               'datecreated': form_data.datecreated
          });

          // $('#loading').html(
          //      '<div style="color: blue;">Sedang memproses gambar...</div>');

          $.ajax({
               type: 'POST',
               url: '{{request.host_url}}/klasifikasi', // point to server-side URL
               // url: 'https://simolang.loophole.site/api/tilang',
               dataType: 'json', // what to expect back from server
               cache: false,
               contentType: false,
               processData: false,
               data: form_data,

               success: function(response) { // display success response
                    $('#loading').hide();

                    $('#id_respon').html(response["ID Respon"]);
                    $('#id_identitas').html(response["ID Identitas"]);
                    $('#id_paket_jawaban').html(response["ID Paket"]);
                    $('#id_soal_jawaban').html(response["ID Soal"]);
                    $('#jawaban').html(response["Jawaban"]);
                    $('#klasifikasi').html(response["Klasifikasi"]);
                    $('#datecreated').html(response["Tanggal"]);

                    // $('#message_true').html(response["message_true"]);

                    // $('#message').html(response["message"]);

                    // $('#berhasil').html(
                    //      '<div style="color: green;">Data tilang berhasil masuk!</div>'
                    // );

               },
               error: function(response) {
                    $('#loading').hide();
                    $('#msg').html(
                         '<div style="color: red;">Gambar gagal diproses, cek kembali!</div>'
                    ); // display error response
               }
          });
     });
});
</script> -->

<body className='snippet-body'>

     <div class="container-fluid">
          <div class="row justify-content-center">
               <div class="col-12 col-sm-10">
                    <div class="card d-flex mx-auto my-5">

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
                                             <h1 class="wlcm">Pertanyaan Kuesioner</h1>
                                             <p>Isi jawaban terlebih dahulu!</p> <span class="sp1"> <span
                                                       class="px-3 bg-danger rounded-pill"></span> <span
                                                       class="ml-2 px-1 rounded-circle"></span> <span
                                                       class="ml-2 px-1 rounded-circle"></span> </span>

                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-6"><br />
                                   <div style="margin:20px;padding-left: 20px;">
                                        <div class="d-flex">
                                             <h4 class="font-weight-bold">Kuesioner Evaluasi</h4>
                                        </div>
                                        <p style="color: gray;">Isi kuesioner berikut dengan jujur</p>
                                   </div>
                                   <div class="container-fluid" style="margin:5px;">
                                        <!-- <div class="card"> -->
                                        <div class="card-body">
                                             <div class="row">
                                                  <div class="col-md-12">
                                                       <?php echo form_open(uri(2) == "edit" ? url(1, "update") : url(1, "tambah_soal")); ?>
                                                       <form action="<?php echo uri(2) == "evaluasi_soal" ? url(1, "edit_soal") : url(1, "tambah_soal/"); ?>"
                                                            method="POST">

                                                            <?php
                                                                 $no = 0 + 1;
                                                                 if ($data_soal) {
                                                                 foreach ($data_soal as $d) {
                                                            ?>
                                                            <div class="form-items">
                                                                 <td class="title"><?php echo $no++; ?>.
                                                                      <?php echo $d->soal; ?>
                                                                 </td>
                                                                 <br />
                                                                 <td>
                                                            </div>

                                                            <input style="width: 375px;" id="id_respon" name="id_respon"
                                                                 value="<?php echo $d->id_respon; ?>" readonly>
                                                            <input style="width: 375px;" id="id_identitas"
                                                                 name="id_identitas"
                                                                 value="<?php echo $d->id_identitas; ?>" readonly>
                                                            <input style="width: 375px;" id="id_paket_jawaban"
                                                                 name="id_paket_jawaban"
                                                                 value="<?php echo $d->id_paket; ?>" readonly>
                                                            <input style="width: 375px;" id="id_soal_jawaban"
                                                                 name="id_soal_jawaban"
                                                                 value="<?php echo $d->id_soal; ?>" readonly>
                                                            <input style="width: 375px;" id="klasifikasi"
                                                                 name="klasifikasi"
                                                                 placeholder="Ini kolom hasil klasifikasi">
                                                            <input style="width: 375px;" id="datecreated" name="tanggal"
                                                                 placeholder="Tanggal Jawaban">

                                                            <table>
                                                                 <tbody>
                                                                      <tr>
                                                                           <td class="align-middle">
                                                                                <div>
                                                                                     <input id="jawaban"
                                                                                          class="from-control"
                                                                                          style="height: 40px; width: 375px;border-radius: 6px;"
                                                                                          name="<?php echo "jawaban" . $d->id_soal; ?>"
                                                                                          rows="15"
                                                                                          placeholder=" Ketik Jawaban Anda.."
                                                                                          required></input>
                                                                                </div>
                                                                           </td>
                                                                      </tr>
                                                                 </tbody>
                                                            </table>

                                                            <?php }
                                                            } else { ?>
                                                            <div class="container"
                                                                 style="background-color: #fff;height: 150px;border-radius: 10px; overflow-x: auto;">
                                                                 <div style="margin-left: 20px; margin-right: 25px;">
                                                                      <br />
                                                                      <p class="form-title"><br />Tidak Ada Data
                                                                           Kuesioner
                                                                      </p>
                                                                 </div>
                                                            </div><br />
                                                            <?php } ?>
                                                            <div class="form-group"><br />
                                                                 <button id="kirim" type="submit"
                                                                      class="form-button btn btn-success"
                                                                      style="width: 90%;radius: 0px;"
                                                                      required>Selesai</button>
                                                            </div>
                                                       </form><br />
                                                       <?php echo form_close(); ?>
                                                  </div>
                                             </div>
                                        </div>
                                        <!-- </div> -->
                                   </div>
                              </div>


                         </div>
                    </div>
               </div>
          </div>
     </div>

     <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'>
     </script>
     <!-- <script type='text/javascript'>
     var myLink = document.querySelector('a[href="#"]');
     myLink.addEventListener('click', function(e) {
          e.preventDefault();
     });
     </script> -->

     <script src="assets/frontend/template/vendor/jquery/jquery.min.js"></script>
     <script src="assets/frontend/template/js/main.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
     <script>
     const copyBtn = document.getElementById('copyBtn')
     const copyText = document.getElementById('copyText')

     copyBtn.onclick = () => {
          copyText.select(); // Selects the text inside the input
          document.execCommand('copy'); // Simply copies the selected text to clipboard 
          Swal.fire({ //displays a pop up with sweetalert
               icon: 'success',
               title: 'Berhasil menyimpan jawaban',
               showConfirmButton: false,
               timer: 10000
          });
     }
     </script>
</body>

</html>
<!-- JS -->