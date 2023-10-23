<form action="" method="post">
   <label for='joketext'>Edit joke text</label>
   <input type="text" name="joketext" value="<?= $joke['joketext'] ?>" />
   <br><br>
   <input type="hidden" name="id" value="<?= $joke['id'] ?>">
   <input type="submit" name="submit" value="Edit">
</form>