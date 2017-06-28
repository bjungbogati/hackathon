<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/lib/bootstrap/css/bootstrap.css">
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/lib/js/jquery.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/lib/bootstrap/js/bootstrap.js"></script>
  <script>
    function checkPass()
{
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('Password');
    var pass2 = document.getElementById('cPassword');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //Compare the values in the password field 
    //and the confirmation field
    if(pass1.value == pass2.value){
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords matched!"
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Passwords do not matched !"
    }
}  
</script>
  <title>Add User | HamroSamaj</title>
</head>
<body>
 <?php include("includes/header.php");?>
    <?php if ($this->session->flashdata('message')):?>
          <br>
            <div class="alert alert-success alert-dismissible fade in" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <div align="center"><?php echo $this->session->flashdata('message'); ?></div>
            </div>
    <?php endif; ?>
    <?php if($this->session->flashdata('error')):?>
      <br>
        <div class="alert alert-danger alert-dismissible fade in" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <div align="center"><?php echo $this->session->flashdata('error'); ?></div>
        </div>
    <?php endif ?>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Carousel Begains -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?php echo base_url(); ?>assets/image/banner1.jpg" alt="..." width="100%" height="auto">
      <div class="carousel-caption">
      <h1><span style="color:#0B0915;font-size:50px">Discover Yourself With discoverMe!</span></h1>
      </div>
    </div>
    <div class="item">
      <img src="<?php echo base_url(); ?>assets/image/banner.jpg" alt="..." width="100%" height="auto">
      <div class="carousel-caption">
      <h1><span style="color:#686868;font-size:50px">discoverMe Something One Creates</span></h1>
      </div>
    </div>
    <div class="item">
      <img src="<?php echo base_url(); ?>assets/image/banner2.jpg" alt="..." width="100%" height="auto">
      <div class="carousel-caption">
      <h1><span style="color:#646464;font-size:50px">discoverMe Self Is More Distant Than any Star</span></h1>
      </div>
    </div><div class="item">
      <img src="<?php echo base_url(); ?>assets/image/banner3.jpg" alt="..." width="100%" height="auto">
      <div class="carousel-caption">
      <h1><span style="color:#;font-size:50px">Be Yourself, Discover Yourself</span></h1>
      </div>
    </div>
    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!--Frame-->
<div class="container">
  <div class="row">
    <div class="col-md-7">
    <h1 class="page-header">Discover Yourself With <span style="color:#551A8B;">discoverMe !</span></h1> 
    <button class="btn btn-primary" type="button">Profile Matched <span class="badge">4</span></button><br><br><br>
    <a href="#"> <b>Follower You Got </b> <span class="badge">42</span></a><hr>
    <h4 class="page-header"><span style="color:#551A8B;">discoverMe</span> Self Is More Distant Than any Star. Now discover yourself with <span style="color:#551A8B;">discoverMe !</span> Share your hobbies, ideas, life event with your friends and loved one</h4>
    
    </div>
    <div class="col-md-5" border="2">
    <a  name="form"></a>
    <div class="jumbotron">
    <h3>Sign Up today </h3>
      <form class="bor" method="post" action="">
          <div class="form-group">
            <label for="exampleInputFname">First Name :</label>
            <input type="text" class="form-control" name="fName" id="exampleInputEmail1" placeholder="First Name" width="auto" required>
          </div>
          <div class="form-group">
              <label for="exampleInputLname">Last Name :</label>
              <input type="text" class="form-control" name="lName" id="exampleInputEmail1" placeholder="Last/Family Name" width="auto" required="Your First">
          </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address :</label>
              <input type="email" class="form-control" name="Email" id="exampleInputEmail1" placeholder="abc@discoverMe.com" width="auto" required>
          </div>
          <div class="form-group">
              <label for="exampleInputPassword1">Password :</label>
              <input type="password" class="form-control" name="Password" id="Password" placeholder="Password" width="auto" minlength="8" required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword2">Confirm Password :</label>
            <input type="password" class="form-control" name="cPassword" id="cPassword" placeholder="Password" width="auto" minlength="8" onkeyup="checkPass(); return false;" required>
             <span id="confirmMessage" style="font-size:13px; font-weight:bold;">discover strong password for yourself</span>
          </div>
          <div class="form-group">
              <label for="exampleInputDOB">Date Of Birth :</label>
              <input type="date" class="form-control" name="DOB" id="exampleInputDOB" width="auto" currentdate required>
          </div>
          <div class="checkbox">
              <label>
                <input type="checkbox" required="true"> I agree <a href="#">Terms & Condition</a>
              </label>
          </div>
          <button type="submit" class="btn btn-success" name="signUp"> Sign Up</button>
          <!-- <button type="submit" class="btn btn-danger"> <a href="<?php echo site_url("admin/user");?>">Cancel</a></button> -->
          <button type="submit" class="btn btn-danger">Cancel</button>
          <div>Already a member? <a href="login.php">Sign In</a></div>
          <div><a href="#">Forget Password !</a></div>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include("includes/footer.php");?> 
</body>
</html>