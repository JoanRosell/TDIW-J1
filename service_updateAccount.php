<?php
require_once __DIR__ . '/model/buildConnection.php';

$file_name = '';
if (isset($_FILES['profileImg']) && !empty($_FILES['profileImg'])) {
    $file_name = $_SESSION['user_id'];
    $destination_path = $filesAbsolutePath . 'clients/' . $file_name;
    move_uploaded_file($_FILES['profileImg']['tmp_name'], $destination_path);
 }

$new_password = '';
if (!empty($_POST['newPassword']) && !empty($_POST['repNewPassword']))
    if ($_POST['newPassword'] == $_POST['repNewPassword'])
        $new_password = password_hash($_POST['newPassword'], PASSWORD_DEFAULT);

try
{
    $dbh = buildConnection();
    $query_text = "
        UPDATE clients
        SET
            Name = IF(? <> '', ?, Name),
            Email = IF(? <> '', ?, Email),
            Address = IF(? <> '', ?, Address),
            PostalCode = IF(? <> '', ?, PostalCode),
            Password = IF(? <> '', ?, Password),
            City = IF(? <> '', ?, City),            
            ProfileImg = IF(? <> '', ?, ProfileImg)            
        WHERE ClientID = " . $_SESSION['user_id'] . "
    ";
    $update_query = $dbh->prepare($query_text);

    $update_query->execute(array(
        $_POST['username'],
        $_POST['username'],
        filter_var($_POST['email'], FILTER_VALIDATE_EMAIL),
        filter_var($_POST['email'], FILTER_VALIDATE_EMAIL),
        $_POST['address'],
        $_POST['address'],
        $_POST['zipcode'],
        $_POST['zipcode'],
        $new_password,
        $new_password,
        $_POST['city'],
        $_POST['city'],
        $file_name,
        $file_name,
    ));
}
catch (PDOException $e)
{
    echo $e->getMessage();
}
header('Location: /index.php?action=myProfile');
