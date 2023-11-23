<?php
session_start();

//check whether user has logged in or not
if (!isset($_SESSION['authorized'])) {
   header('Location: unauthorized.php');
}
?>