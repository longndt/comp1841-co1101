<?php
if (isset($_POST['joketext'])) {
    try {
        include 'includes/DatabaseConnection.php';

        $sql = 'INSERT INTO joke SET
        joketext = :joketext,
        jokedate = CURDATE(),
        authorid = :jokeauthor';
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':joketext', $_POST['joketext']);
        $stmt->bindValue(':jokeauthor', $_POST['jokeauthor']);
        $stmt->execute();
        header('location: jokes.php');
    } catch (PDOException $e) {
        $title = 'An error has occurred';
        $output = 'Database error: ' . $e->getMessage();
    }
} else {
    $title = 'Add a new joke';
    ob_start();
    try {
        include 'includes/DatabaseConnection.php';
        $sql = "SELECT * FROM author";
        $authors = $pdo->query($sql);
        include 'templates/addjoke.html.php';
        $output = ob_get_clean();
    } catch (PDOException $e) {
        echo "Error : $e";
    }
}
include 'templates/layout.html.php';