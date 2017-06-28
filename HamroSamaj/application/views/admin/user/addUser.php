<!DOCTYPE html>
<html>
<head>
	<title>Admin | HamroSamaj</title>
	<link rel="stylesheet" href="<?php echo base_url("assets/lib/bootstrap/css/bootstrap.css")?>">
	<script type="text/javascript" src="<?php echo base_url("assets/lib/js/jquery.js")?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/lib/bootstrap/js/bootstrap.js")?>"></script>
 </head>
<body>
	<?php include("includes/mainheader.php");?>
  <br><br><br>
  <div class="container">
    <div class="row" align="center">
      <div class="col-md-12" align="center">
        <a href="<?php echo site_url("home");?>">
          <div class="btn btn-primary">
            Add Usser<span class="glyphicon glyphicon-user" aria-hidden="true"></span>        
          </div>
        </a>
        <a href="<?php echo site_url("admin/user/edit");?>">
          <div class="btn btn-primary">
            Edit User <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 
          </div>
        </a>
        <div class="btn btn-primary" onClick="history.go(0)" VALUE="Refresh">
        Refresh <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
        </div>
      </div>
      </div>
      <div class="row">
      <div class="col-md-12">
          <?php 
          if($this->session->flashdata('message'))
          {
            ?>
            <br>
            <div class="alert alert-success alert-dismissible fade in" >
            <?php echo $this->session->flashdata('message'); ?>
              
            </div>
            
            <?php
          }
         ?>
         <br>
         <?php 
              if($this->session->flashdata('error_message'))
              {
                ?>
                <br>
                <div class="alert alert-danger alert-dismissible fade in" >
                <?php echo $this->session->flashdata('error_message'); ?>
                  
                </div>
                
                <?php
              }
             ?>

      <table class="table table-hover table-responsive">
          <tr>
            <th>S.N.</th>
            <th>Full Namee</th>
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
                <a href=" <?php echo base_url('admin/user/deleteData/'.$u->UserId); ?>">
                Delete
                </a> | 
                <a href="<?php echo base_url('admin/user/edit/'.$u->UserId); ?>">
                  Edit
                </a>
                </td>
               </tr>
            <?php } ?>
      </table>

    </div>
  </div>          
  <?php include("includes/footer.php");?>


</body>
</html>