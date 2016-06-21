<h1>register</h1>

  <?if($error): ?>
  <div class="alert alert-danger" role="alert">
  	<?php echo $error_msg; ?>	
  </div>
   <?php endif; ?>

<form class="form-horizontal" method="post" action="http://<?php echo base_url(); ?>/home/register" enctype="multipart/form-data">

  <div class="form-group">
    <label for="inputFirstName" class="col-sm-2 control-label">Full Name</label>
    <div class="col-sm-10">
      <input type="text" name="full_name" class="form-control" id="inputFirstName" placeholder="Full Name" value="<?php echo $full_name;?>">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email" value="<?php echo $email; ?>">
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
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
      <button type="submit" class="btn btn-default">Sign Up</button>
    </div>
  </div>

</form>