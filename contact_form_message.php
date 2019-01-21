<?php
session_start();
require_once("db_connection.php");
if(isset($_POST['from_who'])&& isset($_POST['email'])&& isset($_POST['message']))
{
//require_once("mail.php");
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