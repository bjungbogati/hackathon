<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/lib/bootstrap/css/bootstrap.css">
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/lib/js/jquery.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/lib/bootstrap/js/bootstrap.js"></script>
  <style>
  #mapCanvas {
    width: 700px;
    height: 400px;
    float: center;
  }
  #infoPanel {
    float: left;
    margin-left: 10px;
  }
  #infoPanel div {
    margin-bottom: 5px;
  }
</style>
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZ6OIKnUB0m20tpOC1iPDVF1rw-0Vrw74"></script>
<script type="text/javascript">
var geocoder = new google.maps.Geocoder();
function geocodePosition(pos) {
  geocoder.geocode({
    latLng: pos
  }, function(responses) {
    if (responses && responses.length > 0) {
      updateMarkerAddress(responses[0].formatted_address);
    } else {
      updateMarkerAddress('Cannot determine address at this location.');
    }
  });
}


function updateMarkerStatus(str) {
  document.getElementById('markerStatus').innerHTML = str;
}

function updateMarkerPosition(latLng) {
  document.getElementById('info').value = [
    latLng.lat(),
    latLng.lng()
  ].join(', ');
}

function updateMarkerAddress(str) {
  document.getElementById('address').value = str;
}

function initialize() {
  var latLng = new google.maps.LatLng(27.6225921, 85.53602550000005 );
  var map = new google.maps.Map(document.getElementById('mapCanvas'), {
    zoom: 15,
    center: latLng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });

  var marker = new google.maps.Marker({
    position: latLng,
    title: latLng,
    map: map,
    draggable: true
  });

  // Update current position info.
  updateMarkerPosition(latLng);
  geocodePosition(latLng);

  // Add dragging event listeners.
  google.maps.event.addListener(marker, 'dragstart', function() {
    updateMarkerAddress('Dragging...');
  });

  google.maps.event.addListener(marker, 'drag', function() {
    updateMarkerStatus('Dragging...');
    updateMarkerPosition(marker.getPosition());
  });

  google.maps.event.addListener(marker, 'dragend', function() {
    updateMarkerStatus('Drag ended');
    geocodePosition(marker.getPosition());
  });
}

// Onload handler to fire off the app.
google.maps.event.addDomListener(window, 'load', initialize);
</script>
  <title>Complain | HamroSamaj</title>
</head>
<body style="padding-top: 50px;">
  <?php // include("includes/header.php");?>
<!--Frame-->
<?php if($this->session->flashdata('message')):?>
    <br><div class="alert alert-success alert-dismissible fade in" role="alert" align="center">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <?= $this->session->flashdata('message'); ?>
    </div>
<?php endif;?>
 <br>
<?php if($this->session->flashdata('error_message')): ?>
      <br><div class="alert alert-danger alert-dismissible fade in" role="alert" align="center">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <?=$this->session->flashdata('error_message'); ?>
      </div>
<?php endif;?>
<div class="container">
  <div class="page-header" align="center">
    <h2><u>Register Complain </u></h2>
  </div>
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8 well">
      <form class="bor" method="post" action="">
        <div class="form-group">
          <label for="exampleInputLname">Full Name <span style="color: red;">*</span></label>
          <i>(If your are victim yourself fill the same name on both field.)</i>
          <input type="text" class="form-control" name="cName" id="inputlg" placeholder="Complainer's Name" width="300px" title="If your are victim yourself fill the same name on both field.">
        </div>
        <div class="form-group">
          <label for="exampleInputLname">Victim's Name <span style="color: red;">*</span></label>
          <input type="text" class="form-control" name="vName" id="exampleInputEmail1" placeholder="Victim's Name" width="auto" title="Who have been victime of crime ?">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email Address</label>
          <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="mail@iComDroid.com" width="auto">
        </div>
        <div class="form-group">
          <label for="exampleInputDOB">Contact No.</label>
          <input type="text" class="form-control" name="phone" id="exampleInputDOB" width="auto" placeholder="+97798XXXXXXXX" title="From where we could contact you.">
        </div>
        <div class="form-group">
            <label for="exampleInputDOB">Date</label>
            <input type="date" class="form-control" name="date" id="exampleInputDOB" width="auto" placeholder="YYYY-MM-DD">
        </div>
        <div class="form-group">
            <label for="exampleInputDOB">Complain</label>
            <textarea class="form-control" name="complain" placeholder="Your complain in detail." rows="3" required></textarea>
        </div>
        <b>( <sup><span style="color: red;">*</span></sup>Please be ensured all your personal identity are completely confidential.)</b><br>
        <?php 
          $realIP =file_get_contents("http://ipecho.net/plain");
          //if(isset($realIP)==null)            
         ?>
         <i>You are registering your complain through ip :</i> <b><?=$realIP;//isset($realIP)//;?></b><hr>
         <div align="center">
          <div id="mapCanvas"></div> <br>
            <div id="infoPanel" style="align-items: center;">
              <input type="hidden" id="info" name="lonlat_info"/>
              <b>Your Address:</b>
              <input type="text" id="address"/>
            </div>
        </div><br><br>
        
        <div align="right">
          <button type="submit" class="btn btn-success" name="btnRegister"> Register</button>
          <a href="<?=base_url();?>">
            <button type="button" class="btn btn-danger " name="btnCancel" >Cancel</button>
          </a>
        </div>
        </form>
    </div>
    <div class="col-md-2"></div>
  </div>
</div>
<?php include("includes/footer.php");?> 
</body>
</html>