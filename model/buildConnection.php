<?php



function buildConnection() : PDO
{
    $servername = "localhost";
    $dbname = 'local';
    $username = 'tdiw-j1';
    $password = 'ovLRZ7bS';

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