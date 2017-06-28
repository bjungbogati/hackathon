<?php 
$rolee=$this->session->userdata('Role');
$isLogin=$this->session->userdata('isLogin');
if ($rolee==null && $isLogin=false)
{
  $this->session->set_flashdata("error_message","You need admin access for this.");
    redirect('home/login');
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin | discoverMe</title>
	<link rel="stylesheet" href="<?php echo base_url("assets/lib/bootstrap/css/bootstrap.css")?>">
	<script type="text/javascript" src="<?php echo base_url("assets/lib/js/jquery.js")?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/lib/bootstrap/js/bootstrap.js")?>"></script>
 </head>
<body>
	<?php include("includes/mainheader.php");?>
  <br><br><br>
  <div class="container">
    <div class="row">
      <div class="col-md-12" align="center"><br>
      <a href="<?php echo site_url("Admin/SignUp");?>"><div class="btn btn-primary">Add User   
       <span class="glyphicon glyphicon-user" aria-hidden="true"></span>        
      </div></a>
        <a href="<?php echo site_url("admin/user/edit");?>"> <div class="btn btn-primary">Edit User 
          <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 
        </div></a>
        <div class="btn btn-primary" onClick="history.go(0)" VALUE="Refresh">Refresh <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
        </div>
      </div>
      <div class="col-md-12" align="center">
        <?php if($this->session->flashdata('message')):?>
            <br>
            <div class="alert alert-success alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <?=$this->session->flashdata('message'); ?>
            </div>
        <?php endif;?>
         <br>
       <?php if($this->session->flashdata('error_message')): ?>
              <br>
              <div class="alert alert-danger alert-dismissible fade in" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <?=$this->session->flashdata('error_message'); ?>
              </div>
        <?php endif;?>

      <table class="table table-hover table-responsive">
          <tr>
            <th>S.N.</th>
            <th>Full Name</th>
            <th>Username</th>
            <th>Password</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Level</th>
            <th>Alter</th>
          </tr>
             <?php
             $i=1;

                 foreach ($users->result() as $u)
                    {
              ?>
              <tr>
                <td><?=$i++; ?></td>
                <td><?=$u->fullName ?></td>
                <td><?=$u->Username ?></td>
                <td><?=$u->Password ?></td>
                <td><?=$u->Email ?></td>
                <td><?=$u->Contact ?></td>
                <td>
                  <?php 
                    if ($u->Role==0)
                      echo "Moderator";
                    else 
                      echo "Admin";
                  ?>
                </td>
                <td>
                <a href=" <?php echo base_url('admin/deleteData/'.$u->UserId); ?>">
                Delete
                </a> | 
                <a href="<?php echo base_url('admin/user/edit/'.$u->UserId); ?>">
                  Edit
                </a>
                </td>
               </tr>
            <?php } ?>
      </table>

      <pre>
        <?=var_dump($_SESSION); ?>
      </pre>
      <pre>
        <?=print_r($_SESSION); ?>
      </pre>

    </div>
  </div>          
  <?php include("includes/footer.php");?>


</body>
</html>