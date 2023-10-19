<table class="table table-danger">
   <tr>
      <th>Joke text</th>
      <th>Joke date</th>
      <th>Joke image</th>
      <th>Delete</th>
   </tr>
   <?php
   foreach ($jokes as $joke) {
   ?>
      <tr>
         <td><?= htmlspecialchars($joke['joketext'], ENT_QUOTES) ?></td>
         <td><?= date('d/m/Y', strtotime($joke[2])) ?></td>
         <td>
            <img src=" <?= $joke['image'] ?>" width="100" height="100">

         </td>
         <td>
            <form action="deletejoke.php" method="post">
               <input type="hidden" name="id" value="<?= $joke['id'] ?>">
               <input class="btn btn-warning" type="submit" value="Delete" onclick="return confirm('Are you sure to delete this joke ?');">
            </form>
         </td>
      </tr>
   <?php   } ?>
</table>