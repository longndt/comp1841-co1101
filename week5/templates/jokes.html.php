<?php foreach($jokes as $joke): ?>
        <blockquote>
        <?=htmlspecialchars($joke['joketext'], ENT_QUOTES,'UTF-8')?>
        </blockquote>
        <?php endforeach;?>


        