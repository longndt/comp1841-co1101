<?php 
try {
	$pdo = new PDO('mysql:host=localhost; dbname=week4; charset=utf8mb4','root', '');
    
    $sql = 'SELECT * FROM joke_pic';
    $jokes = $pdo->query($sql);

} catch (PDOException $e){
    $error = "Unable to connect to the databse server: " . $e;  //dev version 1
    // $output = "Unable to connect to the databse server: " . $e->getMessage();  //dev version 2
    // $output = "Unable to connect to the database server: ";  //public version
}
include 'templates/jokes.html.php';



