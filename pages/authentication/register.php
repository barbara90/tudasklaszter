<?php include('server.php') ?>
  <div class="header">
  	<h2>Regisztráció</h2>
  </div>
  <form method="post" action="authentication">
    <?php include('errors.php'); ?>
    <div class="input-group">
  		<label>Vezetéknév</label>
  		<input type="text" name="lastname" >
    </div>
    <div class="input-group">
  		<label>Keresztnév</label>
  		<input type="text" name="firstname" >
  	</div>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Regisztráció</button>
  	</div>
  	<p>
  		Már tagunk? <a href="login.php">Bejelentkezés</a>
  	</p>
  </form>
