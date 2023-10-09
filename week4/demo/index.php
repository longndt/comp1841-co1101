<?php
/*
 use PDO (PHP Data Object) to establish
 a connection between PHP & MYSQL 
 Some parameters we need to define:
     - hostname: localhost (127.0.0.1)
     - charset: utf8mb4 (Unicode)
     - database name: greenwich
     - database username: root
     - database password: (empty)
   Note: Xampp (root - empty)
         Mamp  (root - root)
 */
//use try ... catch block to catch the error when connecting to db server */
//case 1: success *
try {
   $pdo = new PDO(
      'mysql:host=127.0.0.1; 
      dbname=week4; 
      charset=utf8mb4',
      'root',
      ''
   );
   $result = 'Connect to database succeed !';

   //create sql script (statement) to get data from database
   $sql = 'SELECT * from joke';
   //execute the sql script then save the results to $jokes
   $jokes = $pdo->query($sql);
}
//case 2: failure */
catch (PDOException $ex) {
   $result = 'Connect to database failed ! <br>';
   $error = 'Error: ' . $ex->getMessage();
   $result = $result . $error;
}

//display the connection result 
//echo $result;

//show the result in another web page
include 'result.html.php';
