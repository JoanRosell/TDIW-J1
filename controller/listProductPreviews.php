<?php
require_once __DIR__ . '/../model/getProductPreviews.php';
$products = getProducts($_GET['categoryID']);
require_once __DIR__ . '/../view/listProductPreviews.php';