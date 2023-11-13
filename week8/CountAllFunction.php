<?php
include 'includes/DatabaseConnection.php';
function totalJokes(){
    $query = $pdo->prepare('SELECT COUNT(*) FROM joke');
    $query->execute();
    $row = $query->fetch();
    return $row[0];
}
echo totalJokes();

