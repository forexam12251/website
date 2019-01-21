<?php
   include("db_connection.php");
   session_start();
   
   if(isset($_POST['Submit'])) {
      // username and password sent from form 
      
      $myusername = $_POST['username'];
      $mypassword = $_POST['password']; 
      
      $sql = "SELECT id FROM users WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
			$_SESSION['login_user'] = $myusername;
			if(strval($myusername) == "admin"){
				header("location: ../Admin/admin.php");
				
			}
			else{
			
			
			
				header("location: home.php");
			}
		}else {
			echo "<script type='text/javascript'>alert('Your Username or Password is invalid')</script>";
		}
	}
?>



<form id='login' action='login.php' method='post' accept-charset='UTF-8' href="../CSS/bootstrap.css">
<fieldset >
<legend>Login</legend>
<input type='hidden' name='submitted' id='submitted' value='1'/>
<label for='username' >Username*:</label>
<input type='text' name='username' id='username'  maxlength="40" />
<label for='password' >Password*:</label>
<input type='password' name='password' id='password' maxlength="256" />
<input type='submit' name='Submit' value='Login' href='home.php' />
<br>
<br>
<a href='Register.php' ><mark> Register </mark></a>
</fieldset>
</form>


