<?php
//include db connection file
include 'connection/dbconnect.php';

//Retrieve data from table 'joke' using SELECT
$sql = 'SELECT * FROM joke ORDER BY id DESC';
//Save the query result to variable $jokes
$jokes = $pdo->query($sql);

//include the view file to display table
include 'templates/jokelist.html.php';