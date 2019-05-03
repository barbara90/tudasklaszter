<?php 
  session_start(); 

  switch($_REQUEST['page']){
        case "authentication":
            include("login.php"); break;
        case "registration":
            include("registration.php"); break;

    }

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "Kérem jelentkezzen be!";
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  }
?>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">Kijelentkezés</a> </p>
    <?php endif ?>
</div>