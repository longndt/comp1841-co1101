<?php
   include 'includes/DataBaseFunctions.php';

   $sql = 'SELECT * FROM author';

   $authors = query($pdo, $sql);

   foreach ($authors as $author) {
      echo "Name: " . $author['name'] . "<br>" ;
      echo "Email: " . $author['email'] . "<br>";
      echo "---------------------<br>";
   }
?>