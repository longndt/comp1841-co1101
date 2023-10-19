<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <link rel="stylesheet" href="jokes.css">
   <title> Joke Demo </title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
   <header>
      <h1>Internet Joke Database</h1>
   </header>
   <nav>
      <ul>
         <li><a href="index.php">Home</a></li>
         <li><a href="jokes.php">jokes List</a></li>
         <li><a href="addjoke.php">Add a new joke</a></li>
      </ul>
   </nav>
   <main>
      <?= $output ?>
   </main>
   <footer>&copy; IJDB 2023</footer>
</body>

</html>