<?php include('server.php') ?>
  <div class="header">
  	<h2>Bejelentkezés</h2>
  </div>
  <form method="post" action="">
      <?php include('errors.tpl.php'); ?>
    <div class="input-group">
  		<label>Vezetéknév</label>
  		<input type="text" name="lastname" >
    </div>
    <div class="input-group">
  		<label>Keresztnév</label>
  		<input type="text" name="firstname" >
  	</div>
  	<div class="input-group">
  		<label>Felhasználónév</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Jelszó</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Bejelentkezés</button>
  	</div>
  </form>