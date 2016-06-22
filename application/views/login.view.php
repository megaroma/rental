<div class="container">
  <div class="row">
  <div class="col-md-4 col-md-offset-4">
  <?if($error): ?>
  <div class="alert alert-danger" role="alert">
  	<?php echo $error_msg; ?>	
  </div>
   <?php endif; ?>

      <form class="form-signin" method="post" action="http://<?php echo base_url(); ?>/home/login">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus value="<?php echo $email; ?>">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" name="remember" value="remember-me"> Remember me
          </label>
        </div>
		<a href="http://<?php echo base_url(); ?>home/faggot">Forget Password?</a>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
	</div>
	</div>
</div> <!-- /container -->
