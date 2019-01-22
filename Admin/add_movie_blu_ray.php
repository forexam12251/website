<?php
echo "<link rel='stylesheet' type='text/css' href='../CSS/home_css.css' />";
include_once("../footer.php");
include_once ("../db_connection.php");
include_once ("profile_admin.php");
session_start();

if($_SESSION['user_id'] != 1)
{
	header("location: ../404page.php");
}

    if (isset($_POST['name'])){
        $name = $_POST['name'];
		$release = $_POST['release_date'];
        $category = $_POST['category'];
		$available = $_POST['available'];
		$type = $_POST['type'];
		$query = "INSERT INTO `blue-ray` (name, release_date, category, available, type) 
					VALUES ('$name', '$release', '$category', '$available', '$type')";
		$result = mysqli_query($conn, $query);
		if($result==true){
		echo "<script type='text/javascript'>alert('Blu-ray Movie Added!');</script>";
		
		}
		else{
		echo "<script type='text/javascript'>alert('Blu-Ray Movie Not Added!')</script>";
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
<h1>Add a Movie</h1>
<form name="contact-form" action="" method="post" id="contact-form">
<div class="form-group">
<label for="name">Name</label>
<input type="text" class="form-control" name="name" placeholder="name" >
</div>
<div class="form-group">
<label for="release_date">Release Date</label>
<input type="text" class="form-control" name="release_date" placeholder="release date" >
</div>
<div class="form-group">
<label for="category">Category</label>
<input type="text" class="form-control" name="category" placeholder="category" >
</div>
<div class="form-group">
<label for="available">Available</label>
<input type="int" class="form-control" name="available" placeholder="available" >
</div>
 <div class="form-group">
<label for="type">Type</label>
<input type="text" class="form-control" name="type" placeholder="Type" >
</div>
<button type="submit" class="btn btn-primary" name="submit" value="Add" id="submit_form">Add</button>
<a href="add_movie.php">
<input input type="button" class="btn btn-primary" value="Back"/>
</a>
<a href="admin.php">
<input type="button" class="btn btn-primary" value="Back to Admin panel">
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