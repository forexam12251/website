<?php
echo "<link rel='stylesheet' type='text/css' href='../CSS/home_css.css' />";
include_once("../footer.php");
include_once ("../db_connection.php");
include_once ("profile_admin.php");
$query="SELECT * FROM `contact`";
$result=mysqli_query($conn,$query);

//$message_email[] = mysqli_query ($conn, "SELECT email FROM `contact`");
//$message[] = mysqli_query($conn, "SELECT message FROM `contact`");
//$from_name[] = mysqli_query($conn, "SELECT from_who FROM `contact`");

?>
<h2>Messages:</h2>
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
</head>
<body>

<table id="myTable">
<?php
echo "<tr>";
	echo "<th>".'Name'."</th>";
	echo "<th>".'Message'."</th>";
	echo "<th>".'Email'."</th>";
	echo "</tr>";
while ($row = mysqli_fetch_array($result))
{
	echo "<tr>";
	echo "<td>".$row["from_who"]."</td>";
	echo "<td>".$row["message"]."</td>";
	echo "<td>".$row["email"]."</td>";
	echo "</tr>";
}
?>
</table>
<br>
<a href="read.php">
<input input type="button" class="btn btn-primary" value="Refresh"/>
</a>
<a href="admin.php">
<input input type="button" class="btn btn-primary" value="Back"/>
</a>
</body>
</html>
