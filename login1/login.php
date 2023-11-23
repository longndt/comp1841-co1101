<?php
//check whether user has submitted login form or not
//1st case: NO => display form to user
  if (!isset($_POST['login'])) {
    include 'login.html.php';
  }
//2nd case: YES => process the form
  else {
    //get input data from the form
    $username = $_POST['username'];
    $password = $_POST['password'];
    $encrypted = md5($password);  //encrypt password

    //connect to database
    include 'dbconnect.php';

     $sql = "SELECT * FROM user WHERE username = :username AND password = :password";
     //$sql = "SELECT * FROM user WHERE username = ? AND password = ?";
     $stm = $pdo->prepare($sql);
     $stm->bindValue(':username', $username);
     $stm->bindValue(':password', $encrypted);
     // $stm->bindParam(1, $username);
     // $stm->bindParam(2, $password);
     $stm->execute();
     $result = $stm->fetchAll();
     $total = count($result);
     // echo $total;

      if ($total >= 1) {
      //echo "login succeed !";
      //start session after success login
      session_start();
      $_SESSION['authorized'] = true;
      $_SESSION['username'] = $username;
      //redirect page
      header('Location: admin.php');
    } else {
      //echo "login failed !";
      header('Location: login.php');
    }
  }
?>