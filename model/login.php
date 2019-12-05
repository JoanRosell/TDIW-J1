<?php

if (!empty($_POST))
{
    try
    {
        $dbh = buildConnection();
        $select_query = $dbh->prepare("SELECT * FROM clients WHERE email=:email");

        $form_input = [
            'email' => $_POST['email']
        ];

        $filters = [
          'email' => FILTER_VALIDATE_EMAIL
        ];

        $select_params = filter_var_array($form_input, $filters);

        if ($select_params)
        {
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


    }
    catch(PDOException $exception)
    {
        die($exception->getMessage());
    }

}