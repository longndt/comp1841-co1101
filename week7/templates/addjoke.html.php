<form action="" method="post">
    <label for='joketext'>Type your joke here;</label>
    <textarea name="joketext" rows="3" cols="40"></textarea>
    <label for='author'>Select an author</label>
    <!--
    IMPORTANCE: hard coding for database value
                => MUST BE AVOIDED
    <select name="authorid" id="">
        <option value="1">author 1</option>
        <option value="2">author 2</option>
    </select>
    -->
    <select name="authorid" id="">
        <?php
        foreach ($authors as $author) {
        ?>
            <option value="<?= $author['id'] ?>">
                <?= $author['name'] ?>
            </option>
        <?php
        }
        ?>
    </select>
    <label for='category'>Select a category</label>
    <select name="categoryid" id="">
        <?php
        foreach ($categories as $category) {
        ?>
            <option value="<?= $category['id'] ?>">
                <?= $category['name'] ?>
            </option>
        <?php
        }
        ?>
    </select>
    <input type="submit" name="submit" value="Add">
</form>