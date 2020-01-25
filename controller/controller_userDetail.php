<?php
require_once __DIR__ . '/../model/model_getUserInfo.php';
$client_info = getClientInfo($_SESSION['user_id']);
$img_path = '/img/clients/default_user.png';

if (!empty($client_info['ProfileImg']))
    $img_path = $publicPath . 'clients/' . $client_info['ProfileImg'];
require_once __DIR__ . '/../view/view_userDetail.php';