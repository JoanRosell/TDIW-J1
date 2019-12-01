<?php foreach($products as $product) : ?>
    <article id="<?php echo $product['ProductID']; ?>" class="grid-item productRef">
        <p><?php echo htmlentities($product['Name']); ?></p>
        <p>Precio: <?php echo htmlentities($product['Price']); ?></p>
    </article>
<?php endforeach; ?>
