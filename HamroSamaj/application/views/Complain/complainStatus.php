<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/lib/bootstrap/css/bootstrap.css">
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/lib/js/jquery.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/lib/bootstrap/js/bootstrap.js"></script>
  <title>Status | HamroSamaj</title>
</head>
<body style="padding-top: 50px;">
  <?php // include("includes/header.php");?>
<!--Frame-->
<div class="container">
  <div class="page-header" align="center">
    <?php $complainID=$this->session->userdata('complainID'); ?>
    <h2><u>Complain Status </u></h2>
  </div>
  <div class="row">
    <div class="col-md-12">
      <table class="table table-hover table-responsive">
        <tr>
          <th>S.N</th>
          <th>Date</th>
          <th>Status</th>
          <th> </th>
        </tr>
        <tr>
        <?php $i=1; foreach ($users->result() as $u):?>
         <tr>
            <td><?=$i++; ?></td>
            <td><?=$u->Date ?></td>
            <td><?=$u->ComplainState ?></td>
            <td><!-- <?=$u->CId ?> --></td>
          </tr>
        <?php endforeach ?>
      </table>
    </div>
  </div><hr> 
  <div class="row" align="center">
      <a href="<?=base_url('Crime/index');?>">
      <button type="button" class="btn-lg btn-danger" name="btnCancel" >
        <strong>
          Dismiss <span aria-hidden="true">&times;</span>
        </strong>
      </button>
      </a>
    </div>


  <?php include("includes/footer.php");?> 
</body>
</html>