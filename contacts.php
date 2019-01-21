<?php
echo "<link rel='stylesheet' type='text/css' href='../CSS/home_css.css' />";
//echo 'contact.css';
include 'db_connection.php';
include_once("header.php");
include_once("footer.php");
if(isset($_POST['from_who'])&& isset($_POST['email'])&& isset($_POST['message']))
{
$yourName = $_POST['from_who'];
$yourEmail = $_POST['email'];
$comments = $_POST['message'];
 
$sql="INSERT INTO `contact`	 (from_who, email, message) VALUES ('$yourName','$yourEmail', '$comments')";
 
$result = mysqli_query($conn, $sql);
if($result == true){
echo "<script type='text/javascript'>alert('Message send');</script>";
}
else
{
die("<script type='text/javascript'>alert('Message failed')</script>");
}
}
?>
<html>
<head>
<!-- Latest compiled and minified CSS -->
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
</head>
<body>
 
<div class="container">
<div class="row">
 
<div class="col-md-8">
<h1>Send us a message</h1>
<form name="contact-form" action="" method="post" id="contact-form">
<div class="form-group">
<label for="Name">Name</label>
<input type="text" class="form-control" name="from_who" placeholder="Name" required>
</div>
<div class="form-group">
<label for="exampleInputEmail1">Email address</label>
<input type="email" class="form-control" name="email" placeholder="Email" required>
</div>
<div class="form-group">
<label for="message">Message</label>
<textarea name="message" class="form-control" rows="3" cols="28" rows="5" placeholder="Comments"></textarea> 
</div>
 
<button type="submit" class="btn btn-primary" name="submit" value="Submit" id="submit_form">Submit</button>
<img src="img/loading.gif" id="loading-img">
</form>
 
<div class="response_msg"></div>
</div>
</div>
</div>
<script src="Success"></script>
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
<!--<body>
<form action="mail.php" method="POST">
<p>Name</p> <input type="text" name="name">
<p>Email</p> <input type="text" name="email">
<p>Phone</p> <input type="text" name="phone">
<p>Type</p>
<select name="type" size="1">
<option value="update">Update</option>
<option value="change">Information Change</option>
<option value="addition">Add Movie</option>
</select>
<br />

<p>Message</p><textarea name="message" rows="6" cols="25"></textarea><br />
<input type="submit" value="Send"><input type="reset" value="Clear">
</form>
</body>-->
</html>