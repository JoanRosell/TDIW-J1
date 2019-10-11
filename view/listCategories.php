<ul>
    <?php foreach($categories as $category) : ?>
    <li>
        <p><?php echo $category['Name']?></p>
        <p><?php echo $category['Description']?></p>
    </li>
    <?php endforeach; ?>
</ul>
