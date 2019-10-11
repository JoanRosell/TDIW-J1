<?php
$action = $_GET['action'];

switch ($action)
{
    default:
        include __DIR__ . '/resource_home.php';
        break;
}