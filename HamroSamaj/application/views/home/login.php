<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/lib/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/lib/css/login.css">
	<script type="text/javascript" src="<?php echo base_url();?>assets/lib/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/lib/bootstrap/js/bootstrap.js"></script>
	<title>Sign In | discoverMe</title>
</head>
<body id="login">
<!--ebackground-color: #eee;-->
<div class="container">
	<div ><br><br><br></div>
	<div class="row">
	<div class="col-md-4"></div>
		<div class="col-md-4">
			<form method="post" action="" >
				<!--class="form-signin"class="form-signin-heading" -->
		    	<h2> Already a member!</h2>
		        <h3 class="form-signin-heading">Sign In</h3>
		        <?php
		        	if ($this->session->flashdata('message')):?>
		        		<br>
		        		<div class="alert alert-success alert-dismissible fade in" role="alert">
						  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						    	<span aria-hidden="true">&times;</span>
						  	</button>
						  		<div align="center"><?php echo $this->session->flashdata('message'); ?></div>
						</div>
		        		<?php endif; ?>
		        <?php 
              if($this->session->flashdata('error')):?>
              	<br>
                <div class="alert alert-danger alert-dismissible fade in" role="alert">
				  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    	<span aria-hidden="true">&times;</span>
				  	</button>
				  		<div align="center"><?php echo $this->session->flashdata('error'); ?></div>
				</div>
                <?php endif ?>
		        <label for="inputEmail" class="sr-only">Email address :</label>
		        <input type="text" id="inputEmail" class="form-control input-lg" placeholder="Email / Username" required autofocus name="emailUsername"><br>
		        <label for="inputPassword" class="sr-only">Password :</label>
		        <input type="password" id="inputPassword" class="form-control input-lg" placeholder="Password" required name="logInPass">
		        <div><br></div>
		        <button class="btn btn-lg btn-primary btn-block" type="submit" name="logIn">Sign in</button><br>
				 <a href="<?php echo site_url(); ?>"><input type="button" class="btn btn-lg btn-primary btn-block" value="Back"></a>
		    </form>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>
<footer>
	<div class="container text-center">All Rights Reserved 2016-2020 <br>© discoverMe!  </div>
</footer>	
</body>
</html>