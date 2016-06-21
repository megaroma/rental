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
<?php echo $content; ?>

    <script src="<?php echo asset_url('js/ie10-viewport-bug-workaround.js');?>"></script>
  </body>
</html>