<?php
if(isset($_POST['joketext'])){
    try{
        include '../includes/DatabaseConnection.php';
        include '../includes/DatabaseFunctions.php';
        insertJoke($pdo, $_POST['joketext'],$_POST['authors'],$_POST['categories']);
        header('location: jokes.php');
    }catch (PDOException $e){
        $title = 'An error has occurred';
        $output = 'Database error: ' . $e->getMessage();
    }
}else{
    include '../includes/DatabaseConnection.php';
    include '../includes/DatabaseFunctions.php';
    $title = 'Add a new joke';
    $authors = allAuthors($pdo);
    $categories = allCategories($pdo);
    ob_start();
    include '../templates/addjoke.html.php';
    $output = ob_get_clean();
}
include '../templates/admin_layout.html.php';

