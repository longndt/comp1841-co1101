<?php
try{
    include 'includes/DatabaseConnection.php';
    include 'includes/DataBaseFunctions.php';

    $sql = 'SELECT joke.id, joketext, image, `name`, email, categoryName FROM joke
    INNER JOIN author ON authorid = author.id
    INNER JOIN category ON categoryid = category.id';

    $jokes = $pdo->query($sql);
    $title = 'Joke list';

    $query = $pdo->prepare('SELECT COUNT(*) FROM joke');
    $query->execute();
    $row = $query->fetch();
    return $row[0];

    $totalJokes = totalJokes($pdo);

    ob_start();
    include 'templates/jokes.html.php';
    $output = ob_get_clean();
}catch (PDOException $e){
    $title = 'An error has occured';
    $output= 'Database error: ' . $e->getMessage();
}
include 'templates/layout.html.php';