<?php
echo "<link rel='stylesheet' type='text/css' href='../CSS/home_css.css' />";
include_once("../footer.php");
include_once ("../db_connection.php");
include_once ("profile_admin.php");
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
<br>
<ul>
    <li><a href="create.php"><strong>Add User</strong></a> - add a user</li>
	<br>
	<li><a href="add_movie.php"><strong>Add Movie</strong></a> - add a movie</li>
	<br>
    <li><a href="read.php"><strong>Messages</strong></a> - view all messages</li>
	<br>
    <li><a href="edit_user.php"><strong>Edit User</strong></a> - edit a user</li>
	<br>
	<li><a href="edit_movie.php"><strong>Edit Movie</strong></a> - edit a movie</li>
</ul>

