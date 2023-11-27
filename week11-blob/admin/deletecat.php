<?php
try{
    include '../includes/DatabaseConnection.php';
    include '../includes/DatabaseFunctions.php';
    deleteCat($pdo, $_POST['id']);
    header('location: cats.php');
}catch(PDOException $e){
$title = 'An error has occured';
$output = 'Unable to delete category: ' .$e->getMessage();
}
include '../templates/admin_layout.html.php';

