<?php

if (!empty($_POST))
{
    try
    {
        $dbh = buildConnection();
        $select_query = $dbh->prepare("SELECT * FROM Clients WHERE email=:email");

        $select_params = [
            'email' => $_POST['email']
        ];

        $select_query->execute($select_params);
        $user = $select_query->fetch(PDO::FETCH_ASSOC);

        if (isset($user))
        {
            if (password_verify($_POST['password'],  $user['Password']))
            {
                $_SESSION['userIsLogged'] = true;
                $_SESSION['username'] = $user['Name'];
            }
        }
    }
    catch(PDOException $exception)
    {
        die($exception->getMessage());
    }

}