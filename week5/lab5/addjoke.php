<?php
if (!isset($_POST['joketext'])) {
   include 'templates/addjoke.html.php';
} else {
   include 'connection/dbconnect.php';
   $sql1 = "INSERT INTO joke (joketext, jokedate, image)
            VALUES(:joketext, CURDATE(), :image)";
   $sql2 = "INSERT INTO joke
            SET joketext = :joketext,
                jokedate = :jokedate,
                image    = :image";
   $stm = $pdo->prepare($sql1);
   $stm->bindValue(':joketext', $_POST['joketext']);
   // $stm->bindValue(':jokedate', $_POST['jokedate']);
   $stm->bindValue(':image', $_POST['image']);
   $stm->execute();

   header('location: index.php');
}