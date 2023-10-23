<?php
/* case 1: user didn't enter information to Edit form
=> display the form first
*/
if (!isset($_POST['joketext'])) {
   try {
      include 'includes/DatabaseConnection.php';
      $sql = 'SELECT * FROM joke 
              WHERE id = :id';
      $statement = $pdo->prepare($sql);
      $statement->bindValue(':id', $_GET['id']);
      $statement->execute();
      $joke = $statement->fetch();
      ob_start();
      include 'templates/editjoke.html.php';
      $output = ob_get_clean();
      include 'templates/layout.html.php';
   } catch (PDOException $e) {
      echo "DB error: $e";
   }
}

/*case 2: user already entered information to form
=> process the form => edit data in database
*/ else {
   try {
      include 'includes/DatabaseConnection.php';
      $sql = "UPDATE joke
              SET joketext = ?
              WHERE id = ?
            ";
      $statement = $pdo->prepare($sql);
      $statement->bindParam(1, $_POST['joketext']);
      $statement->bindParam(2, $_POST['id']);
      $statement->execute();
      header("location: jokes.php");
   } catch (PDOException $e) {
      echo "DB error: $e";
   }
}