<p><?=$totalJokes?> jokes have been submitted to the Internet Joke Database.</p>
<table border="1">
<?php
foreach($jokes as $joke): ?>
       
    <tr>
        <td>
            <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($joke['image']).'"/>'; ?>
        </td>

        <td width="50%">Joke Text :<br /><?=htmlspecialchars($joke['joketext'], ENT_QUOTES,'UTF-8')?></td>
        <td width="25%">Joke Category:<br /><?=htmlspecialchars($joke['categoryName'], ENT_QUOTES,'UTF-8')?></td>

        <td width="25%">(by <a href="mailto:<?=htmlspecialchars($joke['email'], ENT_QUOTES, 'UTF-8' );?>">
        <?=htmlspecialchars($joke['name'], ENT_QUOTES, 'UTF-8'); ?></a>)
       
    </tr>
        <?php endforeach;?>
        </table>
        <br />
        