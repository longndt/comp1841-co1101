<?php

//case 1: user did not enter data to form => load form
if (!isset($_POST['joketext'])) {
   ob_start();
   include 'templates/addjoke.html.php';
   $output = ob_get_clean();
   include 'templates/layout.html.php';
}
//case 2: user already entered data to form => process form
else {
   try {
      include 'includes/DatabaseConnection.php';

      $sql1 = 'INSERT INTO joke 
               (joketext, jokedate, image)
               VALUES (:joketext, :jokedate, :jokeimage)';
      $sql2 = 'INSERT INTO joke 
               SET joketext = :joketext,
                   jokedate = CURDATE()';
      // CURDATE() : get current date (based on system time)

      $stm = $pdo->prepare($sql1);
      $stm->bindValue(':joketext', $_POST['joketext']);
      $stm->bindValue(':jokedate', $_POST['jokedate']);
      $stm->bindValue(':jokeimage', $_POST['jokeimage']);
      $stm->execute();

      header('location: jokes.php');
   } catch (PDOException $ex) {
      echo 'Error: ' . $ex;
   }
}
