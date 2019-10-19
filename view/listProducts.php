<ul>
    <?php foreach($products as $product) : ?>
    <li>
        <p><?php echo $product['Name']; ?></p>
    </li> <br>
    <li>
        <p>Precio: <?php echo $product['Price']; ?></p>
    </li>
    <?php endforeach; ?>
</ul>