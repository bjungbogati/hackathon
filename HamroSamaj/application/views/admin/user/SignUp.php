<?php 
$rolee=$this->session->userdata('Role');
$isLogin=$this->session->userdata('isLogin');
if ($rolee==null && $isLogin=fals)
{
  $this->session->set_flashdata("error_message","You need admin access for this.");
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
  <title>Sign Up | HamroSamaj</title>
</head>
<body style="margin-top: 20px;">
 <?php include("includes/header.php");?>
<div class="container">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8" border="2">
    <a  name="form"></a>
    <div class="jumbotron">
    <h3 align="center">Add User for HamroSamaj </h3>
      <form class="bor" method="post" action="">
          <div class="form-group">
            <label for="exampleInputFname">Full Name :<span style="color: red;">*</span></label>
            <input type="text" class="form-control" name="fName" id="exampleInputEmail1" placeholder="Full Name" width="auto" required title="Enter your full name.">
          </div>
          <div class="form-group">
              <label for="exampleInputEmail1">Email address :<span style="color: red;">*</span></label>
              <input type="email" class="form-control" name="Email" id="exampleInputEmail1" placeholder="info@hamroSamaj.com" width="auto" required>
          </div>
          <div class="form-group">
            <label for="exampleInputContact">Contact No.</label>
            <input type="text" class="form-control" name="contact" id="exampleInputEmail1" placeholder="+97798XXXXXX" width="auto" required title="Enter your contact details.">
          </div>
          <div class="form-group">
              <label for="exampleInputLname">Username :<span style="color: red;">*</span></label>
              <input type="text" class="form-control" name="Username" id="exampleInputEmail1" placeholder="Username" width="auto" required title="Choose unique username">
          </div>
          <div class="form-group">
              <label for="exampleInputPassword1">Password :<span style="color: red;">*</span></label>
              <input type="password" class="form-control" name="Password" id="Password" placeholder="Password" width="auto" minlength="8" required title="Choose Strong Password.">
          </div> 
          <div class="form-group">
            <label for="exampleInputPassword2">Confirm Password :</label>
            <input type="password" class="form-control" name="cPassword" id="cPassword" placeholder="Password" width="auto" minlength="8" onkeyup="checkPass(); return false;" required>
             <span id="confirmMessage" style="font-size:13px;">Please use strong password.</span>
          </div>
          <div class="form-group">
              <label for="exampleInputLVL">User Level</label>
              <select name="lvl" id="" class="form-control" required="true">
                <option value="0">Moderator</option>
                <option value="1">Admin</option>
              </select>
          </div>
          <div class="checkbox">
              <label>
                <input type="checkbox" required="true"> I agree <a href="#">Terms & Condition</a>
              </label>
          </div>
          <button type="submit" class="btn btn-success" name="signUp"> Sign Up</button>
          <!-- <button type="submit" class="btn btn-danger"> <a href="<?php echo site_url("admin/user");?>">Cancel</a></button> -->
          <button type="submit" class="btn btn-danger">Cancel</button>
          
      </form>
      </div>
    </div>
    <div class="col-md-2"></div>
  </div>
</div>
<?php include("includes/footer.php");?> 
</body>
</html>