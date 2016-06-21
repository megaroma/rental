<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="payment page">
    <meta name="author" content="">

    <title><?php echo (isset($title)? $title : "Car Rental");?></title>

    <link href="<?php echo asset_url('css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo asset_url('css/ie10-viewport-bug-workaround.css');?>" rel="stylesheet">
    <link href="<?php echo asset_url('css/font-awesome.min.css');?>" rel="stylesheet">
    <link media="all" type="text/css" rel="stylesheet" href="<?php echo asset_url('css/bootstrap-formhelpers.min.css');?>">
    <style type="text/css">

    </style>
    <script src="<?php echo asset_url('js/ie-emulation-modes-warning.js');?>"></script>
    <script src="<?php echo asset_url('js/jquery-1.11.2.min.js');?>"></script>
    <script src="<?php echo asset_url('js/bootstrap.min.js');?>"></script>
    <script src="<?php echo asset_url('js/bootstrap-formhelpers.min.js');?>"></script>
	
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,600" rel="stylesheet">
    <!-- FancyBox -->
	<link href="<?php echo asset_url('/css/fancybox/jquery.fancybox.css');?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo asset_url('/css/style.css');?>">
    <link rel="stylesheet" href="<?php echo asset_url('/css/animate.min.css');?>">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

 

    <script>
      $( document ).ready(function() {

      });
    </script>
  </head>

  <body>
  <header>
  <!-- MENU -->
	<div id="navbar-top">
      <nav class="navbar navbar-default navbar-static" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand nav-external" href="http://<?php echo base_url(); ?>"><strong>CAR RENTAL</strong></a>
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="active">
                <a href="/" class="external">Home</a>
              </li>
              <li>
                <a href="http://<?php echo base_url(); ?>cars" class="external">Cars</a>
              </li>
              <li>
                <a href="#">Contact</a>
              </li>
			  <li>
                <a href="#"></a>
              </li>
			  <li>
                <a href="#"></a>
              </li>
			  <li>
                <a href="#"></a>
              </li>
    <?php if($this->auth->check()): ?>
        <li>
          <a href="http://<?php echo base_url(); ?>user/profile" class="external"><?php echo $this->auth->get_user()->full_name; ?></a>
        </li>
        <?php if($this->auth->has_role("admin")): ?>
        <li>
          <a href="http://<?php echo base_url(); ?>admin" class="external">Admin Page</a>
        </li> 
        <?php elseif($this->auth->has_role("staff")): ?>       
        <li>
          <a href="http://<?php echo base_url(); ?>manager" class="external">Admin Page</a>
        </li> 
        <?php endif; ?>
        <li>
          <a href="http://<?php echo base_url(); ?>home/logout" class="external">Logout</a>
        </li>
    <?php else: ?>
        <li>
          <a href="http://<?php echo base_url(); ?>home/register" class="external">Registration</a>
        </li>
			  <li>
          <a href="http://<?php echo base_url(); ?>home/login" class="external">Login</a>
        </li>
    <?php endif; ?>


            </ul>
          </div>
        </div>
      </nav>
    </div>
  <!-- END MENU -->	
  </header>

    <?php echo $content; ?>

	<footer id="footer">
      <div class="container"> 
        <div class="row">
          <div class="col-lg-12 animated hiding">
            <ul class="social list-inline ">
              <li>
                <a class="facebook" href="http://www.facebook.com" title="Facebook">
                  <i class="fa fa-facebook fa-2x"></i>
                </a>
              </li>
              <li>
                <a class="twitter" href="http://www.twitter.com" title="Twitter">
                  <i class="fa fa-twitter fa-2x"></i>
                </a>
              </li>
              <li>
                <a class="google-plus" href="http://www.plus.google.com" title="Google+">
                  <i class="fa fa-google-plus fa-2x"></i>
                </a>
              </li>
              <li>
                <a class="dribbble" href="http://www.linkedin.com" title="Dribbble">
                  <i class="fa fa-dribbble fa-2x"></i>
                </a>
              </li>
            </ul>
            <p class="copyright"> 
			Copyright © All rights reserved! 2016
			</p>
			<p class="copyright">
			Created by Roman Fominykh, Eduard Shcherban
            </p>
          </div>
        </div>
      </div>
    </footer>
	
      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo asset_url('js/ie10-viewport-bug-workaround.js');?>"></script>
	<script src="assets/js/modernizr-latest.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.cslider.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
	<script src="assets/js/jquery.fancybox.pack.js"></script>  
	<script src="assets/js/jquery.fancybox-media.js"></script>  
    <script src="assets/js/imagesloaded.min.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nav.min.js"></script>
    <script src="assets/js/jquery.appear.min.js"></script>
    <script src="assets/js/twitterFetcher.min.js"></script>
	<script src="contact/jqBootstrapValidation.js"></script>
	<script src="contact/contact_me.js"></script>
    <script src="assets/js/script.js"></script> 
	<script type="text/javascript">
    $(document).ready(function () {
		$('#da-slider').cslider({
			autoplay: true,
			bgincrement: 0
		});
    });
    </script>
  </body>
</html>