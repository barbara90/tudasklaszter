<?php
session_reset();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'tudasklaszter');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
  $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($lastname)) { array_push($errors, "A vezetéknév megadása kötelező!"); }
  if (empty($firstname)) { array_push($errors, "A keresztnév megadása kötelező!"); }
  if (empty($username)) { array_push($errors, "A felhasználónév megadása kötelező!"); }
  if (empty($email)) { array_push($errors, "Az email cím megadása kötelező!"); }
  if (empty($password_1)) { array_push($errors, "A jelszó megadása kötelező!"); }
  if ($password_1 != $password_2) {
	array_push($errors, "A két jelszó nem egyezik!");
}

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "A megadott felhasználónév már létezik!");
    }

    if ($user['email'] === $email) {
      array_push($errors, "A megadott email cím már létezik!");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (lastname, firstname, username, email, password) 
  			  VALUES('$lastname', '$firstname', '$username', '$email', '$password')";
    mysqli_query($db, $query);
    $_SESSION['username'] = $lastname;
    $_SESSION['username'] = $firstname;
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "Bejelentkezett";
  	header('location: /');
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "A felhasználónév megadása kötelező!");
  }
  if (empty($password)) {
  	array_push($errors, "A jelszó megadása kötelező!");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $lastname;
      $_SESSION['username'] = $firstname;
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "Bejelentkezett";
  	  header('location: /');
  	} else {
  		array_push($errors, "Helytelen felhasználónév - jelszó páros!");
  	}
  }
}

?>