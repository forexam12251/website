<?php 
session_start();
include_once ("Body/register.body.php");
include_once ("db_connection.php");


// initializing variables
/*$username = "";
$email    = "";
$password_1 = "";
$password_2 = "";
$first_name = "";
$last_name = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '');

// REGISTER USER
if (isset($_POST['submit'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $first_name = mysqli_real_escape_string($db, $_POST['first_name']);
  $last_name = mysqli_real_escape_string($db, $_POST['last_name']);
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }
  if (empty($first_name)) { array_push($errors, "First Name is required"); }
  if (empty($last_name)) { array_push($errors, "Last Name is required"); }
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password, first_name, last_name) 
  			  VALUES($username, $email, $password, $first_name, $last_name)";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}*/


	require('db_connection.php');
	$isValid = true;
	//$errors = array();
	function validate($username, $email, $password, $password_2){
		global $isValid;
		$isValid = true;
    // Validate username
    if (strlen($username) < 4){
        $_SESSION['error'] = 'Username too short, should be at least 4 characters';
		echo "<script type='text/javascript'>alert('Username too short, should be at least 4 characters')</script>";
        $isValid = false;
    }
	elseif(strlen($username) > 25){
        $_SESSION['error'] = 'Username too long, should be not more than 25 characters';
		echo "<script type='text/javascript'>alert('Username too long, should be not more than 25 characters')</script>";
        $isValid = false;
    }
    // Validate password
    if (strlen($password) < 6){
        $_SESSION['error'] = 'Password is too short, should be at least 6 characters';
		echo "<script type='text/javascript'>alert('Password is too short, should be at least 6 characters')</script>";
        $isValid = false;
    }
    // Validate confirm password
    if ($password != $password_2){
        $_SESSION['error'] = 'Passwords did not match!';
		echo "<script type='text/javascript'>alert('Passwords did not match!')</script>";
        $isValid = false;
    }
    // Validate email address
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = 'Invalid email address!';
		echo "<script type='text/javascript'>alert('Invalid email address!')</script>";
        $isValid = false;
    }
	return $isValid;
	}
    // If the values are posted, insert them into the database.
    if (isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
		$email = $_POST['email'];
        $password = $_POST['password'];
		$password_2 = $_POST['password_2'];
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
        validate($username, $email, $password, $password_2);
		if($isValid==true){
			
		$query = "INSERT INTO `users` (username, password, email, first_name, last_name) 
					VALUES ('$username', '$password', '$email', '$first_name', '$last_name')";
		$result = mysqli_query($conn, $query);
		echo "<script type='text/javascript'>alert('Registretion successfull!'); location.href='login.php';</script>";
		
		}
		else{
		echo "<script type='text/javascript'>alert('Registration failed!')</script>";
		}
	
	}
    
	?>

