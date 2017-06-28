<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Upload Avatar | DiscoverMe</title>
 <link rel="stylesheet" href="<?php echo base_url(); ?>assets/lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/upload/css/cropper.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/upload/css/main.css">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
<strong>
 <?php include("includes/mainheader.php");?> 
</strong> 
<div class="container" id="crop-avatar">
  <div class="col-md-3"> </div>
  <div class="col-md-6" align="center" style="margin: 100px 0 0 0;">
    <h2 align="center" class="page-header" style="color:green;">
      <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
        Upload Your Avatar
      <span class="glyphicon glyphicon-cloud-upload" aria-hidden="true"></span>
  </div>
  <div class="col-md-3"></div>
  </div> <!-- Current avatar -->
    <div class="avatar-view" title="Upload your Avatar">
      <img src="<?= base_url(); ?>assets/upload/img/avatar.png" alt="Avatar">
    </div>
    <div class="col-md-4"></div>
    <div class="col-md-4" align="center">
      <a role="button" class="btn btn-success btn-block avatar-save" href="<?= site_url('dashboard'); ?>">
        <b style="font-size: 20px">
          Next
          <span class="glyphicon glyphicon-send" " aria-hidden="true"></span></b> 
      </a>
    </div>
    <div class="col-md-4"></div>

    <!-- Cropping modal -->
    <div class="modal fade" id="avatar-modal" aria-hidden="true" aria-labelledby="avatar-modal-label" role="dialog" tabindex="-1">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <form class="avatar-form" action="<?= site_url();?>/profile/crop" enctype="multipart/form-data" method="post">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">
                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
              </button>
              <h3 class="modal-title" id="avatar-modal-label">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                  Discover Your Avatar
              </h3 >
            </div>
            <div class="modal-body">
              <div class="avatar-body">
              
              

                <!-- Upload image and data -->
                <div class="avatar-upload">
                  <input type="hidden" class="avatar-src" name="avatar_src">
                  <input type="hidden" class="avatar-data" name="avatar_data">
                  <label for="avatarInput">
                    Local Upload: 
                  </label>
                  <input type="file" class="avatar-input" id="avatarInput" name="avatar_file">
                </div>

                <!-- Crop and preview -->
                <div class="row">
                  <div class="col-md-9">
                    <div class="avatar-wrapper"></div>
                  </div>
                  <div class="col-md-3">
                    <div class="avatar-preview preview-lg"></div>
                    <div class="avatar-preview preview-md"></div>
                    <div class="avatar-preview preview-sm"></div>
                  </div>
                </div>

                <div class="row avatar-btns">
                  <div class="col-md-9">
                    <div class="btn-group">
                      <button type="button" class="btn btn-primary" data-method="rotate" data-option="-90" title="Rotate -90 degrees">Rotate Left</button>
                      <button type="button" class="btn btn-primary" data-method="rotate" data-option="-15">-15deg</button>
                      <button type="button" class="btn btn-primary" data-method="rotate" data-option="-30">-30deg</button>
                      <button type="button" class="btn btn-primary" data-method="rotate" data-option="-45">-45deg</button>
                    </div>
                    <div class="btn-group">
                      <button type="button" class="btn btn-primary" data-method="rotate" data-option="90" title="Rotate 90 degrees">Rotate Right</button>
                      <button type="button" class="btn btn-primary" data-method="rotate" data-option="15">15deg</button>
                      <button type="button" class="btn btn-primary" data-method="rotate" data-option="30">30deg</button>
                      <button type="button" class="btn btn-primary" data-method="rotate" data-option="45">45deg</button>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <button type="submit" class="btn btn-success btn-block avatar-save">
                      <strong>
                        Upload
                        <span class="glyphicon glyphicon-cloud-upload" aria-hidden="true"></span>
                      </strong>   
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div> -->
          </form>
        </div>
      </div>
    </div><!-- /.modal -->

    <!-- Loading state -->
    <div class="loading" aria-label="Loading" role="img" tabindex="-1"></div>
  </div>

 <script src="<?= base_url(); ?>assets/upload/js/jquery.min.js"></script>
  <script src="<?= base_url(); ?>assets/upload/js/bootstrap.min.js"></script>
  <script src="<?= base_url(); ?>assets/upload/js/cropper.min.js"></script>
  <script src="<?= base_url(); ?>assets/upload/js/main.js"></script>
  <div class="col-md-3"> </div>
  <div class="col-md-6">
    <?php include("includes/footer.php");?> 
  </div>
  <div class="col-md-3"></div>
  
</body>
</html>
