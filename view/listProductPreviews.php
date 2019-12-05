<?php foreach($products as $product) : ?>
    <article id="<?php echo $product['ProductID']; ?>" class="productRef grid-item">
        <?php echo htmlentities($product['Name']); ?>
         <?php echo 'Precio: ' . htmlentities($product['Price']); ?>
    </article>
<?php endforeach; ?>
