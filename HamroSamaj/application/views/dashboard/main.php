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
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/lib/bootstrap/css/bootstrap.css">
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/lib/js/jquery.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/lib/bootstrap/js/bootstrap.js"></script>
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
				<img src="http://localhost:1234/discoverme/uploads/user/profile/<?= $this->session->userdata('image')?>" alt="<?= $this->session->userdata('username')?>" class="img-responsive img-rounded" ><br>
				<center>
					<strong class="text-capitalize" >
					<?= $this->session->userdata('fName')."&nbsp;".$this->session->userdata('lName')?>
				</strong>
				</center>
				

				<hr>
				<a role="button" class="btn btn-info btn-group-justified" href="<?= site_url('profile/upload'); ?>">
					<span class="glyphicon glyphicon-user" " aria-hidden="true"></span>&nbsp;
					Change Profile Picture 
				</a><br>
				<a role="button" class="btn btn-info btn-group-justified" href="<?= site_url('profile/edit/edit/'.$u); ?>">
					<span class="glyphicon glyphicon-pencil" " aria-hidden="true"></span>&nbsp;
					Edit Profile 
				</a><br>
				<a role="button" class="btn btn-info btn-group-justified" href="<?php echo site_url();?>/home/logOut">
					<span class="glyphicon glyphicon-off" " aria-hidden="true"></span>&nbsp;
				Sign Out
				</a><hr>
				<p class="alert-danger">
					Error:
					<?php if($this->session->flashdata('error_message'))
						{
							echo $this->session->flashdata('error_message');
						}
						elseif(($this->session->flashdata('error_message'))==null)
						{
							echo"No Errors !";
						}
					?>
				</p>
				<p class="alert-success">
					Success: 
					<?php if($this->session->flashdata('message'))
						{
							echo $this->session->flashdata('message');
						}
					?>
				</p>
			</div>
			<div class="col-md-10">
			<h1 class="text-capitalize">Welcome <?php echo $this->session->userdata('username')?> ! </h1><hr>


			<h3 >Story of Mine:</h3>
			<h5>
				(A short and sweet intro about you. Who you are and what you feel about yourself ? Let's Discover !)
			</h5>
				<div class="well">
					
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, quaerat quo laboriosam impedit commodi dolore sequi sunt alias recusandae distinctio optio maiores! Placeat perferendis tempore nam repellat, et ipsam saepe!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius debitis natus est soluta perferendis minus eligendi fugit aperiam voluptate ipsam, velit laboriosam aliquid libero neque, magni aut doloribus rerum, repellendus?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias odio esse laboriosam dolorum, beatae rem quasi eos. Deserunt minus reprehenderit, eveniet cumque dolorum fuga, asperiores minima similique beatae rerum incidunt?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate vero adipisci laborum quisquam id voluptates possimus, obcaecati ea reiciendis sint, reprehenderit quasi mollitia consectetur necessitatibus dolorem rem. Eveniet, inventore nulla?
				</div>
				<hr>
				<h3>Moment you Resemble Most:</h3>
				<h5>
				(Have you discover any most interesting event on your life ? Let's share !)
				</h5>
				<div class="well">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime unde obcaecati, illum dolorum ad minus autem architecto sit iure ipsum. Accusamus deserunt tempora veniam temporibus deleniti, totam, alias ipsum ducimus.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum officia, eaque sit adipisci accusamus nulla consequuntur deserunt labore facere iure natus neque dolore nihil repellendus, quam harum beatae fugit ipsum.
				</div>
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
						<td>lorem </td>
					</tr>
					<tr>
						<th>
						<span class="glyphicon glyphicon-cloud" aria-hidden="true"></span>
						Place :</th>
						<td>Lore</td>
					</tr>
					<tr>
						<th>
						<span class="glyphicon glyphicon-text-color" aria-hidden="true"></span>						
						Color :</th>
						<td><input type="color" name="col"></td>
					</tr>
					<tr>
						<th>
						<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
						Celebrity :</th>
						<td>lorem</td>
					</tr>		
					<tr>
						<th>
						<span class="glyphicon glyphicon-book" aria-hidden="true"></span>
						Novel :</th>
						<td>lorem</td>
					</tr>
					<tr>
						<th>
						<span class="glyphicon glyphicon-sunglasses" aria-hidden="true"></span>
						Movies :&nbsp;&nbsp;</th>
						<td>lorem</td>
					</tr>
				</table>
					
			</div>
		</div>
	</div>
</div>
<?php include("includes/footer.php");?>	
</body>
</html>