<head>
     <title>Edit Profil | Sistem e-Repo</title>
</head>
<div class="container-fluid">
     <!-- Profil Berhasil -->
     <?php if ($this->session->flashdata('profil_berhasil')){ ?>
     <div class="alert alert-success alert-dismissible fade show" data-dismiss="alert" aria-label="Close" role="alert">
          <span class="btn-label"></span><?php echo $this->session->flashdata('profil_berhasil'); ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
          </button>
     </div>
     <?php } ?>
     <!-- Profil Gagal -->
     <?php if ($this->session->flashdata('profil_gagal')){ ?>
     <div class="alert alert-danger alert-dismissible fade show" data-dismiss="alert" aria-label="Close" role="alert">
          <span class="btn-label"></span><?php echo $this->session->flashdata('profil_gagal'); ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
          </button>
     </div>
     <?php } ?>

     <!--  Profil dan Password Berhasil -->
     <?php if ($this->session->flashdata('profil_pw_berhasil')){ ?>
     <div class="alert alert-success alert-dismissible fade show" data-dismiss="alert" aria-label="Close" role="alert">
          <span class="btn-label"></span><?php echo $this->session->flashdata('profil_pw_berhasil'); ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
          </button>
     </div>
     <?php } ?>
     <!-- password tak sama -->
     <?php if ($this->session->flashdata('pw_tak_sama')){ ?>
     <div class="alert alert-warning alert-dismissible fade show" data-dismiss="alert" aria-label="Close" role="alert">
          <span class="btn-label"></span><?php echo $this->session->flashdata('pw_tak_sama'); ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
          </button>
     </div>
     <?php } ?>
     <!-- password salah -->
     <?php if ($this->session->flashdata('pw_salah')){ ?>
     <div class="alert alert-danger alert-dismissible fade show" data-dismiss="alert" aria-label="Close" role="alert">
          <span class="btn-label"></span><?php echo $this->session->flashdata('pw_salah'); ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
          </button>
     </div>
     <?php } ?>

     <div>
          <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
               aria-label="breadcrumb">
               <ol class="breadcrumb bg-primary">
                    <li class="breadcrumb-item"><a href="<?php echo base_url('dasbor'); ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Profil
                    </li>
               </ol>
          </nav>
     </div>
     <form action="<?php echo base_url('profil/update'); ?>" method="POST" enctype="multipart/form-data">

          <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>"
               value="<?php echo $this->security->get_csrf_hash(); ?>">

          <div class="row push">
               <div class="col-md-4">
                    <div class="card">
                         <div class="card-body">
                              <!-- <?php echo $this->session->flashdata('notifikasi'); ?> -->
                              <center>
                                   <img class="avatar-img rounded" style="width: 250px; height: 250px;" type="file"
                                        alt="poltek"
                                        src="<?php echo base_url().'assets/images/'.$edit->user_foto; ?>" /><br />
                              </center>

                              <div class="mb-2"><br />
                                   <label class="form-label">Profile Photo</label>
                                   <input type="file" class="form-control" name="file_foto" value=""><br />
                                   <p>Untuk mengubah foto profil, ukuran file harus dibawah 2MB. Terimakasih<br />
                                   </p>
                              </div>
                         </div>
                    </div>
               </div>

               <div class="col-md-8">
                    <div class="card">
                         <div class="card-body">
                              <div class="mb-2">
                                   <label class="form-label">Username</label>
                                   <input type="text" class="form-control" name="email"
                                        value="<?php echo $edit->email; ?>">
                              </div>
                              <div class="mb-2">
                                   <label class="form-label">Full Name</label>
                                   <input type="text" class="form-control" name="nama_lengkap"
                                        value="<?php echo $edit->user_namalengkap; ?>">
                              </div>
                              <div class="mb-2">
                                   <label class="form-label">Current Password</label>
                                   <input type="password" class="form-control" name="password_sekarang">
                              </div>
                              <div class="mb-2">
                                   <label class="form-label">New Password</label>
                                   <input type="password" class="form-control" name="password_baru_1">
                              </div>
                              <div class="mb-2">
                                   <label class="form-label">Repeat New Password</label>
                                   <input type="password" class="form-control" name="password_baru_2">
                              </div>

                              <div class="text-center">
                                   <button type="submit" class="btn btn-success">Update</button>
                                   <a href="<?php echo base_url("dasbor"); ?>">
                                        <button type="button" class="btn btn-danger">Cancel</button>
                                   </a>
                              </div>
                         </div> <!-- end col -->
                    </div>
               </div>
          </div>
     </form>
</div>
<script>
$(window).load(function() {
     $("#preloader").delay(3000).fadeOut("slow");
});
</script>
<script type="text/javascript">
function myFunction() {
     var x = document.getElementById("inputPassword");
     if (x.type === "password") {
          x.type = "text";
     } else {
          x.type = "password";
     }
}
</script>