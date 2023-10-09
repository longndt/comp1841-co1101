<?php 
try {
	$pdo = new PDO('mysql:host=localhost; dbname=comp1841; charset=utf8','root', 'root');
    $output = "Database Connection Established";
} catch (PDOException $e){
    $output = "Unable to connect to the databse server: " . $e;  //dev version 1
    // $output = "Unable to connect to the databse server: " . $e->getMessage();  //dev version 2
    // $output = "Unable to connect to the database server: ";  //public version
}
include 'templates/output.html.php';



