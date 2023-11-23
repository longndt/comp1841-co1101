<?php
   if (!isset($_POST['register'])) {
      include 'register.html.php';
   }
   else {
      include 'dbConnect.php';

      $username = $_POST['username'];
      $password = $_POST['password'];

      //encrypt the password with md5 method
      $hash = md5($password);

      //create sql statement
      $sql = "INSERT INTO user SET username = :username, password = :password, role = 'user'";
      $stm = $pdo->prepare($sql);
      $stm->bindValue(':username', $username);
      $stm->bindValue(':password', $hash);
      $stm->execute();

      //redirect to login
      header ('Location: login.php');
   }
?>