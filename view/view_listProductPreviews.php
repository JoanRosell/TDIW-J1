<?php foreach($products as $product) : ?>
    <article id="<?php echo $product['ProductID']; ?>" class="productRef grid-item card">
        <img src="<?php echo $product['Image']; ?>" alt="product image">
        <h3><?php echo htmlentities($product['Name']); ?></h3>
        <p> Price: <?php echo htmlentities($product['Price']); ?>&euro;</p>
    </article>
<?php endforeach; ?>
