<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/lib/bootstrap/css/bootstrap.css">
  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/lib/css/style.css"> -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/lib/js/jquery.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/lib/bootstrap/js/bootstrap.js"></script>
  <title>Password | discoverMe</title>
</head>
<body>
 <?php include("includes/mainHeader.php");?>
<!--Frame-->

<br><br><br><br><br><br>
<div class="container">
<div class="row">
	<div class="col-md-3"></div>
		<div class="col-md-6">
				
				<div class="jumbotron">
				
				<?php 
		          if($this->session->flashdata('message'))
		          {
		            ?>
		            <br>
		            <div class="alert alert-success" >
		            <?php echo $this->session->flashdata('message'); ?>
		              
		            </div>
		            
		            <?php
		          }
		         ?>
		         <?php 
		          if($this->session->flashdata('error_message'))
		          {
		            ?>
		            <br>
		            <div class="alert alert-danger" >
		            <?php echo $this->session->flashdata('error_message'); ?>
		              
		            </div>
		            
		            <?php
		          }
		         ?>
		         <h3 class="alert alert-success">Change Password for <?php echo ucfirst($this->session->userdata('username')); ?></h3>
					<form class="bor" method="post" action="">
					  	<div class="form-group">
						    <label for="exampleInputFname">New Password :</label>
						    <input type="password" class="form-control" name="pass" placeholder="New Password">
						</div>
						<div class="form-group">
						    <label for="exampleInputLname">Confirm Password :</label>
						    <input type="password" class="form-control" name="cpass" placeholder="Confirm Password" width="auto" value="">
						</div>
					  <button type="submit" class="btn btn-success" name="btnChangePassword"> Update</button>
					  <button type="submit" class="btn btn-danger" name="btnCancelPassword">Cancel</button>	
		        </div>
			</form>
		</div>
		</div>
		<div class="col-md-2"></div>
	</div>
	</div>

<?php include("includes/footer.php");?>	
</body>
</html>