<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Result</title>
   <style>
      body {
         background-color: aquamarine;
      }

      h1 {
         color: red;
         border: 3px blue solid;
         background-color: yellow;
         text-align: center;
      }
   </style>
</head>

<body>
   <table border=1>
      <tr>
         <th>Joke id</th>
         <th>Joke text</th>
         <th>Joke date</th>
         <th>Joke image</th>
         <th>Joke video</th>
         <th>Menu</th>
      </tr>
      <?php
      foreach ($jokes as $joke) {
         $date = date("D d/m/Y", strtotime($joke['jokedate']));
      ?>
         <tr>
            <td><?= $joke['id'] ?></td>
            <td><?= $joke['joketext'] ?></td>
            <td><?= $date ?></td>
            <td>
               <img src="images/<?= $joke['jokeimage'] ?>" width="100" height="100" alt="this is a joke image">
            </td>
            <td>
               <iframe width="560" height="315" src="https://www.youtube.com/embed/<?= $joke['video'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </td>
            <td>
               <button>Edit</button>
               <button>Delete</button>
            </td>
         </tr>
      <?php
      }
      ?>
   </table>
</body>

</html>