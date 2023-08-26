<head>
     <title>Bank Berkas | Repository & Kuesioner Online</title>
     <div>
          <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
               aria-label="breadcrumb">
               <ol class="breadcrumb bg-primary">
                    <li class="breadcrumb-item"><a href="<?php echo base_url('dasbor'); ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">
                         <a href="<?php echo base_url('bankberkas'); ?>">Bank Berkas
                         </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Tambah Berkas
                    </li>
               </ol>
          </nav>
     </div>
</head>

<div class="card">

     <!-- Tambah -->
     <div class="container-fluid">
          <div class="row">
               <div class="col-12">
                    <div class="card">
                         <div class="card-body">
                              <h4 class="header-title">File Upload</h4>
                              <p class="sub-header">
                                   DropzoneJS is an open source library that provides drag’n’drop file
                                   uploads
                                   with
                                   image previews.
                              </p>
                              <?= form_open_multipart('bankberkas/prosesUpload'); ?>
                              <form method="post" enctype="multipart/form-data" class="dropzone" id="myAwesomeDropzone"
                                   data-plugin="dropzone" data-previews-container="#file-previews"
                                   data-upload-preview-template="#uploadPreviewTemplate">
                                   <!-- <a href=""> -->
                                   <div class="form-control" style="height: 200px;">
                                        <input type="file" name="berkas[]" multiple required>

                                        <center>
                                             <div class="dz-message needsclick">
                                                  <i class="h1 text-muted dripicons-cloud-upload"></i>
                                                  <h3>Drop files here or click to upload.</h3>
                                                  <span class="text-muted font-13">(Type berkas gif, jpg,
                                                       png,
                                                       pdf,
                                                       doc,
                                                       docx,
                                                       xlsx, zip, rar)
                                             </div>
                                        </center>
                                   </div>
                                   <!-- </a> -->
                                   <div class="text-center">
                                        <button type="submit" class="btn btn-success third">Tambah</button>
                                        <a href="<?php echo base_url("bankberkas"); ?>">
                                             <button type="button" class="btn btn-danger">Batal</button>
                                        </a>
                                   </div>
                              </form>

                              <?= form_close(); ?>
                              <!-- Preview -->
                              <div class="dropzone-previews mt-3" id="file-previews"></div>

                         </div> <!-- end card-body-->

                    </div> <!-- end card-->
               </div><!-- end col -->
          </div>
          <!-- end row -->


          <!-- file preview template -->
          <div class="d-none" id="uploadPreviewTemplate">
               <div class="card mt-1 mb-0 shadow-none border">
                    <div class="p-2">
                         <div class="row align-items-center">
                              <div class="col-auto">
                                   <img data-dz-thumbnail src="#" class="avatar-sm rounded bg-light" alt="">
                              </div>
                              <div class="col ps-0">
                                   <a href="javascript:void(0);" class="text-muted fw-bold" data-dz-name></a>
                                   <p class="mb-0" data-dz-size></p>
                              </div>
                              <div class="col-auto">
                                   <!-- Button -->
                                   <a href="" class="btn btn-link btn-lg text-muted" data-dz-remove>
                                        <i class="dripicons-cross"></i>
                                   </a>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
     <!-- End Tambah -->
</div>
</div>
</div>
</div>