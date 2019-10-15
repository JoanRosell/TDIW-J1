
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
}