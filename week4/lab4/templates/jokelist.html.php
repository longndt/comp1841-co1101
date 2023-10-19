<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Joke List</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
   <div class="container col-5 mt-5 text-center">
      <table class="table table-warning">
         <tr>
            <th colspan="4" class="h1 text-danger">JOKE LIST</th>
         </tr>
         <tr>
            <th>Joke id</th>
            <th>Joke text</th>
            <th>Joke date</th>
            <th>Joke image</th>
         </tr>
         <?php
         foreach ($jokes as $joke) {
         ?>
         <tr>
            <!-- We should use htmlspeicalchars() for more secure -->
            <td><?= htmlspecialchars($joke['id'], ENT_QUOTES)  ?></td>
            <td><?= htmlspecialchars($joke['joketext'], ENT_QUOTES) ?></td>
            <td>
               <?= date('d/m/Y', strtotime($joke['jokedate'])) ?>
            </td>
            <td>
               <img src="images/<?= $joke['image'] ?>" width="100" height="100">
            </td>
         </tr>
         <?php } ?>
      </table>
   </div>
</body>

</html>