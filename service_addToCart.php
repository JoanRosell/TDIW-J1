<?php
require_once __DIR__ . '/model/model_getProductDetail.php';

$response_array = array();
$response_array['status'] = 'rejected';
$response_array['message'] = 'Please log in first in order to make a purchase.';
$response_array['totalUnits'] = 0;
$response_array['totalPrice'] = 0;

if ($_SESSION['userIsLogged'])
{
    if (empty($_SESSION['_cart']))
    {
        $_SESSION['_cart'] = [
            'products' => [],
            'total_units' => 0,
            'total_price' => 0,
        ];
    }

    if (empty($_SESSION['_cart']['products'][$_GET['pID']]))
        $_SESSION['_cart']['products'][$_GET['pID']] = 1;
    else
        $_SESSION['_cart']['products'][$_GET['pID']]++;

    $_SESSION['_cart']['total_units']++;
    $product_detail = getProductDetail($_GET['pID']);
    $_SESSION['_cart']['total_price'] += $product_detail['Price'];

    $response_array['status'] = 'fulfilled';
    $response_array['message'] = 'Product added to cart.';
    $response_array['totalUnits'] = $_SESSION['_cart']['total_units'];
    $response_array['totalPrice'] = $_SESSION['_cart']['total_price'];
}

header('Content-type: application/json');
echo json_encode($response_array);