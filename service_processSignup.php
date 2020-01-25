<?php
require_once __DIR__ . '/model/buildConnection.php';

if (!empty($_POST))
{
    $dbh = buildConnection();
    $insertion_query = $dbh->prepare("INSERT INTO clients (Name, Email, Address, PostalCode, Password, City) VALUES (:Name, :Email, :Address, :PostalCode, :Password, :City)");

    $insertion_params = [
        'Name' => $_POST['name'],
        'Email' => $_POST['email'],
        'Address' => $_POST['address'],
        'PostalCode' => $_POST['zipcode'],
        'Password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
        'City' => $_POST['city']
    ];

    $insertion_params['Email'] = filter_var($insertion_params['Email'], FILTER_VALIDATE_EMAIL);
    $insertion_params['PostalCode'] = filter_var($insertion_params['PostalCode'], FILTER_VALIDATE_REGEXP, [
        'options' => [
            'regexp' => 'ˆ\d{5}$'
        ]
    ]);

    if ($insertion_params)
        $insertion_query->execute($insertion_params);

    $dbh = null;
    header('Location: /index.php');
}