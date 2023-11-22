<p><?=$totalCats?> categories in the Database.</p>
<p><a href="addcat.php">Add a new category</a></p>
<?php
foreach($cats as $cat): ?>
        <blockquote>
        <?=htmlspecialchars($cat['categoryName'], ENT_QUOTES,'UTF-8')?>
        <a href="editcat.php?id=<?=$cat['id']?>">Edit</a>
        <form action="deletecat.php" method="post">
                <input type="hidden" name="id" value="<?=$cat['id']?>">
                <input type="submit" value="Delete">
        </form>
        </blockquote>
        <?php endforeach;?>

        