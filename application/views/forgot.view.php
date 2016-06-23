<div class="container">
	<div class="row">
	<h1 class="text-center">Change Password</h1>
	<?php if($message != ""): ?>
  <div class="alert alert-success" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo $message; ?>
  </div>
	<?php else: ?>
	<p class="text-center">Enter your email to generate a new password.</p>
			<?php if($error != ""): ?>
				<div class="alert alert-danger" role="alert">
    <?php echo $error; ?>  
  </div>

			<?php endif;?>

		<form class="form-horizontal" method="post">
	  <div class="form-group">
		<label for="inputEmail3" class="col-sm-2 col-sm-offset-1 control-label">Email</label>
		<div class="col-sm-6">
		  <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email" value="<?php echo $email; ?>">
		</div>
	  </div>
	  <div class="form-group">
		<div class="col-sm-offset-4 col-sm-4">
		  <button type="submit" class="btn btn-lg btn-primary btn-block">Send New Password</button>
		</div>
	  </div>
		</form>
	</div>
	<?php endif; ?>
</div>