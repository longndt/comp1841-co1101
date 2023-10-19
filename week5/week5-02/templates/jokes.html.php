<table border=1>
   <tr>
      <th>Joke text</th>
      <th>Joke date</th>
      <th>Action</th>
   </tr>
   <?php
        foreach ($jokes as $joke) {
        ?>
   <tr>
      <td><?= htmlspecialchars($joke[2], ENT_QUOTES) ?></td>
      <td><?= date('d/m/Y', strtotime($joke[2])) ?></td>
      <td>
         <form action="deletejoke.php" method="post">
            <input type="hidden" name="id" value="<?= $joke['id'] ?>">
            <input type="submit" value="Delete">
         </form>
      </td>
   </tr>
   <?php   } ?>
</table>