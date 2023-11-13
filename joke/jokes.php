<?php
try{
    include 'includes/DatabaseConnection.php';
    //include (import) library of database functions to use
    include 'includes/DataBaseFunctions.php';

    $sql = 'SELECT joke.id, joketext, `name`, email, categoryName FROM joke
    INNER JOIN author ON authorid = author.id
    INNER JOIN category ON categoryid = category.id';

    // $query = $pdo->prepare($sql);
    // $query->execute();
    // $jokes = $query;
    $jokes = query($pdo, $sql);

    //$jokes = $pdo->query($sql);
    $title = 'Joke list';
    //get the output (result) of function totalJokes() & totalAuthors()
    $total_joke = totalJokes($pdo);
    $total_author = totalAuthors($pdo);

    ob_start();
    //render the web view (front-end)
    include 'templates/jokes.html.php';
    $output = ob_get_clean();
}catch (PDOException $e){
    $title = 'An error has occured';
    $output= 'Database error: ' . $e->getMessage();
}
include 'templates/layout.html.php';