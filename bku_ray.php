<?php
	echo "<link rel='stylesheet' type='text/css' href='../CSS/home_css.css' />";
	session_start();
   include_once("header.php");
   include_once("footer.php");
   require ("db_connection.php");
	
	$query = "SELECT * FROM `blue-ray`";
	$result = mysqli_query($conn, $query);

?>
<!DOCTYPE html>
<html>
<head>
<title>ЛИНК</title>
</head>

<body>
<h2 style="text-align: center">Blu-Ray Movies</h2>
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
		while ($row = mysqli_fetch_array($result)){
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

</body>


</html>