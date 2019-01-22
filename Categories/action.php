<?php
echo "<link rel='stylesheet' type='text/css' href='../CSS/home_css.css' />";
include_once("../footer.php");
include_once ("../db_connection.php");
include_once ("../header.php");
$query1 = "SELECT * FROM `vhs` WHERE `category` = 'Action' AND `type` = 'VHS'";
$query2 = "SELECT * FROM `dvd` WHERE `category` = 'Action' AND `type` = 'DVD'";
$query3 = "SELECT * FROM `blue-ray` WHERE `category` = 'Action' AND `type` = 'Blu-Ray'";
$result1 = mysqli_query($conn, $query1);
$result2 = mysqli_query($conn, $query2);
$result3 = mysqli_query($conn, $query3);

?>
<!DOCTYPE html>
<html>
<head>
<title>ЛИНК</title>
</head>

<body>
<h2 style="text-align: center">Category: Action <a href="../categories.php">
	<input input type="button" class="btn btn-primary" value="Back"/>
	</a>
</h2>
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
<table id="myTable">
<?php
		echo "<tr>";
		echo "<th>".'Name'."</th>";
		echo "<th>".'Release Date'."</th>";
		echo "<th>".'Category'."</th>";
		echo "<th>".'Available'."</th>";
		echo "<th>".'Type'."</th>";
		echo "</tr>";
	if(!isset($_GET['id'])){
		while ($row = mysqli_fetch_array($result1)){
			echo "<tr>";
			echo "<td>".$row["name"]."</td>";
			echo "<td>".$row["release_date"]."</td>";
			echo "<td>".$row["category"]."</td>";	
			echo "<td>".$row["available"]."</td>";
			echo "<td>".$row["type"]."</td>";
			echo "</tr>";
			}
			while ($row = mysqli_fetch_array($result2)){
			echo "<tr>";
			echo "<td>".$row["name"]."</td>";
			echo "<td>".$row["release_date"]."</td>";
			echo "<td>".$row["category"]."</td>";	
			echo "<td>".$row["available"]."</td>";
			echo "<td>".$row["type"]."</td>";
			echo "</tr>";
			}
			while ($row = mysqli_fetch_array($result3)){
			echo "<tr>";
			echo "<td>".$row["name"]."</td>";
			echo "<td>".$row["release_date"]."</td>";
			echo "<td>".$row["category"]."</td>";	
			echo "<td>".$row["available"]."</td>";
			echo "<td>".$row["type"]."</td>";
			echo "</tr>";
			}
	}

?>
<div class="container">
<div class="row">
<div class="col-md-8">
<div style="text-align: center">

	</div>
</body>


</html>