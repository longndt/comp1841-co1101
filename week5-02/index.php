<?php
$title = 'Internet Joke Database Demo';
ob_start();
include 'templates/home.html.php';
$output = ob_get_clean();
include 'templates/layout.html.php';