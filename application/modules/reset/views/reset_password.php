<!doctype html>
<html lang="en-US">

<head>
     <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
     <title>Reset Password Email Template</title>
     <meta name="description" content="Reset Password Email Template.">
     <style type="text/css">
     a:hover {
          text-decoration: underline !important;
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
                                        style="max-width:670px;background:#fff; border-radius:3px; text-align:center;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);">
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
                                                       <form method="post"
                                                            action="<?php echo base_url('reset/password?hash='.$hash); ?>">
                                                            <div class="card-body">
                                                                 <div class="form-group">
                                                                      <label for="exampleInputEmail1">Current
                                                                           Password</label>
                                                                      <input type="password" class="form-control"
                                                                           name="currentPassword"
                                                                           id="exampleInputEmail1"
                                                                           placeholder="Current Password">
                                                                 </div>
                                                                 <div class="form-group">
                                                                      <label for="exampleInputPassword1">New
                                                                           Password</label>
                                                                      <input type="password" class="form-control"
                                                                           name="user_password"
                                                                           id="exampleInputPassword1"
                                                                           placeholder="Confirm new Password">
                                                                 </div>
                                                                 <div class="form-group">
                                                                      <label for="exampleInputPassword1">Cofirm New
                                                                           Password</label>
                                                                      <input type="password" class="form-control"
                                                                           id="exampleInputPassword1" name="cpassword"
                                                                           placeholder="Confirm new Password">
                                                                 </div>

                                                                 <div class="form-check">
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
                                                            </div>
                                                            <!-- /.card-body -->

                                                            <div class="card-footer">
                                                                 <button type="submit"
                                                                      class="btn btn-primary">Submit</button>
                                                            </div>
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
                                        &copy; <strong>www.repoluasi.com</strong></p>
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