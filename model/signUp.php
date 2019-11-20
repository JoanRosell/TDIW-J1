<?php
require_once __DIR__ . '/buildConnection.php';

if (!empty($_POST))
{
    $dbh = buildConnection();
    $insert_query = $dbh->prepare("INSERT INTO Clients (Name, Email, Address, PostalCode, Password, City) VALUES (:Name, :Email, :Address, :PostalCode, :Password, :City)");

    $insertion_params = [
        'Name' => $_POST['name'],
        'Email' => $_POST['email'],
        'Address' => $_POST['address'],
        'PostalCode' => $_POST['zipcode'],
        'Password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
        'City' => $_POST['city']
    ];

    $insert_query->execute($insertion_params);
    $dbh = null;
}
