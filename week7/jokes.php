<?php
try{
    include 'includes/DatabaseConnection.php';
    include 'includes/DataBaseFunctions.php';

    $sql = 'SELECT joke.id, joke.joketext,
                   author.name AS author_name,
                   author.email,
                   category.name AS category_name
            FROM joke
            INNER JOIN author ON authorid = author.id
            INNER JOIN category ON categoryid = category.id';

    $jokes = $pdo->query($sql);

    $sql1 = 'SELECT COUNT(*) FROM joke';
    $query = $pdo->query($sql1);
    $total = $query->fetchColumn();

    $title = 'Joke list';

    ob_start();
    include 'templates/jokes.html.php';
    $output = ob_get_clean();
}catch (PDOException $e){
    $title = 'An error has occured';
    $output= 'Database error: ' . $e->getMessage();
}
include 'templates/layout.html.php';