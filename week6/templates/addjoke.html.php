<form action="" method="post">
   <label for='joketext'>Type your joke here</label>
   <input type="text" name="joketext" />
   <br><br>
   <label for='jokeauthor'>Select an author</label>
   <select name="jokeauthor" id="">
      <?php
      foreach ($authors as $author) {
      ?>
      <option value="<?= $author['id'] ?>">
         <?= $author['name'] ?>
      </option>
      <?php
      }
      ?>
   </select>
   <br><br>
   <input type="submit" name="submit" value="Add">
</form>