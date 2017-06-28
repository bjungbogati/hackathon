<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/lib/bootstrap/css/bootstrap.css">
  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/lib/css/style.css"> -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/lib/js/jquery.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/lib/bootstrap/js/bootstrap.js"></script>
  <title>Profile | discoverMe</title>
</head>
<body>
 <?php include("includes/mainHeader.php");?>
<!--Frame-->

<div class="container">
<br><br>
	<div class="wrapper">
		<div class="row">
	<div class="col-md-2"></div>
		<div class="col-md-10" border="2">
				
				<div class="jumbotron">
				
				<?php 
		          if($this->session->flashdata('message'))
		          {
		            ?>
		            <br>
		            <div class="alert alert-success" >
		            <?= $this->session->flashdata('message'); ?>
		              
		            </div>
		            
		            <?php
		          }
		         ?>
		         <?php 
		          if($this->session->flashdata('error_message'))
		          {
		            ?>
		            <br>
		            <div class="alert alert-success" >
		            <?= $this->session->flashdata('error_message'); ?>
		              
		            </div>
		            
		            <?php
		          }
		         ?>
		         <h3 class="alert alert-success">Edit Profile for <?php echo ucfirst($this->session->userdata('username')); ?> </h3>
					<form class="bor" method="post" action="">
					  	<div class="form-group">
						    <label for="exampleInputFname">First Name :</label>
						    <input type="text" class="form-control" name="fName" id="exampleInputEmail1" placeholder="First Name"  value="<?= $rec->fName ;?>">
						</div>
						<div class="form-group">
						    <label for="exampleInputLname">Last Name :</label>
						    <input type="text" class="form-control" name="lName" id="exampleInputEmail1" placeholder="Last Name" width="auto" value="<?= $rec->lName ;?>">
						</div>
					  	<div class="form-group">
						    <label for="exampleInputEmail1">Username :</label>
						    <input type="text" class="form-control" name="username" id="exampleInputEmail1" placeholder="Set Username" width="auto" value="<?= $rec->username ;?>">
						</div>
						<div class="form-group">
				            <label for="exampleInputDOB">Date Of Birth :</label>
				            <input type="date" class="form-control" name="DOB" id="exampleInputDOB" width="auto" currentdate value="<?php echo $rec->DOB ;?>">
				        </div>
				        <div class="checkbox">
						    <label>
						    <b>
						      <a href=" <?php echo site_url('admin/user/change/'.$rec->userID); ?>">Change Password</a></b>
						    </label>
						</div>
						  <button type="submit" class="btn btn-success" name="btnUpdate"> Update</button>
		          <!-- <button type="submit" class="btn btn-danger"> <a href="<?php echo site_url("admin/user");?>">Cancel</a></button> -->
						  <button type="submit" class="btn btn-danger" name="btnCancelUpdate" >Cancel</button>
		          	</form>
					</div>
		</div>
		<div class="col-md-2"></div>
	</div>
	</div>
</div>
<?php include("includes/footer.php");?>	
</body>
</html>