<?php
require_once __DIR__ . '/../model/getProducts.php';
$products = getProducts();
require_once __DIR__ . '/../view/listProducts.php';