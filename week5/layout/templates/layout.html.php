<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Web layout Demo</title>
   <!-- attach external CSS to HTML page -->
   <link rel="stylesheet" href="style.css">
</head>

<body>
   <!-- Same navigation -->
   <!-- Use emmet technique for faster coding: nav>ul>(li>a)*3 => Tab -->

   <nav>
      <ul>
         <li>
            <a href="index.php">Homepage</a>
         </li>
         <li>
            <a href="greenwich.php">Greenwich</a>
         </li>
         <li>
            <a href="web.php">Web</a>
         </li>
         <li>
            <a href="hanoi.php">Hanoi</a>
         </li>
      </ul>
   </nav>

   <!-- Different content -->
   <?= $content ?>

   <!-- Same footer -->
   <p>Copyright by Greenwich Vietnam - Fall 2023</p>
</body>

</html>