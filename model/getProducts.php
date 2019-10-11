<?php
include_once("app/connection.php");

function getProducts($connection)
{
    $products = Array();

    try
    {
        $stmt = $connection->prepare("SELECT * FROM product");
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
        $connection = null;
    }

    return $products;
}