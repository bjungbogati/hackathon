<nav class="navbar navbar-inverse navbar-fixed-top">
  <!-- navbar-fixed-top -->
  <div class="container">
     <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
      <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/image/logo0.png" alt="हाम्रो समाज" class="img-responsive" style="max-height: 50px;"></a>

    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
       <!-- <li><a href="index.php">Home <span class="sr-only">(current)</span></a></li>-->
        <li><a href="#">News &amp; Update</a></li>
        <li><a href="#">Contact Us</a></li>
         </ul>
        <div class="pull-right">
          <form class="navbar-form navbar-left" role="search">
            <div class="input-group">
              <input type="text"  class="form-control" placeholder="Discover Yourself...">
              <span class="input-group-btn">
              <button class="btn btn-default" type="button" onclick="showResult(this.value)"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button></span>
            </div> 
            </form>
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Welcome <?php echo ucfirst($this->session->userdata('Username'));?> !<span class="caret"></span></a>
              <ul class="dropdown-menu">
              <?php 
              $u=$this->session->userdata('userID');
              ?>
                <li role="separator" class="divider"></li>
                <li><a href="<?php echo site_url();?>/home/logOut">Log Out</a></li>
                <li role="separator" class="divider"></li>
              </ul>
            </li>
          </ul>  
            
        </div>
    </div>
  </div>
</nav>

