<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Add new joke</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
   <div class="container mt-4">
      <form class="card p-3 bg-warning" action="addjoke.php" method="post">
         <h1 class="text text-success">Add new joke</h1>
         <div class="form-group mt-3">
            <label class="h5 text text-danger" for="">Joke text</label>
            <input class="form-control" type="text" name="joketext" required>
         </div>
         <div class="form-group mt-3">
            <label class="h5 text text-danger" for="">Joke date</label>
            <input class="form-control" type="date" name="jokedate" required>
         </div>
         <div class="form-group mt-3">
            <label class="h5 text text-danger" for="">Joke image</label>
            <input class="form-control" type="text" name="image" id="" value="doctor.png">
         </div>
         <div class=" form-group mt-3">
            <input class="btn btn-success" type="submit" value="Add">
            <input class="btn btn-danger" type="reset" value="Clear">
         </div>
      </form>
   </div>
</body>

</html>