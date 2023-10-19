<?php
//connect to database using PDO (PHP Data Object) technique
try {
   $pdo = new PDO(
      'mysql:host=localhost;
dbname=week4;
charset=utf8mb4',
      'root',
      ''
   );
   // echo 'Connect to db succeed !';
} catch (PDOException $error) {
   echo 'Connect to db failed ! <br>';
   echo 'Error: ' . $error;
}
