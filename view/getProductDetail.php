<article>
    <img src="<?php echo $product['Image']; ?>" alt="Product Image">
    <h2><?php echo htmlentities($product['Name']); ?></h2>
    <h3>Price: <?php echo htmlentities($product['Price']); ?></h3>
    <p>
        <?php echo htmlentities($product['Description']); ?>
    </p>
</article>