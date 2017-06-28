<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>File</title>
</head>
<body>

	<? echo form_open_multipart('main/save') ?>
	<form action="<?php site_url();?>./main/save" method="post">
	<table class="table">	
		<tr>
			<td>Title</td>
			<td>
				<input type="text" name="title">
			</td>
		</tr>
		<tr>
			<td>Image</td>
			<td>
				<input type="file" name="pic">
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" name="submit" value="Save">
			</td>
		</tr>
	</table>
	</form>
	
</body>
</html>
<!-- <tr>
			<td>Title</td>
			<td><?php echo form_input('title'); ?></td>
		</tr>
		<tr>
			<td>Image</td>
			<td><?php echo form_upload("pic"); ?></td>
		</tr>
		<tr>
			<td></td>
			<td><?php echo form_submit('submit', 'Save', 'class="btn btn-primary"'); ?></td></form>
		</tr> -->

Sign Up Form
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

  Sign Up
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

$salt="discoverMe";
		if (isset($_POST['signUp'])) 
		{
			$fName=$this->input->post('fName');
			$lName=$this->input->post('lName');
			$Email=$this->input->post('Email');
			$Uname=$this->input->post('Email');			
			$cp=$this->input->post('Password');
			$Password=crypt($cp,$salt);
			$DOB=$this->input->post('DOB');
			$this->MomentDB->signup($fName,$lName,$Email,$Password,$DOB);
			$check=$this->MomentDB->logIn($Password,$Email,$Uname);
			if ($check->num_rows()==1)
			{
				$rec = $check->row();
				$this->session->set_userdata("userID",$rec->userID);
				$this->session->set_userdata("fName",$rec->fName);
				$this->session->set_userdata("lName",$rec->lName);
				$this->session->set_userdata("Email",$rec->Email);
				$this->session->set_userdata("Password",$rec->Password);
				$this->session->set_userdata("DOB",$rec->DOB);
				$this->session->set_userdata("Status",$rec->Status);
				$this->session->set_userdata("username",$rec->username);
				$this->session->set_userdata("image",$rec->image);

				
				//redirect('profile/upload');
			}
			else
			{
				$this->session->set_flashdata("error","Email / Username or Password not matched");
				//redirect('home');
			}
		}