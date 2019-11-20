<script src="js/jquery.js" type="application/javascript"></script>
<script src="js/functions.js" type="application/javascript"></script>
<?php
$action = null;
if (isset($_GET['action']))
    $action = $_GET['action'];

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
    case "listProducts":
        include __DIR__ . '/resource_listProducts.php';
        break;
}