<?php
$servername = "localhost";
$username = "root";
$password = "";


/*mysql
mysqli 
pdo*/
// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else
{
	mysqli_select_db($conn,'test2');
	//echo 'ok';
}

$select = mysqli_query($conn,"SELECT * FROM users");
while($result = mysqli_fetch_assoc($select))
{
	echo 'Poreden nomer '.$result['id'].'<br />';
	echo 'Username '.$result['username'].'<br />';
	echo 'Parola '.$result['password'].'<br />';
}
//print_r($result);

//echo "Connected successfully";
?>