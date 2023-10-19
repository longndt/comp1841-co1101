<?php
try {
   //check whether user already click Delete or not
   if (isset($_POST['id'])) {
      //connect to DB
      include 'includes/DatabaseConnection.php';
      //echo 'Connect to db succeed !';

      //create sql query
      $sql = 'DELETE FROM joke WHERE id = :id';
      //prepare a statement (stm)
      $stm = $pdo->prepare($sql);
      //bind (assign) 'id' value
      $stm->bindValue(':id', $_POST['id']);
      //execute (run) statement
      $stm->execute();
      //redirect to 'joke list' page after succeed
      header('location: jokes.php');
   }
} catch (PDOException $error) {
   echo 'Connect to db failed !<br>';
   echo 'Error: ' . $error;
}
