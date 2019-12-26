<?php foreach($products as $product) : ?>
    <article class="grid-item">
        <a href=<?php echo "/index.php?action=productDetail&productID=" . $product['ProductID']; ?>><img src="<?php echo $product['Image']; ?>" alt="product image"></a>
        <h3><?php echo htmlentities($product['Name']); ?></h3>
        <p> Price: <?php echo htmlentities($product['Price']); ?></p>
    </article>
<?php endforeach; ?>
