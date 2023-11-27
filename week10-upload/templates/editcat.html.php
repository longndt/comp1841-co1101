<form action="" method="post">
    <input type="hidden" name="catid" value="<?=$cat['id'];?>">
    <label for='cattext'>Edit category here;</label>
    <textarea name="cattext" rows="3" cols="40">
    <?=$cat['categoryName']?>   
    </textarea>
    <input type="submit" name="submit" value="Save">
</form>

