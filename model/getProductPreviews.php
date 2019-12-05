<?php
include_once __DIR__ . '/buildConnection.php';

function getProducts() : array
{
    $connection = buildConnection();
    $products = Array();

    try
    {
        $stmt = $connection->prepare("SELECT ProductID, Name, Price, Image FROM Products WHERE CategoryID=" . $_GET['categoryID']);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }

    $connection = null;
    return $products;
}