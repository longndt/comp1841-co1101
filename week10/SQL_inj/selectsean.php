<?php
$conn= mysqli_connect("localhost","root","","COMP1841");
/*if (!$linkme)
	die("Could not connect to the database");

	mysql_select_db("mdb_pm76",$linkme);*/
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	exit();
}
echo "<table border='1'><tr><th>Firstname</th><th>password</th></tr>";

$name =$_REQUEST['username'];
if ($result = mysqli_query($conn, "SELECT * FROM customers WHERE  username = '$name'")) {

	$result->data_seek(0);
	while ($row = $result->fetch_assoc()) {

		echo "<tr>";
		echo "<td>" .$row['username']. "</td>";
	echo "<td>" .$row['password']. "</td>";
		echo "</tr>";
	}
	mysqli_free_result($result);
}

mysqli_close($conn);

echo "</table>";

?>

		<?php
	//}
	//include 'library/close.php';
	?>

