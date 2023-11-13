<p><?=$totalJokes?> jokes have been submitted to the Internet Joke Database.</p>
<table border="1">
<?php
foreach($jokes as $joke): ?>
       
    <tr><td><img width="100px"src="images/<?=htmlspecialchars($joke['image'], ENT_QUOTES,'UTF-8'); ?>" /></td>
        <td width="50%">Joke Text :<br /><?=htmlspecialchars($joke['joketext'], ENT_QUOTES,'UTF-8')?></td>
        <td width="25%">Joke Category:<br /><?=htmlspecialchars($joke['categoryName'], ENT_QUOTES,'UTF-8')?></td>

        <td width="25%">(by <a href="mailto:<?=htmlspecialchars($joke['email'], ENT_QUOTES, 'UTF-8' );?>">
        <?=htmlspecialchars($joke['name'], ENT_QUOTES, 'UTF-8'); ?></a>)
        <a href="editjoke.php?id=<?=$joke['id']?>">Edit</a></td>
        <td >
        <form action="deletejoke.php" method="post">
                <input type="hidden" name="id" value="<?=$joke['id']?>">
                <input type="submit" value="Delete">
        </form></td>
    </tr>
        <?php endforeach;?>
        </table>
        <br />
        