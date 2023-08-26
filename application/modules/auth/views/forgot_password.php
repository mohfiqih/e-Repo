<!doctype html>
<html lang="en-US">

<head>
     <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Forgot Password | Sistem e-Repo</title>
     <meta name="description" content="Reset Password Email Template.">
     <style type="text/css">
     a:hover {
          text-decoration: underline !important;
     }

     @media screen and (max-width: 600px) {
          /* Adjust the styles for smaller screens (mobile devices) */
          /* For example, you can change the font size, padding, and margins */

          table {
               width: 100% !important;
               /* Force table to occupy full width */
          }

          /* Center align the content */
          td {
               text-align: center;
          }

          /* Increase the font size for headings */
          h3 {
               font-size: 24px !important;
          }

          /* Adjust the spacing between elements */
          td[class="spacer"] {
               height: 20px !important;
          }
     }

     body {
          background-color: #ffffff;
          /* Set background color to white */
          margin: 0;
          /* Remove any default margin */
          padding: 0;
          /* Remove any default padding */
     }

     /* Center the email content horizontally and vertically */
     html,
     body {
          height: 100%;
     }

     body {
          display: flex;
          justify-content: center;
          align-items: center;
     }
     </style>
     <link rel="shortcut icon" href="<?php echo base_url('assets/backend'); ?>/images/phb.png" />
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="<?php echo base_url('assets/auth/login-form/css/bootstrap.min.css') ?>">
</head>

<body marginheight="0" topmargin="0" marginwidth="0" style="margin: 0px; background-color: #f2f3f8;" leftmargin="0">
     <!--100% body table-->
     <table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="#f2f3f8"
          style="@import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); font-family: 'Open Sans', sans-serif;">
          <tr>
               <td>
                    <table style="background-color: #f2f3f8; max-width:670px;  margin:0 auto;" width="100%" border="0"
                         align="center" cellpadding="0" cellspacing="0">
                         <tr>
                              <td style="height:80px;">&nbsp;</td>
                         </tr>
                         <tr>
                              <td style="text-align:center;">
                                   <a href="https://rakeshmandal.com" title="logo" target="_blank">
                                        <img width="150"
                                             src="<?php echo base_url('assets/auth/images/logo-long.png') ?>"
                                             title="logo" alt="logo">
                                   </a>
                              </td>
                         </tr>
                         <tr>
                              <td style="height:20px;">&nbsp;</td>
                         </tr>
                         <tr>
                              <td>
                                   <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0"
                                        style="max-width:400px;background:#fff; border-radius:3px; text-align:center;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);">
                                        <tr>
                                             <td style="height:40px;">&nbsp;</td>
                                        </tr>
                                        <tr>
                                             <td style="padding:0 35px;">
                                                  <h3
                                                       style="color:#1e1e2d; font-weight:500; margin:0;font-size:32px;font-family:'Rubik',sans-serif;">
                                                       Reset Password</h3>
                                                  <span
                                                       style="display:inline-block; vertical-align:middle; margin:29px 0 26px; border-bottom:1px solid #cecece; width:100px;"></span>
                                                  <p style="color:#455056; font-size:15px;line-height:24px; margin:0;">
                                                       We cannot simply send you your old password. A unique link
                                                       to
                                                       reset your
                                                       password has been generated for you. To reset your password,
                                                       click the
                                                       following link and follow the instructions.
                                                  </p><br />
                                                  <center>
                                                       <!-- <?= $this->session->flashdata('message'); ?> -->
                                                       <?= $this->session->flashdata('email_sent'); ?>
                                                       <form action="<?php echo base_url('auth/forgotPassword') ?>"
                                                            method="post">
                                                            <input type="hidden"
                                                                 name="<?php echo $this->security->get_csrf_token_name(); ?>"
                                                                 value="<?php echo $this->security->get_csrf_hash(); ?>">

                                                            <!-- <input type="email" class="form-control" name="email"
                                                                 style="width: 250px;" placeholder="Masukan Email anda"
                                                                 value="<?= set_value('email'); ?>" />
                                                            <?= form_error('email', '<small class="text-danger" pl-3>', '</small>'); ?><br /> -->

                                                            <div class="input-group mb-3">
                                                                 <input type="email" name="email" class="form-control"
                                                                      placeholder="Email" required>
                                                                 <div class="input-group-append">
                                                                      <div class="input-group-text">
                                                                           <span class="fas fa-mail"></span>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                            <div class="icheck-primary">
                                                                 <?php if($this->session->userdata('error')) { ?>
                                                                 <p class="text-danger">
                                                                      <?=$this->session->userdata('error')?></p>
                                                                 <?php } ?>
                                                                 <?php if($this->session->userdata('success')) { ?>
                                                                 <p class="text-success">
                                                                      <?=$this->session->userdata('success')?></p>
                                                                 <?php } ?>

                                                                 <p class="text-danger">
                                                                      <?php echo validation_errors(); ?></p>
                                                            </div>

                                                            <button type="submit"
                                                                 class="btn btn-primary btn-block">Reset
                                                                 Password</button>
                                                       </form>
                                                  </center>
                                             </td>
                                        </tr>
                                        <tr>
                                             <td style="height:40px;">&nbsp;</td>
                                        </tr>
                                   </table>
                              </td>
                         <tr>
                              <td style="height:20px;">&nbsp;</td>
                         </tr>
                         <tr>
                              <td style="text-align:center;">
                                   <p
                                        style="font-size:14px; color:rgba(69, 80, 86, 0.7411764705882353); line-height:18px; margin:0 0 0;">
                                        &copy; <strong>www.sistem-evaluasi.e-repository.my.id</strong></p>
                              </td>
                         </tr>
                         <tr>
                              <td style="height:80px;">&nbsp;</td>
                         </tr>
                    </table>
               </td>
          </tr>
     </table>
     <!--/100% body table-->
</body>

</html>