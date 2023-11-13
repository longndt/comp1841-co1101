<?php
try{
    include 'includes/DatabaseConnection.php';
    include 'includes/DataBaseFunctions.php';

    $jokes = allJokes($pdo);
    $title = 'Joke list';
    $totalJokes = totalJokes($pdo);

    ob_start();
    include 'templates/jokes.html.php';
    $output = ob_get_clean();
}catch (PDOException $e){
    $title = 'An error has occured';
    $output= 'Database error: ' . $e->getMessage();
}
include 'templates/layout.html.php';