<?php
 

 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "db_project_exam";
 
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
mysqli_select_db ($conn, $db);

if ($conn->connect_error)
{
	die("Connect failed: %s\n". $conn -> connect_error);
}



?>