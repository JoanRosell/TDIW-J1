<article>
    <img src="<?php echo $product['Image']; ?>" alt="Product Image"> <br>
    <h2><?php echo htmlentities($product['Name'], ENT_HTML5 | ENT_QUOTES, 'UTF-8'); ?></h2> <br>
    <h4>Price: <?php echo htmlentities($product['Price'], ENT_HTML5 | ENT_QUOTES, 'UTF-8'); ?>&euro;</h4>
    <button type="button" id="addToCart" data-product-id="<?php echo $product['ProductID']?>">ADD TO CART</button>
    <p>
        <?php echo htmlentities($product['Description'], ENT_HTML5 | ENT_QUOTES, 'UTF-8'); ?>
    </p>
    <div id="cartResponse"></div>
</article>