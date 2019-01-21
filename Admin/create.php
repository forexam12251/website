<?php
//admin can add users in database
echo "<link rel='stylesheet' type='text/css' href='../CSS/home_css.css' />";
include_once ("profile_admin.php");
include_once("../footer.php");
include_once ("../db_connection.php");
if (isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
		$email = $_POST['email'];
        $password = $_POST['password'];
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
        //validate($username, $email, $password);
		
			
		$query = "INSERT INTO `users` (username, password, email, first_name, last_name) 
					VALUES ('$username', '$password', '$email', '$first_name', '$last_name')";
		$result = mysqli_query($conn, $query);
		if($result ==true){
		echo "<script type='text/javascript'>alert('User added!');</script>";
		}
		
		else{
		echo "<script type='text/javascript'>alert('User was not added!')</script>";
		}
	
	}
    
	?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
crossorigin="anonymous">
<style>
 
#loading-img{
display:none;
}
 
.response_msg{
margin-top:10px;
font-size:13px;
background:#E5D669;
color:#ffffff;
width:250px;
padding:3px;
display:none;
}
 
</style>
<div class="container">
<div class="row">
 
<div class="col-md-8">
<h1>Add an user</h1>
<form name="contact-form" action="" method="post" id="contact-form">
<div class="form-group">
<label for="username">Username</label>
<input type="text" class="form-control" name="username" placeholder="username" required>
</div>
<div class="form-group">
<label for="password">Password</label>
<input type="text" class="form-control" name="password" placeholder="password" required>
</div>
<div class="form-group">
<label for="email">Email</label>
<input type="email" class="form-control" name="email" placeholder="Email" required>
</div>
<div class="form-group">
<label for="first_name">First Name</label>
<input type="text" class="form-control" name="first_name" placeholder="first_name" required>
</div>
<div class="form-group">
<label for="last_name">Last Name</label>
<input type="text" class="form-control" name="last_name" placeholder="last_name" required>
</div>
 
<button type="submit" class="btn btn-primary" name="submit" value="Add" id="submit_form">Add</button>
<a href="admin.php">
<input input type="button" class="btn btn-primary" value="Back"/>
</a>
</form>
<script>
$(document).ready(function(){
$("#contact-form").on("submit",function(e){
e.preventDefault();
if($("#contact-form [name='from_who']").val() === '')
{
$("#contact-form [name='from_who']").css("border","1px solid red");
}
else if ($("#contact-form [name='email']").val() === '')
{
$("#contact-form [name='email']").css("border","1px solid red");
}
else
{
$("#loading-img").css("display","block");
var sendData = $( this ).serialize();
$.ajax({
type: "POST",
url: "contact_form_message.php",
data: sendData,
success: function(data){
$("#loading-img").css("display","none");
$(".response_msg").text(data);
$(".response_msg").slideDown().fadeOut(3000);
$("#contact-form").find("input[type=text], input[type=email], textarea").val("");
}
 
});
}
});
 
$("#contact-form input").blur(function(){
var checkValue = $(this).val();
if(checkValue != '')
{
$(this).css("border","1px solid #eeeeee");
}
});
});
</script>