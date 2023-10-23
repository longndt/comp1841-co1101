<?php
try{
    include 'includes/DatabaseConnection.php';

    $sql = 'SELECT joke.id, joketext, `name`, email FROM joke
    INNER JOIN author ON authorid = author.id';
    
    $jokes = $pdo->query($sql);
    $title = 'Joke list';

    ob_start();
    include 'templates/jokes.html.php';
    $output = ob_get_clean();
}catch (PDOException $e){
    $title = 'An error has occured';
    $output= 'Database error: ' . $e->getMessage();
}
include 'templates/layout.html.php';