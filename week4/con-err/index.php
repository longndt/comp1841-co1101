<?php 

try {
	$pdo = new PDO('mysql:host=localhost;dbname=week4;charset=utf8mb4', 'root', '');
    $output = "Database Connection Established";
} 
catch (PDOException $e){
    $output = "Unable to connect to the databse server: " . $e->getMessage();  //dev version
    // $output = "Unable to connect to the databse server: ";  //public version
}
include 'templates/output.html.php';
