<!DOCTYPE html>
<html>
<head>
	<title>Admin | discoverMe</title>
	<link rel="stylesheet" href="<?php echo base_url("assets/lib/bootstrap/css/bootstrap.css")?>">
	<script type="text/javascript" src="<?php echo base_url("assets/lib/js/jquery.js")?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/lib/bootstrap/js/bootstrap.js")?>"></script>
 </head>
<body>
	
  <?php include("includes/header.php");?>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
    <a href="<?php echo site_url("admin/user");?>"<div class="pull-right"><div class ="btn btn-primary">Go Back</div></div></a>

   <form class="form-horizontal" action="" method="post">
 <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">First Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="First Name" name="user_fname" autofocus>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Last Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Last Name" name="user_lname">
    </div>
   </div> 
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="user_email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="user_password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox" name="bools"> Remember me
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary" name="btnAdd">Save</button>
      <button type="submit" class="btn btn-danger"> <a href="<?php echo site_url("admin/user");?>">Cancel</a></button>
    </div>
  </div>
</form>
      </div>
    </div>
  </div>          
  <?php include("includes/footer.php");?>


</body>
</html>