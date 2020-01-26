<?php
session_start();

if (empty($_SESSION['userIsLogged']))
    $_SESSION['userIsLogged'] = false;

$action = $_GET['action'] ?? null;
$publicPath = '/img/';
$filesAbsolutePath = '/home/TDIW/tdiw-j1/public_html/img/';
switch ($action)
{
    default:
        include __DIR__ . '/resource_home.php';
        break;
    case "login":
        include __DIR__ . '/resource_login.php';
        break;
    case "signup":
        include __DIR__ . '/resource_signup.php';
        break;
    case "productDetail":
        include __DIR__ . '/r_productDetail.php';
        break;
    case "addToCart":
        include __DIR__ . '/service_addToCart.php';
        break;
    case "processLogin":
        include __DIR__ . '/service_processLogin.php';
        break;
    case "processSignup":
        include __DIR__ . '/service_processSignup.php';
        break;
    case "logout":
        include __DIR__ . '/service_logout.php';
        break;
    case "cartDetail":
        include __DIR__ . '/resource_cartDetail.php';
        break;
    case "performPurchase":
        include __DIR__ . '/service_performPurchase.php';
        break;
    case "purchaseConfirmation":
        include __DIR__ . '/resource_purchaseConfirmation.php';
        break;
    case "modifyAccount":
        include __DIR__ . '/resource_modifyAccount.php';
        break;
    case "myProfile":
        include __DIR__ . '/resource_myProfile.php';
        break;
    case "updateAccount":
        include __DIR__ . '/service_updateAccount.php';
        break;
    case "orderHistory":
        include __DIR__ . '/resource_orderHistory.php';
        break;
    case "clearCart":
        include __DIR__ . '/service_clearCart.php';
        break;
}