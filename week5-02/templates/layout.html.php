<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <link rel="stylesheet" href="jokes.css">
   <title><?= $title ?></title>
</head>

<body>
   <!-- use same header & navigation for every webpage -->
   <header>
      <h1>Internet Joke Database</h1>
   </header>
   <nav>
      <ul>
         <li><a href="index.php">Home</a></li>
         <li><a href="jokes.php">jokes List</a></li>
      </ul>
   </nav>

   <!-- render different content for each page -->
   <main>
      <?= $output ?>
   </main>

   <!-- use same footer for every webpage -->
   <footer>&copy; IJDB 2023</footer>
</body>

</html>