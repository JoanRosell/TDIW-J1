<?php
require_once __DIR__ . '/../model/model_getProductDetail.php';

$cart_is_empty = empty($_SESSION['_cart']['products']);

include_once __DIR__ . "/../view/view_mainMenu.php";