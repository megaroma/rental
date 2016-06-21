<div class="container">
<div class="row">
    <div class="col-sm-3 col-md-2">
 		<div class="list-group">
  			<a href="http://<?php echo base_url(); ?>user/profile" class="list-group-item">Info</a>
  			<a href="http://<?php echo base_url(); ?>user/password" class="list-group-item active">Change Password</a>
  			<a href="http://<?php echo base_url(); ?>user/orders" class="list-group-item">My Orders</a>
		</div>
    </div>
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Change Password:</h1>

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






<form class="form-horizontal" method="post" action="http://<?php echo base_url(); ?>/home/register" enctype="multipart/form-data">

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
      <button type="submit" class="btn btn-default">Change</button>
    </div>
  </div>

</form>


    </div>
</div>
</div>