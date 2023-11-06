<h1>Total jokes: <?= $total ?></h1>

<?php
foreach ($jokes as $joke) : ?>
        <blockquote>
                <?= htmlspecialchars($joke['joketext'], ENT_QUOTES, 'UTF-8') ?>
                <br />
                (by
                <a href="mailto:<?= htmlspecialchars($joke['email'], ENT_QUOTES, 'UTF-8'); ?>">
                        <?= htmlspecialchars($joke['author_name'], ENT_QUOTES, 'UTF-8');
                        ?>
                </a>)
                - <?= $joke['category_name'] ?>
                <a href="editjoke.php?id=<?= $joke['id'] ?>">Edit</a>

                <form action="deletejoke.php" method="post">
                        <input type="hidden" name="id" value="<?= $joke['id'] ?>">
                        <input type="submit" value="Delete">
                </form>
        </blockquote>
<?php endforeach; ?>