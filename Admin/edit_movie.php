<?php
echo "<link rel='stylesheet' type='text/css' href='../CSS/home_css.css' />";
include_once("../footer.php");
include_once ("../db_connection.php");
include_once ("profile_admin.php");
if (isset($_POST['name']) && isset($_POST['release_date'])){
        $movie_name = $_POST['name'];
		$release_date = $_POST['release_date'];
        $category = $_POST['category'];
		$available = $_POST['available'];
		$type = $_POST['movie_type'];
        //validate($username, $email, $password);
		
			
		$query = "INSERT INTO $type (name, release_date, category, available) 
					VALUES ('$movie_name', '$release_date', '$category', '$available')";
		$result = mysqli_query($conn, $query);
		if($result ==true){
		echo "<script type='text/javascript'>alert('Movie added!');</script>";
		}
		
		else{
		echo "<script type='text/javascript'>alert('Movie not added!')</script>";
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
<h1>Edit Movie</h1>
<div>
	<a href="edit_movie_vhs.php">VHS</a>
	<a href="edit_movie_dvd.php">DVD</a>
	<a href="edit_movie_blu_ray.php">Blu-Ray</a>	
</div>
<a href="admin.php">
<input input type="button" class="btn btn-primary" value="Back"/>
</a>
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