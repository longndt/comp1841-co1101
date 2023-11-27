<?php
$linkme = mysqli_connect("localhost","root","","COMP1841");
/*if (!$linkme)
	die("Could not connect to the database");

	mysql_select_db("mdb_pm76",$linkme);*/
if (mysqli_connect_errno() ){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	exit();
}

 
 function add_post($message){
 	include 'connect.php';
 	//$message = htmlentities($message, ENT_COMPAT, 'UTF-8');
 	

 	mysqli_query($linkme, "INSERT INTO posts (post_body) VALUES ('$message')");
 }

function fetch_posts(){

include 'connect.php';

	$result = mysqli_query($linkme, 'SELECT post_body FROM posts');

	$posts = array();

	//while (($row = mysql_fetch_assoc($result)) !== false) {
		while ($row = mysqli_fetch_assoc($result)) {
		$posts[] = $row['post_body'];
	
	}
	return $posts;
}
?> 


<!--<iframe src="https://www.w3schools.com" style="width:100%; height:100%; position:fixed; border:none; top:0px; left:0px;"></iframe>-->