<?php
echo "Total jokes : " . $total_joke . "<br>";
echo "Total authors: " . $total_author;

foreach($jokes as $joke): ?>
        <blockquote>
        <?=htmlspecialchars($joke['joketext'], ENT_QUOTES,'UTF-8')?>
        <br /><?=htmlspecialchars($joke['categoryName'], ENT_QUOTES,'UTF-8')?>

        (by <a href="mailto:<?=htmlspecialchars($joke['email'], ENT_QUOTES, 'UTF-8' );?>">
        <?=htmlspecialchars($joke['name'], ENT_QUOTES, 'UTF-8'); ?></a>)

        <a href="editjoke.php?id=<?=$joke['id']?>">Edit</a>

        <form action="deletejoke.php" method="post">
                <input type="hidden" name="id" value="<?=$joke['id']?>">
                <input type="submit" value="Delete">
        </form>
        </blockquote>
        <?php endforeach;?>

