<?php
session_start();
//check whether user already login or not
//1st case: user already login display welcome
if (isset($_SESSION['username'])) {
   echo "Welcome " . $_SESSION['username'] . "<br>";
   echo "<a href='logout.php'>Logout</a>";
}
//2nd case: user did not login => redirect to login page
else {
   header('Location: login.php');
}


?>
