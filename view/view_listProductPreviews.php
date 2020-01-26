<?php foreach($products as $product) : ?>
    <article id="<?php echo $product['ProductID']; ?>" class="productRef grid-item card">
        <img src="<?php echo $product['Image']; ?>" alt="product image">
        <h3><?php echo htmlentities($product['Name'], ENT_HTML5 | ENT_QUOTES, 'UTF-8'); ?></h3>
        <p> Price: <?php echo htmlentities($product['Price'], ENT_HTML5 | ENT_QUOTES, 'UTF-8'); ?>&euro;</p>
    </article>
<?php endforeach; ?>
