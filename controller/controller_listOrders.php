<?php
require_once __DIR__ . '/../model/model_getOrders.php';
$orders = getOrders($_SESSION['user_id']);
require_once __DIR__ . '/../view/view_listOrders.php';