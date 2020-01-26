<?php
require_once __DIR__ . '/../model/model_getProductPreviews.php';
$products = getProducts($_GET['categoryID']);
require_once __DIR__ . '/../view/view_listProductPreviews.php';