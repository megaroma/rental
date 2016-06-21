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
	

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

     <style>
      body {
        padding-top: 20px;
        padding-bottom: 20px;
        background-image: url("<?php echo asset_url('pics/003-subtle-light-pattern-background-texture-vol5.jpg');?>");
        background-color: #FFFFFF;  
      }
      .navbar {
        margin-bottom: 20px;
      }

      .line {
        background-color: #666666;
        content: "";
        display: inline-block;
        height: 3px;
        position: relative;
        vertical-align: middle;
        width: 30px;
      }

   @media print {
    .MapToPrint {
        background-color: white;
        height: 100%;
        width: 100%;
        position: fixed;
        top: 0;
        left: 0;
        margin: 0;
        padding: 15px;
        font-size: 14px;
        line-height: 18px;
    }
  }
   
    </style>

    <script>
      $( document ).ready(function() {

      });
    </script>
  </head>

  <body>

      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://<?php echo base_url(); ?>admin">Admin</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="http://<?php echo base_url(); ?>admin">Home</a></li>

              <li class="dropdown" >
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Admin <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="">Users</a></li>
                  <li><a href="">Roles</a></li>
                </ul>
              </li>
            </ul>

 
            <ul class="nav navbar-nav navbar-right">
              <?php if($this->auth->check()): ?>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $this->auth->get_user()->full_name; ?> <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="http://<?php echo base_url(); ?>">Web Site</a></li>
                  <li><a href="http://<?php echo base_url(); ?>home/logout">Logout</a></li>
                </ul>
              </li>  
              <?php endif; ?>         
            </ul>



          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>


<?php echo $content; ?>

    <script src="<?php echo asset_url('js/ie10-viewport-bug-workaround.js');?>"></script>
  </body>
</html>