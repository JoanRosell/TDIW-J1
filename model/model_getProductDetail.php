<?php
include_once __DIR__ . '/model_buildConnection.php';

function getProductDetail($product_id) : array
{
    $product = null;
    try
    {
        $connection = buildConnection();
        $stmt = $connection->prepare("SELECT ProductID, Name, Price, Image, Description FROM products WHERE ProductID=" . $product_id);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $product = $stmt->fetch(PDO::FETCH_ASSOC);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }

    return $product;
}