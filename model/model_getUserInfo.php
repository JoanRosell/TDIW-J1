<?php
include_once __DIR__ . '/buildConnection.php';

function getClientInfo($user_id) : array
{
    $client = array();
    try
    {
        $dbh = buildConnection();
        $stmt = $dbh->prepare("SELECT * FROM clients WHERE clientID=" . $user_id);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $client = $stmt->fetch();
    }
    catch (PDOException $e)
    {
        echo $e->getMessage();
    }

    return $client;
}