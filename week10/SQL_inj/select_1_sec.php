<?php
//include 'library/connect.php';

$conn= mysqli_connect("localhost","root","","COMP1841");
/*if (!$linkme)
	die("Could not connect to the database");

	mysql_select_db("mdb_pm76",$linkme);*/
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	exit();
}

function safe($string){
	return mysqli_real_escape_string(mysqli_connect("localhost","root","","COMP1841"), $string);
}

$name =  safe($_REQUEST['username']);

$result = mysqli_query($conn, "SELECT * FROM customers WHERE  username = '$name'");

echo $name;

echo "<table border='1'><tr><th>Firstname</th><th>password</th></tr>";

	while($row = mysqli_fetch_array($result))
	{

		echo "<tr>";
		echo "<td>" . $row['username']. "</td>";
		echo "<td>" . $row['password']. "</td>";
	
	
		echo "</tr>";
	}
echo "</table>";
?>

