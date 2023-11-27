<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="jokes.css">
        <link rel="stylesheet" href="w3.css">
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/picnic"> -->
        <!-- <link rel="stylesheet" href="https://unpkg.com/papercss@1.9.0/dist/paper.min.css" /> -->
      
        <title><?=$title?></title>
    </head>
    <body>
        <header><h1>Internet Joke Database</h1></header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="jokes.php">jokes List</a></li>
                <!-- <li><a href="addjoke.php">Add a new joke</a></li> -->
                <li><a href="admin/jokes.php">Admin</a></li>
            </ul>
        </nav>
        <main>
            <?=$output?>
        </main>
        <footer>&copy; IJDB 2023</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    </body>
</html>