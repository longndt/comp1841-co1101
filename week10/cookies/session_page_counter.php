<?php session_start();

if (empty($_SESSION['count'])) {
	$_SESSION['count'] = 1;
} else {
	$_SESSION['count']++;
}
echo "Hello visitor, you have seen this page " . $_SESSION['count'] . " times.";?>