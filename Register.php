<?php 
echo "<link rel='stylesheet' type='text/css' href='../CSS/home_css.css' />";

session_start();
include_once ("Body/register.body.php");
include_once ("db_connection.php");



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
		echo "<script type='text/javascript'>alert('Registration successfull!'); location.href='login.php';</script>";
		
		}
		else{
		echo "<script type='text/javascript'>alert('Registration failed!')</script>";
		}
	
	}
    
	?>

