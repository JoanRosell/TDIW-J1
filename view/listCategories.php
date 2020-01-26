<?php foreach($categories as $category) : ?>
    <article id="<?php echo $category['CategoryID']?>" class="categoryRef grid-item categoryCard"><?php echo htmlentities($category['Name'], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?></article>
<?php endforeach; ?>

