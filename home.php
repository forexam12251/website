<?php
   //include CSS Style Sheet
   echo "<link rel='stylesheet' type='text/css' href='../CSS/home_css.css' />";
   include_once("header.php");
   include_once("footer.php");
   require ("db_connection.php");
   $query1 = "SELECT * FROM `vhs`";
   $query2 = "SELECT * FROM `dvd`";
   $query3 = "SELECT * FROM `blue-ray`";
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
<h2>Top Rated Movies</h2>
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
		echo "</tr>";
	if(!isset($_GET['id'])){
		while ($row = mysqli_fetch_array($result1)){
		//$editUser=$row['username'];
			echo "<tr>";
			echo "<td>".$row["name"]."</td>";
			echo "<td>".$row["release_date"]."</td>";
			echo "<td>".$row["category"]."</td>";	
			echo "<td>".$row["available"]."</td>";
			echo "</tr>";
			}
			while ($row = mysqli_fetch_array($result2)){
		//$editUser=$row['username'];
			echo "<tr>";
			echo "<td>".$row["name"]."</td>";
			echo "<td>".$row["release_date"]."</td>";
			echo "<td>".$row["category"]."</td>";	
			echo "<td>".$row["available"]."</td>";
			echo "</tr>";
			}
			while ($row = mysqli_fetch_array($result3)){
		//$editUser=$row['username'];
			echo "<tr>";
			echo "<td>".$row["name"]."</td>";
			echo "<td>".$row["release_date"]."</td>";
			echo "<td>".$row["category"]."</td>";	
			echo "<td>".$row["available"]."</td>";
			echo "</tr>";
			}
	}
?>
<!--<tbody><tr height="23">
<td align="center" width="35" class="td_clear colhead colhead_fix">&nbsp;Тип&nbsp;</td>
<td align="left" class="td_clear colhead colhead_fix">&nbsp;Име&nbsp;</td>
<td align="center" class="td_clear colhead colhead_fix">&nbsp;Рейтинг&nbsp;</td>




<td align="center" class="td_clear colhead colhead_fix">&nbsp;Размер&nbsp;</td>
<td align="center" class="td_clear colhead colhead_fix">&nbsp;Пиъри&nbsp;</td>
<td align="center" class="td_clear colhead colhead_fix">&nbsp;Любими&nbsp;</td>
<td align="center" class="td_clear colhead colhead_fix">&nbsp;Ком.&nbsp;</td>
</tr>-->

</body>


</html>


