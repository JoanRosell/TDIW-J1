<?php
function buildConnection() : PDO
{
    include __DIR__ . '/config.php';
    $dsn = "mysql:host=$servername;dbname=$dbname;charset=UTF8";
    $dbh = null;

    try
    {
        $dbh = new PDO($dsn, $username, $password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $r)
    {
        echo $r->getMessage();
    }

    return $dbh;
}