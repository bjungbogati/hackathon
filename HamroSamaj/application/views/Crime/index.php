<?php 

$isLogin=$this->session->userdata('isLogin');
if ($isLogin=false)
{
  $this->session->set_flashdata("error_message","You need to login for access");
    redirect('home/login');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/lib/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/lib/bootstrap/css/bootstrap-toggle.min.css">
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/lib/js/jquery.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/lib/bootstrap/js/bootstrap.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/lib/bootstrap/js/bootstrap-toggle.min.js"></script>
  
  <title>Crime Control | HamroSamaj</title>
</head>
<body style="padding-top: 50px;">
  <?php include("includes/mainHeader.php");?>
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
    <h2><u>Complain Box </u></h2>
  </div>
  <div align="right">
    <input data-toggle="toggle" data-on="Acknowledge" data-off="Unread" type="checkbox"><br><br>
    
  </div>
  <div class="row">
    <div class="col-md-12">
      <table class="table table-hover table-responsive">
      <tr>
        <th>S.N.</th>
        <th>C. Code</th>
        <th>Complainer Name</th>
        <th>Victim</th>
        <th>Email | Contacts</th>
        <th>Complain</th>
        <th>Date</th>
        <th>ip</th>
        <th></th>
      </tr>
      <tr>
        <?php $i=1; foreach ($users->result() as $u):?>
         <tr>
            <td><?=$i++; ?></td>
            <td><?=$u->CId ?></td>
            <td><?=$u->CName ?></td>
            <td><?=$u->vName ?></td>
            <td><?=$u->Email ?>." ".<?=$u->Contact ?></td>
            <td><?=$u->Complain ?></td>
            <td><?=$u->Date ?></td>
            <td><?=$u->ip ?>| <?=$u->lonlat_info?></td>
            <td>
              <a href="<?=base_url('Complain/viewById/'.$u->CId)?>">
                <button type="button" class="btn btn-primary navbar-btn"><strong>Show</strong></button>
              </a>
            </td>
          </tr>
        <?php endforeach ?>
      </table>
    </div>
  </div>
</div>
<?php include("includes/footer.php");?> 
</body>
</html>