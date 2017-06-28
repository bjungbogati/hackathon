<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/lib/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/lib/bootstrap/css/bootstrap-toggle.min.css">
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/lib/js/jquery.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/lib/bootstrap/js/bootstrap.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/lib/bootstrap/js/bootstrap-toggle.min.js"></script>
  
  <title>Blog | HamroSamaj</title>
</head>
<body style="padding-top: 50px;">
  <?php include("includes/header.php");?>
<!--Frame-->
<?php if($this->session->flashdata('message')):?>
    <br><div class="alert alert-success alert-dismissible fade in" role="alert" align="center">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <?= $this->session->flashdata('message'); ?>
    </div>
<?php endif;?>
 <br>
<?php if($this->session->flashdata('error_message')): ?>
      <br><div class="alert alert-danger alert-dismissible fade in" role="alert" align="center">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <?=$this->session->flashdata('error_message'); ?>
      </div>
<?php endif;?>
<div class="container">
  <div class="page-header" align="center">
    <h2>Blog | हाम्रो समाज </h2>
  </div>
  <div class="row">
    <div class="col-md-12">
      <table class="table table-hover table-responsive">
      <!-- <tr>
        <th>S.N.</th>
        <th>C. Code</th>
        <th>Complainer Name</th>
        <th>Victim</th>
        <th>Email | Contacts</th>
        <th>Complain</th>
        <th>Date</th>
        <th>ip</th>
        <th></th>
      </tr> -->
      
        <?php foreach ($users->result() as $u):?>
          <h2><?=$u->topic ?></h2>
          <div class="well">
          <h4><?=$u->detail ?></h4>
          
            <div class="left">
              <span class="glyphicon glyphicon-user" aria-hidden="true"></span> <?=$u->name ?> &nbsp;&nbsp;&nbsp;
              <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> <?=$u->email ?> &nbsp;&nbsp;&nbsp; 
              <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> <?=$u->datetime ?>
            </div>
            <div class="left">
               <?=$u->view ?> 
              <span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span> <?=$u->reply ?>
            </div>
          </div><hr>
        <?php endforeach ?>
      </table>
    </div>
  </div>
</div>
<?php include("includes/footer.php");?> 
</body>
</html>