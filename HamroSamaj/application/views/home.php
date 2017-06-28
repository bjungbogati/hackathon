<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <title>HamroSamaj</title>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/lib/bootstrap/css/bootstrap.css">
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/lib/js/jquery.js"></script>
  <script>
    $(function() {
        $('button').click(function() {
          $('#trace').toggle;
          $("#trackID").toggle();
        });
    });
    </script>
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
 
  <div id="fb-root"></div>
  
 <?php include("includes/header.php");?>
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
      <img src="<?php echo base_url(); ?>assets/image/banners/1.jpg" alt="..." width="100%" height="auto">
      <!-- <div class="carousel-caption">
      <h1><span style="font-size:50px">Caption 1 for banner 1</span></h1>
      </div> -->
    </div>
    <div class="item">
      <img src="<?php echo base_url(); ?>assets/image/banners/5.png" alt="..." width="100%" height="auto">
      <!-- <div class="carousel-caption">
      <h1><span style="font-size:50px">Caption 2 for banner 2</span></h1>
      </div> -->
    </div>
    <div class="item">
      <img src="<?php echo base_url(); ?>assets/image/banners/13.jpg" alt="..." width="100%" height="auto">
      <!-- <div class="carousel-caption">
      <h1><span style="cfont-size:50px">Caption 3 for banner 3</span></h1>
      </div> -->
    </div><div class="item">
      <img src="<?php echo base_url(); ?>assets/image/banners/8.jpg" alt="..." width="100%" height="auto">
     <!--  <div class="carousel-caption">
      <h1><span style="font-size:50px">Caption 4 for banner 4</span></h1>
      </div> -->
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
    <div class="col-md-8">
      <h1 class="page-header">के तपाइलाई थाहा छ​ ?</h1>
      <h4>
        <ul>
          <li>अपराधिक क्रियाकलाप नियन्त्रन गर्न हाम्रो अभिमान !</li><br>
          <li>अपाराध गर्नु भन्दा अपराध सहनु  ठुलो  अपाराध हो !</li><br>
          <li>सामाजिक घटनालाई आफैँमा सिमित नराखौँ !</li><br>
          <li>कानून अन्धो हुन्छ​</li><br>
          <li>एउटा अपाराधले अर्को अपराध निम्त्याउँछ !</li><br>
          <li>घुस लिन्या र दिन्या दुबै देशका ठूला शत्रु हुन ।</li>
        </ul>
      </h4>
    </div>
    <div class="col-md-4" border="2">
       <div class="well">
         <h3>Find us on Social:</h3><hr>
         <div class="fb-page" data-href="https://www.facebook.com/icomdroid" data-tabs="timeline" data-width="380" data-height="120" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" align="center">
           <blockquote cite="https://www.facebook.com/icomdroid" class="fb-xfbml-parse-ignore">
            <a href="https://www.facebook.com/icomdroid">IComDroid</a>
           </blockquote>
         </div><hr>
         <div align="center">
           <a href="https://twitter.com/icomdroid" class="twitter-follow-button" data-size="large" data-show-count="false"><strong>Follow @iComDroid</strong></a>
         </div>
       </div>
    </div>
  </div>
  <div class="row well" >
 
    
    <div class="col-md-4">
      <a href="mailto:mail@iComDroid.com?Subject=Query%20|%20HamroSamaj">
        <button type="button" class="btn-lg btn-success navbar-btn">Contact Us</button>
      </a>
    </div>
    <div class="col-md-4"></div>
    <div class="col-md-4" align="right">
      <a href="<?=base_url('Home/contacts')?>">
        <button type="button" class="btn-lg btn-danger navbar-btn">Important Contact</button>
      </a>
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