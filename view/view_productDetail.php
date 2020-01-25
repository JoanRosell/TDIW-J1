<article>
    <img src="<?php echo $product['Image']; ?>" alt="Product Image"> <br>
    <h2><?php echo htmlentities($product['Name']); ?></h2> <br>
    <h4>Price: <?php echo htmlentities($product['Price']); ?>&euro;</h4>
    <button type="button" id="addToCart" data-product-id="<?php echo $product['ProductID']?>">ADD TO CART</button>
    <p>
        <?php echo htmlentities($product['Description']); ?>
    </p>
    <div id="cartResponse"></div>
</article>