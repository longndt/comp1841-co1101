<div class="container text-center col-md-5 card bg-warning">
   <form action="addjoke.php" method="post" class="mb-3 mt-3">
      <div class="form-group mt-3">
         <label for="" class="h4 text text-primary">Joke text </label>
         <input class="form-control" type="text" name="joketext" required>
      </div>
      <div class="form-group mt-3">
         <label for="" class="h4 text text-primary">Joke date </label>
         <input class="form-control" type="date" name="jokedate" required>
      </div>
      <div class="form-group mt-3">
         <label for="" class="h4 text text-primary">Joke image </label>
         <input class="form-control" type="url" name="jokeimage" required>
      </div>
      <div class="form-group mt-3">
         <input class="btn btn-primary" type="submit" value="Add">
      </div>
   </form>
</div>