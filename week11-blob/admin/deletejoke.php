<?php
try{
    include '../includes/DatabaseConnection.php';
    include '../includes/DatabaseFunctions.php';
    $row = getJoke($pdo,$_POST['id']);
    unlink('../uploads/'.$row['image']);
    deleteJoke($pdo, $_POST['id']);
    header('location: jokes.php');
}catch(PDOException $e){
$title = 'An error has occured';
$output = 'Unable to delete joke: ' .$e->getMessage();
}
include '../templates/admin_layout.html.php';

