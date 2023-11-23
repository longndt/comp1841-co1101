<?php
   //1st case: user do not submit Login form => render login form
   if (!isset($_POST['login'])) {
      include 'login.html.php';
   }
   //2nd case: user already submit Login form => process login data
   else {
      //connect to database
      include 'dbConnect.php';

      //get login data from Login form
      $username = $_POST['username'];
      $password = $_POST['password'];

      //encrypt the password with md5 method
      $hash = md5($password);

      //1st way
      // $sql = "SELECT COUNT(*) FROM user WHERE username = :username AND password = :password";
      // $stm = $pdo->prepare($sql);
      // $stm->bindValue(':username', $username);
      // $stm->bindValue(':password', $hash);
      // $stm->execute();
      // $check = $stm->fetch();
      // $result = $check[0];      //get the result (total match record). Note: "0" is "first column"

      //2nd way
      $sql = "SELECT * FROM user WHERE username = :username AND password = :password";
      $stm = $pdo->prepare($sql);
      $stm->bindValue(':username', $username);
      $stm->bindValue(':password', $hash);
      $stm->execute();
      $check = $stm->fetch();
      $result = count($check);

      //1. case 1: user login succeed
      if ($result >= 1) {
         //start new session
         session_start();
         //create session variable to store username
         $_SESSION['username'] = $username;
         //redirect to homepage
         //Note: redirect the page based on role
         //Ex: user role => redirect to index.php
         //Ex: admin role => redirect to index_admin.php
         header ('Location: index.php');
      }
      //2. case 2: user login failed
      else {
         header ('Location: login.php');
      }
   }
?>