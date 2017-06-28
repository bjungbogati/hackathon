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
<form class="form-horizontal">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password   </label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
   <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Confirm Password </label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Sign in</button>
    </div>
  </div>
</form>

 </div>
    </div>
  </div>          
  <?php include("includes/footer.php");?>


</body>
</html>