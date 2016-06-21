<div class="container">
<h1 class="page-header text-center">Info:</h1>
<div class="row">
    <div class="col-sm-3 col-md-3">
 		<div class="list-group">
  			<a href="http://<?php echo base_url(); ?>user/profile" class="list-group-item active left-menu">Info</a>
  			<a href="http://<?php echo base_url(); ?>user/password" class="list-group-item left-menu">Change Password</a>
  			<a href="http://<?php echo base_url(); ?>user/orders" class="list-group-item left-menu">My Orders</a>
		</div>
    </div>
    <div class="col-sm-9  main">
          


 <?if($error): ?>
  <div class="alert alert-danger" role="alert">
  	<?php echo validation_errors(); ?>	
  </div>
 <?php endif; ?>
 <?if($updated): ?>
  <div class="alert alert-success" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  		<strong>Success</strong> Your profile was updated. 
  </div>
 <?php endif; ?>



<form class="form-horizontal" method="post" action="http://<?php echo base_url(); ?>/user/profile" enctype="multipart/form-data">

  <div class="form-group">
    <label for="inputFirstName" class="col-sm-2 control-label">Full Name</label>
    <div class="col-sm-10">
      <input type="text" name="full_name" class="form-control" id="inputFirstName" placeholder="Full Name" value="<?php echo $full_name;?>">
    </div>
  </div>

  <div class="form-group">
    <label for="inputDriver_licence" class="col-sm-2 control-label">Driver Licence</label>
    <div class="col-sm-10">
      <input type="text" name="driver_licence" class="form-control" id="inputDriver_licence" placeholDer="Driver Licence" value="<?php echo $driver_licence; ?>">
    </div>
  </div>

  <div class="form-group">
    <label for="inputAge" class="col-sm-2 control-label">Age</label>
    <div class="col-sm-10">
      <input type="text" name="age" class="form-control" id="inputAge" placeholder="Age" value="<?php echo $age; ?>">
    </div>
  </div>

  <div class="form-group">
    <label for="inputGender" class="col-sm-2 control-label">Gender</label>
    <div class="col-sm-10">
      <label class="radio-inline">
        <input type="radio" name="gender" id="inlineGender1" value="male" <?php if(($gender == "male") || ($gender == "") ) echo "checked";?> > Male
      </label>
      <label class="radio-inline">
        <input type="radio" name="gender" id="inlineGender2" value="female" <?php if($gender  == "female") echo "checked"; ?> > Female
      </label>
    </div>
  </div>

  <input type="hidden" name="action" value="submit">

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default car_button">Save Changes</button>
    </div>
  </div>

</form>



    </div>
</div>
</div>