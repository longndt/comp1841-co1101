<?php session_start();

//store session data//
$_SESSION['views'] = 1;


//retrieve session data//
echo "Pageviews=". $_SESSION['views'];


