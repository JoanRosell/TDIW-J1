<?php
if (!empty($orders)) {
    foreach ($orders['invoices'] as $invoice): ?>
        <section class="grid-item">
            <p>Date of purchase: <?php echo htmlentities($invoice['date'], ENT_HTML5 | ENT_QUOTES); ?></p>
            <p>Total price charged: <?php echo htmlentities($invoice['total_price'], ENT_HTML5 | ENT_QUOTES); ?>&euro;</p>
            <p>Number of units purchased: <?php echo htmlentities($invoice['qty'], ENT_HTML5 | ENT_QUOTES); ?></p>
            <p>List of products purchased:</p>
            <div class="verticalGrid">
                <?php foreach ($invoice['sales'] as $sale): ?>
                    <article class="grid-item">
                        <img src="<?php echo $sale['info']['Image']; ?>" alt="Product Image">
                        <h3><?php echo htmlentities($sale['info']['Name'], ENT_QUOTES | ENT_HTML5); ?></h3>
                        <p>Listed Price: <?php echo htmlentities($sale['info']['Price'], ENT_QUOTES | ENT_HTML5); ?>&euro;</p>
                        <p>Sold by: <?php echo htmlentities($sale['price'], ENT_QUOTES | ENT_HTML5); ?>&euro;</p>
                        <p>Units: <?php echo htmlentities($sale['units'], ENT_QUOTES | ENT_HTML5); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>
    <?php
    endforeach;
} else { ?>
    <h1>No orders were made.</h1>
<?php
}
