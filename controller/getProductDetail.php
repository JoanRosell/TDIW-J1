<?php

require __DIR__ . '/../model/getProductDetail.php';
$product = getProductDetail();
require __DIR__ . '/../view/getProductDetail.php';