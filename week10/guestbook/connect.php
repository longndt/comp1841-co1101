<?php
$linkme = mysqli_connect("localhost","root","","COMP1841");
/*if (!$linkme)
	die("Could not connect to the database");

	mysql_select_db("mdb_pm76",$linkme);*/
if (mysqli_connect_errno() ){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	exit();
}
	