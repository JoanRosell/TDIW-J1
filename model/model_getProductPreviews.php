<?php
include_once __DIR__ . '/model_buildConnection.php';

function getProducts($category_id) : array
{
    $connection = buildConnection();
    $products = Array();

    try
    {
        $stmt = $connection->prepare("SELECT ProductID, Name, Price, Image FROM products WHERE CategoryID=" . $category_id);
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