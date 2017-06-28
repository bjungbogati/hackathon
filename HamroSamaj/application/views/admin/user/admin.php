<?php 
$rolee=$this->session->userdata('Role');
$isLogin=$this->session->userdata('isLogin');
if ($rolee==null && $isLogin=false)
{
  $this->session->set_flashdata("error_message","You need admin access for this.");
    redirect('home/login');
}
// if(($this->session->userdata('Email'))==null)
//     {
//       $this->session->set_flashdata("error_message","Please Login First!");
//       redirect('home/login');
//     }
$u=$this->session->userdata('userID');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | DiscoverMe</title>
  <link rel="stylesheet" href="<?php echo base_url("assets/lib/bootstrap/css/bootstrap.css")?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/lib/css/AdminLTE.min.css')?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins   -->
  <link rel="stylesheet" href="<?php echo base_url("assets/lib/css/_all-skins.min.css")?>">
</head>
<body class="hold-transition skin-green sidebar sidebar-mini">
<div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="../../index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>D</b>Me!</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Discover</b>Me !</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
         <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <strong>Admin</strong>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                

                <p>
                  Aryan - Web Developer
                  <small>Admin | DiscoverMe!</small>
                </p>
              </li>
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?= site_url('profile/edit/edit/'.$u); ?>" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo site_url();?>/home/logOut" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          
        </div>
        <div class="pull-left info">
          <p class="text-capitalize">Welcome <?php echo $this->session->userdata('username')?> ! </p>
          
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Home</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Update</a></li>
          </ul>
        </li>
        <li>
          <a href="../calendar.html">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-user"></i> <span>Admin</span>
             <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
            </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Discover Me !
        <small>Discover Yourself With discoverMe!</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Admin</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="callout callout-info">
        <h4>Tip!</h4>

        <p>Manage all your system through the admin panel<i class="fa fa-user"></i></p>
      </div>
       <div class="row">
      <div class="col-md-12">
      <a href="<?php echo site_url("home");?>"><div class="btn btn-primary">Add User   
       <span class="glyphicon glyphicon-user" aria-hidden="true"></span>        
      </div></a>
        <a href="<?php echo site_url("admin/user/edit");?>"> <div class="btn btn-primary">Edit User 
          <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 
        </div></a>
        <div class="btn btn-primary" onClick="history.go(0)" VALUE="Refresh">Refresh <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></div>
        <?php 
          if($this->session->flashdata('message'))
          {
            ?>
            <br>
            <div class="alert alert-success" >
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
                <div class="alert alert-danger" >
                <?php echo $this->session->flashdata('error_message'); ?>
                  
                </div>
                
                <?php
              }
             ?>

      <table class="table table-hover">
          <tr>
            <th>S.N.</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>DOB</th>
            <th>Username</th>
            <th>Alter</th>

          </tr>
             <?php
             $i=1;
                 foreach ($users->result() as $u)
                    {
              ?>
              <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $u->fName ?></td>
                <td><?php echo $u->lName ?></td>
                <td><?php echo $u->Email ?></td>
                <td><?php echo $u->DOB ?></td>
                <td><?php echo $u->username ?></td>
                <td><a href=" <?php echo site_url('admin/user/deleteData/'.$u->userID); ?>">Delete</a> | 
                <a href="<?php echo site_url('admin/user/edit/'.$u->userID); ?>">
                Edit</a></td>
               </tr>
            <?php } ?>
      </table>

    </div>
  </div>
    </section>
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    
    <strong>Copyright &copy; 2016-2018 <a href="http://iComDroid.com">DiscoverMe!</a>.</strong> All rights
    reserved.
  </footer>
</div>

<script src="<?php echo base_url("assets/lib/js/jquery-2.2.3.min.js")?>"></script>
<script src="<?php echo base_url("assets/lib/bootstrap/js/bootstrap.min.js")?>"></script>
<script src="<?php echo base_url("assets/lib/js/jquery.slimscroll.min.js")?>"></script>
<script src="<?php echo base_url("assets/lib/js/fastclick.js")?>"></script>
<script src="<?php echo base_url("assets/lib/js/app.js")?>"></script>
<script src="<?php echo base_url("assets/lib/js/demo.js")?>"></script>
</body>
</html>
