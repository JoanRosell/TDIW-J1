<?php foreach($categories as $category) : ?>
    <article id="<?php echo $category['CategoryID']?>"><?php echo $category['Name']?></article>
<?php endforeach; ?>

