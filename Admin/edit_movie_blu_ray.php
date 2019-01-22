<?php
echo "<link rel='stylesheet' type='text/css' href='../CSS/home_css.css' />";
session_start();
include_once("../footer.php");
require ("../db_connection.php");
include_once ("profile_admin.php");
$query = "SELECT * FROM `blue-ray`";
$result = mysqli_query($conn, $query);
?>
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
		echo "<th>"."ID"."</th>";
		echo "<th>".'Name'."</th>";
		echo "<th>".'Release Date'."</th>";
		echo "<th>".'Category'."</th>";
		echo "<th>".'Available'."</th>";
		echo "</tr>";
	if(!isset($_GET['id'])){
		while ($row = mysqli_fetch_array($result)){
		//$editUser=$row['username'];
			echo "<tr>";
			echo "<td><a href='edit_movie_blu_ray.php?id=".$row["id"]."'>".$row["id"]."</a></td>";
			echo "<td>".$row["name"]."</td>";
			echo "<td>".$row["release_date"]."</td>";
			echo "<td>".$row["category"]."</td>";	
			echo "<td>".$row["available"]."</td>";
			echo "</tr>";
			}
	}
	else{
		$query="SELECT * FROM `blue-ray` WHERE `id`= {$_GET['id']}";
		$result=mysqli_query($conn,$query);
		$row = mysqli_fetch_assoc($result);
		
		$num = $_GET['id'];
		
		echo "<tr>";
		echo "<td><a href='edit_movie_blu_ray.php?id=".$row["id"]."'>".$row["id"]."</a></td>";
		echo "<td>".$row["name"]."</td>";
		echo "<td>".$row["release_date"]."</td>";
		echo "<td>".$row["category"]."</td>";	
		echo "<td>".$row["available"]."</td>";
		echo "</tr>";
		//if ($result == true){
		
		
		if(isset($_POST['submit'])){
			
			$newname = $_POST['name'];
			$newdate = $_POST['release_date'];
			$newcategory = $_POST['category'];
			$newavailable = $_POST['available'];
			$update = "UPDATE `blue-ray` 
					SET `name` = '$newname',
					`release_date` = '$newdate',
					`category` = '$newcategory',
					`available` = '$newavailable'
					WHERE `id`={$num}";
			$done_update = mysqli_query($conn,$update);
			if(isset($_POST['submit'])){
				if($done_update == true){
					echo "<script type='text/javascript'>alert('Movie Edited!'); Location.href='edit_movie_blu_ray.php?id={$num}'</script>";
					header("Location: edit_movie_blu_ray.php?id={$num}");
					}
				else{
					echo "<script type='text/javascript'>alert('Movie not Edited!')</script>";
				}
			}
		}
		
		
		
		
		
		if(isset($_POST['delete'])){
			$delete = "DELETE FROM `blue-ray` WHERE `id`= {$num}";
			$done_delete = mysqli_query($conn,$delete);
			if(isset($done_delete)){
			echo "<script type='text/javascript'>alert('Movie Deleted!'); location.href='edit_movie_blu_ray.php';</script>";
			}
			else{
			echo "<script type='text/javascript'>alert('Movie not Deleted!')</script>";
			}
		}
	
		
	//
}
?>
</table>
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
	<form name="contact-form" method="post" id="contact-form">
		<div>
		<label for="name">Name</label>
		<input type="text" class="form-control" name="name" placeholder="Name">
		</div>
		<div>
		<label for="release_date">Release Date</label>
		<input type="text" class="form-control" name="release_date" placeholder="Release Date">
		</div>
		<div > 	
		<label for="category">Category</label>
		<input type="text" class="form-control" name="category" placeholder="Category">
		</div>
		<div >
		<label for="available">Available</label>
		<input type="text" class="form-control" name="available" placeholder="Available">
		</div>
		<a href="edit_movie_blu_ray.php">
		<input type="button" class="btn btn-primary" value="Refresh"/>
		</a>
		<a href="admin.php">
		<input type="button" class="btn btn-primary" value="Back"/>
		</a>
		<a href="add_movie.php">
		<input type="button" class="btn btn-primary" value="Add Movie"/>
		</a>
		<a>
		<button type="submit" class="btn btn-primary" name="submit" value="Edit user">Update Movie</button>
		</a>
		<a href="edit_movie_blu_ray.php">
		<input type="submit" class="btn btn-primary" name="delete" value="Delete Movie"/>
		</a>
	</form>
<br>
</body>
</html>







