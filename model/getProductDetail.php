<?php
include_once __DIR__ . '/model/buildConnection.php';

function getProductDetail() : array
{
    $product = null;
    try
    {
        $connection = buildConnection();
        $stmt = $connection->prepare("SELECT ProductID, Name, Price, Image, Description FROM Products WHERE ProductID=" . $_GET['productID']);
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


?>

