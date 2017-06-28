<?php 
if(($this->session->userdata('Email'))==null)
		{
			$this->session->set_flashdata("error_message","Please Login First!");
			redirect('home/login');
		}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/lib/bootstrap/css/bootstrap.css">\
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/lib/css/style.css">
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/lib/js/jquery.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/lib/bootstrap/js/bootstrap.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/lib/bootstrap/js/bootstrap.min.js"></script>
  <title>Home</title>
</head>
<body>
 <?php 
$u=$this->session->userdata('userID');
 include("includes/mainheader.php");?>
 <br><br><br><br>
 <div class="cont">
	 <div >
		<div class="row">
			<div class="col-md-2">
				<img src="http://localhost:1234/discoverme/uploads/user/profile/<?= $this->session->userdata('image')?>" alt="<?= $this->session->userdata('username')?>" class="img-responsive img-rounded" >
				<hr>
				<!-- <a role="button" class="btn btn-info btn-group-justified" href="<?= site_url('profile/upload'); ?>">
					<span class="glyphicon glyphicon-user" " aria-hidden="true"></span>&nbsp;
					Change Profile Picture 
				</a><br>
				<a role="button" class="btn btn-info btn-group-justified" href="<?= site_url('admin/user/edit/'.$u); ?>">
					<span class="glyphicon glyphicon-pencil" " aria-hidden="true"></span>&nbsp;
					Edit Profile 
				</a><br>
				<a role="button" class="btn btn-info btn-group-justified" href="<?php echo site_url();?>/home/logOut">
					<span class="glyphicon glyphicon-off" " aria-hidden="true"></span>&nbsp;
				Sign Out
				</a><hr> -->
			</div>
			<div class="col-md-10">
			<h1 class="text-capitalize">Discover Yourself <?php echo $this->session->userdata('username')?> ! </h1><hr>
				<h6 style="font-weight: bold;">
					(A short and sweet introduction about you. Who you are and what you feel about yourself ? Let's Discover !)
				</h6>
				<textarea class="form-control" name="story" rows="5" id="comment" placeholder="A short and sweet introduction about you. Who you are and what you feel about yourself ? Let's Discover !"></textarea>
				<hr>
				<h3>Moment you Resemble Most:</h3>
				<h6 style="font-weight: bold;">
				(Have you discover any most interesting event on your life ? Let's share !)
				</h6>
				<textarea class="form-control" rows="5" id="comment" placeholder="A short and sweet introduction about you. Who you are and what you feel about yourself ? Let's Discover !"></textarea>
				<hr>
				
				<h3>Favorites:</h3>
				<h5>
				(Share you favorites on your new favorite)
				</h5>
				<table class="table">
					<tr>
						<th>
						<span class="glyphicon glyphicon-glass" aria-hidden="true"></span>
						Food :</th>
						<td><input type="text" class="txtcss" name="food" placeholder="Food you love most"> </td>
					</tr>
					<tr>
						<th>
						<span class="glyphicon glyphicon-cloud" aria-hidden="true"></span>
						Place :</th>
						<td><input type="text" class="txtcss" name="place" placeholder="Place you love most"> </td>
					</tr>
					<tr>
						<th>
						<span class="glyphicon glyphicon-text-color" aria-hidden="true"></span>						
						Color :</th>
						<td><input type="color" name="col" value="#11111"></td>
					</tr>
					<tr>
						<th>
						<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
						Celebrity :</th>
						<td><input type="text" class="txtcss" name="Celebrity" placeholder="Celebrity you admire"> </td>
					</tr>		
					<tr>
						<th>
						<span class="glyphicon glyphicon-book" aria-hidden="true"></span>
						Novel :</th>
						<td><input type="text" class="txtcss" name="novel" placeholder="Novel you inspired"> </td>
					</tr>
					<tr>
						<th>
						<span class="glyphicon glyphicon-sunglasses" aria-hidden="true"></span>
						Movies :&nbsp;&nbsp;</th>
						<td><input type="text" class="txtcss" name="movies" placeholder="Movies you love most"> </td>
					</tr>
				</table>
				<div class="row">
				<div class="col-md-4"></div>
					<div class="col-md-4" align="center">
			      <a role="button" class="btn btn-success btn-block avatar-save" href="<?= site_url('dashboard'); ?>">
			        <b style="font-size: 18px">
			          Take me to Dashboard
			          <span class="glyphicon glyphicon-send" " aria-hidden="true"></span></b> 
			      </a>
			    	</div>
				</div>
				<div class="col-md-4"></div>
				
					
			</div>
		</div>
	</div>
</div>  
<script src="<?php echo base_url(); ?>assets/lib/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/lib/bootstrap/js/bootstrap.js"></script>
<?php include("includes/footer.php");?>	
</body>
</html>