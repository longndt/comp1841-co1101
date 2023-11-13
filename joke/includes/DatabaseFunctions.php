<?php
include 'includes/DatabaseConnection.php';

//create a function to run a SQL query
function query($pdo, $sql)
{
    $query = $pdo->prepare($sql);
    $query->execute();
    return $query;
}

//function 1: return total jokes
function totalJokes($pdo){
    $query = $pdo->prepare('SELECT COUNT(*) FROM joke');
    $query->execute();
    $row = $query->fetch();
    return $row[0];
}
//echo "Total joke: " . totalJokes($pdo);

//function 2: return total authors
function totalAuthors($pdo) {
    $query = $pdo->prepare('SELECT COUNT(*) FROM author');
    $query->execute();
    $row = $query->fetch();
    return $row[0];
}



