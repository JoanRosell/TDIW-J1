<?php
include_once __DIR__ . '/model_buildConnection.php';

function getCategories() : array
{
    $connection = buildConnection();
    $categories = Array();

    try
    {
        $stmt = $connection->prepare("SELECT * FROM categories");
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    catch (PDOException $e)
    {
        echo $e->getMessage();
    }

    $connection = null;
    return $categories;
}
