<?php
echo "<link rel='stylesheet' type='text/css' href='../CSS/home_css.css' />";
include_once("footer.php");
include_once ("db_connection.php");
include_once ("header.php");


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
<h1 style="text-align: center">Categories</h1>
<div style="text-align: center">
<br>
	<a href="../Categories/action.php"><input input type="button" class="btn btn-primary" value="Action"/></a>
	<a href="../Categories/comedy.php"><input input type="button" class="btn btn-primary" value="Comedy"/></a>
	<a href="../Categories/fantasy.php"><input input type="button" class="btn btn-primary" value="Fantasy"/></a>	
	<a href="../Categories/horror.php"><input input type="button" class="btn btn-primary" value="Horror"/></a>
	<a href="../Categories/sci-fi.php"><input input type="button" class="btn btn-primary" value="Sci-Fi"/></a>
	<br>
	<br>
	<a href="home.php">
	<input input type="button" class="btn btn-primary" value="Home"/>
	</a>
</div>

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