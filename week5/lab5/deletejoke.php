<?php
include 'connection/dbconnect.php';

if (isset($_POST['id'])) {
   $sql = 'DELETE FROM joke WHERE id = :id';
   $statement = $pdo->prepare($sql);
   $statement->bindValue(':id', $_POST['id']);
   $statement->execute();
   //redirect page after deletion
   header('location: index.php');
}
