<div class="container">
<h1 class="page-header text-center">Change Password:</h1>
<div class="row">
    <div class="col-sm-3 col-md-3">
 		<div class="list-group">
  			<a href="http://<?php echo base_url(); ?>user/profile" class="list-group-item left-menu">Info</a>
  			<a href="http://<?php echo base_url(); ?>user/password" class="list-group-item active left-menu">Change Password</a>
  			<a href="http://<?php echo base_url(); ?>user/orders" class="list-group-item left-menu">My Orders</a>
		</div>
    </div>
    <div class="col-sm-9 main">

 <?if($error): ?>
  <div class="alert alert-danger" role="alert">
  	<?php echo validation_errors(); ?>	
  </div>
 <?php endif; ?>
 <?if($updated): ?>
  <div class="alert alert-success" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  		<strong>Success</strong> Your password was changed. 
  </div>
 <?php endif; ?>






<form class="form-horizontal" method="post" action="http://<?php echo base_url(); ?>/user/password" enctype="multipart/form-data">

  <div class="form-group">
    <label for="inputPassword2" class="col-sm-2 control-label">Current Password</label>
    <div class="col-sm-10">
      <input type="password" name="old_password" class="form-control" id="inputPassword2" placeholder="Password">
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">New Password</label>
    <div class="col-sm-10">
      <input type="password" name="new_password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword4" class="col-sm-2 control-label">Password Confirmation</label>
    <div class="col-sm-10">
      <input type="password" name="new_passconf" class="form-control" id="inputPassword4" placeholder="Password Confirmation">
    </div>
  </div>

  <input type="hidden" name="action" value="submit">

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default car_button">Change</button>
    </div>
  </div>

</form>


    </div>
</div>
</div>