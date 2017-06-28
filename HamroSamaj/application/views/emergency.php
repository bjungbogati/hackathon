<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/lib/bootstrap/css/bootstrap.css">
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/lib/js/jquery.js"></script>
  <title>HamroSamaj</title>
</head>
<body style="margin-top: 50px;">
<div align="right">
    <form class="form-inline" action="<?=base_url('Complain/status')?>" method="POST">
      <div class="form-group" id="trackID" style="display: none; padding-top: 20px; padding-right: 20px;">
        <input type="text" class="form-control input-lg" placeholder="Complain Code" name="track">
      </div>
      <!-- class="pull-right"<button type="button" class="btn btn-success"><strong>Track</strong></button> -->
    </form>
  </div>
  <script>
    $(function() {
        $('button').click(function() {
          $('button').toggle;
          $("#trackID").toggle();
        });
    });
    </script>
  <div id="fb-root"></div>
  
 <?php include("includes/header.php");?>
    
<div class="container">
<div class="page-header" align="center">
	<h2>Important Contacts</h2>
</div>
  <div class="row">
  <div class="col-md-2"></div>
    <div class="col-md-8">
    	<table class="table table-hover table-responsive">
    		<tr>
    			<th>S.N.</th>
    			<th>Location</th>
    			<th>Contacts</th>
    			<th>Department</th>
    			<th></th>
    		</tr>
    		<tr>
    			<td>District Administration Office</td>
    			<td>Sama Marg</td>
    			<td>01-5555475</td>
				<td></td>
    			<td></td>
    		</tr>
    		<tr>
    			<<td>Nepal Police Headquater</td>
    			<td> Ratna Park Path</td>
				<td> 01-4411210</td>
    			<td></td>
    			<td></td> 	
    		</tr>
    		<tr>
    			<td>Metropolitan Police Commissioner's Office</td>
    			<td>Bishal Bazzar</td>
    			<td> 01-4411210</td>
    			<td></td>
    			<td></td>
    		</tr>
    		<tr>
    			<td>Metropolitan Police Commissioner's Office</td>
				<td>Chakra Paath</td>
    			<td>01-4231466</td>
    			<td></td>
    			<td></td>
    		</tr>
    		<tr>
    			<td>Metropolitan Police Circle Jansewa</td>
    			<td>Chautarphi Margh </td>
				<td>01-4222757</td>
    			<td></td>
    			<td></td>
    		</tr>
    		<tr>
    			<td>Maharajgunj Police Station</td>
    			<<td>Maharajgunj</td>
    			<td> 01-4600739</td>
    			<td></td>
    			<td></td>
    		</tr>
    		<tr>
    			<td>Koteshwor Police Statio</td>
    			<td>Koteshwor</td>
    			<td></td>
    			<td></td>
    			<td></td>
    		</tr>
    		<tr>
    			<td>Kalimati Police Station</td>
    			<td>Kalimati</td>
    			<td>01- 4270536</td>
				<td></td>
    			<td></td>
    		</tr>
    		<tr>
    			<td>Imadol Ward Police Office</td>
    			<td>Imadol</td>
    			<td>01-04476545</td>
    			<td></td>
    			<td></td>
    		</tr>
    		<tr>
    			<td>Thapathali Police Station</td>
    			<td>Thapathali</td>
    			<td>01-04476545</td>
    			<td></td>
    			<td></td>
    		</tr>
    	</table>
    	<tr>
	</div>
    <div class="col-md-2"></div>
    </div>
  </div>
</div>
<?php include("includes/footer.php");?>
 <script type="text/javascript" src="<?php echo base_url(); ?>assets/lib/bootstrap/js/bootstrap.js"></script> 
 <script async src="<?php echo base_url(); ?>/assets/lib/js/widgets.js" charset="utf-8"></script>
 <script>
    (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=1593955364246650";
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>
</body>
</html>

