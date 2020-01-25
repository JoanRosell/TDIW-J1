<?php
require_once __DIR__ . '/../model/model_getProductDetail.php';
$product_details = array();

if (!empty($_SESSION['_cart']))
{
    foreach ($_SESSION['_cart']['products'] as $id => $units)
    {
        $product_details[$id] = [
            'info' => getProductDetail($id),
            'units' => $units,
        ];
    }
}

require __DIR__ . '/../view/view_cartDetail.php';