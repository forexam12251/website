<?php
//admin can edit user information
echo "<link rel='stylesheet' type='text/css' href='../CSS/home_css.css' />";

include_once("../footer.php");
require ("../db_connection.php");
include_once ("profile_admin.php");

session_start();

if($_SESSION['user_id'] != 1)
{
	header("location: ../404page.php");
}
$query = "SELECT * FROM `users`";
$result = mysqli_query($conn, $query);
	
	//print_r($row);

//{
/*if (isset($_POST['username']) && isset($_POST['password'])){
		$id = "SELECT id FROM `users`";
        $username = $_POST['username'];
		$email = $_POST['email'];
        $password = $_POST['password'];
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];			
		$query1 = "UPDATE `users` SET username='$username',password='$password',
					email='$email',
					first_name='$first_name',
					last_name='$last_name' WHERE id='$id'";
					
					
					
		$result1 = mysqli_query($conn, $query1);
		if($result1){
		echo "<script type='text/javascript'>alert('User Edited!');</script>";
		}
		
		else{
		echo "<script type='text/javascript'>alert('User not Edited!')</script>";
		}
	
	}
//}*/
?>
<h2>All Users:</h2>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
<table id="myTable">
<?php
		echo "<tr>";
		echo "<th>"."ID"."</th>";
		echo "<th>".'Username'."</th>";
		echo "<th>".'Password'."</th>";
		echo "<th>".'Email'."</th>";
		echo "<th>".'First Name'."</th>";
		echo "<th>".'Last Name'."</th>";
		echo "</tr>";
	if(!isset($_GET['id'])){
		while ($row = mysqli_fetch_array($result)){
		//$editUser=$row['username'];
			echo "<tr>";
			echo "<td><a href='edit_user.php?id=".$row["id"]."'>".$row["id"]."</a></td>";
			echo "<td>".$row["username"]."</td>";
			echo "<td>".$row["password"]."</td>";
			echo "<td>".$row["email"]."</td>";	
			echo "<td>".$row["first_name"]."</td>";
			echo "<td>".$row["last_name"]."</td>";
			echo "</tr>";
			}
	}
	
	else{
		$query="SELECT * FROM `users` WHERE `id`= {$_GET['id']}";
		$result=mysqli_query($conn,$query);
		$row = mysqli_fetch_assoc($result);
		
		$num = $_GET['id'];
		
		echo "<tr>";
		echo "<td><a href='edit_user.php?id=".$row["id"]."'>".$row["id"]."</a></td>";
		echo "<td>".$row["username"]."</td>";
		echo "<td>".$row["password"]."</td>";
		echo "<td>".$row["email"]."</td>";	
		echo "<td>".$row["first_name"]."</td>";
		echo "<td>".$row["last_name"]."</td>";
		echo "</tr>";
		//if ($result == true){
		
		
		if(isset($_POST['submit'])){
			
			$newusername = $_POST['username'];
			$newpassword = $_POST['password'];
			$newemail = $_POST['email'];
			$newfirst_name = $_POST['first_name'];
			$newlast_name = $_POST['last_name'];
			$update = "UPDATE `users` 
					SET `username` = '$newusername',
					`password` = '$newpassword',
					`email` = '$newemail',
					`first_name` = '$newfirst_name',
					`last_name` = '$newlast_name'
					WHERE `id`={$num}";
			$done_update = mysqli_query($conn,$update);
			if(isset($_POST['submit'])){
				if($done_update == true){
					echo "<script type='text/javascript'>alert('User Edited!'); Location.href='edit_user.php?id={$num}'</script>";
					header("Location: edit_user.php?id={$num}");
					}
				else{
					echo "<script type='text/javascript'>alert('User not Edited!')</script>";
				}
		}
		
		
		}
		
		
		
		if(isset($_POST['delete'])){
			$delete = "DELETE FROM `users` WHERE `id`= {$num}";
			$done_delete = mysqli_query($conn,$delete);
			if(isset($done_delete)){
			echo "<script type='text/javascript'>alert('User Deleted!'); location.href='edit_user.php';</script>";
			}
			else{
			echo "<script type='text/javascript'>alert('User not Deleted!')</script>";
			}
		}
		
	}

//<?php echo $row['last_name'];}
	
?>
</table>
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
	<h1>Edit user</h1>
	<form name="contact-form" method="post" id="contact-form">
		<div>
		<label for="username">Username</label>
		<input type="text" class="form-control" name="username" placeholder="Username">
		</div>
		<div>
		<label for="password">Password</label>
		<input type="text" class="form-control" name="password" placeholder="Password">
		</div>
		<div > 	
		<label for="email">Email</label>
		<input type="email" class="form-control" name="email" placeholder="Email">
		</div>
		<div >
		<label for="first_name">First Name</label>
		<input type="text" class="form-control" name="first_name" placeholder="First Name">
		</div>
		<div>
		<label for="last_name">Last Name</label>
		<input type="text" class="form-control" name="last_name" placeholder="Last Name">
		</div>
		<a href="edit_user.php">
		<input type="button" class="btn btn-primary" value="Refresh"/>
		</a>
		<a href="admin.php">
		<input type="button" class="btn btn-primary" value="Back"/>
		</a>
		<a href="create.php">
		<input type="button" class="btn btn-primary" value="Add User"/>
		</a>
		<a>
		<button type="submit" class="btn btn-primary" name="submit" value="Edit user">Update</button>
		</a>
		<a href="edit_user.php">
		<button type="submit" class="btn btn-primary" name="delete" value="Delete User">Delete</button>
		</a>
	</form>
</div><!--value=""-->
<!--<script>class="form-group"
function update() {
	var x;
	if(confirm("Update successful") == true){
		x="update";
	}
}
</script>
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
</script>-->
<br>
</body>
</html>