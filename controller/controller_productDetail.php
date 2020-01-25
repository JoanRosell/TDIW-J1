<?php

require __DIR__ . '/../model/model_getProductDetail.php';
$product = getProductDetail($_GET['productID']);
require __DIR__ . '/../view/view_productDetail.php';