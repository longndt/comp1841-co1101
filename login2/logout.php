<?php
//remove (delete) session variable
unset($_SESSION['username']);
//destroy the whole session
session_destroy();
//redirect to login page
header('Location: login.php');
?>